<?php

use Illuminate\Database\Seeder;

class setting extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $setting = new \App\setting();
        $setting->name="Dr.Majed Elfarra";
        $setting->title="PROFESSOR ON MANAGEMENT";
        $setting->photo="";
        $setting->save();
    }
}
