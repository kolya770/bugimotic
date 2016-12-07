<?php

use Illuminate\Database\Seeder;

class FootersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('footers')->insert([
            'copyright' => '"Веселый Бугимотик" , г. Киев, пр. Науки 11а',
            'number_1'  => '+38 (044) 525-73-35 - игрушки',
            'number_2'  => '+38 (044) 525-84-88 - одежда'
        ]);
    }
}
