<?php

namespace App\Http\Controllers\Hotel;

use App\Http\Controllers\Controller;
use App\Http\Resources\HotelResource;
use App\Models\Hotel;
use Illuminate\Http\Request;

class ShowHotelController extends Controller
{
    public function snowAllHotel() {
        $hotels = Hotel::all();
        return  HotelResource::collection($hotels);
    }
}
