<?php

use Illuminate\Database\Seeder;

class contact extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contact = new \App\contactpersonal();
        $contact->email="melfarra@iugaza.edu.ps";
        $contact->address="palestine-gaza-on Khanyounice";
        $contact->phone=+972599861911;
        $contact->save();
    }
}
