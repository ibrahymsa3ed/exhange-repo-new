<?php

namespace App\DataFixtures;

use App\Entity\Xe;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class XeFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
       $xe = new Xe();
       $xe->setCurrency('United States dollar');
       $xe->setAmount(1000);
       $manager->persist($xe);

        $xe2 = new Xe();
        $xe2->setCurrency('eur');
        $xe2->setAmount(500);
        $manager->persist($xe2);

        $xe3 = new Xe();
        $xe3->setCurrency('United States dollar');
        $xe3->setAmount(700);
        $manager->persist($xe3);

        $xe4 = new Xe();
        $xe4->setCurrency('United States dollar');
        $xe4->setAmount(700);
        $manager->persist($xe4);

        $manager->flush();
    }
}
