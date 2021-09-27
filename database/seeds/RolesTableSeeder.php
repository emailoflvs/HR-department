<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $role = Role::firstOrNew(['name' => 'admin']);
        if (!$role->exists) {
            $role->fill([
                'display_name' => __('voyager::seeders.roles.admin'),
            ])->save();
        }

        $role = Role::firstOrNew(['name' => 'developer']);
        if (!$role->exists) {
            $role->fill([
                'display_name' => __('Программист'),
            ])->save();
        }

        $role = Role::firstOrNew(['name' => 'user']);
        if (!$role->exists) {
            $role->fill([
                'display_name' => __('voyager::seeders.roles.user'),
            ])->save();
        }

        $role = Role::firstOrNew(['name' => 'hr_operator']);
        if (!$role->exists) {
            $role->fill([
                'display_name' => __('HR оператор подбора персонала'),
            ])->save();
        }

        $role = Role::firstOrNew(['name' => 'hr_personnel_adaptation']);
        if (!$role->exists) {
            $role->fill([
                'display_name' => __('HR Специалист по адаптации персонала'),
            ])->save();
        }

        $role = Role::firstOrNew(['name' => 'hr_trainer']);
        if (!$role->exists) {
            $role->fill([
                'display_name' => __('HR Бизнес-тренер'),
            ])->save();
        }

        $role = Role::firstOrNew(['name' => 'hr_director']);
        if (!$role->exists) {
            $role->fill([
                'display_name' => __('HR руководитель отдела'),
            ])->save();
        }

        $role = Role::firstOrNew(['name' => 'operator']);
        if (!$role->exists) {
            $role->fill([
                'display_name' => __('Оператор'),
            ])->save();
        }
    }
}
