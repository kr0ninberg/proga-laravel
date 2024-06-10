<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Place;
use App\Models\Thing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Thing::create([
            'name'=> 'Pen',
            'description'=> 'An instrument for writing or 
            drawing with ink, typically consisting of a 
            metal nib or ball, or a nylon tip, fitted into a metal 
            or plastic holder.',
            'wrnt'=> '01.01.2025',
            'creator'=> 'user1',
            'dimension'=> '',
        ]);
        Thing::create([
            'name'=> 'Paper', 
            'description'=> 'Paper is a thin sheet material 
            produced by mechanically or chemically processing cellulose fibres, 
            used to printing, painting, graphics, signage, design, packaging, 
            decorating, writing, and cleaning.', 
            'wrnt'=> '01.01.2025',
            'creator'=> 'user1',
            'dimension'=> '',
        ]);
        Place::create([
            'name'=> 'Park',
            'description' => 'A large public garden or area of land used 
            for recreation.',
            'repair' => 'false',
            'work'=> 'false'
        ]);
        Place::create([
            'name'=> 'Universal workshop',
            'description' => 'A room or building in which goods are 
            manufactured or repaired.',
            'repair' => 'true',
            'work'=> 'false'
        ]);


        \App\Models\User::factory(5)->create();

        Thing::factory(3)->create();
        Place::factory(3)->create();
        // Place::factory(1)->create([
        //     'repair' => 'true',
        // ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
