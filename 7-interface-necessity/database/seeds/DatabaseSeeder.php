<?php

use App\Epsido;
use App\Lesson;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Lesson::class, 14)->create();
        factory(Epsido::class, 14)->create();
    }
}
