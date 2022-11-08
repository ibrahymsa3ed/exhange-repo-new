<?php

namespace App\DataFixtures;

use App\Entity\Alert;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AlertFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $alert = new Alert();
        $alert->setCur1('United States dollar');
        $alert->setFunc('>');
        $alert->setCur2('Egyptian pound');
        $alert->setResult(22);
        $manager->persist($alert);
        $manager->flush();
    }
}
