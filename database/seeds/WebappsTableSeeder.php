<?php

use Illuminate\Database\Seeder;

class WebappsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('web_apps')->delete();
        
    }
}
