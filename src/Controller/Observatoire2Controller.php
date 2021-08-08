<?php

namespace App\Controller;

use App\Entity\Observatoire2;
use App\Form\Observatoire2Type;
use App\Repository\DateRepository;
use App\Repository\Observatoire2Repository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/observatoire2")
 */
class Observatoire2Controller extends AbstractController
{
    /**
     * @Route("/{id}", name="observatoire2_index", methods={"GET"})
     */
    public function index(Observatoire2Repository $observatoire2Repository,DateRepository $dateRepository,$id): Response
    {
        $date=$dateRepository->findOneById($id);
        return $this->render('observatoire2/index.html.twig', [
            'observatoire2s' => $observatoire2Repository->findByDate($date),
            'annee'=>$date->getAnnee(),
            'id'=>$id
        ]);
    }

    /**
     * @Route("/new/{id}", name="observatoire2_new", methods={"GET","POST"})
     */
    public function new(Request $request,DateRepository $dateRepository,$id): Response
    {
        $date=$dateRepository->findOneById($id);
        $observatoire2 = new Observatoire2();
        $form = $this->createForm(Observatoire2Type::class, $observatoire2);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $observatoire2->setDate($date);
            $entityManager->persist($observatoire2);
            $entityManager->flush();

            return $this->redirectToRoute('observatoire2_index',['id'=>$id]);
        }

        return $this->render('observatoire2/new.html.twig', [
            'observatoire2' => $observatoire2,
            'form' => $form->createView(),
            'annee'=>$date->getAnnee(),
        ]);
    }

    /**
     * @Route("/{id}/show", name="observatoire2_show", methods={"GET"})
     */
    public function show(Observatoire2 $observatoire2): Response
    {
        return $this->render('observatoire2/show.html.twig', [
            'observatoire2' => $observatoire2,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="observatoire2_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Observatoire2 $observatoire2): Response
    {
        $form = $this->createForm(Observatoire2Type::class, $observatoire2);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('observatoire2_index');
        }

        return $this->render('observatoire2/edit.html.twig', [
            'observatoire2' => $observatoire2,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="observatoire2_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Observatoire2 $observatoire2): Response
    {
        if ($this->isCsrfTokenValid('delete'.$observatoire2->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($observatoire2);
            $entityManager->flush();
        }

        return $this->redirectToRoute('observatoire2_index');
    }
}
