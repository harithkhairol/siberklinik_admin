<?php

namespace Database\Factories;

use App\Models\Appointment;
use App\Models\Customer;
use App\Models\Doctor;
use Illuminate\Database\Eloquent\Factories\Factory;

class AppointmentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Appointment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => Customer::all()->random()->id,
            'doctor_id' => Doctor::all()->random()->id,
            'doctor_name' => $this->faker->name,
            'type' => $this->faker->randomElement(['Cyber Practice', 'Cyber Awareness']),
            'category' => $this->faker->randomElement(['Consultation', 'Training', 'Talk']),
            'title' => $this->faker->word,
            'description' => $this->faker->paragraph,
            'date' => $this->faker->dateTimeBetween($startDate = 'now', $endDate = '+3 months', $timezone = null) ,
            'time' => $this->faker->randomElement(['09:00:00', '10:00:00', '11:00:00', '12:00:00', '13:00:00', '14:00:00', '15:00:00', '16:00:00']),
        ];
    }
}
