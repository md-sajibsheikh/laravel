<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function add_service()
    {
        return view('Backend.add-services');
    }

    public function serviceStore(Request $req)
    { {
            if (!is_dir(public_path('new'))) {
                mkdir(public_path('new'), 0777, true);
            }

            $imagePath = null;
            if ($req->hasFile('image')) {
                $image = $req->image;
                $name = $image->getClientOriginalName();
                $imageName = time() . "_" . $name;
                $imagePath = 'new/' . $imageName;

                $image->move(public_path('new'), $imageName);
                $data['image'] = $imagePath;
            }
            $data['title'] = $req->title;
            $data['subtitle'] = $req->subtitle;
            $data['description'] = $req->description;
            $data['quality_servicing'] = $req->quality_servicing ? 1 : 0;
            $data['expert_workers'] = $req->expert_workers ? 1 : 0;
            $data['modern_equipment'] = $req->modern_equipment ? 1 : 0;
          Service::create($data);
          
            return redirect()->route('service.list');
        }
    }
 public function show(){

    $ser=Service::get();
    return view('Backend.client',['data' => $ser]);
 }


    
}
