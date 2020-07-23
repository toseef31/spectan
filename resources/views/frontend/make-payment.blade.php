@extends('frontend.layouts.master')
@section('title', 'Spectan LLC - Blog')
@section('styling')
@endsection
@section('content')
<!-- bradcam_area  -->
<div class="bradcam_area make_a_payment_bg">
  <div class="container">
    <div class="row">
      <div class="col-xl-12">
        <div class="bradcam_text">
          <h3>Make a Payment</h3>
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
      <div class="col-xl-2 col-lg-2"></div>
      <div class="col-xl-8 col-lg-8">
        <div class="about_text payment-form">
          <article class="title">
            Make a Payment
          </article>
          <p class="text-center">Make a payment securely and easily through our online payment form. Payments may be made with a PayPal account or any major credit or debit card.</p>
          <hr>
          <form action="#">
            <label class="label ">Name</label>
            <div class="mt-10 mb-20">
              <input type="text" name="name" placeholder="Full Name"
              onfocus="this.placeholder = ''" onblur="this.placeholder = 'Full Name'" required
              class="single-input">
            </div>
            <label class="label ">Invoice Number</label>
            <div class="mt-10 mb-20">
              <input type="text" name="invoice_number" placeholder="Invoice Number"
              onfocus="this.placeholder = ''" onblur="this.placeholder = 'Invoice Number'" required
              class="single-input">
            </div>
            <label class="label ">Payment Amount</label>
            <div class="mt-10 mb-20">
              <input type="number" name="payment_amount" placeholder="Amount"
              onfocus="this.placeholder = ''" onblur="this.placeholder = 'Payment Amount'" required
              class="single-input">
            </div>

            <div class="mt-10 ">
              <div class="row">
                <div class="col-md-12">
                  <button type="button" class="genric-btn info large pull-right">MAKE A PAYMENT</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="col-xl-4 col-lg-4">
        <!--  <div class="about_thumb">
        <img src="img/service/about.png" alt="">
      </div> -->
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
