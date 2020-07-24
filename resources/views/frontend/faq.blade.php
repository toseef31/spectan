@extends('frontend.layouts.master')
@section('title', 'Spectan LLC - FAQ')
@section('styling')
@endsection
@section('content')
<!-- bradcam_area  -->
<div class="bradcam_area bradcam_bg_1">
	<div class="container">
		<div class="row">
			<div class="col-xl-12">
				<div class="bradcam_text">
					<h3>Frequently Asked Questions</h3>
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
			<div class="col-xl-12 col-lg-12">
				<div class="about_text">
					{!! $faq->description !!}
					<!-- <p class="theme-blue-text"><strong>What is an Enrolled Agent?</strong></p>
					<p>An Enrolled Agent (EA) is a federally-licensed tax practitioner who may represent taxpayers before the IRS when it comes to collections, audits, and appeals. EAs are granted unlimited practice rights to represent taxpayers before the IRS and are authorized to advise, represent, and prepare tax returns for individuals, partnerships, corporations, estates, trusts, and any other entities with tax-reporting requirements. Enrolled agents are the only federally-licensed tax practitioners who specialize in taxation and have unlimited rights to represent taxpayers before the IRS.</p> -->
				</div>
			</div>
		</div>
		<hr>

		<!-- <div class="row align-items-center">
			<div class="col-xl-12 col-lg-12">
				<div class="about_text">
					<p class="theme-blue-text"><strong>What's the difference between Enrolled Agents and other tax professionals?</strong></p>
					<p>Enrolled Agents are federally-licensed and are required to desmonstrate to the IRS their competence in all areas of taxation, representation, and ethics before they are awarded unlimited representation rights before IRS. Attorneys and CPAs are state-licensed, and may or may not choose to specialize in taxes, whereas all enrolled agents specialize in taxation.</p>
				</div>
			</div>
		</div>
		<hr>

		<div class="row align-items-center">
			<div class="col-xl-12 col-lg-12">
				<div class="about_text">
					<p class="theme-blue-text"><strong>What makes you different than other tax preparation firms?</strong></p>
					<p>We are a team of professonials who focus on taxes only. That is where our strength lies. We provide individuals with instant quotes without the need to enter personal details, allowing them to determine if we are a good fit for them before they ever reach out to us. Now, that's refreshing.</p>
				</div>
			</div>
		</div>
		<hr>

		<div class="row align-items-center">
			<div class="col-xl-12 col-lg-12">
				<div class="about_text">
					<p class="theme-blue-text"><strong>What can I deduct on my taxes?</strong></p>
					<p>It depends on your personal tax situation. Tax laws change on a yearly basis. This is one reason why it's so important to let an expert handle your taxes.</p>
				</div>
			</div>
		</div>
		<hr>

		<div class="row align-items-center">
			<div class="col-xl-12 col-lg-12">
				<div class="about_text">
					<p class="theme-blue-text"><strong>How much will it cost?</strong></p>
					<p>Get an instant quote for individual returns. If you need assistance with a business return, please provide some information here and we will get back to you within 48 hours.</p>
				</div>
			</div>
		</div>
		<hr>

		<div class="row align-items-center">
			<div class="col-xl-12 col-lg-12">
				<div class="about_text">
					<p class="theme-blue-text"><strong>When/How do I pay?</strong></p>
					<p>You will pay when your return is ready to be e-filed. We will send you an invoice.</p>
				</div>
			</div>
		</div>
		<hr>

		<div class="row align-items-center">
			<div class="col-xl-12 col-lg-12">
				<div class="about_text">
					<p class="theme-blue-text"><strong>Which methods of payment do you accept?</strong></p>
					<p>When you receive your invoice, you can pay via any major credit card or ACH bank transfer.</p>
				</div>
			</div>
		</div>
		<hr>

		<div class="row align-items-center">
			<div class="col-xl-12 col-lg-12">
				<div class="about_text">
					<p class="theme-blue-text"><strong>How long does it take?</strong></p>
					<p>Once you've uploaded all your documents and provided all required information, you return will be completed within 3 business days.</p>
				</div>
			</div>
		</div>
		<hr>

		<div class="row align-items-center">
			<div class="col-xl-12 col-lg-12">
				<div class="about_text">
					<p class="theme-blue-text"><strong>Is my information secure?</strong></p>
					<p>Absolutely! All documents and communications are handled through our secure portal.</p>
				</div>
			</div>
		</div>
		<hr> -->
	</div>
</div>
<!-- /about_info_area end  -->

@endsection
@section('script')
@endsection
