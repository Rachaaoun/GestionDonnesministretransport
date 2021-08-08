<?php

namespace App\Controller;

use App\Entity\TableAffaire;
use App\Form\TableAffaireType;
use App\Repository\DateRepository;
use App\Repository\TableAffaireRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/table/affaire")
 */
class TableAffaireController extends AbstractController
{
    /**
     * @Route("/{id}", name="table_affaire_index", methods={"GET"})
     */
    public function index(TableAffaireRepository $tableAffaireRepository,$id,DateRepository $dateRepository): Response
    {
        $date=$dateRepository->findOneById($id);
        return $this->render('table_affaire/index.html.twig', [
            'table_affaires' => $tableAffaireRepository->findByDate($date),
            'id'=>$id
        ]);
    }

    /**
     * @Route("/new/{id}", name="table_affaire_new", methods={"GET","POST"})
     */
    public function new(Request $request,DateRepository $dateRepository,$id): Response
    {
        
        $date=$dateRepository->findOneById($id);
        $tableAffaire = new TableAffaire();
        $form = $this->createForm(TableAffaireType::class, $tableAffaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $tableAffaire->setDate($date);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($tableAffaire);
            $entityManager->flush();

            return $this->redirectToRoute('table_affaire_index',['id'=>$id]);
        }

        return $this->render('table_affaire/new.html.twig', [
            'table_affaire' => $tableAffaire,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}/tableaff", name="table_affaire_show", methods={"GET"})
     */
    public function show(TableAffaire $tableAffaire): Response
    {
        return $this->render('table_affaire/show.html.twig', [
            'table_affaire' => $tableAffaire,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="table_affaire_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, TableAffaire $tableAffaire): Response
    {
        $form = $this->createForm(TableAffaireType::class, $tableAffaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('table_affaire_index');
        }

        return $this->render('table_affaire/edit.html.twig', [
            'table_affaire' => $tableAffaire,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="table_affaire_delete", methods={"DELETE"})
     */
    public function delete(Request $request, TableAffaire $tableAffaire): Response
    {
        if ($this->isCsrfTokenValid('delete'.$tableAffaire->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($tableAffaire);
            $entityManager->flush();
        }

        return $this->redirectToRoute('table_affaire_index');
    }
}
