<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert(
            [
              [
                'name' => 'Sitio publico y privado',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'tags' => json_encode([ "usabilidad", "ui", "ux", "test con usuarios" ]),
                'code' => 'diners',
                'color' => '#233b83',
                'image_position' => true,
                'theme' => false,
                'created_at' => now(),
                'updated_at' => now()
              ],
              [
                'name' => 'Sitios web 2017',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'tags' => json_encode([ "responsive", "ui", "ux" ]),
                'code' => 'derco',
                'color' => '#c92d3b',
                'image_position' => false,
                'theme' => false,
                'created_at' => now(),
                'updated_at' => now()
              ],
              [
                'name' => 'TV App',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'tags' => json_encode([ "usabilidad", "ui", "ux", "test con usuarios" ]),
                'code' => 'copec',
                'color' => '#ffffff',
                'image_position' => true,
                'theme' => true,
                'created_at' => now(),
                'updated_at' => now()
              ]
            ]
          );
    }
}
