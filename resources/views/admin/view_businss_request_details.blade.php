@extends('admin.layouts.master')
@section('content')
<style>
.search-row {
  margin: 0;
  /* box-shadow: 0px -1px 1px 1px #ccc; */
  background: transparent;
}
.search-row .col-md-3 {
    align-items: center;
    display: grid;
    height: 183px;
    border-right: 2px solid #afafaf;
}
.search-row .col-md-6 {
    padding: 16px;
}
.form-group {
    margin-bottom: 15px;
}
.search-label label {
    background: #ecebeb;
    padding: 3px 15px 5px;
    border-radius: 2px;
    box-shadow: 1px 0px 3px 1px #ccc;
    margin-right: 10px;
    font-weight: 400;
}
.search-label a {
    color: black;
}
.search-box select {
    margin: 0 5px;
    padding: 3px;
    background: white;
    border-right: 1px solid #aba4a4 !important;
}
.search-box {
    display: -webkit-box;
    display: -ms-inline-flexbox;
}
.search-btn {
  position: absolute;
  top: -15px;
  right: 45px;
}
</style>
  <div class="wrapper">
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#pablo">Timesheet Details</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
            <div class="collapse navbar-collapse justify-content-end" id="navigation">

            <ul class="navbar-nav">

              <li class="nav-item btn-rotate dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  {{Session::get('sp_admin')->name}}
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="{{ url('dashboard/logout') }}">Logout</a>
                </div>
              </li>

            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <!-- <div class="panel-header panel-header-sm">


</div> -->
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <!-- <h4 class="card-title"> Clients List <a href="{{url('dashboard/admin/add')}}" style="float:right;font-size: 15px;font-size: 12px; color:white;" type="button" class="btn btn-md btn-primary">Add Customer</a></h4> -->
              </div>

              <div class="card-body">
                <div class="table-responsive">
                  @if(session()->has('message'))
                    <div class="row">
                      <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                        <strong>Message:</strong>{{session()->get('message')}}
                      </div>
                    </div>
                  @endif
                  <div class="show_data">
                    <table class="table" style="margin-top:30px;">
                      <thead class=" text-primary">

                      </thead>
                      <tbody>
                        <tr>
                          <td>Name</td>
                          <td  style="border-left: 1px solid #ccc;">
                            {{$quote->first_name}} {{$quote->last_name}}
                          </td>
                        </tr>
                        <tr>
                          <td>Email</td>
                          <td style="border-left: 1px solid #ccc;">{{$quote->email}}</td>
                        </tr>
                        <tr>
                          <td>Phone</td>
                          <td style="border-left: 1px solid #ccc;">{{$quote->phone}}</td>
                        </tr>
                        <tr>
                          <td>Compnay</td>
                          <td style="border-left: 1px solid #ccc;">{{$quote->company_name}}</td>
                        </tr>
                        <tr>
                          <td>State</td>
                          <td style="border-left: 1px solid #ccc;">{{$quote->state}}</td>
                        </tr>
                        <tr>
                          <td>Additional State</td>
                          <td style="border-left: 1px solid #ccc;">{{$quote->additional_state}}</td>
                        </tr>
                        <tr>
                          <td>Business Structure</td>
                          <td style="border-left: 1px solid #ccc;">{{$quote->business_structure}}</td>
                        </tr>
                        <tr>
                          <td>Primary Product/Service</td>
                          <td style="border-left: 1px solid #ccc;">{{$quote->primary_product}}</td>
                        </tr>
                        <tr>
                          <td>Bookkeeping System</td>
                          <td style="border-left: 1px solid #ccc;">{{$quote->bookkeeping_system}}</td>
                        </tr>
                        <tr>
                          <td>Prior Year Business Returns</td>
                          <td style="border-left: 1px solid #ccc;">{{$quote->prior_business_return}}</td>
                        </tr>
                        <tr>
                          <td>Other</td>
                          <td style="border-left: 1px solid #ccc;">{{$quote->other}}</td>
                        </tr>
                        <tr>
                          <td>Email</td>
                          <td style="border-left: 1px solid #ccc;">{{$quote->email}}</td>
                        </tr>
                        <tr>
                          <td>About Us</td>
                          <td style="border-left: 1px solid #ccc;">{{$quote->about_us}}</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="modal-warning" role="dialog" class="modal fade in" data-backdrop="static" data-keyboard="false">
      <div class="modal-dialog">
          <div class="modal-content bg-warning animated bounceIn">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">
                      <span aria-hidden="true">&times;</span>
                      <span class="sr-only">Close</span>
                  </button>
              </div>
              <div class="modal-body">
                  <div class="text-center">
                      <span class="icon icon-exclamation-triangle icon-5x"></span>
                      <h3>Are you sure?</h3>
                      <p>You will not be able to undo this action.</p>
                      <div class="m-t-lg">
                          <form method="post" action="{{ url('dashboard/delete-timesheet') }}">
                              <input type="hidden" name="_method" value="delete">
                              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                              <input type="hidden" name="timesheet_id" class="actionId">
                              <button class="btn btn-danger" type="submit">Continue</button>
                              <button class="btn btn-default" data-dismiss="modal" type="button">Cancel</button>
                          </form>
                      </div>
                  </div>
              </div>
              <div class="modal-footer"></div>
          </div>
      </div>
  </div>
@endsection

@section('script')
<script>
function deleteTimesheet(userId){
    $('.actionId').val(userId);
    $('#modal-warning').modal();
}
function doAction(){
    var userId = $('.actionId').val();
    if(userId != ''){
        alert('delete this '+userId);
    }
}

$('#time_period').on('change',function () {
  var period = $(this).val();
  var tutor_id = "{{Request::segment(3)}}";
  // alert(period);
  $.ajaxSetup({
   headers: {
     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
   }
 });
 $.ajax({
         type: "POST",
         url: "{{ url('dashboard/tutor_reports_ajax') }}",
         data: {tutor_id:tutor_id,period:period},
         success: function(data){
           $('.show_data').html(data);

           // console.log(data);
         }

   });
});
</script>
@endsection
