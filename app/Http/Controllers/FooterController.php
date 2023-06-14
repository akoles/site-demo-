<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {$val = footer::all();
        return view('footer',['data'=>$val]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request):RedirectResponse
    {
        if ($request->isMethod('post')) {
            $data = $request->post();
        }
        array_shift($data);//remove first element with token info
        $titles = $data['row']['title'];
        $links = $data['row']['link'];
        $data = array_combine($titles, $links);
        DB::table('footer')->truncate();//remove all data from table in DB
        foreach ($data as $k => $v) {
            Footer::create([ 'title' => $k, 'link' => $v]); //create new row intable
}return redirect('footer'); //go to dashboard
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function show(Footer $footer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function edit(Footer $footer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Footer $footer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Footer $footer)
    {
        //
    }
}
