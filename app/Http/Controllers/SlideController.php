<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slide;

class SlideController extends Controller
{
    public function index(){

        $slides = Slide::all();

        return view('welcome', ['slides' => $slides]);
    }

    public function create(){
        return view('slides.create');
    }

    public function store(Request $request){
        $slide = new Slide;

        $slide->title = $request->title;
        $slide->subtitle = $request->subtitle;
        $slide->description = $request->description;

        if($request->hasFile('image') && $request->file('image')->isValid()) {

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('images/slides'), $imageName);

            $slide->image = $imageName;
        }

        $slide->save();

        return redirect('/')->with('msg', 'Slide criado com sucesso!');
    }

    public function show($id) {

        $slide = Slide::findOrFail($id);
        return view('slide.show', ['slide' => $slide]);

    }
}
