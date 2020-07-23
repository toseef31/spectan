@extends('frontend.layouts.master')
@section('title', 'Spectan LLC - Get a quote')
@section('styling')
@endsection
@section('content')
<!-- slider_area_start -->
<div class="slider_area">
	<div class="slider_active owl-carousel">
		<div class="single_slider  d-flex align-items-center slider_bg_3 overlay2">
			<div class="container">
				<div class="row">
					<div class="col-xl-12">
						<div class="slider_text_2 ">
							<h3>Which service are you looking to get a quote for?</h3>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-1 col-md-1 "></div>
					<div class="col-xl-4 col-md-4 ">
						<div class="icon-quotebox">
							<div class="qoutbox-body">
								<a href="{{url('/spectan/individual')}}">
									<i class="fa fa-user"></i>
									<h3>Individual Return</h3>
								</a>
							</div>
							<div class="qoutbox-footer">
								<a href="{{url('/spectan/individual')}}">Get a quote</a>
							</div>
						</div>
					</div>
					<div class="col-xl-2 col-md-1 "></div>
					<div class="col-xl-4 col-md-4 ">
						<div class="icon-quotebox">
							<div class="qoutbox-body">
								<a href="{{url('/spectan/business-returns')}}">
									<i class="fa fa-briefcase"></i>
									<h3>Business Return</h3>
								</a>
							</div>
							<div class="qoutbox-footer">
								<a href="{{url('/spectan/business-returns')}}">Get a quote</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- slider_area_end -->
@endsection
@section('script')
@endsection
