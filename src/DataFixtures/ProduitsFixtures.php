<?php

namespace App\DataFixtures;

use App\Entity\Produit;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ProduitsFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
        $rhumAgricole = new Produit;
        $rhumAgricole->setImage('rhumAgricole.jpg');
        $rhumAgricole->setNom('Rhume Agricole 50°');
        $rhumAgricole->setPrix(25);
        $rhumAgricole->setStock('200');

        $manager->persist($rhumAgricole);

        $rhumAmbre = new Produit;
        $rhumAmbre->setImage('rhumAmbre.jpg');
        $rhumAmbre->setNom('Rhume Ambre 45°');
        $rhumAmbre->setPrix(45);
        $rhumAmbre->setStock('125');

        $manager->persist($rhumAmbre);

        $sucreLiquide = new Produit;
        $sucreLiquide->setImage('sucreLiquide.jpg');
        $sucreLiquide->setNom('Sucre de canne liquide');
        $sucreLiquide->setPrix(10);
        $sucreLiquide->setStock('400');

        $manager->persist($sucreLiquide);

        $sucreRaffine = new Produit;
        $sucreRaffine->setImage('sucreRaffine.jpeg');
        $sucreRaffine->setNom('Sucre de canne raffiné');
        $sucreRaffine->setPrix(15);
        $sucreRaffine->setStock('300');

        $manager->persist($sucreRaffine);

        
        $manager->flush();
    }
}
