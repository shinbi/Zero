<?php

namespace Zero\ZeroBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SiteController extends Controller
{
    public function indexAction()
    {
        return $this->render('ZeroZeroBundle:Site:index.html.twig');
    }

    public function charactersAction()
    {
        $personnages = $this->getDoctrine()
            ->getRepository('ZeroZeroBundle:Personnage')

            ->findAll();

        return $this->render('ZeroZeroBundle:Site:characters.html.twig', array(
            'personnages' => $personnages,
        ));

    }

    public function booksAction()
    {
        $books = $this->getDoctrine()
            ->getRepository('ZeroZeroBundle:Roman')

            ->findAll();

        return $this->render('ZeroZeroBundle:Site:books.html.twig', array(
            'books' => $books,
        ));
    }


    public function showCharacterAction($id)
    {
        $personnage = $this->getDoctrine()
            ->getRepository('ZeroZeroBundle:Personnage')

            ->find($id);

        if (!$personnage) {
            throw $this->createNotFoundException(
                'Aucun produit trouvé pour cet id : '.$id
            );
        }

        return $this->render('ZeroZeroBundle:Site:viewCharacter.html.twig', array(
            'personnage' => $personnage,
        ));
    }

}
