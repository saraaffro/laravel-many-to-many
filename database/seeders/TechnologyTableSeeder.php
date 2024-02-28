<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Project;
use App\Models\Technology;

class TechnologyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Technology :: factory()
            -> count(15)
            -> create()
            -> each(function($technology) {

            $projects = Project :: inRandomOrder() -> limit(2) -> get();
            $technology -> projects() -> attach($projects);
            $technology -> save();
        });
    }
}
