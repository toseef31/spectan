@extends('frontend.layouts.master')
@section('title', 'Spectan LLC - Business Returns')
@section('styling')
@endsection
@section('content')
<!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_1">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="bradcam_text">
                            <h3>Business Returns</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ bradcam_area  -->

    <!-- service_area_start -->
    <div class="service_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title mb-50 mt-50 text-center">
                        <p>We love our partnership with businesses! We make filing your corporate taxes easy and straightforward. We are up-to-date on the latest tax laws and make sure your business's industry, individual financial situation, and allowable deductions are all taken into account. Get the following benefits by filing with us.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_service text-center returns-box">
                        <div class="service_icon">
                            <i class="fa fa-clock-o"></i>
                        </div>
                        <h3>Save time</h3>
                        <div class="personal_content">
                            <p>There's no need to step foot in our offices. Save yourself some time.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_service text-center returns-box">
                        <div class="service_icon">
                             <i class="fa fa-refresh"></i>
                        </div>
                        <h3>Get peace of mind</h3>
                        <div class="personal_content">
                            <p>Your return is prepared by an enrolled agent, guaranteeing that all tax law updates are taken into consideration.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_service text-center returns-box">
                        <div class="service_icon">
                            <i class="fa fa-dollar"></i>
                        </div>
                        <h3>Save money</h3>
                        <div class="personal_content">
                            <p>We look into all the deductions you are eligible for, thereby leaving more money in your pockets. Cha-Ching!</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_service text-center returns-box">
                        <div class="service_icon">
                            <i class="fa fa-life-ring"></i>
                        </div>
                        <h3>Year-round support</h3>
                        <div class="personal_content">
                            <p>Reach out at any time during the year, even if it's just to say hi.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_service text-center returns-box">
                        <div class="service_icon">
                            <i class="fa fa-shopping-cart"></i>
                        </div>
                        <h3>Ease and convenience</h3>
                        <div class="personal_content">
                            <p>Communicate and share documents with us via our secure portal. We'll take care of the heavy lifting.</p>
                        </div>

                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_service text-center returns-box">
                        <div class="service_icon">
                            <i class="fa fa-eye-slash"></i>
                        </div>
                        <h3>No hidden fees</h3>
                        <div class="personal_content">
                            <p>Our fees are not based on your refund. You only pay one flat fee. We like to be transparent.</p>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-xl-4 offset-xl-4">
                    <a href="{{url('/spectan/business-return-quote')}}" class="genric-btn info btn-block">GET A QUOTE</a>
                </div>
            </div>
        </div>
    </div>
    <!-- service_area_end -->
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
