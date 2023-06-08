<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menuset;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {  $val = Menuset::all();
        return view('home',['data'=>$val]);

    }

    public function store(Request $request): \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
    {
        if ($request->isMethod('post')) {
            $data = $request->post();
        }
        array_shift($data);//remove first element with token info
        $titles = $data['row']['title'];
        $links = $data['row']['link'];
        $data = array_combine($titles, $links);
        DB::table('menusets')->truncate();//remove all data from table in DB
        foreach ($data as $k => $v) {
            Menuset::create([ 'title' => $k, 'link' => $v]); //create new row intable
}
        return redirect('home'); //go to dashboard
    }
}

