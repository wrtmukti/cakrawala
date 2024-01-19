<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $this -> call([
            UsersSeed::class,
            ProjectsTableSeeder::class,
            ImgSiteplanTableSeeder::class,
            ImgPosterTableSeeder::class,
            ImgTypeTableSeeder::class,
            CompanyBioSeeder::class,
            CollaborationSeeder::class,
            AwardSeeder::class,
        ]);
    }
}
