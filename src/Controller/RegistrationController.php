<?php
// src/Controller/RegistrationController.php
namespace App\Controller;

use App\Form\UserType;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class RegistrationController extends Controller
{
    /**
     * @Route("/register", name="user_registration")
     */
    public function registerAction(Request $request, UserPasswordEncoderInterface $passwordEncoder, \Swift_Mailer $mailer)
    {

        $user = new User();
        $form = $this->createForm(UserType::class, $user);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $password = $passwordEncoder->encodePassword($user, $user->getPassword());
            $user->setPassword($password);

            // Par defaut
            $user->setRoles(['ROLE_USER']);
            $user->setVictoire(0);
            $user->setDefaite(0);
            $user->setBloque(0);
            $user->setBloque(0);
            $user->setPartieCours(0);
            $user->setConnecte(0);
            $user->setIsActive(0);

            // On enregistre l'utilisateur dans la base
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            $succes = 'Vous êtes bien inscrit, vous devriez recevoir un mail';

            $message = (new \Swift_Message('Inscription'))
                ->setFrom('godswargame10@gmail.com')
                ->setTo($user->getEmail())
                ->setBody(
                    $this->renderView(
                        'emails/registration.html.twig',
                        array('name' => $user->getUsername())
                    ),
                    'text/html'
                )
            ;

            $mailer->send($message);

            return $this->render('register.html.twig', ['succes'=>$succes]);

        }

        return $this->render(
            'register.html.twig',
            array('form' => $form->createView())
        );
    }
}