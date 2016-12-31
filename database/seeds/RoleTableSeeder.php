<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::firstOrNew([
                'name'         => 'admin',
            ]);
        if (!$role->exists) {
            $role->fill([
                    'display_name' => 'Administrator',
                ])->save();
        }
        $role = Role::firstOrNew([
                'name'         => 'user',
            ]);
        if (!$role->exists) {
            $role->fill([
                    'display_name' => 'Normal User',
                ])->save();
        }
    }
}
