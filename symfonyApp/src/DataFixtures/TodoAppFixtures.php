<?php

namespace App\DataFixtures;

use App\Entity\TodoItem;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class TodoAppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $dummyUser = new User();
        $dummyUser->setEmail('test@test');
        $dummyUser->setUsername('tester');
        $dummyUser->setPassword(password_hash('test', PASSWORD_BCRYPT));

        $manager->persist($dummyUser);

        $dummyUser2 = new User();
        $dummyUser2->setEmail('test2@test');
        $dummyUser2->setUsername('tester2');
        $dummyUser2->setPassword(password_hash('test', PASSWORD_BCRYPT));

        $manager->persist($dummyUser2);

        $todoItem = new TodoItem();
        $todoItem->setDescription("Buy some milk");
        $todoItem->setIsDone(false);
        $todoItem->setDueDate(new \DateTime());
        $todoItem->setOwner($dummyUser);

        $manager->persist($todoItem);

        $manager->flush();
    }
}