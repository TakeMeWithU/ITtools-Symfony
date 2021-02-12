<?php

namespace App\Controller;

use App\Form\AvatarType;
use App\Form\EditUserType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Contracts\Translation\TranslatorInterface;

class UserController extends AbstractController
{
    /**
     * @Route("/profile", name="app_profile")
     * @Route("/profile/{id}", )
     */
    public function edit(Request $request, TranslatorInterface $translator, UserPasswordEncoderInterface $passwordEncoder)
    {
        $user = $this->getUser();
        $entity = $this->getDoctrine()->getManager();
        if (!$user) {
            throw $this->createAccessDeniedException();
        }

        $editForm = $this->createForm(EditUserType::class, $user);
        $editForm->handleRequest($request);

        if($editForm->isSubmitted() && $editForm->isValid()) {
            $user->setName(mb_strtoupper($user->getName()));
            $user->setFirstname(mb_strtoupper($user->getFirstname()));

            $entity->persist($user);
            $entity->flush();

            $this->addFlash('notice', $translator->trans('user.sucEdit'));
            return $this->redirectToRoute('app_profile');

        }

        return $this->render('user/profile.html.twig', [
            'editForm' => $editForm->createView(),
        ]);
    }

    /**
     *
     * @Route("/avatar", name="app_profile_avatar")
     */
    public function changeAvatar(Request $request){

        $user = $this->getUser();
        $form = $this->createForm(AvatarType::class, $user);



        return $this->render('user/avatar.html.twig', [
            'form' => $form->createView(),
        ]);
    }

}
