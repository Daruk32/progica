<?php

namespace App\DataFixtures;

use App\Entity\Gite;
use App\Entity\Equipement;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class GiteFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        
        for($i=0; $i < 20 ; $i++)
        {
            $gite = new Gite();
            $gite
                ->setNom('Gite' . $i)
                ->setDescription('Gite numéro' . $i)
                ->setSurface(random_int(50,200))
                ->setChambre(random_int(1,100))
                ->setCouchage(random_int(3,15));

            $manager->persist($gite);
        }

        // $equip1 = new Equipement();
        // $equip1->setName('lave-linge');
        // $manager->persist($equip1);

        // $equip2 = new Equipement();
        // $equip2->setName('lave-vaisselle');
        // $manager->persist($equip2);

        // $equip3 = new Equipement();
        // $equip3->setName('climatisation');
        // $manager->persist($equip3);

        // $equip4 = new Equipement();
        // $equip4->setName('lave-linge');
        // $manager->persist($equip4);

        $manager->flush();
    }
}
