<?php

namespace Database\Seeders;
use App\Models\Menuset;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenusetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menusets')->insert([
            'content' => '0000',
            'link' => '111',
        ]);


      

    }
}
