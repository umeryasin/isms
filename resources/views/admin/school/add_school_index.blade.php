@extends('admin.layouts.app')
@section('title', 'Add School')
@section('content')
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-header">
              <div class="row">
                <div class="col-lg-6 main-header">
                  <h2>Add School<span></span></h2>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-12 col-md-12">
                <form method="post" enctype="multipart/form-data" action="">
                  @csrf
                  @method('POST')
                  <div class="row">
                    <div class="col-lg-6 col-md-6">
                      <div class="form-group">
                        <label>Code: <span class="text-danger">*</span></label>
                        <input type="text" name="code" id="code" class="form-control btn-pill" required="" placeholder="Code">
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                      <div class="form-group">
                        <label>Name: <span class="text-danger">*</span></label>
                        <input type="text" name="name" id="name" class="form-control btn-pill" required="" placeholder="Name">
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                      <div class="form-group">
                        <label>Address: <span class="text-danger">*</span></label>
                        <input type="text" name="address" id="address" class="form-control btn-pill" required="" placeholder="Address">
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                      <div class="form-group">
                        <label>Phone: <span class="text-danger">*</span></label>
                        <input type="text" name="phone" id="phone" class="form-control btn-pill" required="" placeholder="Phone">
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                      <div class="form-group">
                        <label>Registration Date: <span class="text-danger">*</span></label>
                        <input type="date" name="registration_date" id="registration_date" class="form-control btn-pill" required="" placeholder="Registration Date">
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
                        <label>Fax: </label>
                        <input type="text" name="fax" id="fax" class="form-control btn-pill" placeholder="Fax">
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                      <div class="form-group">
                        <label>Footer: <span class="text-danger">*</span></label>
                        <input type="text" name="footer_text" id="footer_text" class="form-control btn-pill" required="" placeholder="Footer">
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
                        <label>Latitude: <span class="text-danger">*</span></label>
                        <input type="text" name="latitude" id="latitude" class="form-control btn-pill" required="" placeholder="Latitude">
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                      <div class="form-group">
                        <label>Longitude: <span class="text-danger">*</span></label>
                        <input type="text" name="longitude" id="longitude" class="form-control btn-pill" required="" placeholder="Longitude">
                      </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                      <div class="form-group">
                        <label>Google API: </label>
                        <input type="text" name="google_api" id="google_api" class="form-control btn-pill" placeholder="Googel API">
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                      <div class="form-group">
                        <label>Zoom API Key: </label>
                        <input type="text" name="zoom_api_key" id="zoom_api_key" class="form-control btn-pill" placeholder="Zoom API Key">
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                      <div class="form-group">
                        <label>Zoom Secret Key: </label>
                        <input type="text" name="zoom_secret_key" id="zoom_secret_key" class="form-control btn-pill" placeholder="Zoom Secret Key">
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
                    <div class="col-lg-6 col-md-6">
                      <div class="form-group">
                        <label>Online Admission: <span class="text-danger">*</span></label>
                        <select name="is_online_admission" id="is_online_admission" class="form-control btn-pill" required="">
                          <option value="0">No</option>
                          <option value="1">Yes</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                      <div class="form-group">
                        <label>Facebook URL: </label>
                        <input type="text" name="facebook_url" id="facebook_url" class="form-control btn-pill" placeholder="Facebook URL">
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                      <div class="form-group">
                        <label>Twitter URL: </label>
                        <input type="text" name="twitter_url" id="twitter_url" class="form-control btn-pill" placeholder="Twitter URL">
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                      <div class="form-group">
                        <label>Linkedin URL: </label>
                        <input type="text" name="linkedin_url" id="linkedin_url" class="form-control btn-pill" placeholder="Linkedin URL">
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                      <div class="form-group">
                        <label>Youtube URL: </label>
                        <input type="text" name="youtube_url" id="youtube_url" class="form-control btn-pill" placeholder="Youtube URL">
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                      <div class="form-group">
                        <label>Instagram URL: </label>
                        <input type="text" name="instagram_url" id="instagram_url" class="form-control btn-pill" placeholder="Instagram URL">
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                      <div class="form-group">
                        <label>School Logo: </label>
                        <input type="file" name="brand_logo" id="brand_logo" class="form-control btn-pill">
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                    </div>
                    <div class="col-lg-12 col-md-12">
                      <button type="submit" class="btn btn-primary btn-pill">Save</button>
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
    $("#sidebar-school-management").addClass("open");
    $("#sidebar-school-management-add-school").addClass("active");
  });
</script>
@endsection