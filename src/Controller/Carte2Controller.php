<?php

namespace App\Controller;

use App\Entity\Carte2;
use App\Form\Carte2Type;
use App\Repository\Carte2Repository;
use App\Repository\DateRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/carte2")
 */
class Carte2Controller extends AbstractController
{
    /**
     * @Route("/{id}", name="carte2_index", methods={"GET"})
     */
    public function index(Carte2Repository $carte2Repository,DateRepository $dateRepository,$id): Response
    {
        $date=$dateRepository->findOneById($id);
        return $this->render('carte2/index.html.twig', [
            'carte2s' => $carte2Repository->findByDate($id),
            'id'=>$id
        ]);
    }

    /**
     * @Route("/new/{id}", name="carte2_new", methods={"GET","POST"})
     */
    public function new(Request $request,DateRepository $dateRepository,$id): Response
    {
        $date=$dateRepository->findOneById($id);
        $carte2 = new Carte2();
        $form = $this->createForm(Carte2Type::class, $carte2);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $carte2->setDate($date);
            $entityManager->persist($carte2);
            $entityManager->flush();

            return $this->redirectToRoute('carte2_index',['id'=>$id]);
        }

        return $this->render('carte2/new.html.twig', [
            'carte2' => $carte2,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}/show", name="carte2_show", methods={"GET"})
     */
    public function show(Carte2 $carte2): Response
    {
        return $this->render('carte2/show.html.twig', [
            'carte2' => $carte2,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="carte2_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Carte2 $carte2): Response
    {
        $form = $this->createForm(Carte2Type::class, $carte2);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('carte2_index');
        }

        return $this->render('carte2/edit.html.twig', [
            'carte2' => $carte2,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="carte2_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Carte2 $carte2): Response
    {
        if ($this->isCsrfTokenValid('delete'.$carte2->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($carte2);
            $entityManager->flush();
        }

        return $this->redirectToRoute('carte2_index');
    }
}
