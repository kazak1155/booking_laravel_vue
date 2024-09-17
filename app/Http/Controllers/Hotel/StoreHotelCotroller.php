<?php

namespace App\Http\Controllers\Hotel;

use App\Http\Controllers\Controller;
use App\Http\Requests\hotel\StoreHotelRequest;
use App\Models\Hotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;



class StoreHotelCotroller extends Controller
{
    public function store(StoreHotelRequest  $request) {

        $newHotel = new Hotel();
        $newHotel->name = $request->input('name');
        $newHotel->description = $request->input('description');
        $newHotel->address = $request->input('address');
        $newHotel->save();


        if ($request->hasFile('file')) {
            $originalExtension  = $request->file('file')->getClientOriginalExtension();
            $lastCreteHotel = Hotel::latest()->first();
            $path = 'data' . DIRECTORY_SEPARATOR . 'hotels'. DIRECTORY_SEPARATOR .'hotel_' . $lastCreteHotel->id . DIRECTORY_SEPARATOR . 'image' . DIRECTORY_SEPARATOR;
            $imageName = 'hotel_' . $lastCreteHotel->id . '_image.' . $originalExtension;

            $path = $request->file('file')->storeAs($path, $imageName, 'public');

            $lastCreteHotel->img_url = Storage::url($path);
            $lastCreteHotel->save();
            $url = Storage::url($path);

        }

        return 111;

    }
}
