<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Bundle\FrameworkBundle\CacheWarmer;

use Doctrine\Common\Annotations\AnnotationException;
use Symfony\Component\Cache\Adapter\ArrayAdapter;
use Symfony\Component\Cache\Adapter\PhpArrayAdapter;
use Symfony\Component\Validator\Mapping\Factory\LazyLoadingMetadataFactory;
use Symfony\Component\Validator\Mapping\Loader\LoaderChain;
use Symfony\Component\Validator\Mapping\Loader\LoaderInterface;
use Symfony\Component\Validator\Mapping\Loader\XmlFileLoader;
use Symfony\Component\Validator\Mapping\Loader\YamlFileLoader;
use Symfony\Component\Validator\ValidatorBuilder;

/**
 * Warms up XML and YAML validator metadata.
 *
 * @author Titouan Galopin <galopintitouan@gmail.com>
 */
class ValidatorCacheWarmer extends AbstractPhpFileCacheWarmer
{
    private $validatorBuilder;

    /**
     * @param string $phpArrayFile The PHP file where metadata are cached
     */
    public function __construct(ValidatorBuilder $validatorBuilder, string $phpArrayFile)
    {
        parent::__construct($phpArrayFile);
        $this->validatorBuilder = $validatorBuilder;
    }

    /**
     * {@inheritdoc}
     */
    protected function doWarmUp(string $cacheDir, ArrayAdapter $arrayAdapter)
    {
        if (!method_exists($this->validatorBuilder, 'getLoaders')) {
            return false;
        }

        $loaders = $this->validatorBuilder->getLoaders();
        $metadataFactory = new LazyLoadingMetadataFactory(new LoaderChain($loaders), $arrayAdapter);

        foreach ($this->extractSupportedLoaders($loaders) as $loader) {
            foreach ($loader->getMappedClasses() as $mappedClass) {
                try {
                    if ($metadataFactory->hasMetadataFor($mappedClass)) {
                        $metadataFactory->getMetadataFor($mappedClass);
                    }
                } catch (AnnotationException $e) {
                    // ignore failing annotations
                } catch (\Exception $e) {
                    $this->ignoreAutoloadException($mappedClass, $e);
                }
            }
        }

        return true;
    }

    protected function warmUpPhpArrayAdapter(PhpArrayAdapter $phpArrayAdapter, array $values)
    {
        // make sure we don't cache null values
        parent::warmUpPhpArrayAdapter($phpArrayAdapter, array_filter($values));
    }

    /**
     * @param LoaderInterface[] $loaders
     *
     * @return XmlFileLoader[]|YamlFileLoader[]
     */
    private function extractSupportedLoaders(array $loaders): array
    {
        $supportedLoaders = [];

        foreach ($loaders as $loader) {
            if ($loader instanceof XmlFileLoader || $loader instanceof YamlFileLoader) {
                $supportedLoaders[] = $loader;
            } elseif ($loader instanceof LoaderChain) {
                $supportedLoaders = array_merge($supportedLoaders, $this->extractSupportedLoaders($loader->getLoaders()));
            }
        }

        return $supportedLoaders;
    }
}
