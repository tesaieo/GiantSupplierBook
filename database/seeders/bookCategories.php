<?php

namespace Database\Seeders;

use App\Models\Bookcategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class bookCategories extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i =1;$i<=100;$i++){
            Bookcategory::create([
                'categoryId'=>rand(1,4),
                'bookId'=> $i
            ]);  
        }
        
    }
}
