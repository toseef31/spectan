@extends('frontend.layouts.master')
@section('title', 'Spectan LLC')
@section('styling')
@endsection
@section('content')
<!-- slider_area_start -->
<div class="slider_area">
	<div class="slider_active owl-carousel">
		<div class="single_slider  d-flex align-items-center slider_bg_1 overlay2">
			<div class="container">
				<div class="row">
					<div class="col-xl-12">
						<div class="slider_text text-center">
							<p>We offer tax preparation services. That's it. Nothing else to distract us.
								That's why we're so good at it.</p>
								<h5>Licensed in all 50 States.</h5>
								<h3>We are America's tax experts!</h3>
							</div>
						</div>
						<div class="col-xl-3"></div>
						<div class="col-xl-3">
							<a href="{{url('/spectan/personal-returns')}}" class="genric-btn info btn-block e-large"><i class="fa fa-user"></i> Personal Returns</a>
						</div>
						<div class="col-xl-3">
							<a href="{{url('/spectan/business-returns')}}" class="genric-btn info btn-block e-large"><i class="fa fa-briefcase"></i> Business Returns</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- slider_area_end -->
<!-- Welcome start  -->
<div class="welcome_section mt-50">
	<div class="container">
		<h1 class="text-center mb-60 ucfirst">How it works</h1>
		<div class="row">
			<div class="col-md-4">
				<div class="single-defination text-center">
					<div class="sd-icon">
						<i class="fa fa-phone"></i>
					</div>
					<h4 class="mb-20 mt-30">Get a quote and contact us</h4>
					<p>Get an instant quote (personal returns only) and request access to our secure bi-directional portal.</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="single-defination text-center">
					<div class="sd-icon">
						<i class="fa fa-file-o"></i>
					</div>
					<h4 class="mb-20 mt-30">Upload your tax documents</h4>
					<p>We send you a personalized link to our portal, along with information we need from you. Simply upload your tax files and respond to our questions (all in the portal!).</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="single-defination text-center">
					<div class="sd-icon">
						<i class="fa fa-bath"></i>
					</div>
					<h4 class="mb-20 mt-30">Sit back and relax</h4>
					<p>We prepare your return and send it to you for review and approval. Once approved, you pay, we e-file the return, and voila!</p>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Welcome end  -->
<!-- case_study_area  -->
<div class="case_study_area">
	<div class="container">
		<div class="border_bottom">
			<div class="row">
				<div class="col-xl-12">
					<div class="case_active owl-carousel">
						<div class="single_case">
							<div class="case_thumb">
								<img src="{{asset('/frontend-assets/img/case/1.png')}}" alt="">
							</div>
							<div class="case_heading">
								<span>Professional Services</span>
								<h3><a href="#">Accounting services for a wide variety of client</a></h3>
							</div>
						</div>
						<div class="single_case">
							<div class="case_thumb">
								<img src="{{asset('/frontend-assets/img/case/2.png')}}" alt="">
							</div>
							<div class="case_heading">
								<span>Dedicated Professional</span>
								<h3><a href="#">Accounting & tax preparartion services to keep your business on track</a></h3>
							</div>
						</div>
						<div class="single_case">
							<div class="case_thumb">
								<img src="{{asset('/frontend-assets/img/case/3.png')}}" alt="">
							</div>
							<div class="case_heading">
								<span>Need Assistance?</span>
								<h3><a href="#">Get answer to your question and every deduction coming to you.</a></h3>
							</div>
						</div>
						<div class="single_case">
							<div class="case_thumb">
								<img src="{{asset('/frontend-assets/img/case/4.png')}}" alt="">
							</div>
							<div class="case_heading">
								<span>Expert Tax & Accounting Advice</span>
								<h3><a href="#">Experience and Knowledge to let you focus on the big picture</a></h3>
							</div>
						</div>
						<div class="single_case">
							<div class="case_thumb">
								<img src="{{asset('/frontend-assets/img/case/6.png')}}" alt="">
							</div>
							<div class="case_heading">
								<span>Contact Us From Any Where</span>
								<h3><a href="#">Lets start making the most of your money</a></h3>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /case_study_area  -->
<!-- Information_area  -->
<div class="Information_area overlay">
		<div class="container">
				<div class="row justify-content-center align-items-center">
						<div class="col-xl-9">
								<div class="info_text text-center">
										<h3>Find out how we can help you</h3>
										<p></p>
										<a class="boxed-btn3" href="{{url('/spectan/contact-us')}}">Say hello</a>
								</div>
						</div>
				</div>
		</div>
</div>
<!-- /Information_area  end -->

@endsection
@section('script')
@endsection
