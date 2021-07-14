@extends('admin.layouts.app')
@section('title', 'General Settings')
@section('content')
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-header">
              <div class="row">
                <div class="col-lg-6 main-header">
                  <h2>Settings<span></span></h2>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-12 col-md-12">
                <form method="post" enctype="multipart/form-data" action="{{ route('admin_settings_general_settings_post') }}">
                  @csrf
                  @method('POST')
                  <div class="row">
                    <div class="col-lg-6 col-md-6">
                      <div class="form-group">
                        <label>Brand Name: <span class="text-danger">*</span></label>
                        <input type="text" name="brand_name" id="brand_name" class="form-control btn-pill" required="" placeholder="Brand Name">
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                      <div class="form-group">
                        <label>Brand Title: <span class="text-danger">*</span></label>
                        <input type="text" name="brand_title" id="brand_title" class="form-control btn-pill" required="" placeholder="Brand Title">
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                      <div class="form-group">
                        <label>Currency: <span class="text-danger">*</span></label>
                        <input type="text" name="currency" id="currency" class="form-control btn-pill" required="" placeholder="Currency">
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                      <div class="form-group">
                        <label>Currency Symbol: <span class="text-danger">*</span></label>
                        <input type="text" name="currency_symbol" id="currency_symbol" class="form-control btn-pill" required="" placeholder="Currency Symbol">
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                      <div class="form-group">
                        <label>Enable RTL: <span class="text-danger">*</span></label>
                        <select name="is_rtl" id="is_rtl" class="form-control btn-pill" required="">
                          <option value="0">No</option>
                          <option value="1">Yes</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                      <div class="form-group">
                        <label>Enable Frontend: <span class="text-danger">*</span></label>
                        <select name="is_frontend" id="is_frontend" class="form-control btn-pill" required="">
                          <option value="0">No</option>
                          <option value="1">Yes</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                      <div class="form-group">
                        <label>Brand Footer: <span class="text-danger">*</span></label>
                        <input type="text" name="brand_footer" id="brand_footer" class="form-control btn-pill" required="" placeholder="Brand Footer">
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                      <div class="form-group">
                        <label>Brand Logo: </label>
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
          <!-- Container-fluid Ends-->
          
        </div>
@endsection
@section('custom-js')
<script type="text/javascript">
  $(document).ready(function(){
    $("#sidebar-settings").addClass("open");
    $("#sidebar-settings-general-settings").addClass("active");
  });
</script>
@endsection