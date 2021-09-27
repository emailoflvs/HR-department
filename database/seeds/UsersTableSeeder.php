<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use TCG\Voyager\Models\Role;
use TCG\Voyager\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (User::count() == 0) {
            $role = Role::where('name', 'admin')->firstOrFail();

            User::create([
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'password' => bcrypt('password'),
                'remember_token' => Str::random(60),
                'role_id' => $role->id,
            ]);
        }

//        $user = User::where(['name' => 'Брунарская Инна'])->firstOrFail();
//        if (!is_object($user)) {
//            $role = Role::where('name', 'hr_operator')->firstOrFail();
//
//            $user->fill([
//                'name'           => __('Брунарская Инна'),
//                'email'          => 'innab@google.com',
//                'password'       => bcrypt('password'),
//                'remember_token' => Str::random(60),
//                'role_id'        => $role->id,
//            ])->save();
//        }

        $hr_operators = [
            [
                'name' => __('Брунарская Инна'),
                'email' => 'innab@google.com',
                'password' => bcrypt('password'),
                'remember_token' => Str::random(60),
            ],
            [
                'name' => __('Татарова Анастасия'),
                'email' => 'tarasova_inna@google.com',
                'password' => bcrypt('password'),
                'remember_token' => Str::random(60),
            ],[
                'name' => __('Зубко Наталия'),
                'email' => 'zubko@google.com',
                'password' => bcrypt('password'),
                'remember_token' => Str::random(60),
            ],[
                'name' => __('Довженко Дарья'),
                'email' => 'dovgenko@google.com',
                'password' => bcrypt('password'),
                'remember_token' => Str::random(60),
            ],


        ];

        $hr_operator_role_id = Role::where('name', 'hr_operator')->firstOrFail()->id;
        foreach ($hr_operators as $hr_operator) {
            $user = User::firstOrNew(['name' => __($hr_operator['name'])]);
            if (!$user->exists) {
                 $user->fill([
                    'name' => __($hr_operator['name']),
                    'email' => $hr_operator['email'],
                    'password' => bcrypt($hr_operator['password']),
                    'remember_token' => $hr_operator['remember_token'],
                    'role_id' => $hr_operator_role_id,
                ])->save();
            }
        }
    }
}
