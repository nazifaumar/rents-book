<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class CategorySeeder extends Seeder
{
                                                        
    public function run()
    {
        
        Schema::disableForeignKeyConstraints();
        Category::truncate();
        Schema::enableForeignKeyConstraints();


        $data = [
            'comic', 'novel', 'fiction', 'history', 'drama', 
            'action', 'romance', 'sport', 'thiller', 'horror',
            'slice of life', 'comedy'
        ];

        foreach ($data as $value)
        {   
            Category::insert([
                'name' => $value 
            ]);
        }
    }
}

