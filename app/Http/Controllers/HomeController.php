<?php

namespace App\Http\Controllers;

use App\Models\HomeModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public  function home(){
        return view('Frontend.home');
    }

    public function dataStore(Request $req){

        $data['name']=$req->name;
        $data['email']=$req->email;
        $data['select_service']=$req->select_service;
        $data['select_date']=$req->select_date;
        $data['special_request'] = $req->special_request;

        HomeModel::create($data);
        return redirect()->back();
        
    }
 public function bookinglist(){

    $booking=HomeModel::get();
    return view('Backend.booking-list',['data'=>$booking]);
 }

public function service_show(){

        $book = HomeModel::get();
        return view('Frontend.service',['datas'=>$book]);
}


    public  function error()
    {
        return view('Frontend.404');
    }
    public  function about()
    {
        return view('Frontend.about');
    }
    public  function booking()
    {
        return view('Frontend.booking');
    }
    public  function contact()
    {
        return view('Frontend.contact');
    }
    public  function service()
    {
        return view('Frontend.service');
    }
    public  function team()
    {
        return view('Frontend.team');
    }
    public  function testimonial()
    {
        return view('Frontend.testimonial');
    }


}
