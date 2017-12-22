<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Link;

class LinkController extends Controller
{
   public function getHome(){
   	$links = Link::all();
   	return view('welcome')->withLinks($links);
   }

   public function postLink(Request $request){
   		//$this->validate($request,[
        //    'title' => 'required|max:255',
        //    'url '=> 'required|max:255',
         //   'description' => 'required|max:255',
        //   
       // ]);

        $link = new Link;

        $link->title = $request->description;
        $link->url = $request->description;
        $link->description = $request->description;
        $link->save();
        return redirect('/');
      }
}
