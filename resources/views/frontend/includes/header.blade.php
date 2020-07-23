<!-- header-start -->
	 <header>
			 <div class="header-area ">
					 <div class="header-top_area d-none d-lg-block">
							 <div class="container">
									 <div class="row">
											 <div class="col-xl-5 col-md-5 ">
													 <div class="header_left">
															 <p><strong>TODAY IS :</strong> &nbsp;<span id="show-date"></span></p>
													 </div>
											 </div>
											 <div class="col-xl-7 col-md-7">
													 <div class="header_right d-flex">
															 <div class="short_contact_list">
																	 <ul>
																			 <li><a href="#"> <i class="fa fa-envelope"></i>support@spectan.com</a></li>
																	 </ul>
															 </div>
															 <div class="social_media_links">
																	 <a href="http://www.facebook.com/spectanllc">
																			 <i class="fa fa-facebook"></i>
																	 </a>
															 </div>
													 </div>

											 </div>
									 </div>
							 </div>
					 </div>
					 <div id="sticky-header" class="main-header-area">
							 <div class="container">
									 <div class="header_bottom_border">
											 <div class="row align-items-center">
													 <div class="col-xl-6 col-lg-6">
															 <div class="logo">
																	 <a href="{{url('/')}}">
																			 <img src="{{asset('/frontend-assets/img/logo.png')}}" alt="">
																	 </a>
															 </div>
													 </div>
													 <?php
													  // dd(request());
														?>
													 <div class="col-xl-6 col-lg-6">
															 <div class="main-menu  d-none d-lg-block">
																	 <nav>
																			 <ul id="navigation">
																					 <li><a class="{{request()->is('/') ? 'active' : '' }}" href="{{url('/')}}">home</a></li>
																					 <li><a class="{{request()->is('spectan/personal-returns') || request()->is('spectan/business-returns') ? 'active' : '' }}" href="#">Services <i class="ti-angle-down"></i></a>
																							 <ul class="submenu">
																									 <li><a href="{{url('/spectan/personal-returns')}}">Personal Returns</a></li>
																									 <li><a href="{{url('/spectan/business-returns')}}">Business Returns</a></li>
																							 </ul>
																					 </li>
																					 <li><a class="{{request()->is('spectan/faq') ? 'active' : '' }}" href="{{url('/spectan/faq')}}">FAQ</a></li>
																					 <li><a class="{{request()->is('spectan/contact-us') ? 'active' : '' }}" href="{{url('/spectan/contact-us')}}">Contact Us</a></li>
																					 <li>
																							 <div class="Appointment">
																									 <div class="book_btn d-none d-lg-block">
																											 <a class="{{request()->is('spectan/get-a-quote') ? 'active' : '' }}" href="{{url('/spectan/get-a-quote')}}">Get a Quote</a>
																									 </div>
																							 </div>
																					 </li>
																			 </ul>
																	 </nav>
															 </div>
													 </div>
													 <div class="col-12">
															 <div class="mobile_menu d-block d-lg-none"></div>
													 </div>
											 </div>
									 </div>

							 </div>
					 </div>
			 </div>
	 </header>
	 <!-- header-end -->
