<?php

namespace App\Controller;

use App\Data\SearchData;
use App\Entity\Session;
use App\Form\SearchForm;
use App\Form\SessionType;
use App\Form\StatisticsType;
use App\Repository\InstallationRepository;
use App\Repository\SessionRepository;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

/**
 * @Route("/session")
 */
class SessionController extends AbstractController
{


    /**
     * @Route("/print", name="session_print", methods={"GET"})
     */
    public function print(SessionRepository $sessionRepository,Request $request,InstallationRepository $installationRepository ): Response
    {

        return $this->render('session/print.html.twig', [
            'sessions' => $sessionRepository->findAll(),
            'installations'=>$installationRepository->findAll()
        ]);
    }


        /**
     * @Route("/", name="session_index", methods={"GET"})
     */
    public function index(SessionRepository $sessionRepository,Request $request): Response
    {



        $data = new SearchData();

        $form = $this->createForm(SearchForm::class, $data);
        $form->handleRequest($request);
        if($form->isSubmitted()){
           // $spreadsheet = new \PhpOffice\PhpSpreadsheet\Spreadsheet();
            //$writer = $this->get('phpspreadsheet')->createWriter($spreadsheet, 'Xls');
            //$writer->save('file.xls');

    }
       // dd($data);
        $sessions = $sessionRepository->findSearch($data);

        $dateform = $this->createForm(StatisticsType::class);
        $dateform->handleRequest($request);
        return $this->render('session/index.html.twig', [
            'sales' => $sessionRepository->SessionParDate($dateform->getData() ?? []),
            'sessions' => $sessions,
            'dateform' =>$dateform->createView(),
            'form' => $form->createView()
        ]);
    }

    
        /**
     * @Route("/2", name="session_index2", methods={"GET"})
     */
    public function index2(SessionRepository $sessionRepository,Request $request): Response
    {



        $data = new SearchData();

        $form = $this->createForm(SearchForm::class, $data);
        $form->handleRequest($request);
        if($form->isSubmitted()){
           // $spreadsheet = new \PhpOffice\PhpSpreadsheet\Spreadsheet();
            //$writer = $this->get('phpspreadsheet')->createWriter($spreadsheet, 'Xls');
            //$writer->save('file.xls');

    }
       // dd($data);
        $sessions = $sessionRepository->findSearch($data);

        $dateform = $this->createForm(StatisticsType::class);
        $dateform->handleRequest($request);
        return $this->render('session/index2.html.twig', [
            'sales' => $sessionRepository->SessionParDate($dateform->getData() ?? []),
            'sessions' => $sessions,
            'dateform' =>$dateform->createView(),
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/new", name="session_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $session = new Session();
        $form = $this->createForm(SessionType::class, $session);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($session);
            $entityManager->flush();

            return $this->redirectToRoute('session_index');
        }

        return $this->render('session/new.html.twig', [
            'session' => $session,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="session_show", methods={"GET"})
     */
    public function show(Session $session): Response
    {
        return $this->render('session/show.html.twig', [
            'session' => $session,
        ]);
    }


    /**
     * @Route("/{id}/edit", name="session_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Session $session): Response
    {
        $form = $this->createForm(SessionType::class, $session);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('session_index');
        }

        return $this->render('session/edit.html.twig', [
            'session' => $session,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="session_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Session $session): Response
    {
        if ($this->isCsrfTokenValid('delete' . $session->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($session);
            $entityManager->flush();
        }

        return $this->redirectToRoute('session_index');
    }


}
