<?php

namespace App\DataFixtures;

use App\Entity\Eleve;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class EleveFixtures extends Fixture
{
    private $faker;
    public function load(ObjectManager $manager): void
    {
        for ($i = 0; $i < 350; $i++) {
            $this->faker=Factory::create("fr_FR");
            $eleve = new Eleve();
            $eleve->setNomEleve($this->faker->lastName())
            ->setPrenomEleve($this->faker->firstName());
            $manager->persist($eleve);
        }

        $manager->flush();
    }
}
