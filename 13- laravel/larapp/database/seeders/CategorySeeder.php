<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cat1 = new Category;
        $cat1->name = 'Nintendo Switch';
        $cat1->image = 'images/switch.png';
        $cat1->description = 'Lorem ipsum Dolor';        
        $cat1->save(); 
        //
        $cat2 = new Category;
        $cat2->name = 'Xbox Series X';
        $cat2->image = 'images/Xbox.png';
        $cat2->description = 'Lorem ipsum Dolor';        
        $cat2->save();
        //
        $cat3 = new Category;
        $cat3->name = 'PLay Station 5';
        $cat3->image = 'images/playStation5.png';
        $cat3->description = 'Lorem ipsum Dolor';        
        $cat3->save();           
    }
}