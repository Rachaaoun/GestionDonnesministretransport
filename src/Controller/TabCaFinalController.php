<?php

namespace App\Controller;

use App\Entity\TabCaFinal;
use App\Form\TabCaFinalType;
use App\Repository\DateRepository;
use App\Repository\TabCaFinalRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/tab/ca/final")
 */
class TabCaFinalController extends AbstractController
{
    /**
     * @Route("/{id}", name="tab_ca_final_index", methods={"GET"})
     */
    public function index(TabCaFinalRepository $tabCaFinalRepository,DateRepository $dateRepository,$id): Response
    {
        $date=$dateRepository->findOneById($id);
        return $this->render('tab_ca_final/index.html.twig', [
            'tab_c_as' => $tabCaFinalRepository->findByDate($date),
            'dateannee'=>$date->getAnnee(),
            'date'=>$date
        ]);
    }

    /**
     * @Route("/new/{id}", name="tab_ca_final_new", methods={"GET","POST"})
     */
    public function new(Request $request,DateRepository $dateRepository,$id): Response
    {
        $date=$dateRepository->findOneById($id);
        $tabCaFinal = new TabCaFinal();
        $form = $this->createForm(TabCaFinalType::class, $tabCaFinal);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $tabCaFinal->setDate($date);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($tabCaFinal);
            $entityManager->flush();

            return $this->redirectToRoute('tab_ca_final_index',['id'=>$id]);
        }

        return $this->render('tab_ca_final/new.html.twig', [
            'tab_ca_final' => $tabCaFinal,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/choix/{id}",name="tab_c_a_choix" , methods ={"GET"})
     */
    public function choix($id,DateRepository $repo){
        $date=$repo->findOneById($id);
        return $this->render("tab_ca/choix.html.twig",[
            'id'=> $date->getId(),
            'date'=>$date
        ]);
    }

    /**
     * @Route("/{id}", name="tab_ca_final_show", methods={"GET"})
     */
    public function show(TabCaFinal $tabCaFinal): Response
    {
        return $this->render('tab_ca_final/show.html.twig', [
            'tab_ca_final' => $tabCaFinal,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="tab_ca_final_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, TabCaFinal $tabCaFinal): Response
    {
        $form = $this->createForm(TabCaFinalType::class, $tabCaFinal);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('tab_ca_final_index');
        }

        return $this->render('tab_ca_final/edit.html.twig', [
            'tab_ca_final' => $tabCaFinal,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="tab_ca_final_delete", methods={"DELETE"})
     */
    public function delete(Request $request, TabCaFinal $tabCaFinal): Response
    {
        if ($this->isCsrfTokenValid('delete'.$tabCaFinal->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($tabCaFinal);
            $entityManager->flush();
        }

        return $this->redirectToRoute('tab_ca_final_index');
    }
}
