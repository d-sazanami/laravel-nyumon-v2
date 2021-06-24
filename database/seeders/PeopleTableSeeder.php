<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'Reimu',
            'mail' => 'reimu@hakurei',
            'age' => 16,
        ];
        DB::table('people')->insert($param);

        $param = [
            'name' => 'Marisa',
            'mail' => 'marisa@kirisame',
            'age' => 16,
        ];
        DB::table('people')->insert($param);

        $param = [
            'name' => 'Rumia',
            'mail' => 'rumia@fairy',
            'age' => 8,
        ];
        DB::table('people')->insert($param);
    }
}
