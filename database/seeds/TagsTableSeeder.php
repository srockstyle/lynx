<?php

  use Illuminate\Database\Seeder;

  class TagsTableSeeder extends Seeder
  {
    public function run()
    {
      DB::table('articles')->truncate();

      DB::table('articles')->insert([
        [
          'name' => 'Web',
          'created_at' => '2015-01-31 23:59:59',
          'updated_at' => '2015-01-31 23:59:59',
        ],
        [
          'name' => 'Diary',
          'created_at' => '2015-01-31 23:59:59',
          'updated_at' => '2015-01-31 23:59:59',
        ],
        [
          'name' => 'Illustration',
          'created_at' => '2015-01-31 23:59:59',
          'updated_at' => '2015-01-31 23:59:59',
        ],
      ]);
    }
  }
