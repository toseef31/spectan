@extends('frontend.layouts.master')
@section('title', 'Spectan LLC - Blog')
@section('styling')
<style>
.pagination .page-link {
    font-size: 14px;
  position: relative;
  display: block;
  padding: 0;
  text-align: center;
  margin-left: -1px;
  line-height: 45px;
  width: 45px;
  height: 45px;
  border-radius: 0 !important;
  color: #8a8a8a;
  border: 1px solid #f0e9ff;
  margin-right: 10px;
}
.page-item:first-child .page-link {
  font-size: 30px;
}
.page-item:last-child .page-link {
  font-size: 30px;
}
</style>
@endsection
@section('content')
<!-- bradcam_area  -->
<div class="bradcam_area bradcam_bg_1">
  <div class="container">
    <div class="row">
      <div class="col-xl-12">
        <div class="bradcam_text">
          <h3>Blog</h3>
        </div>
      </div>
    </div>
  </div>
</div>
<!--/ bradcam_area  -->


<!--================Blog Area =================-->
<section class="blog_area section-padding">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 mb-5 mb-lg-0">
        <div class="blog_left_sidebar">
          @foreach($blogs as $blog)
          <article class="blog_item">
            <div class="blog_item_img">
              <img class="card-img rounded-0" src="{{asset('/frontend-assets/dashboard/post/'.$blog->blog_image)}}" alt="">
              <a href="#" class="blog_item_date">
                <?php
                $date1 = date('d', strtotime($blog->created_at));
                $date2 = date('M', strtotime($blog->created_at));
                 ?>
                <h3>{{$date1}}</h3>
                <p>{{$date2}}</p>
              </a>
            </div>

            <div class="blog_details">
              <a class="d-inline-block" href="{{url('/spectan/blog-details/'.$blog->blog_id)}}">
                <h2>{{str_limit($blog->title,50)}}</h2>
              </a>
              <p>{!! str_limit($blog->body,200)!!}</p>
              <!-- <ul class="blog-info-link">
                <li><a href="#"><i class="fa fa-user"></i> Admin</a></li>
                <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li>
              </ul> -->
            </div>
          </article>
          @endforeach
          <nav class="blog-pagination justify-content-center d-flex">
            {{$blogs->render()}}
          </nav>

          <!-- <nav class="blog-pagination justify-content-center d-flex">
            <ul class="pagination">
              <li class="page-item">
                <a href="#" class="page-link" aria-label="Previous">
                  <i class="ti-angle-left"></i>
                </a>
              </li>
              <li class="page-item">
                <a href="#" class="page-link">1</a>
              </li>
              <li class="page-item active">
                <a href="#" class="page-link">2</a>
              </li>
              <li class="page-item">
                <a href="#" class="page-link" aria-label="Next">
                  <i class="ti-angle-right"></i>
                </a>
              </li>
            </ul>
          </nav> -->

        </div>
      </div>
      <div class="col-lg-4">
        <div class="blog_right_sidebar">
          <!-- <aside class="single_sidebar_widget search_widget">
            <form action="#">
              <div class="form-group">
                <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder='Search Keyword'
                  onfocus="this.placeholder = ''"
                  onblur="this.placeholder = 'Search Keyword'">
                  <div class="input-group-append">
                    <button class="btn" type="button"><i class="ti-search"></i></button>
                  </div>
                </div>
              </div>
              <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
              type="submit">Search</button>
            </form>
          </aside> -->

          <aside class="single_sidebar_widget popular_post_widget">
            <h3 class="widget_title">Recent Post</h3>
            @foreach($recent_blogs as $blog)
            <div class="media post_item">
              <img src="{{asset('/frontend-assets/dashboard/post/'.$blog->blog_image)}}" alt="post" style="width:80px; height:80px;">
              <div class="media-body">
                <a href="{{url('/spectan/blog-details/'.$blog->blog_id)}}">
                  <h3>{{str_limit($blog->title,50)}}</h3>
                </a>
                <?php
                $date = date('F d, Y',strtotime($blog->created_at));
                 ?>
                <p>{{$date}}</p>
              </div>
            </div>
            @endforeach
            <!-- <div class="media post_item">
              <img src="{{asset('/frontend-assets/img/post/post_2.png')}}" alt="post">
              <div class="media-body">
                <a href="{{url('/spectan/single-blog')}}">
                  <h3>The Amazing Hubble</h3>
                </a>
                <p>02 Hours ago</p>
              </div>
            </div>
            <div class="media post_item">
              <img src="{{asset('/frontend-assets/img/post/post_3.png')}}" alt="post">
              <div class="media-body">
                <a href="{{url('/spectan/single-blog')}}">
                  <h3>Astronomy Or Astrology</h3>
                </a>
                <p>03 Hours ago</p>
              </div>
            </div>
            <div class="media post_item">
              <img src="{{asset('/frontend-assets/img/post/post_4.png')}}" alt="post">
              <div class="media-body">
                <a href="{{url('/spectan/single-blog')}}">
                  <h3>Asteroids telescope</h3>
                </a>
                <p>01 Hours ago</p>
              </div>
            </div> -->
          </aside>
        </div>
      </div>
    </div>
  </div>
</section>
<!--================Blog Area =================-->

@endsection
@section('script')
<script>
$('#datepicker').datepicker({
  iconsLibrary: 'fontawesome',
  icons: {
    rightIcon: '<span class="fa fa-caret-down"></span>'
  }
});
$('#datepicker2').datepicker({
  iconsLibrary: 'fontawesome',
  icons: {
    rightIcon: '<span class="fa fa-caret-down"></span>'
  }

});
</script>
@endsection
