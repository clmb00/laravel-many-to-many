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
        $store = [];
        for ($i=0; $i < 50; $i++) {
            $rnd_project = Project::inRandomOrder()->first();
            $rnd_tech_id = Technology::inRandomOrder()->first()->id;
            if(!array_search("$rnd_project->id-$rnd_tech_id", $store)){
                array_push($store, "$rnd_project->id-$rnd_tech_id");
                $rnd_project->technologies()->attach($rnd_tech_id);
            }
        }
        dump($store);
    }
}
