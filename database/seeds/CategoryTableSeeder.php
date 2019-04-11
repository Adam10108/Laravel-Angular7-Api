<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->insert(
            array(
                ['name' => 'อะไหล่'],
                ['name' => 'เครื่องแต่งกาย'],
                ['name' => 'ร้องเท้า'],
                ['name' => 'แว่นตา'],
                ['name' => 'อุปกรณ์เสริม'],
                ['name' => 'อิเล็กทรอนิกส์'],
            )
        );
    }
}
