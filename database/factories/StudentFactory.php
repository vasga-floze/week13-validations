<?php

namespace Database\Factories;

//indica model
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Student::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //definir estructura de datos falsos a insertar
            'code'=>$this->faker->text(6),
            'name'=>$this->faker->word,
            'address'=>$this->faker->address,
            'telephone'=>$this->faker->tollFreePhoneNumber,
            'email'=> $this->faker->unique()->safeEmail,
            
        ];
    }
}
