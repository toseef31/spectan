@extends('frontend.layouts.master')
@section('title', 'Spectan LLC - Contact Us')
@section('styling')
@endsection
@section('content')
<!-- bradcam_area  -->
<div class="bradcam_area bradcam_bg_1">
  <div class="container">
      <div class="row">
          <div class="col-xl-12">
              <div class="bradcam_text">
                  <h3>Contact Us</h3>
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
			<div class="col-8">
				<h2 class="contact-title text-center">What do you need help with?</h2>
			</div>
			<div class="col-lg-8">
				<form class="form-contact contact_form" action="{{url('spectan/contactUs')}}" method="post" id="contactForm2">
          {{csrf_field()}}
          <div class="row">
						<div class="col-3">
							<div class="form-group">
								<div class="switch-wrap d-flex justify-content-between">
									<div class="primary-radio">
										<input type="radio" id="default-radio" checked="checked" name="query_type">
										<label for="default-radio"></label>
									</div>
									<p>General Question</p>
								</div>
							</div>
						</div>

						<div class="col-3 offset-lg-3">
							<div class="form-group">
								<div class="switch-wrap d-flex justify-content-between">
									<div class="primary-radio">
										<input type="radio" id="default-radio2"  name="query_type">
										<label for="default-radio2"></label>
									</div>
									<p>Portal Access</p>
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<input class="form-control valid" name="first_name" id="first_name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'First Name'" placeholder="First Name" required>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<input class="form-control valid" name="last_name" id="last_name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Last Name'" placeholder="Last Name">
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-group">
								<input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email" required>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-group">
								<input class="form-control valid" name="email" id="phone" type="phone" onfocus="this.placeholder = ''" onblur="this.placeholder = ' Phone Number'" placeholder="Phone Number" required>
							</div>
						</div>
						<div class="col-12">
							<div class="form-group">
								<textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder=" Enter Message" required></textarea>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-4 offset-lg-4">
							<div class="form-group mt-3">
								<button type="submit" class="button button-contactForm boxed-btn btn-block">Send</button>
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="col-lg-3 offset-lg-1">
				<div class="media contact-info">
					<span class="contact-info__icon"><i class="ti-email"></i></span>
					<div class="media-body">
						<h3>support@spectan.com</h3>
					</div>
				</div>
			</div>
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
