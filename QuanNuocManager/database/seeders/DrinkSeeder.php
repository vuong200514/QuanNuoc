<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Drink;

class DrinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Drink::insert([
            [
                'drinkName' => 'Trà đào cam xả',
                'drinkPrice' => '35000',
                'mota' => 'abcasdasdadad',
            ],
            [
                'drinkName' => 'Trà chanh lô hội',
                'drinkPrice' => '30000',
                'mota' => 'abcxcvxcvxv',
            ],
            [
                'drinkName' => 'Trà chanh tươi lạnh',
                'drinkPrice' => '25000',
                'mota' => 'abcdsvsvsvsd',
            ],
        ]);
    }
}
