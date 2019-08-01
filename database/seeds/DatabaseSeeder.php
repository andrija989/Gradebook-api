<?php

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
        $this->call(UsersTableSeeder::class);
        $this->call(ProfessorsTableSeeder::class);
        $this->call(DiariesTableSeeder::class);
        $this->call(StudentsTableSeeder::class);
        $this->call(CommentsTableSeeder::class);
        $this->call(ImagesTableSeeder::class);
    }
}
