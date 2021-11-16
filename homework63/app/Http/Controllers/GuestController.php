<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    //
    public function index(){
        $guests = [ 
            [
                'image'=> './img/person-1.jpg',
                'name' => 'Samantha',
                'bio' => '  Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis sequi
                quia iure facere aperiam quaerat dolorem, aut asperiores nam ab, et
                veniam laboriosam repudiandae cupiditate dolorum voluptate quo eius
                amet molestias id. Tempora aut nemo placeat corrupti fugiat! Nobis,
                qui!'
            ],
            [
                'image'=> './img/person-2.jpg',
                'name' => 'Jane',
                'bio'=>'   Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis sequi
                quia iure facere aperiam quaerat dolorem, aut asperiores nam ab, et
                veniam laboriosam repudiandae cupiditate dolorum voluptate quo eius
                amet molestias id. Tempora aut nemo placeat corrupti fugiat! Nobis,
                qui!'
            ]
            ];
            return view('about',['guests'=>$guests]);
    }
}
