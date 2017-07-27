<?php

use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $a=[
        ['nama'=>'Rismayt','kelas'=>'XII RPL 3','tanggallahir'=>'2000-08-29'],
        ['nama'=>'Sella Rostiana','kelas'=>'lXII RPL 3','tanggallahir'=>'2000-09-25 '],
        ['nama'=>'Sherina Sulistiawati','kelas'=>'XII RPL 3','tanggallahir'=>'2000-05-19'],
    ];
    DB::table('siswaa')->insert($a);

    }
}
