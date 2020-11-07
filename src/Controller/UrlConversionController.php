<?php

namespace App\Controller;

use App\Entity\UrlConversion;
use App\Form\ShortenLinkType;
use App\Form\UrlConversionType;
use App\Repository\UrlConversionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

///**
// * @Route("/")
// */
class UrlConversionController extends AbstractController
{
    /**
     * @Route("/index", name="url_conversion_index", methods={"GET"})
     */
    public function index(UrlConversionRepository $urlConversionRepository): Response
    {
        return $this->render('url_conversion/index.html.twig', [
            'url_conversions' => $urlConversionRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="url_conversion_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $urlConversion = new UrlConversion();
        $form = $this->createForm(UrlConversionType::class, $urlConversion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($urlConversion);
            $entityManager->flush();

            return $this->redirectToRoute('url_conversion_index');
        }

        return $this->render('url_conversion/new.html.twig', [
            'url_conversion' => $urlConversion,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/", name="url_conversion_new_from_base", methods={"GET","POST"})
     */
    public function newFromBase(Request $request): Response
    {
        $urlConversion = new UrlConversion();
        $form = $this->createForm(ShortenLinkType::class, $urlConversion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $urlConversion->setBackHalf("Does this work?");
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($urlConversion);
            $entityManager->flush();

            //TODO: change this!V
            return $this->redirectToRoute('url_conversion_index');
        }

        return $this->render('url_conversion/new.html.twig', [
            'url_conversion' => $urlConversion,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="url_conversion_show", methods={"GET"})
     */
    public function show(UrlConversion $urlConversion): Response
    {
        return $this->render('url_conversion/show.html.twig', [
            'url_conversion' => $urlConversion,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="url_conversion_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, UrlConversion $urlConversion): Response
    {
        $form = $this->createForm(UrlConversionType::class, $urlConversion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('url_conversion_index');
        }

        return $this->render('url_conversion/edit.html.twig', [
            'url_conversion' => $urlConversion,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="url_conversion_delete", methods={"DELETE"})
     */
    public function delete(Request $request, UrlConversion $urlConversion): Response
    {
        if ($this->isCsrfTokenValid('delete'.$urlConversion->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($urlConversion);
            $entityManager->flush();
        }

        return $this->redirectToRoute('url_conversion_index');
    }
}
