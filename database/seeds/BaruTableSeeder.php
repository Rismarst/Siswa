<?php

use Illuminate\Database\Seeder;

class BaruTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $a=[
        ['title'=>'Tips Cepat Nikah','content'=>'lorem ipsum'],
        ['title'=>'Haruskah menunda nikah','content'=>'lorem ipsum'],
        ['title'=>'Membangun Visi Misi Keluarga','content'=>'lorem ipsum'],
    ];
    DB::table('baru')->insert($a);

       
    }
}
