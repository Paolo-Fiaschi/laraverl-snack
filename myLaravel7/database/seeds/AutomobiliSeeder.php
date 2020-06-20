<?php

use Illuminate\Database\Seeder;
use App\Automobile;
class AutomobiliSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Automobile::class, 100) -> create();
    }
}
