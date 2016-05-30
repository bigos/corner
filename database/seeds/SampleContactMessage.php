<?php

use Illuminate\Database\Seeder;

class SampleContactMessage extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contact_messages')->insert([
            'subject' => 'test message',
            'message' => 'hello, testing testing',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
    }
}
