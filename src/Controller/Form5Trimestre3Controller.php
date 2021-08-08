<?php

namespace App\Controller;

use App\Entity\Date;
use App\Entity\Form5Trimestre3;
use App\Form\Form5Trimestre3Type;
use App\Repository\DateRepository;
use App\Repository\Form5Trimestre3Repository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/form5/trimestre3")
 */
class Form5Trimestre3Controller extends AbstractController
{
    /**
     * @Route("/{id}", name="form5_trimestre3_index", methods={"GET"})
     */
    public function index(Form5Trimestre3Repository $form5Trimestre3Repository,DateRepository $dateRepository,$id): Response
    {
        
        $date= $dateRepository->findOneById($id);
        $v=null;
        $f=$form5Trimestre3Repository->findByDate($date);
      
        if($f)
 
        {  $varfinal=$f[0]->getVarfinal();
            $v = $varfinal;}else $v=null;
       
         return $this->render('form5_trimestre3/index.html.twig', [
             'form5_trimestre1s' => $form5Trimestre3Repository->findByDate($date),
             'dateannee'=>$date->getAnnee(),
             'date'=>$date,
             'varfinal'=>$v
         ]);
    }

    /**
     * @Route("/new/{id}", name="form5_trimestre3_new", methods={"GET","POST"})
     */
    public function new(Request $request,DateRepository$dateRepository,$id): Response
    {
        
        $date=$dateRepository->findOneById($id);
        $form5Trimestre3 = new Form5Trimestre3();
        $form = $this->createForm(Form5Trimestre3Type::class, $form5Trimestre3);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            
            $form5Trimestre3->setDate($date);
            $entityManager->persist($form5Trimestre3);
            $entityManager->flush();

            return $this->redirectToRoute('form5_trimestre3_index',['id'=>$id]);
        }

        return $this->render('form5_trimestre3/new.html.twig', [
            'form5_trimestre3' => $form5Trimestre3,
            'form' => $form->createView(),
            
            'date'=> $dateRepository->findOneById($id),
            'dateannee'=>$date->getAnnee(),
        ]);
    }

    /**
     * @Route("/{id}", name="form5_trimestre3_show", methods={"GET"})
     */
    public function show(Form5Trimestre3 $form5Trimestre3): Response
    {
        return $this->render('form5_trimestre3/show.html.twig', [
            'form5_trimestre3' => $form5Trimestre3,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="form5_trimestre3_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Form5Trimestre3 $form5Trimestre3): Response
    {
        $form = $this->createForm(Form5Trimestre3Type::class, $form5Trimestre3);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('form5_trimestre3_index');
        }

        return $this->render('form5_trimestre3/edit.html.twig', [
            'form5_trimestre3' => $form5Trimestre3,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="form5_trimestre3_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Form5Trimestre3 $form5Trimestre3): Response
    {
        if ($this->isCsrfTokenValid('delete'.$form5Trimestre3->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($form5Trimestre3);
            $entityManager->flush();
        }

        return $this->redirectToRoute('form5_trimestre3_index');
    }
}
