<?php

use App\Producto;
use App\Marca;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
        $producto=factory(App\Producto::class, 10)
        ->create();
    }
    
}
