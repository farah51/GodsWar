<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Chat;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class ChatController extends Controller
{

    /**
     * @Route("chat" , name="chat")
     */
    public function chat()
    {
        if($this->container->get('security.authorization_checker')->isGranted('ROLE_USER') || $this->container->get('security.authorization_checker')->isGranted('ROLE_ADMIN') ){

            $chat = $this->getDoctrine()->getRepository(Chat::class)->findOrder();

            $messages= array();

            foreach($chat as $envoi){
                $pseudo = $envoi->getPseudo();
                $message = $envoi->getMessage();
                $id = $envoi->getid();
                $messages[] = ['id'=>$id,'pseudo'=>$pseudo,'message'=>$message];
            }

            sort($messages);

            return $this->render("User/chat_afficher.html.twig",["messages"=>$messages]);

        }else{
            return $this->redirectToRoute('index');
        }
    }

    /**
     * @Route("/ch", name="ch")
     */
    public function ch()
    {
        if($this->container->get('security.authorization_checker')->isGranted('ROLE_USER') || $this->container->get('security.authorization_checker')->isGranted('ROLE_ADMIN') ){
            $player = $this->get('security.token_storage')->getToken()->getUser();
            if($player->getBloque()== 0){
                return $this->render("User/chat.html.twig");
            }else{
                return $this->redirectToRoute('player');
            }
        }else{
            return $this->redirectToRoute('index');
        }
    }

    /**
     * @Route("/envoyer", name="envoyer")
     */
    public function envoyer(Request $request)
    {
        if($this->container->get('security.authorization_checker')->isGranted('ROLE_USER') || $this->container->get('security.authorization_checker')->isGranted('ROLE_ADMIN') ){

            $pseudo = $request->request->get('pseudo');
            $message = $request->request->get('message');

            $chat = new Chat();
            $chat->setPseudo($pseudo);
            $chat->setMessage($message);

            $em = $this->getDoctrine()->getManager();
            $em->persist($chat);
            $em->persist($chat);
            $em->flush();

            return $this->redirectToRoute('ch');

        }else{
            return $this->redirectToRoute('index');
        }
    }

}
