<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class BlogController extends Controller
{

     /**
       * Display a listing of the resource.
       *
       * @return \Illuminate\Http\Response
       */
      public function index()
      {
          $blogs = DB::table('sp_blogs')->orderBy('created_at', 'desc')->paginate(6);
          $top_three_posts = DB::table('sp_blogs')->orderBy('created_at', 'desc')->limit(3)->get();
          return view('admin.blogs', compact('blogs','top_three_posts'));
      }

      public function adminListPosts(){
          $blogs = Blog::paginate(5);
          return view('list_posts', compact('blogs'));
      }

      /**
       * Show the form for creating a new resource.
       *
       * @return \Illuminate\Http\Response
       */
      public function create()
      {
          // dd("asdasd");

          return view('admin.create_blog');
      }

      /**
       * Store a newly created resource in storage.
       *
       * @param  \Illuminate\Http\Request  $request
       * @return \Illuminate\Http\Response
       */
      public function store(Request $request)
      {
        // dd($request->all());
          $this->validate($request, [
              'title' => 'required',
              'body' => 'required',
              'post_image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:80048'
          ]);
          $blog_id = $request->input('blog_id');
          $image = $request->file('post_image');

          $insert_data = array(
              'title' => $request->input('title'),
              'body' => $request->input('body'),
              // 'blog_image' => $image_name,
              'user_id' => session()->get('sp_admin')->id
          );
          if ($image !="") {
          $profilePicture = 'post-'.time().'-'.rand(000000,999999).'.'.$image->getClientOriginalExtension();
          $destinationPath = public_path('frontend-assets/dashboard/post');
          $image->move($destinationPath, $profilePicture);
          if($request->input('prevLogo') != ''){
              @unlink(public_path('/frontend-assets/dashboard/post/'.$request->input('prevLogo')));
          }
          $image_name=$profilePicture;
          $insert_data['blog_image'] = $image_name;
          }
          if ($blog_id !="") {
            $post = DB::table('sp_blogs')->where('blog_id','=',$blog_id)->update($insert_data);
          }else {
            $post = DB::table('sp_blogs')->insert($insert_data);
          }
          return redirect('dashboard/blogs')->with('Blog added successfully...!');


      }

      /**
       * Display the specified resource.
       *
       * @param  \App\Blog  $blog
       * @return \Illuminate\Http\Response
       */
      public function show(Request $request,$id)
      {
          $post = DB::table('fa_blogs')->where('id','=',$id)->first();
          $top_three_posts = DB::table('fa_blogs')->orderBy('updated_at', 'desc')->limit(3)->get();
          return view('frontend.show_blog', compact('post','top_three_posts'));
      }

      /**
       * Show the form for editing the specified resource.
       *
       * @param  \App\Blog  $blog
       * @return \Illuminate\Http\Response
       */
      public function edit(Request $request,$id)
      {
          $blog = DB::table('sp_blogs')->where('blog_id','=',$id)->first();
          return view('admin.edit_blog',compact('blog'));
      }

      /**
       * Update the specified resource in storage.
       *
       * @param  \Illuminate\Http\Request  $request
       * @param  \App\Blog  $blog
       * @return \Illuminate\Http\Response
       */
      public function update(Request $request, Blog $blog)
      {
          //
          $this->validate($request, [
              'title' => 'required',
              'body' => 'required',
              'user_id' => 'required',
              'post_image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:80048'
          ]);

           if($request->hasfile('post_image')){
            $image_name = $request->file('post_image')->getClientOriginalName();
            $request->file('post_image')->move(public_path().'/images/posts/', $image_name);
          }else{
              $image_name = $request->input('blog_image');
          }


          $id = $request->input('id');
          $update_data = array(
              'title' => $request->input('title'),
              'body' => $request->input('body'),
              'blog_image' => $image_name,
              'user_id' => session()->get('u_session')->id
          );
          $posts = Blog::where('id',$id)->update($update_data);
          return redirect('admin/blog')->with('Blog updated successfully...!');
      }

      /**
       * Remove the specified resource from storage.
       *
       * @param  \App\Blog  $blog
       * @return \Illuminate\Http\Response
       */
       public function destroy(Request $request)
       {
         if($request->isMethod('delete')){
           $blog_id = trim($request->input('blog_id'));
           $blog_image = DB::table('sp_blogs')->where('blog_id',$blog_id)->first()->blog_image;
           $blog = DB::table('sp_blogs')->where('blog_id',$blog_id)->delete();
           if($blog_image != ''){
               @unlink(public_path('/frontend-assets/dashboard/post/'.$blog_image));
           }
           $request->session()->flash('message' , 'Blog Deleted Successfully');
         }
         return redirect(url()->previous());
       }
  
}
