<?php

namespace App\DataFixtures;

use App\Entity\Livre;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // create 20 livres! Bim-Bam-Boum!
        for ($i = 0; $i < 20; $i++) {
            $livre = new Livre();
            $livre->setTitre('Livre ' . $i);
            $livre->setResume('Resume'. $i);
            $livre->setCouverture('Couverture'. $i);

            $manager->persist($livre);
        }

        $manager->flush();
    }
}
