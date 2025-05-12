<?php

namespace App\DataFixtures;

use App\Entity\Livre;
use App\Entity\Auteur;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $listAuthor = [];
        //create 20 auteurs
        for ($i = 0; $i < 10; $i++) {
            $auteur = new Auteur();
            $auteur->setNom('Nom ' . $i);
            $auteur->setPrenom('Prenom'. $i);

            $manager->persist($auteur);
            // on ajoute l'auteur dans le tableau
            $listAuthor[] = $auteur;
        }

        // create 20 livres! Bim-Bam-Boum!
        for ($i = 0; $i < 20; $i++) {
            $livre = new Livre();
            $livre->setTitre('Livre ' . $i);
            $livre->setResume('Resume'. $i);
            $livre->setCouverture('Couverture'. $i);
            // fait un auteur au hasard
            $livre->setAuteur($listAuthor[array_rand($listAuthor)]); 

            $manager->persist($livre);
        }

        $manager->flush();
    }
}
