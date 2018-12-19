<?php

use Illuminate\Database\Seeder;

class PeopleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //model za koji pravimo fake data, i broj
        factory(App\Person::class, 5)->create();
    }
}
