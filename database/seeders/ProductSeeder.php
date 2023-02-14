<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Category;
use App\Models\Product;
use App\Models\Typology;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Product::factory() -> count(20) -> make() -> each(function($i){

            // Foreign key
            $typology = Typology::inRandomOrder() -> first();
            $i -> typology() -> associate($typology);

            $i -> save();

            // Many to Many
            $categories = Category::inRandomOrder() -> limit(rand(1,5)) -> get();
            $i -> categories() -> attach($categories);
        });
    }
}
