<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class FilmsController extends AbstractController
{
    /**
     * @Route("/query", name="Query")
     */
    public function query()
    {
        $apiKey = 'f97e824d';

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'http://www.omdbapi.com/?s=jones&apikey=' . $apiKey);
        curl_setopt($ch,  CURLOPT_RETURNTRANSFER, true);

        $resultat_curl = curl_exec($ch);

        $json = json_decode($resultat_curl);

        return $this->render('films/index.html.twig', 
            array(
                'movies' =>  $json->Search )
            );
    }

    /**
     * @Route("/films_parametres/{query}",
     * name="FilmsParametres"
     * )
     */
    public function affichageFilmsAvecParametres( $query ) 
    {
        $apiKey = 'f97e824d';

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'http://www.omdbapi.com/?s='. $query .'&apikey=' . $apiKey);
        curl_setopt($ch,  CURLOPT_RETURNTRANSFER, true);

        $resultat_curl = curl_exec($ch);

        $json = json_decode($resultat_curl);

        return $this->render('films/index.html.twig', 
            array(
                'movies' =>  $json->Search )
            );
    }
}
