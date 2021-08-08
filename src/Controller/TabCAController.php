<?php

namespace App\Controller;

use App\Entity\TabCA;
use App\Form\TabCA1Type;
use App\Repository\TabCARepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Repository\DateRepository;

/**
 * @Route("/tabCA")
 */
class TabCAController extends AbstractController
{
    /**
     * @Route("/{id}", name="tab_c_a_index", methods={"GET"})
     */
    public function index(TabCARepository $tabCARepository,DateRepository $dateRepository,$id): Response
    {
  
           $date= $dateRepository->findOneById($id);
            return $this->render('tab_ca/index.html.twig', [
                'tab_c_as' => $tabCARepository->findByDate($date),
                'dateannee'=>$date->getAnnee(),
                'date'=>$date
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
     * @Route("/new/{id}", name="tab_c_a_new", methods={"GET","POST"})
     */
    public function new(Request $request,DateRepository $dateRepository,$id): Response
    {
        
        $date=$dateRepository->findOneById($id);
        $tabCA = new TabCA();
        $form = $this->createForm(TabCA1Type::class, $tabCA);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $tabCA->setDate($date);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($tabCA);
            $entityManager->flush();

            return $this->redirectToRoute('tab_c_a_index',['id'=>$id]);
        }

        return $this->render('tab_ca/new.html.twig', [
            'tab_c_a' => $tabCA,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="tab_c_a_show", methods={"GET"})
     */
    public function show(TabCA $tabCA): Response
    {
        return $this->render('tab_ca/show.html.twig', [
            'tab_c_a' => $tabCA,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="tab_c_a_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, TabCA $tabCA,DateRepository $dateRepository): Response
    {
        $form = $this->createForm(TabCA1Type::class, $tabCA);
        $form->handleRequest($request);
        $date=$tabCA->getdate();
        $d = $dateRepository->find($date);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('tab_c_a_index',['id'=>$d->getId()]);
        }

        return $this->render('tab_ca/edit.html.twig', [
            'tab_c_a' => $tabCA,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="tab_c_a_delete", methods={"DELETE"})
     */
    public function delete(Request $request, TabCA $tabCA): Response
    {
        if ($this->isCsrfTokenValid('delete'.$tabCA->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($tabCA);
            $entityManager->flush();
        }

        return $this->redirectToRoute('tab_c_a_index');
    }
}
