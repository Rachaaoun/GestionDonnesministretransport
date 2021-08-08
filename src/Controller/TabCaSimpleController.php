<?php

namespace App\Controller;

use App\Entity\Date;
use App\Entity\TabCaSimple;
use App\Form\TabCaSimpleType;
use App\Repository\TabCaSimpleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Repository\DateRepository;

/**
 * @Route("/tab/ca/simple")
 */
class TabCaSimpleController extends AbstractController
{
    /**
     * @Route("/{id}", name="tab_ca_simple_index", methods={"GET"})
     */
    public function index(TabCaSimpleRepository $tabCaSimpleRepository,DateRepository $dateRepository,$id): Response
    {
        $date= $dateRepository->findOneById($id);
            return $this->render('tab_ca_simple/index.html.twig', [
                'tab_c_as' => $tabCaSimpleRepository->findByDate($date),
                'dateannee'=>$date->getAnnee(),
                'date'=>$date
            ]);
       
    }

    /**
     * @Route("/new/{id}", name="tab_ca_simple_new", methods={"GET","POST"})
     */
    public function new(Request $request,DateRepository $dateRepository,$id): Response
    {
        $date=$dateRepository->findOneById($id);
        $tabCaSimple = new TabCaSimple();
        $form = $this->createForm(TabCaSimpleType::class, $tabCaSimple);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $tabCaSimple->setDate($date);
            $entityManager->persist($tabCaSimple);
            $entityManager->flush();

            return $this->redirectToRoute('tab_ca_simple_index',['id'=>$id]);
        }

        return $this->render('tab_ca_simple/new.html.twig', [
            'tab_ca_simple' => $tabCaSimple,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="tab_ca_simple_show", methods={"GET"})
     */
    public function show(TabCaSimple $tabCaSimple): Response
    {
        return $this->render('tab_ca_simple/show.html.twig', [
            'tab_ca_simple' => $tabCaSimple,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="tab_ca_simple_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, TabCaSimple $tabCaSimple): Response
    {
        $form = $this->createForm(TabCaSimpleType::class, $tabCaSimple);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('tab_ca_simple_index');
        }

        return $this->render('tab_ca_simple/edit.html.twig', [
            'tab_ca_simple' => $tabCaSimple,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="tab_ca_simple_delete", methods={"DELETE"})
     */
    public function delete(Request $request, TabCaSimple $tabCaSimple): Response
    {
        if ($this->isCsrfTokenValid('delete'.$tabCaSimple->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($tabCaSimple);
            $entityManager->flush();
        }

        return $this->redirectToRoute('tab_ca_simple_index');
    }
}
