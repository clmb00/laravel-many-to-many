<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = ['HTML', 'CSS', 'SCSS', 'JavaScript', 'PHP', 'VueJs', 'Laravel'];

        foreach ($data as $item) {
            $new_tech = new Technology();
            $new_tech->name = $item;
            $new_tech->slug = Str::slug($item);
            $new_tech->save();
        }
    }
}
