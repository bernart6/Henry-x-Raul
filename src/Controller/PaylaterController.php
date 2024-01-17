<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PaylaterController extends AbstractController
{
    #[Route('paylater')]
    public function index(): Response
    {
        return $this->render('paypalpaylater.twig', array(
            'clientId' => "ATGoLUMc10J6TIa1lr5SE_Vi_6f_jlI1-C3pTgsyCojQf4Zwq9y3X8iDViFFwRQvK2gWOSm62rZkYydm",
            'currency' => "EUR",
        ));
    }
}