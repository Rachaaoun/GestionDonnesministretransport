<?php

namespace App\Controller;

use App\Entity\Form5Trimestre1;
use App\Form\Form5Trimestre1Type;
use App\Repository\DateRepository;
use App\Repository\Form5Trimestre1Repository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/form5/trimestre1")
 */
class Form5Trimestre1Controller extends AbstractController
{
    /**
     * @Route("/{id}", name="form5_trimestre1_index", methods={"GET"})
     */
    public function index(Form5Trimestre1Repository $form5Trimestre1Repository,DateRepository $dateRepository,$id): Response
    {

       $date= $dateRepository->findOneById($id);
       $v=null;
       $f=$form5Trimestre1Repository->findByDate($date);
     
       if($f)

       {  $varfinal=$f[0]->getVarfinal();
           $v = $varfinal;}else $v=null;
      
        return $this->render('form5_trimestre1/index.html.twig', [
            'form5_trimestre1s' => $form5Trimestre1Repository->findByDate($date),
            'dateannee'=>$date->getAnnee(),
            'date'=>$date,
            'varfinal'=>$v
        ]);
    }

    /**
     * @Route("/new/{id}", name="form5_trimestre1_new", methods={"GET","POST"})
     */
    public function new(Request $request,DateRepository $dateRepository,$id): Response
    {
        $date=$dateRepository->findOneById($id);
        $form5Trimestre1 = new Form5Trimestre1();
        $form = $this->createForm(Form5Trimestre1Type::class, $form5Trimestre1);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $form5Trimestre1->setDate($date);
            $entityManager->persist($form5Trimestre1);
            $entityManager->flush();

            return $this->redirectToRoute('form5_trimestre1_index',['id'=>$id]);
        }

        return $this->render('form5_trimestre1/new.html.twig', [
            'form5_trimestre1' => $form5Trimestre1,
            'form' => $form->createView(),
            'date'=> $dateRepository->findOneById($id),
            'dateannee'=>$date->getAnnee(),
        ]);
    }

    /**
     * @Route("/{id}", name="form5_trimestre1_show", methods={"GET"})
     */
    public function show(Form5Trimestre1 $form5Trimestre1): Response
    {
        return $this->render('form5_trimestre1/show.html.twig', [
            'form5_trimestre1' => $form5Trimestre1,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="form5_trimestre1_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Form5Trimestre1 $form5Trimestre1): Response
    {
        $form = $this->createForm(Form5Trimestre1Type::class, $form5Trimestre1);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('form5_trimestre1_index');
        }

        return $this->render('form5_trimestre1/edit.html.twig', [
            'form5_trimestre1' => $form5Trimestre1,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{iddate}/{id}", name="form5_trimestre1_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Form5Trimestre1 $form5Trimestre1,$iddate,DateRepository $dateRepository): Response
    {
        $date =$dateRepository->findOneBy($iddate);
        if ($this->isCsrfTokenValid('delete'.$form5Trimestre1->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($form5Trimestre1);
            $entityManager->flush();
        }

        return $this->redirectToRoute('form5_trimestre1_index',['id'=>$date->getId()]);
    }
}
