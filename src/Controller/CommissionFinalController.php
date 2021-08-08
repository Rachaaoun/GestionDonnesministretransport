<?php

namespace App\Controller;

use App\Entity\CommissionFinal;
use App\Entity\Date;
use App\Form\CommissionFinalType;
use App\Repository\CommissionFinalRepository;
use App\Repository\DateRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/commission/final")
 */
class CommissionFinalController extends AbstractController
{
    /**
     * @Route("/{id}", name="commission_final_index", methods={"GET"})
     */
    public function index(CommissionFinalRepository $commissionFinalRepository,DateRepository $dateRepository,$id): Response
    {
        $date=$dateRepository->findOneById($id);
        return $this->render('commission_final/index.html.twig', [
            'commission_finals' => $commissionFinalRepository->findByDate($date),
            'id'=>$id
        ]);
    }

    /**
     * @Route("/new/{id}", name="commission_final_new", methods={"GET","POST"})
     */
    public function new(Request $request,DateRepository $dateRepository,$id): Response
    {
        $date=$dateRepository->findOneById($id);
        $commissionFinal = new CommissionFinal();
        $form = $this->createForm(CommissionFinalType::class, $commissionFinal);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $commissionFinal->setDate($date);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($commissionFinal);
            $entityManager->flush();

            return $this->redirectToRoute('commission_final_index',['id'=>$id]);
        }

        return $this->render('commission_final/new.html.twig', [
            'commission_final' => $commissionFinal,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="commission_final_show", methods={"GET"})
     */
    public function show(CommissionFinal $commissionFinal): Response
    {
        return $this->render('commission_final/show.html.twig', [
            'commission_final' => $commissionFinal,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="commission_final_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, CommissionFinal $commissionFinal): Response
    {
        $form = $this->createForm(CommissionFinalType::class, $commissionFinal);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('commission_final_index');
        }

        return $this->render('commission_final/edit.html.twig', [
            'commission_final' => $commissionFinal,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="commission_final_delete", methods={"DELETE"})
     */
    public function delete(Request $request, CommissionFinal $commissionFinal): Response
    {
        if ($this->isCsrfTokenValid('delete'.$commissionFinal->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($commissionFinal);
            $entityManager->flush();
        }

        return $this->redirectToRoute('commission_final_index');
    }
}
