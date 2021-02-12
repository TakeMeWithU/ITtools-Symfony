<?php

namespace App\Controller;

use App\Entity\Avatar;
use App\Entity\User;
use App\Form\RegisterType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Contracts\Translation\TranslatorInterface;

class RegisterController extends AbstractController
{
    /**
     * @Route("/register", name="app_register")
     */
    public function register(Request $request, UserPasswordEncoderInterface $passwordEncoder, TranslatorInterface $translator)
    {
        if($this->getUser()) {
            return $this->redirectToRoute('default');
        }

        $user = new User();
        $form = $this->createForm(RegisterType::class, $user);

        $form->handleRequest($request);
        $entity = $this->getDoctrine()->getManager();


        if($form->isSubmitted() && $form->isValid()) {

            $user->setName(mb_strtoupper($user->getName()));
            $user->setFirstname(mb_strtoupper($user->getFirstname()));
            $user->setAvatar('defaultAvatar.png');

            $passwordEncoded = $passwordEncoder->encodePassword($user, $user->getPassword());
            $user->setPassword($passwordEncoded);

            $entity->persist($user);
            $entity->flush();

            $this->addFlash(
                'notice', $translator->trans('user.sucRegis')
            );

            return $this->redirectToRoute('app_login');
        }

        return $this->render('register/register.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
