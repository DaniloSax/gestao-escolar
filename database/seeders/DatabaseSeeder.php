<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\People;
use App\Models\Student;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->has(
            People::factory()->hasPhones()
        )->create();

        Student::factory()->count(People::count())->state(
            new Sequence(
                fn ($sequence) => ['people_id' => People::all()->random()],
            )
        )->create();
    }
}
