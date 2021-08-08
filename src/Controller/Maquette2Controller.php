<?php

namespace App\Controller;

use App\Entity\Date;
use App\Entity\Maquette2;
use App\Form\Maquette2Type;
use App\Repository\DateRepository;
use App\Repository\Maquette2Repository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/maquette2")
 */
class Maquette2Controller extends AbstractController
{
    /**
     * @Route("/{id}", name="maquette2_index", methods={"GET"})
     */
    public function index(Maquette2Repository $maquette2Repository,DateRepository $dateRepository,$id): Response
    {
        $date=$dateRepository->findOneById($id);
        return $this->render('maquette2/index.html.twig', [
            'maquette2s' => $maquette2Repository->findByDate($date),
            'id'=>$id
        ]);
    }

    /**
     * @Route("/new/{id}", name="maquette2_new", methods={"GET","POST"})
     */
    public function new(Request $request,DateRepository $dateRepository,$id): Response
    {
        $date=$dateRepository->findOneById($id);
        $maquette2 = new Maquette2();
        $form = $this->createForm(Maquette2Type::class, $maquette2);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $maquette2->setDate($date);
            $entityManager->persist($maquette2);
            $entityManager->flush();

            return $this->redirectToRoute('maquette2_index',['id'=>$id]);
        }

        return $this->render('maquette2/new.html.twig', [
            'maquette2' => $maquette2,
            'form' => $form->createView(),
            'id'=>$id
        ]);
    }

    /**
     * @Route("/{id}/show", name="maquette2_show", methods={"GET"})
     */
    public function show(Maquette2 $maquette2): Response
    {
        return $this->render('maquette2/show.html.twig', [
            'maquette2' => $maquette2,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="maquette2_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Maquette2 $maquette2): Response
    {
        $form = $this->createForm(Maquette2Type::class, $maquette2);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('maquette2_index');
        }

        return $this->render('maquette2/edit.html.twig', [
            'maquette2' => $maquette2,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="maquette2_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Maquette2 $maquette2): Response
    {
        if ($this->isCsrfTokenValid('delete'.$maquette2->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($maquette2);
            $entityManager->flush();
        }

        return $this->redirectToRoute('maquette2_index');
    }
}
