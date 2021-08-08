<?php

namespace App\Controller;

use App\Entity\Carte3;
use App\Form\Carte3Type;
use App\Repository\Carte3Repository;
use App\Repository\DateRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/carte3")
 */
class Carte3Controller extends AbstractController
{
    /**
     * @Route("/{id}", name="carte3_index", methods={"GET"})
     */
    public function index(Carte3Repository $carte3Repository,DateRepository $dateRepository,$id): Response
    {
        $date=$dateRepository->findOneById($id);
        return $this->render('carte3/index.html.twig', [
            'carte2s' => $carte3Repository->findByDate($id),
            'id'=>$id
        ]);
    }

    /**
     * @Route("/new/{id}", name="carte3_new", methods={"GET","POST"})
     */
    public function new(Request $request,$id,DateRepository $dateRepository): Response
    {
        $date=$dateRepository->findOneById($id);
        $carte3 = new Carte3();
        $form = $this->createForm(Carte3Type::class, $carte3);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $carte3->setDate($date);
            $entityManager->persist($carte3);
            $entityManager->flush();

            return $this->redirectToRoute('carte3_index',['id'=>$id]);
        }

        return $this->render('carte3/new.html.twig', [
            'carte2' => $carte3,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}/show", name="carte3_show", methods={"GET"})
     */
    public function show(Carte3 $carte3): Response
    {
        return $this->render('carte3/show.html.twig', [
            'carte2' => $carte3,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="carte3_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Carte3 $carte3): Response
    {
        $form = $this->createForm(Carte3Type::class, $carte3);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('carte3_index');
        }

        return $this->render('carte3/edit.html.twig', [
            'carte3' => $carte3,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="carte3_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Carte3 $carte3): Response
    {
        if ($this->isCsrfTokenValid('delete'.$carte3->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($carte3);
            $entityManager->flush();
        }

        return $this->redirectToRoute('carte3_index');
    }
}
