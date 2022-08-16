<?php

namespace App\Controller;

use App\Classe\Mail;
use App\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    /**
     * @Route("/nous-contacter", name="contact")
     */
    public function index(Request $request): Response
    {
        $form = $this->createForm(ContactType::class);
        $form->handleRequest($request);

        if ($form-> isSubmitted() && $form->isValid())
        {
            $this->addFlash('notice', 'Merci de nous avoir contacté. Notre equipe vas vous repondre dans les meilleurs delais.');




            //$mail = new Mail();
            //$mail->send('msouleadowa@gmail.com', 'TRIANGLE', 'Vous avez.....');
        }
        return $this->render('contact/index.html.twig',[
            'form'=>$form->createView()
        ]);
    }
}
