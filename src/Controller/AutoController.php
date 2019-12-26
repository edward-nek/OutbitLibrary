<?php

namespace App\Controller;

use App\Entity\Auto;
use App\Form\AutoType;

use phpDocumentor\Reflection\Types\String_;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\File;

class AutoController extends AbstractController
{

    /**
     * @Route("/auto", name="auto")
     */
    public function index()
    {
        $em = $this->getDoctrine()->getManager();
        $autos = $em->getRepository(Auto::class)->findBy([], ['id' => 'DESC']);
        return $this->render('auto/index.html.twig', [
            'autos' => $autos,
            'controller_name' => 'AutoController',
        ]);
    }

    /**
     * @Route("/auto/{auto}", name="single_auto", requirements={"auto"="\d+"})
     */
    public function single(Auto $auto)
    {

        $em = $this->getDoctrine()->getManager();
        return $this->render('auto/single.html.twig', [
            'auto' => $auto
        ]);
    }
    /**
     * @Route("/auto/create", name="create_auto")
     */
    public function create(Request $request)
    {
        $auto = new Auto();
        $form = $this->createForm(AutoType::class, $auto);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $auto = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($auto);
            $em->flush();

            $file = $auto->getImage();
                $filename = 'image' . $auto->getId() . '.jpg';
                $file->move(
                    $this->getParameter('image_directory'),
                    $filename
                );
                $auto->setImage($filename);
                $em->flush();

            return $this->redirectToRoute('auto');
        }
        return $this->render('auto/form.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/auto/update/{auto}", name="update_auto", requirements={"auto"="\d+"})
     */
    public function update(Request $request, Auto $auto)
    {
        $auto->setImage(
            new File($this->getParameter('image_directory').'/'.$auto->getImage())
        );

        $form = $this->createForm(AutoType::class, $auto, [
            'action' => $this->generateUrl('update_auto', [
                'auto' => $auto->getId()
            ]),
            'method' => 'POST',
        ]);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $auto = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->flush();

            $file = $auto->getImage();

                $filename = 'image' . $auto->getId() . '.jpg';

                $file->move(
                    $this->getParameter('image_directory'),
                    $filename
                );
                $auto->setImage($filename);
                $em->flush();

            return $this->redirectToRoute('auto');
        }
        return $this->render('auto/form.html.twig', [
            'form' => $form->createView()
        ]);
    }
    /**
     * @Route("/auto/delete/{auto}", name="auto_delete", requirements={"auto"="\d+"})
     */
    public function delete(Auto $auto)
    {
        $filename = 'image'.$auto->getId().'.jpg';
        unlink('uploads/image/' .$filename);

        $em = $this->getDoctrine()->getManager();
        $em->remove($auto);
        $em->flush();

        return $this->redirectToRoute('auto');
    }


}
