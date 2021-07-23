<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FloraController extends Controller
{
    //
    /*
Route::get('our-services', [FloraController::class, 'ourServices']);
Route::get('rooms', [FloraController::class, 'rooms']);
Route::get('diving', [FloraController::class, 'diving']);
Route::get('maldives', [FloraController::class, 'maldives']);
Route::get('about-us', [FloraController::class, 'aboutUs']);
Route::get('contact-us', [FloraController::class, 'contactUs']);
Route::get('gallery', [FloraController::class, 'gallery']);

     * */

    public function home()
    {
        $carousels= [
        "1-slider.jpeg",
        "2-slider.jpeg",
        "3-slider.jpeg",
        "4-slider.jpeg",
        "5-slider.jpeg",
        "6-slider.jpeg"
      ];
        return view('home',compact('carousels'));
    }

    public function ourServices()
    {
        return view('our-services');
    }

    public function rooms()
    {

        $roomImages= [
      "/room-photos/1.jpg",
      "/room-photos/2.jpg" ,
      "/room-photos/4.jpg" ,
      "/room-photos/5.jpg" ,
      "/room-photos/6.jpg" ,
      "/room-photos/7.jpg" ,
      "/room-photos/8.jpg" ,
      "/room-photos/10.jpg" ,
      "/room-photos/11.jpg" ,
      "/room-photos/12.jpg" ,
      "/room-photos/13.jpg" ,
      "/room-photos/14.jpg" ,
      "/room-photos/15.jpg" ,
      "/room-photos/16.jpg" ,
      "/room-photos/17.jpg" ,
      "/room-photos/18.jpg" ,
    ];

        return view('rooms',compact('roomImages'));
    }

    public function diving()
    {
        return view('diving');
    }

    public function maldives()
    {
        return view('maldives');
    }

    public function aboutUs()
    {
        return view('about-us');
    }

    public function contactUs()
    {
        return view('contact-us');
    }

    public function gallery()
    {
        $galleryImages= [
            '/maldives/1.jpeg',
            '/maldives/2.jpeg' ,
            '/maldives/3.jpeg' ,
            '/maldives/4.jpeg' ,
            '/maldives/6.jpeg' ,
            '/maldives/7.jpeg' ,
            '/maldives/8.jpeg' ,
            '/maldives/9.jpeg' ,
            '/maldives/10.jpeg',
            '/maldives/11.jpeg',
            '/maldives/12.jpeg',
            '/maldives/13.jpeg',
            '/maldives/14.jpeg',
            '/maldives/15.jpeg',
            '/maldives/16.jpeg',
            '/maldives/17.jpeg',
            '/maldives/18.jpeg',
            '/maldives/19.jpeg',
            '/maldives/20.jpeg',
            '/maldives/21.jpeg',
            '/maldives/22.jpeg',
            '/maldives/23.jpeg',
            '/maldives/24.jpeg',
            '/maldives/25.jpeg',
            '/maldives/26.jpeg',
            '/maldives/27.jpeg',
            '/maldives/28.jpeg',
            '/maldives/29.jpeg',
            '/maldives/5.jpeg'
        ];
        return view('gallery',compact('galleryImages'));
    }


}
