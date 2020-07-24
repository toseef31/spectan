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

    public function contactUs(Request $request)
    {
      // dd($request->all());
      $input['first_name'] = $request->input('first_name');
      $input['last_name'] = $request->input('last_name');
      $input['email'] = $request->input('email');
      $input['phone'] = $request->input('phone');
      $input['message'] = $request->input('message');
      $message = DB::table('sp_contact_us')->insert($input);
      return redirect('/');

    }

    public function FAQs()
    {
      $faq = DB::table('sp_faqs')->first();
      return view('frontend.faq',compact('faq'));
    }

    public function BusinessQuote(Request $request)
    {
      // dd($request->all());
      $input['first_name'] = $request->input('first_name');
      $input['last_name'] = $request->input('last_name');
      $input['email'] = $request->input('email');
      $input['phone'] = $request->input('phone');
      $input['company_name'] = $request->input('company_name');
      $input['state'] = $request->input('state');
      $input['additional_state'] = $request->input('additional_state');
      $input['business_structure'] = $request->input('business_structure');
      $input['primary_product'] = $request->input('primary_product');
      $input['yearly_revenue'] = $request->input('yearly_revenue');
      $input['bookkeeping_system'] = $request->input('bookkeeping_system');
      $input['prior_business_return'] = $request->input('prior_business_return');
      $input['other'] = $request->input('other');
      $input['about_us'] = $request->input('about_us');
      $message = DB::table('sp_business_return_quote')->insert($input);
      return redirect('/');

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
