<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $technologies = [
            [
                'name' => 'HTML'
            ],
            [
                'name' => 'CSS'
            ],
            [
                'name' => 'SCSS'
            ],
            [
                'name' => 'JavaScript'
            ],
            [
                'name' => 'VueJs'
            ],
            [
                'name' => 'PHP'
            ],
            [
                'name' => 'Laravel'
            ],
        ];

        foreach ($technologies as $tech) {
            $new = new Technology();
            $new->name = $tech['name'];
            $new->save();
        }
    }
}
