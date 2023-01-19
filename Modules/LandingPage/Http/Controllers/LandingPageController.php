<?php

namespace Modules\LandingPage\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class LandingPageController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('landingpage::index');
    }

    public function create()
    {
        return view('landingpage::create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        return view('landingpage::show');
    }

    public function edit($id)
    {
        return view('landingpage::edit');
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    // other url
    public function nonReguler()
    {
        $data = [
            ['title' => 'Slide 1', 'image' => 'image1.jpg'],
            ['title' => 'Slide 2', 'image' => 'image2.jpg'],
            ['title' => 'Slide 3', 'image' => 'image3.jpg'],
        ];
        return view ('landingpage::non-reguler.index', compact('data'));
    }
}
