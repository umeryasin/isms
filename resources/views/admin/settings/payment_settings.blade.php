@extends('admin.layouts.app')
@section('title', 'Payment Settings')
@section('content')
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-header">
              <div class="row">
                <div class="col-lg-6 main-header">
                  <h2>Payment Settings<span></span></h2>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-12 col-md-12">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                  <li class="nav-item"><a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">List</a></li>
                  <li class="nav-item"><a class="nav-link" id="profile-tabs" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Add</a></li>
                </ul>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-lg-12 col-md-12">
                <div class="row">
                  <div class="col-lg-12 col-md-12">
                    <div class="tab-content" id="myTabContent">
                      <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row">
                          <div class="col-lg-12 col-md-12">
                            <div class="table-responsive">
                              <table class="table table-sm">
                                <thead>
                                  <tr>
                                    <th>School</th>
                                    <th>Gateway Type</th>
                                    <th>Email</th>
                                    <th>Extra Charges</th>
                                    <th>Status</th>
                                    <th>Logo</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody></tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <form method="post" enctype="multipart/form-data" action="">
                          @csrf
                          @method('POST')
                          <div class="row">
                            <div class="col-lg-6 col-md-6">
                              <div class="form-group">
                                <label>School: <span class="text-danger">*</span></label>
                                <select name="school_id" id="school_id" class="form-control btn-pill" required="">
                                  <option value="">Select</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                              <div class="form-group">
                                <label>Gateway Type: <span class="text-danger">*</span></label>
                                <select name="gateway_type" id="gateway_type" class="form-control btn-pill" required="">
                                  <option value="1">Paypal</option>
                                  <option value="2">Stripe</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                              <div class="form-group">
                                <label>Email: <span class="text-danger">*</span></label>
                                <input type="email" name="email" id="email" class="form-control btn-pill" required="" placeholder="Email">
                              </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                              <div class="form-group">
                                <label>Extra Charges: <span class="text-danger">*</span></label>
                                <input type="number" name="extra_charges" id="extra_charges" class="form-control btn-pill" required="" placeholder="Extra Charges">
                              </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                              <div class="form-group">
                                <label>Is Active: <span class="text-danger">*</span></label>
                                <select name="is_active" id="is_active" class="form-control btn-pill" required="">
                                  <option value="0">No</option>
                                  <option value="1">Yes</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                              <div class="form-group">
                                <label>Payment Method Logo: </label>
                                <input type="file" name="brand_logo" id="brand_logo" class="form-control btn-pill">
                              </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                            </div>
                            <div class="col-lg-12 col-md-12">
                              <button type="submit" class="btn btn-primary btn-pill">Update</button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid Ends-->
          
        </div>
@endsection
@section('custom-js')
<script type="text/javascript">
  $(document).ready(function(){
    $("#sidebar-settings").addClass("open");
    $("#sidebar-settings-payment-settings").addClass("active");
  });
</script>
@endsection