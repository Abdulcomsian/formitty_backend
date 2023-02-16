<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserFormHeadingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userId = 2;
        $order_id = [1, 2, 3, 4, 5];
        shuffle($order_id);
        for ($i = 0; $i < 5; $i++) {
            DB::table('user_form_headings')->insert([
                'user_id' => $userId,
                'heading_id' => $i + 1,
                'order_id' => $order_id[$i],
                'user_form_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        $userId = 2;
        $order_id = [1, 2, 3, 4, 5];
        shuffle($order_id);
        for ($i = 0; $i < 5; $i++) {
            DB::table('user_form_headings')->insert([
                'user_id' => $userId,
                'heading_id' => $i + 1,
                'order_id' => $order_id[$i],
                'user_form_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
