<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

//hacemos referencia a la entidad a usar
use App\Models\Student;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //creamos 25 estudiantes
        Student::factory(25)->create();
    }
}
