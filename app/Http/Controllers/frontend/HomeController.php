<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class HomeController extends Controller
{

    public function index(Request $request)
    {
      $blogs = DB::table('sp_blogs')->orderBy('created_at','desc')->limit(3)->get();
      // dd($blogs);
      return view('frontend.index',compact('blogs'));
    }

    public function blogs(Request $request)
    {
      $blogs = DB::table('sp_blogs')->orderBy('created_at','desc')->paginate(4);
      $recent_blogs = DB::table('sp_blogs')->orderBy('created_at','desc')->limit(4)->get();
      // dd($blogs);
       return view('frontend.blog',compact('blogs','recent_blogs'));

    }

    public function blogDetails(Request $request,$id)
    {
      $blog = DB::table('sp_blogs')->where('blog_id',$id)->first();
      $recent_blogs = DB::table('sp_blogs')->orderBy('created_at','desc')->limit(4)->get();
      // dd($blogs);
       return view('frontend.blog-details',compact('blog','recent_blogs'));

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
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
