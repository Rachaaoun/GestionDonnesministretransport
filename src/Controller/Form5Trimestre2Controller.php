<?php

namespace App\Controller;

use App\Entity\Form5Trimestre2;
use App\Form\Form5Trimestre21Type;
use App\Repository\DateRepository;
use App\Repository\Form5Trimestre2Repository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/form5/trimestre2")
 */
class Form5Trimestre2Controller extends AbstractController
{
    /**
     * @Route("/{id}", name="form5_trimestre2_index", methods={"GET"})
     */
    public function index(Form5Trimestre2Repository $form5Trimestre2Repository,DateRepository $dateRepository,$id): Response
    {
      
        $date= $dateRepository->findOneById($id);
        $v=null;
        $f=$form5Trimestre2Repository->findByDate($date);
      
        if($f)
 
        {  $varfinal=$f[0]->getVarfinal();
            $v = $varfinal;}else $v=null;
       
         return $this->render('form5_trimestre2/index.html.twig', [
             'form5_trimestre1s' => $form5Trimestre2Repository->findByDate($date),
             'dateannee'=>$date->getAnnee(),
             'date'=>$date,
             'varfinal'=>$v
         ]);
    }

    /**
     * @Route("/new/{id}", name="form5_trimestre2_new", methods={"GET","POST"})
     */
    public function new(Request $request,DateRepository $dateRepository,$id): Response
    {
        
        $date=$dateRepository->findOneById($id);
        $form5Trimestre2 = new Form5Trimestre2();
        $form = $this->createForm(Form5Trimestre21Type::class, $form5Trimestre2);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $form5Trimestre2->setDate($date);
            $entityManager->persist($form5Trimestre2);
            $entityManager->flush();

            return $this->redirectToRoute('form5_trimestre2_index',['id'=>$id]);
        }

        return $this->render('form5_trimestre2/new.html.twig', [
            'form5_trimestre2' => $form5Trimestre2,
            'form' => $form->createView(),
            'date'=> $dateRepository->findOneById($id),
            'dateannee'=>$date->getAnnee(),
        ]);
    }

    /**
     * @Route("/{id}", name="form5_trimestre2_show", methods={"GET"})
     */
    public function show(Form5Trimestre2 $form5Trimestre2): Response
    {
        return $this->render('form5_trimestre2/show.html.twig', [
            'form5_trimestre2' => $form5Trimestre2,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="form5_trimestre2_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Form5Trimestre2 $form5Trimestre2): Response
    {
        $form = $this->createForm(Form5Trimestre21Type::class, $form5Trimestre2);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('form5_trimestre2_index');
        }

        return $this->render('form5_trimestre2/edit.html.twig', [
            'form5_trimestre2' => $form5Trimestre2,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="form5_trimestre2_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Form5Trimestre2 $form5Trimestre2): Response
    {
        if ($this->isCsrfTokenValid('delete'.$form5Trimestre2->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($form5Trimestre2);
            $entityManager->flush();
        }

        return $this->redirectToRoute('form5_trimestre2_index');
    }
}
