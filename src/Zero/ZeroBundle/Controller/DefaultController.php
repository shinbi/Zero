<?php

namespace Zero\ZeroBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ZeroZeroBundle:Default:index.html.twig');
    }

    public function charactersAction()
    {
        $personnages = $this->getDoctrine()
            ->getRepository('ZeroZeroBundle:Personnage')

            ->findAll();

        return $this->render('ZeroZeroBundle:Default:characters.html.twig', array(
            'personnages' => $personnages,
        ));

    }

    public function booksAction()
    {
        $books = $this->getDoctrine()
            ->getRepository('ZeroZeroBundle:Roman')

            ->findAll();

        return $this->render('ZeroZeroBundle:Default:books.html.twig', array(
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

        return $this->render('ZeroZeroBundle:Default:viewCharacter.html.twig', array(
            'personnage' => $personnage,
        ));
    }

}
