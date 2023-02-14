<?php

namespace App\Controller;

use App\Entity\Event;
use App\Entity\User;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TwigController extends AbstractController
{
     #[Route('/listUser/{page?}', name: 'app_panel')]
    public function index(?int $page, EntityManagerInterface $entityManager, SessionInterface $session): Response
    {
        $panel = $entityManager->getRepository(User::class);
        return $this->render('AdminPanel.html.twig', [
            'data' => $panel->findAll(),
            'page' => $this->getLastPage($page, $session)
        ]);
    }
 
    #[Route('/listEvent/{page?}', name: 'app_events')]
    public function listEvents(?int $page, EntityManagerInterface $entityManager, SessionInterface $session): Response
    {
        $event = $entityManager->getRepository(Event::class);
        return $this->render('AdminEvents.html.twig', [
            'data' => $event->findAll(),
            "page" => $this->getLastPage($page, $session)
        ]);
    }

<<<<<<< HEAD
  private function getLastPage($page, $session): int
  {
    if ($page != null) {
      $session->set("page",$page);
      return $page;
    } elseif (!$session->has("page") || !is_numeric($session->get("page"))) {
      $session->set("page",1);
      return 1;
    }
    return $session->get("page");
  }
=======
            
 private function getLastPage($page, $session): int
{
  if ($page != null) {
    $session->set("page",$page);
    return $page;
  } elseif (!$session->has("page") || !is_numeric($session->get("page"))) {
    $session->set("page",1);
    return 1;
  }
  return $session->get("page");
} 
>>>>>>> 96f573bbec8734dc795d31f9d3b7300bf9ece018
}

