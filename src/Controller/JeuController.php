<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Objet;
use App\Entity\Partie;
use App\Entity\Objectif;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class JeuController
 * @package App\Controller
 */
class JeuController extends Controller
{
    /**
     * @Route("/nouvelle_partie", name="nouvelle_partie")
     */
    public function nouvellePartie()
    {

        if($this->container->get('security.authorization_checker')->isGranted('ROLE_USER')){
            $player = $this->get('security.token_storage')->getToken()->getUser();
            $id_partie_en_cours = $player->getPartieCours();
            if($id_partie_en_cours==0){
                $joueurs = $this->getDoctrine()->getRepository(User::class)->findByRole('ROLE_USER');
                $tjoueurs = array();

                foreach($joueurs as $joueur){
                   if($joueur->getPartieCours() == 0 and $player != $joueur){
                      $tjoueurs[] = $joueur;
                   }
                }

                return $this->render('jeu/nouvelle.html.twig', ['joueurs' => $tjoueurs]);
            }else{
                return $this->redirectToRoute('player');
            }

        }else{
            return $this->redirectToRoute('index');
        }
    }

    /**
     * @Route("/creer", name="creer_partie")
     */
    public function creerPartie(Request $request) {
        $idAdversaire = $request->request->get('adversaire');
        $joueur = $this->get('security.token_storage')->getToken()->getUser(); //$this->getDoctrine()->getRepository(User::class)->find(1);
        $adversaire = $this->getDoctrine()->getRepository(User::class)->find($idAdversaire);
        $nom= $request->request->get('nom_partie');

        //récupérer les cartes depuis la base de données et mélanger leur id
        $cartes = $this->getDoctrine()->getRepository(Objet::class)->findAll();
        $tCartes = array();
        foreach ($cartes as $carte) {
            $tCartes[] = $carte->getId();
        }
        shuffle($tCartes);

        //retrait de la première carte
        $carte_ecartee = array_pop($tCartes);

        //Distribution des cartes aux joueurs,
        $tMainJ1 = array();
        for($i=0; $i<7; $i++) {
            $tMainJ1[] = array_pop($tCartes);
        }
        $tMainJ2 = array();
        for($i=0; $i<6; $i++) {
            $tMainJ2[] = array_pop($tCartes);
        }

        //La création de la pioche ,sauvegarde des dernières cartes dans la pioche
        $tPioche = $tCartes;

        // actions au départ
        $dissimulation = array('etat'=>0, 'carte'=>0);
        $disparition = array('etat'=>0, 'carte'=>array());
        $cadeau = array('etat'=>0, 'carte'=>array());
        $concurrence = array('etat'=>0, 'carte'=>array());// A revoir

        // tableau de toutes les actions
        $tAction = array("dissimulation"=>$dissimulation, "disparition"=>$disparition, "cadeau"=>$cadeau, "concurrence"=>$concurrence);

        // attribution des objectif par id à j1 et j2
        $tObjectifs_attribution = array(
                                        1=>array('j1'=> 0 ,'j2'=> 0 ,'jeton' => 0),
                                        2=>array('j1'=> 0 ,'j2'=> 0 ,'jeton' => 0),
                                        3=>array('j1'=> 0 ,'j2'=> 0 ,'jeton' => 0),
                                        4=>array('j1'=> 0 ,'j2'=> 0 ,'jeton' => 0),
                                        5=>array('j1'=> 0 ,'j2'=> 0 ,'jeton' => 0),
                                        6=>array('j1'=> 0 ,'j2'=> 0 ,'jeton' => 0) ,
                                        7=>array('j1'=> 0 ,'j2'=> 0 ,'jeton' => 0)
                                    );

        //créer un objet de type Partie
        $partie = new Partie();
        $partie->setJ1($joueur);
        $partie->setJ2($adversaire);
        $partie->setCarteEcartee(json_encode($carte_ecartee));
        $partie->setMainJ1(json_encode($tMainJ1));
        $partie->setMainJ2(json_encode($tMainJ2));
        $partie->setPioche(json_encode($tPioche));
        $partie->setNom($nom);
        $partie->setTour('j1');
        $partie->setManche(1);
        $partie->setActionJ1(json_encode($tAction));
        $partie->setActionJ2(json_encode($tAction));
        $partie->setObjectifAttribution(json_encode($tObjectifs_attribution));
        $partie->setScoreJ1(0);
        $partie->setScoreJ2(0);
        $partie->setVainqueur('aucun');

        //Sauvegarde mon objet Partie dans la base de données et redirection vers l'affichage
        $em = $this->getDoctrine()->getManager();
        $em->persist($partie);
        $em->flush();

        $id = $partie->getId();
        $joueur->setPartieCours($id);
        $adversaire->setPartieCours($id);
        $em = $this->getDoctrine()->getManager();
        $em->persist($joueur);
        $em->persist($adversaire);
        $em->flush();

        return $this->redirectToRoute('afficher_partie', ['id' => $partie->getId(), 'partie'=>$partie]);
    }

