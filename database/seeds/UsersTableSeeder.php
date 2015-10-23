<?php

  use Illuminate\Database\Seeder;

  class UsersTableSeeder extends Seeder
  {

      public function run()
      {
          DB::table('users')->truncate();

          DB::table('users')->insert([
              [
                  'name'      => 'lynx',
                  'email'       => 'lynx@srockstyle.com',
                  'created_at' => '2015-01-31 23:59:59',
                  'updated_at' => '2015-01-31 23:59:59',
              ],
          ]);

      }

  }
