<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\ModuleIot;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // Création de trois modules IoT de test
        for ($i = 1; $i <= 3; $i++) {
            $module = new ModuleIot();
            $module->setModuleName("Module $i");
            $module->setDescription("Description du module $i");
            $module->setCreatedAt(new \DateTimeImmutable());
            $module->setStatus(true);

            $manager->persist($module);
        }

        $manager->flush();
    }
}