    /**
     * @Route("afficher/{id}", name="afficher_partie")
     */
    public function afficherPartie(Partie $partie ,Request $request) {

        //vérifier que le joueur est connecté et appartient à la partie pour l'afficher
        $j1 = $partie->getJ1();
        $id_j1 = $j1->getId();
        $j2 = $partie->getJ2();
        $id_j2 = $j2->getId();

        if($this->container->get('security.authorization_checker')->isGranted('ROLE_USER')){
            $player = $this->get('security.token_storage')->getToken()->getUser();
            $id_j = $player->getId();
            $vainqueur = $partie->getVainqueur();
            if($vainqueur == 'aucun' || $vainqueur == 'manche_suivante'){
                if($id_j == $id_j1){
                    $joueur = 'j1';
                    $autre_joueur = 'j2';

                }elseif($id_j == $id_j2){
                    $joueur = 'j2';
                    $autre_joueur = 'j1';
                }
            }elseif($vainqueur == 'j1' || $vainqueur == 'j2' and $partie->getId() == $j1->getPartieCours() and $partie->getId() == $j2->getPartieCours() ){
                if($id_j == $id_j1){
                    $joueur = 'j1';
                    $autre_joueur = 'j2';

                }elseif($id_j == $id_j2){
                    $joueur = 'j2';
                    $autre_joueur = 'j1';
                }
            }else{
                return $this->redirectToRoute('player');
            }
        }else{
            return $this->redirectToRoute('index');
        }

        //récupération de sa main et de ses actions dispos
        if($joueur=='j1'){
            $main = $partie->getMainJ1();
            $action= $partie->getActionJ1();
            $action_autre = $partie->getActionJ2();
        }else{
            $main = $partie->getMainJ2();
            $action = $partie->getActionJ2();
            $action_autre = $partie->getActionJ1();
        }

        //afficher actions du joueur à qui c'est le tour
        $tour = $partie->getTour();
        if($tour == $joueur){
            $tActionDispo = array();
            foreach ($action as $key=>$value){
                foreach ($value as $key2=>$value2){
                    if($key2=='etat' && $value2==0){
                        $tActionDispo[] = ['nom'=>$key, 'etat'=>0 ,'dispo'=>1];
                    }elseif($key2=='etat' && $value2==1){
                        $tActionDispo[] = ['nom'=>$key, 'etat'=>1 ,'dispo'=>1];
                    }
                }
            }
        }else{
            $tActionDispo = array();
            foreach ($action as $key=>$value){
                foreach ($value as $key2=>$value2){
                    if($key2=='etat' && $value2==0){
                        $tActionDispo[] = ['nom'=>$key, 'etat'=>0 ,'dispo'=>0];
                    }elseif($key2=='etat' && $value2==1){
                        $tActionDispo[] = ['nom'=>$key, 'etat'=>1 ,'dispo'=>0];
                    }
                }
            }
        }

        //afficher action de l'adversaire
        $tActionDispoAdverse = array();
        foreach ($action_autre as $key=>$value){
            foreach ($value as $key2=>$value2){
                if($key2=='etat' && $value2==0){
                    $tActionDispoAdverse[]= ['nom'=>$key, 'etat'=>0] ;
                }elseif($key2=='etat' && $value2==1){
                    $tActionDispoAdverse[]= ['nom'=>$key, 'etat'=>1];
                }
            }
        }

        $action = json_decode(json_encode($action),true);
        $action_autre = json_decode(json_encode($action_autre),true);

        //Afficher cartes cadeau proposées par l'adversaire si elles existent
        if($action_autre['cadeau']['carte']){
            $choix_cadeau= $action_autre['cadeau']['carte'];
            $tchoix = array();
            for($i=0; $i<3; $i++) {
                $id = intval($choix_cadeau[$i]);
                $carte = $this->getDoctrine()->getRepository(Objet::class)->find($id);
                $nom = $carte->getNom();
                $tchoix [] = ['id'=>$id, 'nom'=>$nom];
            }
        }else{
            $tchoix= 0;
        }

        //Afficher les paires concurrence proposées par l'adversaire si elles existent
        if($action_autre['concurrence']['carte'] != null){
            $concurrence = $action_autre['concurrence']['carte'];
            $choix_paire = array();
            foreach($concurrence as $key=>$value){
                foreach($value as $value2){
                    $id = intval($value2);
                    $carte = $this->getDoctrine()->getRepository(Objet::class)->find($id);
                    $nom = $carte->getNom();
                    if($key=='p1'){
                        $choix_paire[]=['id'=>$id, 'nom'=>$nom, 'paire'=>1];
                    }
                    if($key=='p2'){
                        $choix_paire[]=['id'=>$id, 'nom'=>$nom, 'paire'=>2];
                    }
                }
            }
        }else{
            $choix_paire= 0;
        }

        //récupération des cartes de la main du joueur par nom, id et valeur
        $cartes_main = array();
        foreach ($main as $id) {
            if($id !=0){
                $carte = $this->getDoctrine()->getRepository(Objet::class)->find($id);
                $cartes_main[] = ['nom'=>$carte->getNom(), 'id'=>$id, 'valeur'=>$carte->getValeur()];
            }
        }

        //récupération des cartes objectifs et de leurs attributions
        $objectifs = $this->getDoctrine()->getRepository(Objectif::class)->findAll();
        $tObjectifs = array();
        $attri = $partie->getObjectifAttribution();
        $attri = json_decode(json_encode($attri),true);

        foreach($objectifs as $carte){
                $id_string= strval($carte->getId());
                $j = $attri[$id_string][$joueur];
                $ja = $attri[$id_string][$autre_joueur];
                $jeton = $attri[$id_string]['jeton'];
                if($jeton == 1 && $joueur == 'j1' || $jeton == 2 && $joueur == 'j2'){
                    $jeton = 'j';
                }elseif($jeton == 1 && $joueur == 'j2' || $jeton == 2 && $joueur == 'j1'){
                    $jeton = 'ja';
                }elseif($jeton == 0){
                   $jeton = 'autre';
                }
                $tObjectifs [] = ['nom'=>$carte->getNom(),'id'=>$carte->getId(),'valeur'=>$carte->getValeur(), 'j'=>$j, 'ja'=>$ja, 'jeton'=>$jeton];
        }

        //récupération de l'action sélectionnée
        $action_selectionnee = $request->request->get('action');

        //Récupération de la carte dissimulee et disparues si elles existent
        if($joueur=='j1'){
            $action = $partie->getActionJ1();
        }else{
            $action = $partie->getActionJ2();
        }
        $action = json_decode(json_encode($action),true);

        if($action['dissimulation']['carte'] != 0){
            $carte_dissimulee = $action['dissimulation']['carte'];
            $objet = $this->getDoctrine()->getRepository(Objet::class)->find($carte_dissimulee);
            $carte_dissimulee = $objet->getNom();
        }else{
            $carte_dissimulee = "";
        }
        if($action['disparition']['carte'] != 0){
            $tcarte_disparue = array();
            $cartes_disparues = $action['disparition']['carte'];
            foreach($cartes_disparues as $value){
                $id =intval($value);
                $objet = $this->getDoctrine()->getRepository(Objet::class)->find($id);
                $tcarte_disparue[] = $objet->getNom();
            }
        }else{
            $tcarte_disparue = "";
        }


        //récupérer la carte à dissimuler si elle existe, l'enregistrer et l'enlever de la main
        $carte_selectionnee = $request->request->get('carte_dissimulee_selectionnee');
            if($carte_selectionnee != null){
                $Main= array();
                if($joueur=='j1'){
                    $action = $partie->getActionJ1();
                    $action = json_decode(json_encode($action),true);
                    $action['dissimulation']['carte'] = $carte_selectionnee;
                    $action['dissimulation']['etat']=1;
                    $partie->setActionJ1(json_encode($action));
                    $main = $partie->getMainJ1();
                    foreach($main as $key=>$value){
                        if($value == $carte_selectionnee){
                            unset($main[$key]);
                        }else{
                            $Main[]=$value;
                        }
                    }
                    $partie->setMainJ1(json_encode($Main));
                }else{
                    $action = $partie->getActionJ2();
                    $action = json_decode(json_encode($action),true);
                    $action['dissimulation']['carte'] = $carte_selectionnee;
                    $action['dissimulation']['etat']=1;
                    $partie->setActionJ2(json_encode($action));
                    $main = $partie->getMainJ2();
                    foreach($main as $key=>$value){
                        if($value == $carte_selectionnee){
                            unset($main[$key]);
                        }else{
                            $Main[]=$value;
                        }
                    }
                    $partie->setMainJ2(json_encode($Main));
                }
                $em = $this->getDoctrine()->getManager();
                $em->persist($partie);
                $em->flush();

                //changer tour + piocher carte
                $tour = $partie->getTour();
                $pioche = $partie->getPioche();
                $carte_piochee = array_pop($pioche);
                if($tour=='j1'){
                    $main = $partie->getMainJ2();
                    if($carte_piochee != null){
                        $main[] = $carte_piochee;
                    }
                    $partie->setTour('j2');
                    $partie->setPioche(json_encode($pioche));
                    $partie->setMainJ2(json_encode($main));
                }else{
                    $main = $partie->getMainJ1();
                    if($carte_piochee != null){
                        $main[] = $carte_piochee;
                    }
                    $partie->setTour('j1');
                    $partie->setPioche(json_encode($pioche));
                    $partie->setMainJ1(json_encode($main));
                }
                $em = $this->getDoctrine()->getManager();
                $em->persist($partie);
                $em->flush();

                return $this->redirectToRoute('afficher_partie', ['id' => $partie->getId(), 'partie'=>$partie]);
            }


        //Modifications des cartes disparues et les enlever de la main
        $cartes_disparues = $request->request->get('cartes_disparues');
        if($cartes_disparues != null && count($cartes_disparues) == 2){
            $Main= array();
            if($joueur=='j1'){
                $action = $partie->getActionJ1();
                $action = json_decode(json_encode($action),true);
                $action['disparition']['carte'] = $cartes_disparues;//valeur en string
                $action['disparition']['etat']=1;
                $partie->setActionJ1(json_encode($action));
                $main = $partie->getMainJ1();
                foreach($main as $key=>$value){
                    if($value == intval($cartes_disparues[0])){
                        unset($main[$key]);
                    }elseif($value == intval($cartes_disparues[1])){
                        unset($main[$key]);
                    }else{
                        $Main[]= $value;
                    }
                }
                $partie->setMainJ1(json_encode($Main));
            }else{
                $action = $partie->getActionJ2();
                $action = json_decode(json_encode($action),true);
                $action['disparition']['carte'] = $cartes_disparues;
                $action['disparition']['etat']=1;
                $partie->setActionJ2(json_encode($action));
                $main = $partie->getMainJ2();
                foreach($main as $key=>$value){
                    if($value == intval($cartes_disparues[0])){
                        unset($main[$key]);
                    }elseif($value == intval($cartes_disparues[1])){
                        unset($main[$key]);
                    }else{
                        $Main[]= $value;
                    }
                }
                $partie->setMainJ2(json_encode($Main));
            }
            $em = $this->getDoctrine()->getManager();
            $em->persist($partie);
            $em->flush();

            //changer tour + piocher carte
            $tour = $partie->getTour();
            $pioche = $partie->getPioche();
            $carte_piochee = array_pop($pioche);
            if($tour=='j1'){
                $main = $partie->getMainJ2();
                if($carte_piochee != null){
                    $main[] = $carte_piochee;
                }
                $partie->setTour('j2');
                $partie->setPioche(json_encode($pioche));
                $partie->setMainJ2(json_encode($main));
            }else{
                $main = $partie->getMainJ1();
                if($carte_piochee != null){
                    $main[] = $carte_piochee;
                }
                $partie->setTour('j1');
                $partie->setPioche(json_encode($pioche));
                $partie->setMainJ1(json_encode($main));
            }
            $em = $this->getDoctrine()->getManager();
            $em->persist($partie);
            $em->flush();

            return $this->redirectToRoute('afficher_partie', ['id' => $partie->getId(), 'partie'=>$partie]);

        }

        //Modifications des cartes cadeau et les enlever de la main
        $cartes_cadeau = $request->request->get('cartes_cadeau');
        if($cartes_cadeau != null && count($cartes_cadeau) == 3){
            $Main= array();
            if($joueur=='j1'){
                $action = $partie->getActionJ1();
                $action = json_decode(json_encode($action),true);
                $action['cadeau']['carte'] = $cartes_cadeau;
                $action['cadeau']['etat']=1;
                $partie->setActionJ1(json_encode($action));
                $main = $partie->getMainJ1();
                foreach($main as $key=>$value){
                    if($value == intval($cartes_cadeau[0])){
                        unset($main[$key]);
                    }elseif($value == intval($cartes_cadeau[1])){
                        unset($main[$key]);
                    }elseif($value == intval($cartes_cadeau[2])){
                        unset($main[$key]);
                    }else{
                        $Main[]= $value;
                    }
                }
                $partie->setMainJ1(json_encode($Main));
            }else{
                $action = $partie->getActionJ2();
                $action = json_decode(json_encode($action),true);
                $action['cadeau']['carte'] = $cartes_cadeau;
                $action['cadeau']['etat']=1;
                $partie->setActionJ2(json_encode($action));
                $main = $partie->getMainJ2();
                foreach($main as $key=>$value){
                    if($value == intval($cartes_cadeau[0])){
                        unset($main[$key]);
                    }elseif($value == intval($cartes_cadeau[1])){
                        unset($main[$key]);
                    }elseif($value == intval($cartes_cadeau[2])){
                        unset($main[$key]);
                    }else{
                        $Main[]= $value;
                    }
                }
                $partie->setMainJ2(json_encode($Main));
            }
            $em = $this->getDoctrine()->getManager();
            $em->persist($partie);
            $em->flush();

            //changer tour + piocher carte
            $tour = $partie->getTour();
            $pioche = $partie->getPioche();
            $carte_piochee = array_pop($pioche);
            if($tour=='j1'){
                $main = $partie->getMainJ2();
                if($carte_piochee != null){
                    $main[] = $carte_piochee;
                }
                $partie->setTour('j2');
                $partie->setPioche(json_encode($pioche));
                $partie->setMainJ2(json_encode($main));
            }else{
                $main = $partie->getMainJ1();
                if($carte_piochee != null){
                    $main[] = $carte_piochee;
                }
                $partie->setTour('j1');
                $partie->setPioche(json_encode($pioche));
                $partie->setMainJ1(json_encode($main));
            }
            $em = $this->getDoctrine()->getManager();
            $em->persist($partie);
            $em->flush();

            return $this->redirectToRoute('afficher_partie', ['id' => $partie->getId(), 'partie'=>$partie]);
        }


        //Placer la carte cadeau choisie si elle existe sur l'objectif correspondant
        $carte_cadeau_choisie = $request->request->get('carte_cadeau_choisie');
        if(isset($carte_cadeau_choisie)){
            $carte_cadeau_choisie_int = intval($carte_cadeau_choisie);
            $carte = $this->getDoctrine()->getRepository(Objet::class)->find($carte_cadeau_choisie_int);
            $objectif = $carte->getObjectif();
            $objectif= $objectif->getId();
            $attribution = $partie->getObjectifAttribution();
            $attribution = json_decode(json_encode($attribution),true);
            $objectif = strval($objectif);
            $valeur_debut = $attribution[$objectif][$joueur];
            $valeur =$valeur_debut + 1;
            $attribution[$objectif][$joueur] = $valeur;

            //L'enlever des actions du joueur adverse et récupérer ses cartes cadeaux avant de les supprimer
            if($joueur == 'j1'){
                $action = $partie->getActionJ2();
            }else{
                $action = $partie->getActionJ1();
            }
            $action = json_decode(json_encode($action),true);
            $cartes_cadeaux = $action['cadeau']['carte'];

            $cadeaux_restant = array();
            if($cartes_cadeaux != null ) {
                if ($carte_cadeau_choisie == $cartes_cadeaux[0]) {
                    unset($action['cadeau']['carte'][0]);
                } else {
                    $cadeaux_restant [] = intval($cartes_cadeaux[0]);
                    unset($action['cadeau']['carte'][0]);
                }
                if ($carte_cadeau_choisie == $cartes_cadeaux[1]) {
                    unset($action['cadeau']['carte'][1]);
                } else {
                    $cadeaux_restant [] = intval($cartes_cadeaux[1]);
                    unset($action['cadeau']['carte'][1]);
                }
                if ($carte_cadeau_choisie == $cartes_cadeaux[2]) {
                    unset($action['cadeau']['carte'][2]);
                } else {
                    $cadeaux_restant [] = intval($cartes_cadeaux[2]);//modif
                    unset($action['cadeau']['carte'][2]);
                }

                //Attribution des objectifs des cadeaux restants à l'adversaire
                $id = $cadeaux_restant[0];
                $carte = $this->getDoctrine()->getRepository(Objet::class)->find($id);
                $objectif = $carte->getObjectif();
                $objectif= $objectif->getId();
                $objectif = strval($objectif);
                $valeur_debut = $attribution[$objectif][$autre_joueur];
                $valeur =$valeur_debut + 1;
                $attribution[$objectif][$autre_joueur] = $valeur;
                $partie->setObjectifAttribution(json_encode($attribution));
                $em = $this->getDoctrine()->getManager();
                $em->persist($partie);
                $em->flush();

                $id = $cadeaux_restant[1];
                $carte = $this->getDoctrine()->getRepository(Objet::class)->find($id);
                $objectif = $carte->getObjectif();
                $objectif= $objectif->getId();
                $objectif = strval($objectif);
                $valeur_debut = $attribution[$objectif][$autre_joueur];
                $valeur =$valeur_debut + 1;
                $attribution[$objectif][$autre_joueur] = $valeur;
                $partie->setObjectifAttribution(json_encode($attribution));
                $em = $this->getDoctrine()->getManager();
                $em->persist($partie);
                $em->flush();

                //Enregistrer les changements d'action adverse liés à la carte cadeau choisie
                if($joueur == 'j1'){
                    $partie->setActionJ2(json_encode($action));
                }else{
                    $partie->setActionJ1(json_encode($action));
                }
                $em = $this->getDoctrine()->getManager();
                $em->persist($partie);
                $em->flush();
                return $this->redirectToRoute('afficher_partie', ['id' => $partie->getId(), 'partie'=>$partie]);

            }
        }

        //Récupération des paires concurrence choisies et les enregistrer
        $paire1 = $request->request->get('paire1_concurrences');
        $paire2 = $request->request->get('paire2_concurrences');
        if(isset($paire1) && isset($paire2)){
            $tab = array_merge($paire1,$paire2);
        }
        $paires = ['p1'=>$paire1, 'p2'=>$paire2];

        if($paires['p1'] != null && count($paire1) == 2 && count($paire2) == 2 && $tab[0]!=$tab[3] &&  $tab[0]!=$tab[2] && $tab[1]!=$tab[2]){
            $Main= array();
            if($joueur=='j1'){
                $action = $partie->getActionJ1();
                $action = json_decode(json_encode($action),true);
                $action['concurrence']['carte'] = $paires;
                $action['concurrence']['etat']=1;
                $partie->setActionJ1(json_encode($action));
                $main = $partie->getMainJ1();
                foreach($main as $key=>$value){
                    if($value == intval($paires['p1'][0])){
                        unset($main[$key]);
                    }elseif($value == intval($paires['p1'][1])){
                        unset($main[$key]);
                    }elseif($value == intval($paires['p2'][0])){
                        unset($main[$key]);
                    }elseif($value == intval($paires['p2'][1])){
                        unset($main[$key]);
                    }else{
                        $Main[]= $value;
                    }
                }
                $partie->setMainJ1(json_encode($Main));
            }else{
                $action = $partie->getActionJ2();
                $action = json_decode(json_encode($action),true);
                $action['concurrence']['carte'] = $paires;
                $action['concurrence']['etat']=1;
                $partie->setActionJ2(json_encode($action));
                $main = $partie->getMainJ2();
                foreach($main as $key=>$value){
                    if($value == intval($paires['p1'][0])){
                        unset($main[$key]);
                    }elseif($value == intval($paires['p1'][1])){
                        unset($main[$key]);
                    }elseif($value == intval($paires['p2'][0])){
                        unset($main[$key]);
                    }elseif($value == intval($paires['p2'][1])){
                        unset($main[$key]);
                    }else{
                        $Main[]= $value;
                    }
                }
                $partie->setMainJ2(json_encode($Main));
            }
            $em = $this->getDoctrine()->getManager();
            $em->persist($partie);
            $em->flush();

            //changer tour + piocher carte
            $tour = $partie->getTour();
            $pioche = $partie->getPioche();
            $carte_piochee = array_pop($pioche);
            if($tour=='j1'){
                $main = $partie->getMainJ2();
                if($carte_piochee != null){
                    $main[] = $carte_piochee;
                }
                $partie->setTour('j2');
                $partie->setPioche(json_encode($pioche));
                $partie->setMainJ2(json_encode($main));
            }else{
                $main = $partie->getMainJ1();
                if($carte_piochee != null){
                    $main[] = $carte_piochee;
                }
                $partie->setTour('j1');
                $partie->setPioche(json_encode($pioche));
                $partie->setMainJ1(json_encode($main));
            }
            $em = $this->getDoctrine()->getManager();
            $em->persist($partie);
            $em->flush();

            return $this->redirectToRoute('afficher_partie', ['id' => $partie->getId(), 'partie'=>$partie]);
        }

        //Recupération de la paire choisie et attribuer les objectifs uniquement pour cette paire
        $paire_choisie = $request->request->get('choix_paire');
        if($paire_choisie != null){

            //recup action adverse pour attribuer et supprimer les paires
            if($joueur == 'j1'){
                $action = $partie->getActionJ2();
            }else{
                $action = $partie->getActionJ1();
            }
            $action = json_decode(json_encode($action),true);
            $paire = array();
            $paire_adverse = array();

            if($paire_choisie =='p1' && $action['concurrence']['carte'] != null){
                $paire[]= $action['concurrence']['carte']['p1'];
                $paire_adverse[] = $action['concurrence']['carte']['p2'];
            }elseif($paire_choisie =='p2' && $action['concurrence']['carte'] != null){
                $paire[]= $action['concurrence']['carte']['p2'];
                $paire_adverse[] = $action['concurrence']['carte']['p1'];
            }

            if($paire != null && $paire_adverse !=null){
                $attribution = $partie->getObjectifAttribution();
                $attribution = json_decode(json_encode($attribution),true);

                $id = $paire[0][0];
                $id = strval($id);
                $carte = $this->getDoctrine()->getRepository(Objet::class)->find($id);
                $objectif = $carte->getObjectif();
                $objectif= $objectif->getId();
                $objectif = strval($objectif);
                $valeur_debut = $attribution[$objectif][$joueur];
                $valeur =$valeur_debut + 1;
                $attribution[$objectif][$joueur] = $valeur;
                $partie->setObjectifAttribution(json_encode($attribution));
                $em = $this->getDoctrine()->getManager();
                $em->persist($partie);
                $em->flush();

                $id = $paire[0][1];
                $id = strval($id);
                $carte = $this->getDoctrine()->getRepository(Objet::class)->find($id);
                $objectif = $carte->getObjectif();
                $objectif= $objectif->getId();
                $objectif = strval($objectif);
                $valeur_debut = $attribution[$objectif][$joueur];
                $valeur =$valeur_debut + 1;
                $attribution[$objectif][$joueur] = $valeur;
                $partie->setObjectifAttribution(json_encode($attribution));
                $em = $this->getDoctrine()->getManager();
                $em->persist($partie);
                $em->flush();

                $id = $paire_adverse[0][0];
                $id = strval($id);
                $carte = $this->getDoctrine()->getRepository(Objet::class)->find($id);
                $objectif = $carte->getObjectif();
                $objectif= $objectif->getId();
                $objectif = strval($objectif);
                $valeur_debut = $attribution[$objectif][$autre_joueur];
                $valeur = $valeur_debut + 1;
                $attribution[$objectif][$autre_joueur] = $valeur;
                $partie->setObjectifAttribution(json_encode($attribution));
                $em = $this->getDoctrine()->getManager();
                $em->persist($partie);
                $em->flush();

                $id = $paire_adverse[0][1];
                $id = strval($id);
                $carte = $this->getDoctrine()->getRepository(Objet::class)->find($id);
                $objectif = $carte->getObjectif();
                $objectif= $objectif->getId();
                $objectif = strval($objectif);
                $valeur_debut = $attribution[$objectif][$autre_joueur];
                $valeur =$valeur_debut + 1;
                $attribution[$objectif][$autre_joueur] = $valeur;
                $partie->setObjectifAttribution(json_encode($attribution));
                $em = $this->getDoctrine()->getManager();
                $em->persist($partie);
                $em->flush();

                unset($action['concurrence']['carte']['p1']);
                unset($action['concurrence']['carte']['p2']);

                if($joueur == 'j1'){
                    $partie->setActionJ2(json_encode($action));
                }else{
                    $partie->setActionJ1(json_encode($action));
                }
                $em = $this->getDoctrine()->getManager();
                $em->persist($partie);
                $em->flush();
            }

            return $this->redirectToRoute('afficher_partie', ['id' => $partie->getId(), 'partie'=>$partie]);
        }

        //Vérifier l'état de toutes les actions
        $main1 = $partie->getMainJ1();
        $main2 = $partie->getMainJ2();

        $action1 = $partie->getActionJ1();
        $action2 = $partie->getActionJ2();
        $action1 = json_decode(json_encode($action1),true);
        $action2 = json_decode(json_encode($action2),true);

        if( $main1 == null && $main2 == null && $partie->getVainqueur() == "aucun" && $action1['cadeau']['carte'] == null && $action2['cadeau']['carte']== null && $action1['concurrence']['carte'] == null && $action2['concurrence']['carte'] == null){

            $attribu = $partie->getObjectifAttribution();
            $attribu = json_decode(json_encode($attribu),true);


                //attribuer les cartes dissimulées
                $cartej1 = $action1['dissimulation']['carte'];
                $cartej2 = $action2['dissimulation']['carte'];

                $carte = $this->getDoctrine()->getRepository(Objet::class)->find($cartej1);
                $objectif = $carte->getObjectif();
                $objectif= $objectif->getId();
                $objectif = strval($objectif);
                $valeur_debut = $attribu[$objectif]['j1'];
                $valeur =$valeur_debut + 1;
                $attribu[$objectif]['j1'] = $valeur;

                $carte = $this->getDoctrine()->getRepository(Objet::class)->find($cartej2);
                $objectif = $carte->getObjectif();
                $objectif= $objectif->getId();
                $objectif = strval($objectif);
                $valeur_debut = $attribu[$objectif]['j2'];
                $valeur =$valeur_debut + 1;
                $attribu[$objectif]['j2'] = $valeur;

                $partie->setObjectifAttribution(json_encode($attribu));
                $em = $this->getDoctrine()->getManager();
                $em->persist($partie);
                $em->flush();


            //Attribuer les scores
            $attribu = $partie->getObjectifAttribution();
            $attribu = json_decode(json_encode($attribu),true);
            $scorej1 = 0;
            $scorej2 = 0;

            for($i=1;$i<8;$i++){
                $objectif = $this->getDoctrine()->getRepository(Objectif::class)->find($i);
                $valeur = $objectif->getValeur();
                $i= strval($i);
                if($attribu[$i]['j1'] > $attribu[$i]['j2']){
                    $scorej1 = $scorej1 + $valeur;
                    $attribu[$i]['jeton'] = 1;
                }elseif($attribu[$i]['j1'] < $attribu[$i]['j2']){
                    $scorej2 = $scorej2 + $valeur;
                    $attribu[$i]['jeton'] = 2;
                }elseif($attribu[$i]['j1'] == $attribu[$i]['j2']){
                    if($attribu[$i]['jeton'] == 1){
                        $scorej1 = $scorej1 + $valeur;
                    }elseif($attribu[$i]['jeton'] == 2){
                        $scorej2 = $scorej2 + $valeur;
                    }
                }
            }

            $partie->setScoreJ1($scorej1);
            $partie->setScoreJ2($scorej2);
            $partie->setObjectifAttribution(json_encode($attribu));

            $em = $this->getDoctrine()->getManager();
            $em->persist($partie);
            $em->flush();

            $j1 = $partie->getJ1();
            $j2 = $partie->getJ2();

            //Vérifier les scores et déterminer s'il y a un vainqueur
            if($scorej1 >= 11 && $scorej2 < 11){

                $nom = $j1->getUsername();
                $message = $nom.' gagne la partie';
                $partie->setVainqueur('j1');

                $nb_victoire = $j1->getVictoire();
                $nb_victoire = $nb_victoire + 1;
                $j1->setVictoire($nb_victoire);

                $nb_defaite = $j2->getDefaite();
                $nb_defaite = $nb_defaite + 1;
                $j2->setDefaite($nb_defaite);

                $em->persist($j1);
                $em->persist($j2);

                $score = ['j1'=>$partie->getScoreJ1(),'j2'=>$partie->getScoreJ2()];


            }elseif($scorej2 >= 11 && $scorej1 < 11){

                $nom = $j2->getUsername();
                $message = $nom.' gagne la partie';
                $partie->setVainqueur('j2');

                $nb_victoire = $j2->getVictoire();
                $nb_victoire = $nb_victoire + 1;
                $j2->setVictoire($nb_victoire);

                $nb_defaite = $j1->getDefaite();
                $nb_defaite = $nb_defaite + 1;
                $j1->setDefaite($nb_defaite);

                $em->persist($j1);
                $em->persist($j2);

                $score = ['j1'=>$partie->getScoreJ1(),'j2'=>$partie->getScoreJ2()];


            }elseif($scorej1 < 11 && $scorej2 < 11){

                //Compter les objectifs de chaque joueur
                $objectifs = $this->getDoctrine()->getRepository(Objectif::class)->findAll();
                $nb_objectif_j1 = 0;
                $nb_objectif_j2 = 0;

                foreach($objectifs as $carte){
                    $id_string= strval($carte->getId());
                    $j1 = $attribu[$id_string]['j1'];
                    $j2 = $attribu[$id_string]['j2'];
                    if($j1>$j2){
                        $nb_objectif_j1 = $nb_objectif_j1+1;
                    }elseif($j1<$j2){
                        $nb_objectif_j2 = $nb_objectif_j2+1;
                    }
                }
                
                $j1 = $partie->getJ1();
                $j2 = $partie->getJ2();

                //Vérifier si un joueur à 4 objectifs ou plus
                if($nb_objectif_j1 >= 4){

                    $nom = $j1->getUsername();
                    $message = $nom.' gagne la partie';
                    $partie->setVainqueur('j1');

                    $nb_victoire = $j1->getVictoire();
                    $nb_victoire = $nb_victoire + 1;
                    $j1->setVictoire($nb_victoire);

                    $nb_defaite = $j2->getDefaite();
                    $nb_defaite = $nb_defaite + 1;
                    $j2->setDefaite($nb_defaite);

                    $em->persist($j1);
                    $em->persist($j2);

                    $score = ['j1'=>$partie->getScoreJ1(),'j2'=>$partie->getScoreJ2()];


                }elseif($nb_objectif_j2 >= 4){

                    $nom = $j2->getUsername();
                    $message = $nom.' gagne la partie';
                    $partie->setVainqueur('j2');

                    $nb_victoire = $j2->getVictoire();
                    $nb_victoire = $nb_victoire + 1;
                    $j2->setVictoire($nb_victoire);

                    $nb_defaite = $j1->getDefaite();
                    $nb_defaite = $nb_defaite + 1;
                    $j1->setDefaite($nb_defaite);

                    $em->persist($j1);
                    $em->persist($j2);

                    $score = ['j1'=>$partie->getScoreJ1(),'j2'=>$partie->getScoreJ2()];

                }else{
                    $message = 'Aucun vainqueur';
                    $partie->setVainqueur('manche_suivante');
                    $score = ['j1'=>$partie->getScoreJ1(),'j2'=>$partie->getScoreJ2()];

                }

            }

            $em = $this->getDoctrine()->getManager();
            $em->persist($partie);
            $em->flush();


        }else{
            $j1 = $partie->getJ1();
            $j2 = $partie->getJ2();
            if($partie->getVainqueur()=='j1'){
                $nom = $j1->getUsername();
                $message = $nom.' gagne la partie';
                $score = ['j1'=>$partie->getScoreJ1(),'j2'=>$partie->getScoreJ2()];
            }elseif($partie->getVainqueur()=='j2'){
                $nom = $j2->getUsername();
                $message = $nom.' gagne la partie';
                $score = ['j1'=>$partie->getScoreJ1(),'j2'=>$partie->getScoreJ2()];
            }elseif($partie->getVainqueur() == 'manche_suivante'){
                $message ="Aucun vainqueur";
                $score = ['j1'=>$partie->getScoreJ1(),'j2'=>$partie->getScoreJ2()];
            }else{
                $message="";
                $score="";
            }
        }

        //Valider la fin de la partie
        $valid_fin = $request->request->get('valid_fin');
        if($valid_fin != null){
            $em = $this->getDoctrine()->getManager();

            $j1->setpartieCours(0);
            $j2->setPartieCours(0);

            $em->persist($j1);
            $em->persist($j2);
            $em->persist($partie);
            $em->flush();

            return $this->redirectToRoute('player');
        }


        //Passer à la manche suivante
        $manche_suivante = $request->request->get('manche_suivante');
        if($manche_suivante != null){

            //incrémenter la manche
            $manche = $partie->getManche();
            $manche = $manche+1;
            $partie->setManche($manche);

            //resset la pioche et la main
            $cartes = $this->getDoctrine()->getRepository(Objet::class)->findAll();
            $tCartes = array();
            foreach ($cartes as $carte) {
                $tCartes[] = $carte->getId();
            }
            shuffle($tCartes);

            $carte_ecartee = array_pop($tCartes);

            $tMainJ1 = array();
            for($i=0; $i<7; $i++) {
                $tMainJ1[] = array_pop($tCartes);
            }
            $tMainJ2 = array();
            for($i=0; $i<6; $i++) {
                $tMainJ2[] = array_pop($tCartes);
            }

            $tPioche = $tCartes;

            //resset attribution et garder les jetons
            $attribu = $partie->getObjectifAttribution();
            $attribu = json_decode(json_encode($attribu),true);
            foreach($attribu as $key=>$value){
                foreach($value as $key2=>$value2){
                    if($key2 =='j1' || $key2 =='j2' ){
                        $attribu[$key][$key2] = 0;
                    }
                }
            }

            //resset les actions
            $dissimulation = array('etat'=>0, 'carte'=>0);
            $disparition = array('etat'=>0, 'carte'=>array());
            $cadeau = array('etat'=>0, 'carte'=>array());
            $concurrence = array('etat'=>0, 'carte'=>array());
            $tAction = array("dissimulation"=>$dissimulation, "disparition"=>$disparition, "cadeau"=>$cadeau, "concurrence"=>$concurrence);

            $partie->setCarteEcartee(json_encode($carte_ecartee));
            $partie->setMainJ1(json_encode($tMainJ1));
            $partie->setMainJ2(json_encode($tMainJ2));
            $partie->setPioche(json_encode($tPioche));
            $partie->setTour('j1');
            $partie->setActionJ1(json_encode($tAction));
            $partie->setActionJ2(json_encode($tAction));
            $partie->setScoreJ1(0);
            $partie->setScoreJ2(0);
            $partie->setObjectifAttribution(json_encode($attribu));
            $partie->setVainqueur('aucun');

            //Sauvegarde mon objet Partie dans la base de données et redirection vers l'affichage
            $em = $this->getDoctrine()->getManager();
            $em->persist($partie);
            $em->flush();

            return $this->redirectToRoute('afficher_partie', ['id' => $partie->getId(), 'partie'=>$partie]);

        }

        //affiche le plateau
        return $this->render('jeu/afficher.html.twig',
            [
                'partie' => $partie,
                'main'=> $cartes_main,
                'objectifs' => $tObjectifs,
                'action_dispo'=> $tActionDispo,
                'action_dispo_adverse'=>$tActionDispoAdverse,
                'action_choisie'=>$action_selectionnee,
                'carte_dissimulee'=>$carte_dissimulee,
                'cartes_disparues'=>$tcarte_disparue,
                'choix_cadeau'=>$tchoix,
                'joueur'=>$joueur,
                'choix_paire'=>$choix_paire,
                'message_fin'=>$message,
                'score'=>$score,
                'j1'=>$j1,
                'j2'=>$j2
            ]
        );

    }

    /**
     * @Route("get_infos/{id}", name="get_infos")
     */
    public function get_infos(Partie $partie) {

        $j1 = $partie->getJ1();
        $j2 = $partie->getJ2();

        $j1_id = $j1->getId();
        $j2_id = $j2->getId();

        $tour = $partie->getTour();

        if($tour  == 'j1'){
            $tour_id = $j1_id;
            return new  JsonResponse($tour_id);

        }else{
            $tour_id = $j2_id;
            return new  JsonResponse($tour_id);
        }

    }

    /**
     * @Route("get_vainqueur/{id}", name="get_vainqueur")
     */
    public function get_vainqueur(Partie $partie) {

        $vainqueur = $partie->getVainqueur();

        if($vainqueur  == 'aucun'){
            return new  JsonResponse(false);

        }else{
            return new  JsonResponse(true);
        }

    }






}
