<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FooterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {

        return view('footerset', ['data' => footer2::all()]);
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
     * @param \Illuminate\Http\Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->post();
        }

        array_shift($data);//remove first element with token info
        /*dd($data);*/
        $title = $data['title'];
        $link    = $data['link'];
        DB::table('footers')->truncate();//remove all data from table in DB
        Footer::create(['title' => $title, 'link' => $link]); //create new row in table
        return redirect('account'); //go to dashboard
    }


    /**
     * Display the specified resource.
     *
     * @param \App\Models\Footer $footer
     * @return \Illuminate\Http\Response
     */
    public function show(Footer $footer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Footer $footer
     * @return \Illuminate\Http\Response
     */
    public function edit(Footer $footer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Footer $footer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Footer $footer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Footer $footer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Footer $footer)
    {
        //
    }
}
