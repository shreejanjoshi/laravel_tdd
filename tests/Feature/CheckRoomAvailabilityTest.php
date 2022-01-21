<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Room;
use App\Models\User;

class CheckRoomAvailabilityTest extends TestCase
{
    /**
     * A basic feature test example.
     * @test
     * @return void
     */
    public function room_test()
    {
        //1 is non premium
        //2 is premium

        //$user = User::find(1);
        //$room = Room::find(1);

        //$this->assertTrue($room->canBook($user));

        // $user = User::find(1);
        // $room = Room::find(2);

        // $this->assertFalse($room->canBook($user));

        // $user = User::find(2);
        // $room = Room::find(1);

        // $this->assertTrue($room->canBook($user));

        // $user = User::find(2);
        // $room = Room::find(2);

        // $this->assertTrue($room->canBook($user));
    }
}
