<?php

namespace App\Controller;

use App\Entity\Carte5;
use App\Form\Carte5Type;
use App\Repository\Carte5Repository;
use App\Repository\DateRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/carte5")
 */
class Carte5Controller extends AbstractController
{
    /**
     * @Route("/{id}", name="carte5_index", methods={"GET"})
     */
    public function index(Carte5Repository $carte5Repository,DateRepository $dateRepository,$id): Response
    {
        $date=$dateRepository->findOneById($id);
        return $this->render('carte5/index.html.twig', [
            'carte2s' => $carte5Repository->findByDate($date),
            'id'=>$id
        ]);
    }

    /**
     * @Route("/new/{id}", name="carte5_new", methods={"GET","POST"})
     */
    public function new(Request $request,$id,DateRepository $dateRepository): Response
    {
        $date=$dateRepository->findOneById($id);
        $carte5 = new Carte5();
        $form = $this->createForm(Carte5Type::class, $carte5);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $carte5->setDate($date);
            $entityManager->persist($carte5);
            $entityManager->flush();

            return $this->redirectToRoute('carte5_index',['id'=>$id]);
        }

        return $this->render('carte5/new.html.twig', [
            'carte2' => $carte5,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}/show", name="carte5_show", methods={"GET"})
     */
    public function show(Carte5 $carte5): Response
    {
        return $this->render('carte5/show.html.twig', [
            'carte5' => $carte5,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="carte5_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Carte5 $carte5): Response
    {
        $form = $this->createForm(Carte5Type::class, $carte5);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('carte5_index');
        }

        return $this->render('carte5/edit.html.twig', [
            'carte5' => $carte5,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="carte5_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Carte5 $carte5): Response
    {
        if ($this->isCsrfTokenValid('delete'.$carte5->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($carte5);
            $entityManager->flush();
        }

        return $this->redirectToRoute('carte5_index');
    }
}
