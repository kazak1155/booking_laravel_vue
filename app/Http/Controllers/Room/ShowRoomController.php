<?php

namespace App\Http\Controllers\Room;

use App\Http\Controllers\Controller;
use App\Http\Resources\RoomResource;
use App\Models\Room;


class ShowRoomController extends Controller
{
    public function snowOneRoom(Room $room) {

        return new RoomResource($room);
    }
}
