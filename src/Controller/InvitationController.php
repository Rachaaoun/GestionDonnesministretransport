<?php

namespace App\Controller;

use App\Entity\Invitation;
use App\Form\InvitationType;
use App\Repository\DateRepository;
use App\Repository\InvitationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/invitation")
 */
class InvitationController extends AbstractController
{
    /**
     * @Route("/{id}", name="invitation_index", methods={"GET"})
     */
    public function index(InvitationRepository $invitationRepository,DateRepository $dateRepository,$id): Response
    {
        $date=$dateRepository->findOneById($id);
        return $this->render('invitation/index.html.twig', [
            'invitations' => $invitationRepository->findByDate($date),
            'id'=>$id
        ]);
    }

    /**
     * @Route("/new/{id}", name="invitation_new", methods={"GET","POST"})
     */
    public function new(Request $request,$id,DateRepository $dateRepository): Response
    {
        $date=$dateRepository->findOneById($id);
        $invitation = new Invitation();
        $form = $this->createForm(InvitationType::class, $invitation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $invitation->setDate($date);
            $entityManager->persist($invitation);
            $entityManager->flush();

            return $this->redirectToRoute('invitation_index',['id'=>$id]);
        }

        return $this->render('invitation/new.html.twig', [
            'invitation' => $invitation,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}/show", name="invitation_show", methods={"GET"})
     */
    public function show(Invitation $invitation): Response
    {
        return $this->render('invitation/show.html.twig', [
            'invitation' => $invitation,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="invitation_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Invitation $invitation): Response
    {
        $form = $this->createForm(InvitationType::class, $invitation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('invitation_index');
        }

        return $this->render('invitation/edit.html.twig', [
            'invitation' => $invitation,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="invitation_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Invitation $invitation): Response
    {
        if ($this->isCsrfTokenValid('delete'.$invitation->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($invitation);
            $entityManager->flush();
        }

        return $this->redirectToRoute('invitation_index');
    }
}
