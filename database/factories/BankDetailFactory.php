<?php

namespace Database\Factories;

use App\Models\BankDetail;
use Illuminate\Database\Eloquent\Factories\Factory;

class BankDetailFactory extends Factory
{
    protected $model = BankDetail::class;

    public function definition(): array
    {
        return [
            'bank_name' => $this->faker->bank,
            'branch' => $this->faker->city,
            'account_holder_name' => $this->faker->name,
            'account_number' => $this->faker->unique()->bankAccountNumber,
            'ifsc_code' => $this->faker->regexify('[A-Z]{4}0[A-Z0-9]{6}'),
        ];
    }
}
