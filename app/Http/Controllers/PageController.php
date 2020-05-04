<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page = Page::where('name', 'home')->first();
        return view('welcome', compact('page'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('page.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fileName = '';
        if ($request->hasFile('featured_image')) {
            $fileName = time() . '.' . $request->featured_image->extension();
            $request->featured_image->move(public_path('uploads'), $fileName);
        }

        Page::create([
            'name' => $request->name,
            'featured_image' => $fileName,
            'title' => $request->title,
            'slug' => $request->slug,
            'heading' => $request->heading,
            'no_index' => $request->no_index,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'content' => $request->content
        ]);

        return redirect('home')->withSuccess('Page saved successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page = Page::where('id', $id)->first();
        return view('page.update', compact('page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($request->hasFile('featured_image')) {
            $fileName = time() . '.' . $request->featured_image->extension();
            $request->featured_image->move(public_path('uploads'), $fileName);
            Page::where('id', $id)->update([
                'featured_image' => $fileName
            ]);
        }

        Page::where('id', $id)->update([
            'name' => $request->name,
            'title' => $request->title,
            'slug' => $request->slug,
            'heading' => $request->heading,
            'no_index' => $request->no_index,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'content' => $request->content,
        ]);

        return redirect('home')->withSuccess('Page updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Page::destroy($id);
        return redirect('home')->withSuccess('Page deleted successfully!');
    }
}
