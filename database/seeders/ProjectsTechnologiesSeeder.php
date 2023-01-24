<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectsTechnologiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 50; $i++) {
            $rnd_project = Project::inRandomOrder()->first();
            $rnd_tech_id = Technology::inRandomOrder()->first()->id;
            $rnd_project->technologies()->attach($rnd_tech_id);
        }
    }
}
