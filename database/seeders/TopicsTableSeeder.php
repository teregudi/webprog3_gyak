<?php

namespace Database\Seeders;

use App\Models\Topic;
use Illuminate\Database\Seeder;

class TopicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Topic::create(['name' => 'aaa']);
        Topic::create(['name' => 'bbb']);
        Topic::create(['name' => 'ccc']);
        Topic::create(['name' => 'ddd']);
        Topic::create(['name' => 'eee']);
        Topic::create(['name' => 'fff']);
        Topic::create(['name' => 'ggg']);
        Topic::create(['name' => 'hhh']);
        
    }
}
