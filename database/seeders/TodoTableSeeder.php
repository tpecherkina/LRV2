<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TodoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('todos')->insert([
            [
                'title' => 'Установка REdOS',
                'description' => 'Импортозамещение ПО',
                'created_at' => date('d.m.Y H:i'),
                'updated_at' => date('d.m.Y H:i'),
            ],
            [
                'title' => 'Настроить квотирование на сервере',
                'description' => 'На каждого 500Mb',
                'created_at' => date('d.m.Y H:i'),
                'updated_at' => date('d.m.Y H:i'),
            ],
        ]);
    }
}
