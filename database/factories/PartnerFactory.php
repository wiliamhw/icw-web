<?php

namespace Database\Factories;

use App\Models\Partner;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class PartnerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Partner::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => 'Abdul',
            'last_name' => 'Bombo',
            'institution' => 'Institut Sepuluh Nopember',
            'email' => $this->faker->companyEmail,
            'phone_number' => $this->faker->phoneNumber,
            'option' => 'media-partner',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ];
    }
}
