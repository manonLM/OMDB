<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Task;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class FilmsController extends AbstractController
{
    /**
     * @Route("/", name="Home")
     */
    public function home()
    {
        $apiKey = 'f97e824d';

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'http://www.omdbapi.com/?s=jones&apikey=' . $apiKey);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $resultat_curl = curl_exec($ch);

        $json = json_decode($resultat_curl);

        return $this->render('films/index.html.twig',
            array(
                'movies' => $json->Search)
        );
    }


    /**
     * @Route("/contact", name="Contact")
     */
    public function contact()
    {
        return $this->render('films/contact.html.twig');
    }


    /**
     * @Route("/films/{query}",
     * name="FilmsParametres"
     * )
     */
    public function affichageFilmsAvecParametres($query)
    {
        $apiKey = 'f97e824d';

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'http://www.omdbapi.com/?i=' . $query . '&apikey=' . $apiKey);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $resultat_curl = curl_exec($ch);

        $json = json_decode($resultat_curl);


        return $this->render('films/film.html.twig',
            array(
                'data' => $json,
            ));

    }

    /**
     * @Route("/recherche",
     * name="Recherchedefilm"
     * )
     */
    public function recherchedefilm( request $request)
    {
        $apiKey = 'f97e824d';

        if( $request->request->get('query')){
            $query = $request->request->get('query');
        } else {
            $query=" 0";
        }

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'http://www.omdbapi.com/?s='.$query.'&apikey=' . $apiKey);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $resultat_curl = curl_exec($ch);


        $json = json_decode($resultat_curl);



        if (($json->Response) == "False" || ($json->Response == null)){

            return $this->render('films/nothing.html.twig');
        }
        else {
            return $this->render('films/index.html.twig',
                array(
                    'movies' => $json->Search)
            );

        }
    }
}


