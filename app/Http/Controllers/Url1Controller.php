<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Session;
use App\Url1;

class Url1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $url = Url1::all();
      $data = array(
        'url' => $url
      );
      return view('url.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('url.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, [
          'title' => 'required|max:100',
          'url' => 'required|max:100',
          'description' => 'required|max:200'
      ]);
      $url = new Url1;

      $url->title = $request->title;
      $url->url = $request->url;
      $url->description = $request->description;

      $url->save();

      return redirect('url');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $url = Url1::find($id);
        $data = array(
          'url' => $url
        );
        return view('url/show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if($id !== ''){
            $url =Url1::find($id);
            $data = array(
                'url' => $url
            );
            return view('url/form',$data);
        }
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
      $this->validate($request, [
          'title' => 'required|max:100',
          'url' => 'required|max:100',
          'description' => 'required|max:200'
      ]);
      $url = Url1::find($id);
      $url->title = $request->title;
      $url->url = $request->url;
      $url->description = $request->description;
      $url->save();

      Session::flash('message','Success update Data !!');
      return redirect('url');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $url = Url1::find($id);
      $url->delete();
      Session::flash('message', 'Success Delete Lib!!');
      return redirect('url');

    }
}
