@extends('frontend.layouts.master')
@section('title', 'Spectan LLC - About us')
@section('styling')
@endsection
@section('content')
<!-- bradcam_area  -->
<div class="bradcam_area bradcam_bg_1">
  <div class="container">
    <div class="row">
      <div class="col-xl-12">
        <div class="bradcam_text">
          <h3>About Us</h3>
        </div>
      </div>
    </div>
  </div>
</div>
<!--/ bradcam_area  -->

<!-- about_info_area start  -->
<div class="about_info_area plus_padding">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-xl-8 col-lg-8">
        <div class="about_text text-center">

          <p>We are a team of tax professionals who pride ourselves on our tax laws knowledge, the savings we are able to pass on to our clients, and the fantastic quality of our service.</p>
          <p>Our practice is comprised of Enrolled Agents admitted to practice before the IRS. We are federally-licensed tax practitioners who can represent taxpayers before the IRS when it comes to collections, audits, and appeals. We specialize in tax preparation for a wide variety of clients.</p>

        </div>
      </div>
      <div class="col-xl-4 col-lg-4">
        <div class="about_thumb">
          <img src="{{asset('/frontend-assets/img/Enrolled-Agent.jpg')}}" alt="">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xl-12 col-lg-12  text-center">
        <p>Although we are smart and knowledgeable, and have successfully gone through the stringent IRS application and testing process, we do not rest on those facts. We keep up with the latest tax laws and updates to existing ones. We complete continuing education on a yearly basis and adhere ourselves to the highest level of ethics and morals.</p>
        <hr>
        <p><strong><a href="{{url('/spectan/contact-us')}}" class="genric-btn info ">Contact us</a></strong> today to learn more, or <a href="{{url('/spectan/get-a-quote')}}" class="genric-btn info "><strong>get a quote.</strong></a></p>
      </div>
    </div>
  </div>
</div>
<!-- /about_info_area end  -->
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
