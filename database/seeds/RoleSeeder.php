<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = array(
            array(
              'title' => 'super admin',
              'details' => 'can do pretty much everyone',
              'salary' => 100000,
            ),

            array(
              'title' => 'product handler',
              'details' => 'handles and processes all kinds of product related issues incuding adding and removing products',
              'salary' => 80000,
            ),

            array(
              'title' => 'conumer handler',
              'details' => 'handles customer service and customer complains and account related issues',
              'salary' => 60000,
            ),

            array(
              'title' => 'delivary handler',
              'details' => 'handles the product delivary issues includeing delivary related complaines and such',
              'salary' => 50000,
            ),
        );

        foreach ($roles as $role) {
            DB::table('roles')->insert([
              'title' => $role['title'],
              'details' => $role['details'],
              'salary' => $role['salary'],
            ]);
        }
    }
}
