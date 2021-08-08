<?php

namespace App\Controller;

use App\Entity\Form5Trimestre4;
use App\Form\Form5Trimestre4Type;
use App\Repository\DateRepository;
use App\Repository\Form5Trimestre4Repository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/form5/trimestre4")
 */
class Form5Trimestre4Controller extends AbstractController
{
    /**
     * @Route("/{id}", name="form5_trimestre4_index", methods={"GET"})
     */
    public function index(Form5Trimestre4Repository $form5Trimestre4Repository,DateRepository $dateRepository,$id): Response
    {
        $date= $dateRepository->findOneById($id);
        $v=null;
        $f=$form5Trimestre4Repository->findByDate($date);
      
        if($f)
 
        {  $varfinal=$f[0]->getVarfinal();
            $v = $varfinal;}else $v=null;
       
         return $this->render('form5_trimestre4/index.html.twig', [
             'form5_trimestre1s' => $form5Trimestre4Repository->findByDate($date),
             'dateannee'=>$date->getAnnee(),
             'date'=>$date,
             'varfinal'=>$v
         ]);
    }

    /**
     * @Route("/new/{id}", name="form5_trimestre4_new", methods={"GET","POST"})
     */
    public function new(Request $request,DateRepository$dateRepository,$id): Response
    {
        
        $date=$dateRepository->findOneById($id);
        $form5Trimestre4 = new Form5Trimestre4();
        $form = $this->createForm(Form5Trimestre4Type::class, $form5Trimestre4);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            
            $form5Trimestre4->setDate($date);
            $entityManager->persist($form5Trimestre4);
            $entityManager->flush();

            return $this->redirectToRoute('form5_trimestre4_index',['id'=>$id]);
        }

        return $this->render('form5_trimestre4/new.html.twig', [
            'form5_trimestre4' => $form5Trimestre4,
            'form' => $form->createView(),
            'date'=> $dateRepository->findOneById($id),
            'dateannee'=>$date->getAnnee(),
        ]);
    }

    /**
     * @Route("/{id}", name="form5_trimestre4_show", methods={"GET"})
     */
    public function show(Form5Trimestre4 $form5Trimestre4): Response
    {
        return $this->render('form5_trimestre4/show.html.twig', [
            'form5_trimestre4' => $form5Trimestre4,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="form5_trimestre4_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Form5Trimestre4 $form5Trimestre4): Response
    {
        $form = $this->createForm(Form5Trimestre4Type::class, $form5Trimestre4);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('form5_trimestre4_index');
        }

        return $this->render('form5_trimestre4/edit.html.twig', [
            'form5_trimestre4' => $form5Trimestre4,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="form5_trimestre4_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Form5Trimestre4 $form5Trimestre4): Response
    {
        if ($this->isCsrfTokenValid('delete'.$form5Trimestre4->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($form5Trimestre4);
            $entityManager->flush();
        }

        return $this->redirectToRoute('form5_trimestre4_index');
    }
}
