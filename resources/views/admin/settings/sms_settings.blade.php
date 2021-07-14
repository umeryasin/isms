@extends('admin.layouts.app')
@section('title', 'SMS Settings')
@section('content')
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-header">
              <div class="row">
                <div class="col-lg-6 main-header">
                  <h2>SMS Settings<span></span></h2>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-12 col-md-12">
                <form method="post" action="">
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
                        <label>Account SID: <span class="text-danger">*</span></label>
                        <input type="text" name="account_sid" id="account_sid" class="form-control btn-pill" required="" placeholder="Account SID">
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                      <div class="form-group">
                        <label>Auth Token: <span class="text-danger">*</span></label>
                        <input type="text" name="auth_token" id="auth_token" class="form-control btn-pill" required="" placeholder="Auth Token">
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                      <div class="form-group">
                        <label>From Number: <span class="text-danger">*</span></label>
                        <input type="text" name="from_number" id="from_number" class="form-control btn-pill" required="" placeholder="From Number">
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
                    <div class="col-lg-12 col-md-12">
                      <button type="submit" class="btn btn-primary btn-pill">Update</button>
                    </div>
                  </div>
                </form>
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
    $("#sidebar-settings-sms-settings").addClass("active");
  });
</script>
@endsection