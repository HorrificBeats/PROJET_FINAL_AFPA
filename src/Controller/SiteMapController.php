<?php
// https://nouvelle-techno.fr/actualites/live-coding-creer-un-fichier-sitemap-xml-avec-symfony-4
// Video Tuto daca n-am chef sa termin
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class SiteMapController extends AbstractController
{
    /**
     * @Route("/sitemap.xml", name="sitemap", defaults={"_format" = "xml"})
     */
    public function index(Request $request)
    {
        $hostname = $request->getSchemeAndHttpHost(); //eg "http://127.0.0.1:8000"

        //dd($hostname);
        $urls = []; // ou array()
        
        //On ajoute les URLs "statiques"
        //(Les crochets vides permets d'ajouter des donnes a la fin du tableau)
        $urls[] = ['loc' => $this->generateUrl('home')];
        dd($urls);

        return $this->render('site_map/index.html.twig', [
            'controller_name' => 'SiteMapController',
        ]);
    }
}
