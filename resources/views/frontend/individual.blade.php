@extends('frontend.layouts.master')
@section('title', 'Spectan LLC - Individual')
@section('styling')
@endsection
@section('content')
<!-- bradcam_area  -->
 <div class="bradcam_area bradcam_bg_2">
		 <div class="container">
				 <div class="row">
						 <div class="col-xl-12">
								 <div class="bradcam_text">
										 <h3>Individual Tax Quote</h3>
								 </div>
						 </div>
				 </div>
		 </div>
 </div>
<!--/ bradcam_area  -->

<!-- ================ contact section start ================= -->
<section class="contact-section">
 <div class="container">
		 <div class="row">
				 <div class="col-12">
						 <h2 class="contact-title text-center">Select all options that apply to you. Your quote will be displayed below.

						 </h2>
				 </div>
		 </div>
		 <hr>
		 <div class="row">
				 <div class="qoute-grid">
						 <div class="qoute-single">
								 <p>Federal Return</p>
						 </div>
				 </div>
				 <div class="qoute-grid">
						 <div class="qoute-single">
								 <p>State Return</p>
						 </div>
				 </div>
				 <div class="qoute-grid">
						 <div class="qoute-single">
								 <p>Additional State Return</p>
						 </div>
				 </div>
				 <div class="qoute-grid">
						 <div class="qoute-single">
								 <p>City or Local Return</p>
						 </div>
				 </div>
				 <div class="qoute-grid">
						 <div class="qoute-single">
								 <p>Federal Return Amendment</p>
						 </div>
				 </div>
				 <div class="qoute-grid">
						 <div class="qoute-single">
								 <p>Self-employed</p>
						 </div>
				 </div>
				 <div class="qoute-grid">
						 <div class="qoute-single">
								 <p>Own Rental Property</p>
						 </div>
				 </div>
				 <div class="qoute-grid">
						 <div class="qoute-single">
								 <p>Farm Income</p>
						 </div>
				 </div>
				 <div class="qoute-grid">
						 <div class="qoute-single">
								 <p>Alternative Motor Vehicle Credit</p>
						 </div>
				 </div>
				 <div class="qoute-grid">
						 <div class="qoute-single">
								 <p>Foreign Bank Account Report</p>
						 </div>
				 </div>
				 <div class="qoute-grid">
						 <div class="qoute-single">
								 <p>Foreign Earned Income Exclusion</p>
						 </div>
				 </div>
				 <div class="qoute-grid">
						 <div class="qoute-single">
								 <p>Household Employment Taxes</p>
						 </div>
				 </div>
				 <div class="qoute-grid">
						 <div class="qoute-single">
								 <p>Injured/Innocent Spouse Relief</p>
						 </div>
				 </div>
				 <div class="qoute-grid">
						 <div class="qoute-single">
								 <p>Partnership/S-Corp/ Estate K-1</p>
						 </div>
				 </div>
				 <div class="qoute-grid">
						 <div class="qoute-single">
								 <p>Residential Energy Credits</p>
						 </div>
				 </div>
		 </div>
		 <hr>
		 <div class="row">
				 <div class="col-12">
						 <h3 class="text-center">The cost to prepare your return is $ {total Amount}</h3>
						 <p class="text-center individual_para_1">If you are ready to have us prepare your return, please <a style="color:blue;" href="{{url('/spectan/contact-us')}}">Contact Us</a> and choose the <strong style="font-weight:700">Portal Access</strong> option. We will send you an invitation to our secure two-way portal where you can upload your documents and exchange information with us.</p>
						 <hr>
						 <p class="text-center individual_para_2">* This quote is based on the options you chose above. If you did not select all situations that apply to you, the amount due on your invoice may be higher than the system-provided quote. In addition, only the most common tax situations are listed above. Additional fees may apply if your tax situation requires more forms than the above to be prepared. Preparation fees must be paid prior to filing the return and releasing copies.<br>
						 ** The cost of preparing additional schedules E for rental properties is $50 per schedule E.<br>
						 *** The cost of including additional K-1s on the return is $40 per K-1.
						 </p>
				 </div>
		 </div>
				 <!-- <div class="col-lg-3 offset-lg-1">
						 <div class="media contact-info">
								 <span class="contact-info__icon"><i class="ti-email"></i></span>
								 <div class="media-body">
										 <h3>support@spectan.com</h3>
										 <p>Send us your query anytime!</p>
								 </div>
						 </div>
				 </div> -->
		 </div>
 </div>
</section>
<!-- ================ contact section end ================= -->

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
