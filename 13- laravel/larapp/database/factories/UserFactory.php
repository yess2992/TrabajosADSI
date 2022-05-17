<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
   // public function definition()
    //{
        /* return [
            'fullname' => $this->faker->firstNameFemale(),
            'email' => $this->faker->unique()->safeEmail(),
            'phone' => $this->faker->numberBetween($min = 310000000, $max= 320000000),
            'birthdate' => $this->faker->date(),
            'gender' => 'Female',
            'address' => $this->faker->address(),
            'email_verified_at' => now(),
            'password' => $this->faker->password(),
            'remember_token' => Str::random(10),
        ]; */
        public function definition()
    {
            $gender = $this->faker->randomElement($array = array('male','female'));
            $photo = $this->faker->image('public\images',600,800);

            return [

                'fullname' => $this->faker->name($gender),
                'email' => $this->faker->unique()->safeEmail(),
                'phone' => $this->faker->numberBetween($min = 33101000000, $max = 3202000000),
                'birthdate' => $this->faker->dateTimeBetween('1960-01-01', '1999-12-31'),
                'gender' => $gender,
                'address' => $this->faker->address(),
                'photo' => $photo,
                'email_verified_at' => now(),
                'password' => $this->faker->password(), // password
                'remember_token' => Str::random(10),
                
            ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
