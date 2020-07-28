@extends('frontend.layouts.master')
@section('title', 'Spectan LLC - Individual')
@section('styling')
<style media="screen">
  .qoute-grid label{
    width: 100%;
  }
</style>
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
           <label for="federal-return">
						 <div class="qoute-single">
								 <p>Federal Return</p>
                 <input type="checkbox" class="services" id="federal-return" name="service" value="140" style="display:none;">
						 </div>
             </label>
				 </div>
				 <div class="qoute-grid">
           <label for="state-return">
						 <div class="qoute-single">
								 <p>State Return</p>
                 <input type="checkbox" class="services" id="state-return" name="service" value="20" style="display:none;">
						 </div>
           </label>
				 </div>
				 <div class="qoute-grid">
           <label for="additional-state-return">
						 <div class="qoute-single">
               <p>Additional State Return</p>
                 <input type="checkbox" class="services" id="additional-state-return" name="service" value="40" style="display:none;">
						 </div>
           </label>
				 </div>
				 <div class="qoute-grid">
           <label for="city-local-return">
						 <div class="qoute-single">
               <p>City or Local Return</p>
                 <input type="checkbox" class="services" id="city-local-return" name="service" value="40" style="display:none;">
						 </div>
           </label>
				 </div>
				 <div class="qoute-grid">
           <label for="federal-return-amendment">
						 <div class="qoute-single">
               <p>Federal Return Amendment</p>
                 <input type="checkbox" class="services" id="federal-return-amendment" name="service" value="125" style="display:none;">
						 </div>
           </label>
				 </div>
				 <div class="qoute-grid">
           <label for="self-employed">
						 <div class="qoute-single">
               <p>Self-employed</p>
                 <input type="checkbox" class="services" id="self-employed" name="service" value="70" style="display:none;">
						 </div>
           </label>
				 </div>
				 <div class="qoute-grid">
           <label for="own-rental-property">
						 <div class="qoute-single">
               <p>Own Rental Property</p>
                 <input type="checkbox" class="services" id="own-rental-property" name="service" value="50" style="display:none;">
						 </div>
           </label>
				 </div>
				 <div class="qoute-grid">
           <label for="farm-income">
						 <div class="qoute-single">
               <p>Farm Income</p>
                 <input type="checkbox" class="services" id="farm-income" name="service" value="50" style="display:none;">
						 </div>
           </label>
				 </div>
				 <div class="qoute-grid">
           <label for="motor-vehicle-credit">
						 <div class="qoute-single">
               <p>Alternative Motor Vehicle Credit</p>
                 <input type="checkbox" class="services" id="motor-vehicle-credit" name="service" value="30" style="display:none;">
						 </div>
           </label>
				 </div>
				 <div class="qoute-grid">
           <label for="foreign-bank-account-report">
						 <div class="qoute-single">
               <p>Foreign Bank Account Report</p>
                 <input type="checkbox" class="services" id="foreign-bank-account-report" name="service" value="30" style="display:none;">
						 </div>
           </label>
				 </div>
				 <div class="qoute-grid">
           <label for="foreign-earned-income">
						 <div class="qoute-single">
               <p>Foreign Earned Income Exclusion</p>
                 <input type="checkbox" class="services" id="foreign-earned-income" name="service" value="50" style="display:none;">
						 </div>
           </label>
				 </div>
				 <div class="qoute-grid">
           <label for="household-employment-tax">
						 <div class="qoute-single">
               <p>Household Employment Taxes</p>
                 <input type="checkbox" class="services" id="household-employment-tax" name="service" value="40" style="display:none;">
						 </div>
           </label>
				 </div>
				 <div class="qoute-grid">
           <label for="spouse-relief">
						 <div class="qoute-single">
               <p>Injured/Innocent Spouse Relief</p>
                 <input type="checkbox" class="services" id="spouse-relief" name="service" value="40" style="display:none;">
						 </div>
           </label>
				 </div>
				 <div class="qoute-grid">
           <label for="partnership">
						 <div class="qoute-single">
               <p>Partnership/S-Corp/ Estate K-1</p>
                 <input type="checkbox" class="services" id="partnership" name="service" value="40" style="display:none;">
						 </div>
           </label>
				 </div>
				 <div class="qoute-grid">
           <label for="residential-energy-credits">
						 <div class="qoute-single">
               <p>Residential Energy Credits</p>
                 <input type="checkbox" class="services" id="residential-energy-credits" name="service" value="30" style="display:none;">
						 </div>
           </label>
				 </div>
		 </div>
		 <hr>
		 <div class="row">
				 <div class="col-12">
						 <h3 class="text-center">The cost to prepare your return is $ <span class="total"> 0</span></h3>
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
var sum = 0;
$(".services").change(function() {
    if(this.checked) {
      var amount = $(this).val();
      $(this).closest('.qoute-single').css('background','#5dff69');
      sum = parseFloat(sum) + Number($(this).val());
  }else {
      var amount = $(this).val();
      $(this).closest('.qoute-single').css('background','#5DB2FF');
      sum = parseFloat(sum) - Number($(this).val());
    }
    $('.total').html(sum);
});
</script>
@endsection
