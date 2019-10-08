<?php

use Illuminate\Database\Seeder;

class articles_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userid = 1;
        
            DB::table('Articles')->insert([
                
                'user_id'=>(userid),
                'title' => Str::random(10),
                'article' => Str::random(10).'@gmail.com',
            ]);
        }
    }

