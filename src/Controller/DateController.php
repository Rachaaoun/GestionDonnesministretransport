<?php

namespace App\Controller;

use App\Entity\Date;
use App\Entity\Form5Trimestre2;
use App\Entity\Form5Trimestre3;

use App\Entity\Form5Trimestre4;
use App\Entity\Form5Trimestre1;
use App\Entity\TabCA;
use App\Entity\TabCaSimple;
use App\Form\DateType;
use App\Repository\DateRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/date")
 */
class DateController extends AbstractController
{
    /**
     * @Route("/", name="date_index", methods={"GET"})
     */
    public function index(DateRepository $dateRepository): Response
    {
        return $this->render('date/index.html.twig', [
            'dates' => $dateRepository->findAll(),
        ]);
    }

    /**
    * @Route("/commission" , name="date_index_commisionfinale" , methods={"GET"})
    */
    public function indexCommissionFinal(DateRepository$dateRepository):Response
    {
        return $this->render('date/commissionfinal.html.twig', [
            'dates' => $dateRepository->findAll(),
        ]); 
    }

    /**
    * @Route("/tabcafinal" , name="date_index_tabcafinal" , methods={"GET"})
    */
    public function indexTabCaFinal(DateRepository$dateRepository):Response
    {
        return $this->render('date/tabcafinal.html.twig', [
            'dates' => $dateRepository->findAll(),
        ]); 
    }


    /**
     * @Route("/carte2" , name="date_index_carte2" , methods={"GET"})
     */
    public function indexForCarte2(DateRepository$dateRepository):Response
    {
        return $this->render('date/carte2.html.twig', [
            'dates' => $dateRepository->findAll(),
        ]); 
    }
    /**
     * @Route("/carte3" , name="date_index_carte3" , methods={"GET"})
     */
    public function indexForCarte3(DateRepository$dateRepository):Response
    {
        return $this->render('date/carte3.html.twig', [
            'dates' => $dateRepository->findAll(),
        ]); 
    }

     /**
     * @Route("/carte5" , name="date_index_carte5" , methods={"GET"})
     */
    public function indexForCarte5(DateRepository$dateRepository):Response
    {
        return $this->render('date/carte5.html.twig', [
            'dates' => $dateRepository->findAll(),
        ]); 
    }

    /**
     * @Route("/observatoire2" , name="date_index_observatoire2" , methods={"GET"})
     */
    public function indexForObservatoire2(DateRepository$dateRepository):Response
    {
        return $this->render('date/observatoire2.html.twig', [
            'dates' => $dateRepository->findAll(),
        ]); 
    }

    /**
     * @Route("/observatoire3" , name="date_index_observatoire3" , methods={"GET"})
     */
    public function indexForObservatoire3(DateRepository$dateRepository):Response
    {
        return $this->render('date/observatoire3.html.twig', [
            'dates' => $dateRepository->findAll(),
        ]); 
    }

    
    /**
     * @Route("/maquette2" , name="date_index_maquette2" , methods={"GET"})
     */
    public function indexFormaquette2(DateRepository$dateRepository):Response
    {
        return $this->render('date/maquette2.html.twig', [
            'dates' => $dateRepository->findAll(),
        ]); 
    }

    /**
     * @Route("/maquette3" , name="date_index_maquette3" , methods={"GET"})
     */
    public function indexFormaquette3(DateRepository$dateRepository):Response
    {
        return $this->render('date/maquette3.html.twig', [
            'dates' => $dateRepository->findAll(),
        ]); 
    }
    /**
     * @Route("/maquette5" , name="date_index_maquette5" , methods={"GET"})
     */
    public function indexFormaquette5(DateRepository$dateRepository):Response
    {
        return $this->render('date/maquette5.html.twig', [
            'dates' => $dateRepository->findAll(),
        ]); 
    }

    /**
     * @Route("/tabAff", name="date_table_affaire"  ,methods={"GET"})
     */
    public function indexforTableaffaire(DateRepository $dateRepository): Response
    {
        return $this->render('date/tableaffaire.html.twig', [
            'dates' => $dateRepository->findAll(),
        ]); 

    }


    /**
     * @Route("/invitation" , name="date_index_invitation" , methods={"GET"})
     */
    public function indexForInvitation(DateRepository$dateRepository):Response
    {
        return $this->render('date/invitation.html.twig', [
            'dates' => $dateRepository->findAll(),
        ]); 
    }

    /**
     * @Route("/tabca" , name="date_index_tabca" , methods={"GET"})
     */
    public function indexForTabca(DateRepository$dateRepository):Response
    {
        return $this->render('date/indexTabCa.html.twig', [
            'dates' => $dateRepository->findAll(),
        ]); 
    }
    /**
     * @Route("/trimestre/{id}" , name="date_trimestre" , methods={"GET"})
     */
    public function trimestre($id,DateRepository $repo)
    {
        $datedujour= new \DateTime('now');
        $date=$repo->findById($id);
        return $this->render('date/trimestre.html.twig',['date'=>$date,'id'=>$id
    ,
    'today'=>$datedujour->format('d/m/Y')]);
    }


    /**
     * @Route("/tabcaSimple" , name="date_index_tabca_simple" , methods={"GET"})
     */
    public function indexForTabcaSimple(DateRepository$dateRepository):Response
    {
        return $this->render('date/indexTabCaSimle.html.twig', [
            'dates' => $dateRepository->findAll(),
        ]); 
    }

    /**
     * @Route("/new", name="date_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $date = new Date();
        
        $tabCa=new TabCA();
        $tabCaSimple=new TabCaSimple();

        $form5trimestre1 = new Form5Trimestre1();
        
        $form5trimestre2 = new Form5Trimestre2();
         $form5trimestre3 = new Form5Trimestre3();

        // $form5trimestre4 = new Form5Trimestre4();
        $form = $this->createForm(DateType::class, $date);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($date);
            $tabCaSimple->setDate($date);
            $tabCa->setDate($date);
            
            $form5trimestre1->setDate($date);
            $form5trimestre2->setDate($date);
            $entityManager->persist($tabCaSimple);
            $entityManager->persist($tabCa);
            $entityManager->persist($form5trimestre1);
             $entityManager->persist($form5trimestre2);
            $entityManager->persist($form5trimestre3);
            // $entityManager->persist($form5trimestre4);
            $entityManager->flush();

            return $this->redirectToRoute('date_index');
        }

        return $this->render('date/new.html.twig', [
            'date' => $date,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="date_show", methods={"GET"})
     */
    public function show(Date $date): Response
    {
        return $this->render('date/show.html.twig', [
            'date' => $date,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="date_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Date $date): Response
    {
        $form = $this->createForm(DateType::class, $date);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('date_index');
        }

        return $this->render('date/edit.html.twig', [
            'date' => $date,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="date_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Date $date): Response
    {
        if ($this->isCsrfTokenValid('delete'.$date->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($date);
            $entityManager->flush();
        }

        return $this->redirectToRoute('date_index');
    }
}
