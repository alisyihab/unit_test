<?php

namespace Tests\Unit;

use App\Room;
use PHPUnit\Framework\TestCase;

class RoomTest extends TestCase
{
    public function test_room_has()
    {
        $room = new Room(["Jack", "Ali", "Tia"]);

        $this->assertTrue($room->hasPerson("Jack")); // Expect true
        $this->assertFalse($room->hasPerson("Eric")); // Expect false
    }

    public function test_room_add()
    {
        $room = new Room(["Jack"]); // Create a new room
        $this->assertContains("Peter", $room->add("Peter"));
    }

    /**
     * Test the add() method in Room class
     *
     * @return void
     */
    public function test_room_remove()
    {
        $room = new Room(["Jack", "Peter"]); // Create a new room
        $this->assertCount(1, $room->remove("Peter"));
    }
}
