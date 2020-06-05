<?php

use Illuminate\Database\Seeder;
use App\Room;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Room::create([
            'title' => 'Room 1',
            'description' => 'Standard'
        ]);
        Room::create([
            'title' => 'Room 2',
            'description' => 'Economy'
        ]);
        Room::create([
            'title' => 'Room 3',
            'description' => 'Deluxe'
        ]);
    }
}
