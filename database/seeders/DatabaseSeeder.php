<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Database\Seeders\Traits\TruncateTable;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use TruncateTable;
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $tables = [
            'users',
            'food',
            'media',
            'messages',
            'customers',
            'galleries'
        ];

        $this->truncateMultiple($tables);

        \App\Models\User::factory()->create([
            'username' => 'admin',
            'email' => 'admin@example.com',
            'password' => Hash::make(123456)
        ]);

        \App\Models\Food::factory(1)->create();
        \App\Models\Customer::factory(5)->create();
        \App\Models\Message::factory(5)->create();
    }
}
