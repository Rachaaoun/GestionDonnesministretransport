<?php

namespace App\Controller;

use App\Entity\Maquette5;
use App\Form\Maquette5Type;
use App\Repository\DateRepository;
use App\Repository\Maquette5Repository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/maquette5")
 */
class Maquette5Controller extends AbstractController
{
    /**
     * @Route("/{id}", name="maquette5_index", methods={"GET"})
     */
    public function index(Maquette5Repository $maquette5Repository,$id,DateRepository $dateRepository): Response
    {
        $date=$dateRepository->findOneById($id);
        
        return $this->render('maquette5/index.html.twig', [
            'maquette5s' => $maquette5Repository->findByDate($date),
            'id'=>$id
        ]);
    }

    /**
     * @Route("/new/{id}", name="maquette5_new", methods={"GET","POST"})
     */
    public function new(Request $request,DateRepository $dateRepository,$id): Response
    {
        $date=$dateRepository->findOneById($id);
        $maquette5 = new Maquette5();
        $form = $this->createForm(Maquette5Type::class, $maquette5);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $maquette5->setDate($date);
            $entityManager->persist($maquette5);
            $entityManager->flush();

            return $this->redirectToRoute('maquette5_index',['id'=>$id]);
        }

        return $this->render('maquette5/new.html.twig', [
            'maquette5' => $maquette5,
            'form' => $form->createView(),
            'id'=>$id,
            'annee'=>$date->getAnnee()
        ]);
    }

    /**
     * @Route("/{id}/show", name="maquette5_show", methods={"GET"})
     */
    public function show(Maquette5 $maquette5): Response
    {
        return $this->render('maquette5/show.html.twig', [
            'maquette5' => $maquette5,
            'annee'=>$maquette5->getDate()->getAnnee()
        ]);
    }

    /**
     * @Route("/{id}/edit", name="maquette5_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Maquette5 $maquette5): Response
    {
        $form = $this->createForm(Maquette5Type::class, $maquette5);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('maquette5_index');
        }

        return $this->render('maquette5/edit.html.twig', [
            'maquette5' => $maquette5,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="maquette5_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Maquette5 $maquette5): Response
    {
        if ($this->isCsrfTokenValid('delete'.$maquette5->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($maquette5);
            $entityManager->flush();
        }

        return $this->redirectToRoute('maquette5_index');
    }
}
