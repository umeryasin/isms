@extends('admin.layouts.app')
@section('title', 'Email Settings')
@section('content')
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-header">
              <div class="row">
                <div class="col-lg-6 main-header">
                  <h2>Email Settings<span></span></h2>
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
                        <label>Email Protocol: <span class="text-danger">*</span></label>
                        <select name="email_protocol" id="email_protocol" class="form-control btn-pill" required="">
                          <option value="">Select</option>
                          <option value="1">Mail</option>
                          <option value="2">SMTP</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                      <div class="form-group">
                        <label>Email Type: <span class="text-danger">*</span></label>
                        <select name="email_type" id="email_type" class="form-control btn-pill" required="">
                          <option value="">Select</option>
                          <option value="1">Text</option>
                          <option value="2">HTML</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                      <div class="form-group">
                        <label>Charset: <span class="text-danger">*</span></label>
                        <select name="charset" id="charset" class="form-control btn-pill" required="">
                          <option value="">Select</option>
                          <option value="1">UTF-8</option>
                          <option value="2">ISO-8859-1</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                      <div class="form-group">
                        <label>From Name: <span class="text-danger">*</span></label>
                        <input type="text" name="from_name" id="from_name" class="form-control btn-pill" required="" placeholder="From Name">
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                      <div class="form-group">
                        <label>From Email: <span class="text-danger">*</span></label>
                        <input type="text" name="from_email" id="from_email" class="form-control btn-pill" required="" placeholder="From Email">
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
    $("#sidebar-settings-email-settings").addClass("active");
  });
</script>
@endsection