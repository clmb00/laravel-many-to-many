<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) {
            $new_project = new Project();
            $new_project->name = $faker->sentence(4);
            $new_project->slug = Project::generate_slug($new_project->name);
            $new_project->client_name = $faker->sentence(3);
            $new_project->summary = $faker->text();
            $new_project->save();
        }
    }
}
