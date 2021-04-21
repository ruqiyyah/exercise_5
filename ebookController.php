<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ebookController extends Controller
{
    public function about () {
        return view('about');
        }
        public function list () {
            $list = array(
            '1. Title: The fault in our stars    
            ISBN: 9781455869749    
             Book category: Love & Romance   
           No of pages :313 ',
            '2. Title: Five feet apart    
            ISBN: 9781534437357    
             Book category: Romance   
           No of pages :288 
           '
            );
           return view('list', compact('list'));
            }
}
