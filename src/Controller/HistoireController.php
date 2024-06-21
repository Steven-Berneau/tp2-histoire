<?php

namespace App\Controller;

use App\Repository\HistoireRepository;
use App\Repository\PageRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HistoireController extends AbstractController
{
    #[Route('/histoire/{idHistoire}', name: 'app_histoire_p1')]
    public function page1($idHistoire, HistoireRepository $histoireRepository): Response
    {
        $histoire = $histoireRepository->find($idHistoire);
        return $this->render('pages/page-01.html.twig', ['histoire' => $histoire]);
    }

    #[Route('/histoire/{idHistoire}/page/{numPage}', name: 'app_histoire_page')]
    public function showPage($idHistoire, $numPage, HistoireRepository $histoireRepository, PageRepository $pageRepository): Response
    {
        // tests de garde//
        // !is-numeric = Quand le paramètre donné n'est pas un nombre ET is-numeric = Quand le paramètre donné est un nombre. && = Ou. || = Et.
        // if ((!is_numeric($id)) || ($id < 2) || ($id > 14))
        //     throw $this->createNotFoundException("Cette page n'existe pas");

        $histoire = $histoireRepository->find($idHistoire);
        $page = $pageRepository->findOneBy(array('histoire' => $histoire, 'numPage' => $numPage));
        if ($page == NULL)
            throw $this->createNotFoundException("Cette page n'existe pas");
        if ($numPage == $histoire->getPages()->count()) {
            $this->addFlash('notice', 'Cette histoire a une faim');
            return $this->redirect('/histoire/fin/' . $histoire->getId());
        }
        return $this->render('pages/page-base.html.twig', ['page' => $page]);
    }
    #[Route('/histoire/fin/{idHistoire}', name: 'app_histoire_fin')]
    public function showEndingPage($idHistoire, HistoireRepository $histoireRepository): Response
    {
        $histoire = $histoireRepository->find($idHistoire);
        $premierePage = $histoire->getPages()[0];

        return $this->render('last-page/last-page.html.twig', ['histoire' => $histoire, 'premierePage' => $premierePage]);
    }

    #[Route('/', name: 'app_home')]
    public function home(HistoireRepository $histoireRepository): Response
    {
        $histoires = $histoireRepository->findAll();
        return $this->render('pages/home.html.twig', ['histoires' => $histoires]);
    }
}
