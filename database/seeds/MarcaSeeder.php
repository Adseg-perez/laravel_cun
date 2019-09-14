<?php

use Illuminate\Database\Seeder;

class MarcaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	\DB::insert("INSERT INTO marcas (marca,pais) VALUES 
    	('Nike','EEUU'),
    	('Adidas','EEUU'),
        ('Bags','China')");
        
    }
}
