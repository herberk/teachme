<?php

use TeachMe\Entities\Ticket;

class TicketTableSeeder extends BaseSeeder {

    public function getModel()
    {
        return new Ticket();
    }

    public function getDummyData(\Faker\Generator $faker, array $customValues =array())
    {
       Return [
         'title'   => $faker->sentence(),
         'status'  => $faker->randomElement(['open','open','closed']),
         'user_id' => $this->getRandom('User')->id,  // rand(1,51)          //$this-> createFrom('UserTableSeeder')->id
       ];
    }

}