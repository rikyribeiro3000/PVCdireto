<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use App\Controller\GetResponseEvent;
use Doctrine\DBAL\Driver\Connection;

class DefaultController extends AbstractController
{
     public function index(Request $request)
    {
       $_locale = $request->getLocale();
       return $this->render('home/base.html.twig');
    }   

    public function item(Request $request)
    {
        $tt = $request->request->get('tt');
        $item = $request->request->get('item');
        $em = $this->getDoctrine()->getManager();
        $query = 'SELECT itens.img AS img , itens.name AS name , texto.'.$tt.' AS lang ,texto.t'.$tt.' As tlang FROM `itens` JOIN texto ON itens.name = texto.item WHERE item="'.$item.'"';
        $statement = $em->getConnection()->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll();
        return $this->render('images/base.html.twig',
        array('result' => $result));

    }

    public function email(Request $request, \Swift_Mailer $mailer) 
    {
        $Username = $request->request->get('usrname');
        $Assunto = $request->request->get('Assunto');
        $Email = $request->request->get('Email');
        $Mensagem = $request->request->get('text');

        $message = (new \Swift_Message($Assunto))
            ->setFrom('orcamento@myapps.pt')
            ->setTo('orcamentopvcdireto@gmail.com')
            ->setBody(
                $this->renderView(
                    'emails/orcamento.html.twig',
                    array('usrname' => $Username, 'Email' => $Email,'Mensagem' => $Mensagem)
                ),
                'text/html'
            )
        ;

        $mailer->send($message);

        return $this->redirectToRoute('index');
    }

}