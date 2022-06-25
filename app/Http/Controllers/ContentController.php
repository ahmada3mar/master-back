<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Content;
use App\Event;

class ContentController extends Controller
{
    function index(){

        $data = [
            'content' => Content::all(),
            'events' => Event::all()
        ];
        
        return $data ;
    }
}
