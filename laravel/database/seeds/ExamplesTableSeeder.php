<?php

use Illuminate\Database\Seeder;

class ExamplesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $item = new \App\Example();
        $item->name = 'test';
        $item->value = 300;
        $item->save();
    }
}
