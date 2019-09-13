<?php

use Illuminate\Database\Seeder;

class MarcaFaker extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $marcas = factory(App\Marca::class, 5)
        ->create();
    }
}
