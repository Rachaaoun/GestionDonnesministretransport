<?php

namespace App\Controller;

use App\Entity\Observatoire3;
use App\Form\Observatoire3Type;
use App\Repository\DateRepository;
use App\Repository\Observatoire3Repository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/observatoire3")
 */
class Observatoire3Controller extends AbstractController
{
    /**
     * @Route("/{id}", name="observatoire3_index", methods={"GET"})
     */
    public function index(Observatoire3Repository $observatoire3Repository,DateRepository $dateRepository,$id): Response
    {
        $date=$dateRepository->findOneById($id);
        return $this->render('observatoire3/index.html.twig', [
            'observatoire3s' => $observatoire3Repository->findByDate($date),
            'id'=>$id
        ]);
    }

    /**
     * @Route("/new/{id}", name="observatoire3_new", methods={"GET","POST"})
     */
    public function new(Request $request,DateRepository $dateRepository,$id): Response
    {
        $date=$dateRepository->findOneById($id);
        $observatoire3 = new Observatoire3();
        $form = $this->createForm(Observatoire3Type::class, $observatoire3);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $observatoire3->setDate($date);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($observatoire3);
            $entityManager->flush();

            return $this->redirectToRoute('observatoire3_index',['id'=>$id]);
        }

        return $this->render('observatoire3/new.html.twig', [
            'observatoire3' => $observatoire3,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}/show", name="observatoire3_show", methods={"GET"})
     */
    public function show(Observatoire3 $observatoire3): Response
    {
        return $this->render('observatoire3/show.html.twig', [
            'observatoire3' => $observatoire3,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="observatoire3_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Observatoire3 $observatoire3): Response
    {
        $form = $this->createForm(Observatoire3Type::class, $observatoire3);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('observatoire3_index');
        }

        return $this->render('observatoire3/edit.html.twig', [
            'observatoire3' => $observatoire3,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="observatoire3_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Observatoire3 $observatoire3): Response
    {
        if ($this->isCsrfTokenValid('delete'.$observatoire3->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($observatoire3);
            $entityManager->flush();
        }

        return $this->redirectToRoute('observatoire3_index');
    }
}
