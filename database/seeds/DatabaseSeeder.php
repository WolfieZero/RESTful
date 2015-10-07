<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\Datum;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // Clear and create User test data
        User::truncate();
        factory(User::class, 5)->create();

        // Clear and create Datum test data
        Datum::truncate();
        factory(Datum::class, 25)->create();

        Model::reguard();
    }
}
