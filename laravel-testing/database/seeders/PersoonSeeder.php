<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Persoon;

class PersoonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $persoon = new Persoon();
        $persoon->name = 'John Doe';
        $persoon->price = 100.00;
        $persoon->save();
    }
}
