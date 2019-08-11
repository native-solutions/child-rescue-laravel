<?php

use Illuminate\Database\Seeder;
use App\Setting;
use App\User;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    	Setting::Create([
    		'site_name' => 'Government of Nepal',
    		'email'      => 'childgov@nepal.com',
    		'phone_number' => '12345',
    		'emergency_number' => '104',
    		'address' => 'Bhrikutimandap, Kathmandu',
    		'header_logo_center' => '',
    		'header_logo_right' => '',
    		'top_nav_color' => '',
    		'main_nav_color' => ''
    	]);

    	User::create([
    		'name' => 'Diwas KC',
    		'email' => 'diwaskc12@gmail.com',
    		'password' => \Hash::make('12345')

    	]);

    }
}
