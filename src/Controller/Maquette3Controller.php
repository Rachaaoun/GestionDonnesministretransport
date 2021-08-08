<?php

namespace App\Controller;

use App\Entity\Maquette3;
use App\Form\Maquette3Type;
use App\Repository\DateRepository;
use App\Repository\Maquette3Repository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/maquette3")
 */
class Maquette3Controller extends AbstractController
{
    /**
     * @Route("/{id}", name="maquette3_index", methods={"GET"})
     */
    public function index(Maquette3Repository $maquette3Repository,$id,DateRepository $dateRepository): Response
    {
        $date=$dateRepository->findOneById($id);
        return $this->render('maquette3/index.html.twig', [
            'maquette3s' => $maquette3Repository->findByDate($date),
            'id'=>$id
        ]);
    }

    /**
     * @Route("/new/{id}", name="maquette3_new", methods={"GET","POST"})
     */
    public function new(Request $request,DateRepository $dateRepository,$id): Response
    {
        $date=$dateRepository->findOneById($id);
        $maquette3 = new Maquette3();
        $form = $this->createForm(Maquette3Type::class, $maquette3);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $maquette3->setDate($date);
            $entityManager->persist($maquette3);
            $entityManager->flush();

            return $this->redirectToRoute('maquette3_index',['id'=>$id]);
        }

        return $this->render('maquette3/new.html.twig', [
            'maquette3' => $maquette3,
            'form' => $form->createView(),
            'id'=>$id
        ]);
    }

    /**
     * @Route("/{id}/show", name="maquette3_show", methods={"GET"})
     */
    public function show(Maquette3 $maquette3): Response
    {
        return $this->render('maquette3/show.html.twig', [
            'maquette3' => $maquette3,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="maquette3_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Maquette3 $maquette3): Response
    {
        $form = $this->createForm(Maquette3Type::class, $maquette3);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('maquette3_index');
        }

        return $this->render('maquette3/edit.html.twig', [
            'maquette3' => $maquette3,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="maquette3_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Maquette3 $maquette3): Response
    {
        if ($this->isCsrfTokenValid('delete'.$maquette3->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($maquette3);
            $entityManager->flush();
        }

        return $this->redirectToRoute('maquette3_index');
    }
}
