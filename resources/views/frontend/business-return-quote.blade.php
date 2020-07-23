@extends('frontend.layouts.master')
@section('title', 'Spectan LLC - Business Return Quote')
@section('styling')
@endsection
@section('content')
<!-- bradcam_area  -->
        <div class="bradcam_area bradcam_bg_1">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="bradcam_text">
                                <h3>Business Return Quote Request</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ bradcam_area  -->

<!-- ================ Quote section start ================= -->
<section class="contact-section">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <p class="mb-50 text-center">Business returns are tricky. They vary in complexity depending on the size of the business, the industry, the number of partners, the amount of transactions, the bookkeeping system, etc. For this reason, we do not provide instant quotes for corporate returns. Fill in the form below and we will get back to you with a quote.</p>
      </div>
      <div class="col-lg-8 offset-lg-2">
        <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <input class="form-control valid" name="first_name" id="first_name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'First Name'" placeholder="First Name" required="required">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <input class="form-control valid" name="last_name" id="last_name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Last Name'" placeholder="Last Name">
              </div>
            </div>
            <div class="col-sm-12">
              <div class="form-group">
                <input class="form-control valid" name="phone" id="phone" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = ' Company Name'" placeholder="Company Name">
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <select name="states" class="form-control" required="required">
                  <option value="">Select State of Incorporation</option>
                  <option value="AL">Alabama</option>
                  <option value="AK">Alaska</option>
                  <option value="AZ">Arizona</option>
                  <option value="AR">Arkansas</option>
                  <option value="CA">California</option>
                  <option value="CO">Colorado</option>
                  <option value="CT">Connecticut</option>
                  <option value="DE">Delaware</option>
                  <option value="DC">District Of Columbia</option>
                  <option value="FL">Florida</option>
                  <option value="GA">Georgia</option>
                  <option value="HI">Hawaii</option>
                  <option value="ID">Idaho</option>
                  <option value="IL">Illinois</option>
                  <option value="IN">Indiana</option>
                  <option value="IA">Iowa</option>
                  <option value="KS">Kansas</option>
                  <option value="KY">Kentucky</option>
                  <option value="LA">Louisiana</option>
                  <option value="ME">Maine</option>
                  <option value="MD">Maryland</option>
                  <option value="MA">Massachusetts</option>
                  <option value="MI">Michigan</option>
                  <option value="MN">Minnesota</option>
                  <option value="MS">Mississippi</option>
                  <option value="MO">Missouri</option>
                  <option value="MT">Montana</option>
                  <option value="NE">Nebraska</option>
                  <option value="NV">Nevada</option>
                  <option value="NH">New Hampshire</option>
                  <option value="NJ">New Jersey</option>
                  <option value="NM">New Mexico</option>
                  <option value="NY">New York</option>
                  <option value="NC">North Carolina</option>
                  <option value="ND">North Dakota</option>
                  <option value="OH">Ohio</option>
                  <option value="OK">Oklahoma</option>
                  <option value="OR">Oregon</option>
                  <option value="PA">Pennsylvania</option>
                  <option value="RI">Rhode Island</option>
                  <option value="SC">South Carolina</option>
                  <option value="SD">South Dakota</option>
                  <option value="TN">Tennessee</option>
                  <option value="TX">Texas</option>
                  <option value="UT">Utah</option>
                  <option value="VT">Vermont</option>
                  <option value="VA">Virginia</option>
                  <option value="WA">Washington</option>
                  <option value="WV">West Virginia</option>
                  <option value="WI">Wisconsin</option>
                  <option value="WY">Wyoming</option>
                </select>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <select name="states" class="form-control" required="required">
                  <option value="">Select Additional State Return</option>
                  <option value="AL">Alabama</option>
                  <option value="AK">Alaska</option>
                  <option value="AZ">Arizona</option>
                  <option value="AR">Arkansas</option>
                  <option value="CA">California</option>
                  <option value="CO">Colorado</option>
                  <option value="CT">Connecticut</option>
                  <option value="DE">Delaware</option>
                  <option value="DC">District Of Columbia</option>
                  <option value="FL">Florida</option>
                  <option value="GA">Georgia</option>
                  <option value="HI">Hawaii</option>
                  <option value="ID">Idaho</option>
                  <option value="IL">Illinois</option>
                  <option value="IN">Indiana</option>
                  <option value="IA">Iowa</option>
                  <option value="KS">Kansas</option>
                  <option value="KY">Kentucky</option>
                  <option value="LA">Louisiana</option>
                  <option value="ME">Maine</option>
                  <option value="MD">Maryland</option>
                  <option value="MA">Massachusetts</option>
                  <option value="MI">Michigan</option>
                  <option value="MN">Minnesota</option>
                  <option value="MS">Mississippi</option>
                  <option value="MO">Missouri</option>
                  <option value="MT">Montana</option>
                  <option value="NE">Nebraska</option>
                  <option value="NV">Nevada</option>
                  <option value="NH">New Hampshire</option>
                  <option value="NJ">New Jersey</option>
                  <option value="NM">New Mexico</option>
                  <option value="NY">New York</option>
                  <option value="NC">North Carolina</option>
                  <option value="ND">North Dakota</option>
                  <option value="OH">Ohio</option>
                  <option value="OK">Oklahoma</option>
                  <option value="OR">Oregon</option>
                  <option value="PA">Pennsylvania</option>
                  <option value="RI">Rhode Island</option>
                  <option value="SC">South Carolina</option>
                  <option value="SD">South Dakota</option>
                  <option value="TN">Tennessee</option>
                  <option value="TX">Texas</option>
                  <option value="UT">Utah</option>
                  <option value="VT">Vermont</option>
                  <option value="VA">Virginia</option>
                  <option value="WA">Washington</option>
                  <option value="WV">West Virginia</option>
                  <option value="WI">Wisconsin</option>
                  <option value="WY">Wyoming</option>
                </select>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <select name="states" class="form-control" required="required">
                  <option value="">Select Business Structure for Tax Purposes</option>
                  <option value="Sole Proprietorship">Sole Proprietorship</option>
                  <option value="Single-Member LLC">Single-Member LLC</option>
                  <option value="Multi-Member LLC">Multi-Member LLC</option>
                  <option value="C-Corp">C-Corp</option>
                  <option value="S-Corp">S-Corp</option>
                  <option value="Partnership">Partnership</option>
                  <option value="Other">Other</option>
                </select>
              </div>
            </div>
            <div class="col-sm-12">
              <div class="form-group">
                <input class="form-control valid" name="" id="" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = ' Primary Product or Service'" placeholder="Primary Product or Service">
              </div>
            </div>
            <div class="col-sm-12">
              <div class="form-group">
                <input class="form-control valid" name="" id="" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Approximate Yearly Revenue'" placeholder="Approximate Yearly Revenue">
              </div>
            </div>
            <div class="col-sm-12">
              <div class="form-group">
                <input class="form-control valid" name="" id="" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Which bookkeeping system do you use?'" placeholder="Which bookkeeping system do you use?">
              </div>
            </div>
            <div class="col-sm-12">
              <div class="form-group">
                <input class="form-control valid" name="" id="" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Do you have a copy of your prior year business return?'" placeholder="Do you have a copy of your prior year business return?">
              </div>
            </div>
            <div class="col-sm-12">
              <div class="form-group">
                <input class="form-control valid" name="" id="" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Anything you would like to mention?'" placeholder="Anything you would like to mention?">
              </div>
            </div>
            <div class="col-sm-12">
              <div class="form-group">
                <input class="form-control valid" name="" id="" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'How did you hear about us?'" placeholder="How did you hear about us?">
              </div>
            </div>
            <div class="col-sm-12">
              <div class="form-group">
                <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
              </div>
            </div>
            <div class="col-sm-12">
              <div class="form-group">
                <input class="form-control valid" name="phone" id="phone" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = ' Phone Number'" placeholder="Phone Number">
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
          <!-- <span class="contact-info__icon"><i class="ti-email"></i></span>
          <div class="media-body">
          <h3>support@spectan.com</h3>
          <p>Send us your query anytime!</p>
        </div> -->
      </div>
    </div>
  </div>
</div>
</section>
<!-- ================ Quote section end ================= -->

@endsection
@section('script')
@endsection
