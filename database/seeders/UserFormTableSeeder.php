<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\UserForm;

class UserFormTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userForms = [
            [
                'user_id' => 2,
                'form_id' => 1,
                'form_type' => 'draft'
            ],
            [
                'user_id' => 2,
                'form_id' => 1,
                'form_type' => 'submitted'
            ],
            [
                'user_id' => 2,
                'form_id' => 1,
                'form_type' => 'approved'
            ]
        ];

        foreach ($userForms as $userForm) {
            UserForm::create($userForm);
        }
    }
}
