<?php

namespace App\Controller;

use App\Entity\Product;
use App\Repository\ProductRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    /**
     * @Route("/",name="homepage")
     *
     * @return void
     */
    public function homepage(ProductRepository $productRepository)
    {
        $products = $productRepository->findBy([], [], 3);


        // $productRepository = $em->getRepository(Product::class);
        // $product = $productRepository->find(3);
        // $em->remove($product);
        // $em->flush();        // $product = new Product();
        // $product->setName('Table en metale')
        //     ->setPrice(3000);
        // $em->persist($product);
        // $em->flush();

        return $this->render('home.html.twig', [
            'products' => $products
        ]);
    }
}
