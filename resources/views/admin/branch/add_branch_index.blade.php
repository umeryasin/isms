@extends('admin.layouts.app')
@section('title', 'Add Branch')
@section('content')
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-header">
              <div class="row">
                <div class="col-lg-6 main-header">
                  <h2>Add Branch<span></span></h2>
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
            </div><!--row-->
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
                                <th>Code</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Phone</th>
                                <th>Reg. Date</th>
                                <th>Email</th>
                                <th>Fax</th>
                                <th>Lat Lng</th>
                                <th>Google API</th>
                                <th>Zoom API</th>
                                <th>Zoom Secret</th>
                                <th>Online Admission</th>
                                <th>Social Media</th>
                                <th>Assoc. User</th>
                                <th>Status</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach($branches as $branch)
                              <tr>
                                <td>{{ $branch->schoolInfo->name }}</td>
                                <td>{{ $branch->code }}</td>
                                <td>{{ $branch->name }}</td>
                                <td>{{ $branch->address }}</td>
                                <td>{{ $branch->phone }}</td>
                                <td>{{ $branch->registration_date }}</td>
                                <td>{{ $branch->email }}</td>
                                <td>{{ $branch->fax }}</td>
                                
                                <td>{{ $branch->latitude }}, {{ $branch->longitude }}</td>
                                <td>{{ $branch->google_api }}</td>
                                <td>{{ $branch->zoom_api_key }}</td>
                                <td>{{ $branch->zoom_secret_key }}</td>
                                <td>
                                  @if($branch->is_online_admission == 1)
                                    <label>Active</label>
                                  @else
                                    <label>Deactive</label>
                                  @endif
                                </td>
                                <td>
                                  <div class="social-icons">
                                    @if($branch->facebook_url)
                                    <a href="{{ $branch->facebook_url }}">
                                      <i class="fa fa-facebook" aria-hidden="true"></i>
                                    </a>
                                    @endif
                                    @if($branch->twitter_url)
                                    <a href="{{ $branch->twitter_url }}">
                                      <i class="fa fa-twitter" aria-hidden="true"></i>
                                    </a>
                                    @endif
                                    @if($branch->linkedin_url)
                                    <a href="{{ $branch->linkedin_url }}">
                                      <i class="fa fa-linkedin" aria-hidden="true"></i>
                                    </a>
                                    @endif
                                    @if($branch->youtube_url)
                                    <a href="{{ $branch->youtube_url }}">
                                      <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                    </a>
                                    @endif
                                    @if($branch->instagram_url)
                                    <a href="{{ $branch->instagram_url }}">
                                      <i class="fa fa-instagram" aria-hidden="true"></i>
                                    </a>
                                    @endif
                                  </div>
                                </td>
                                <td>
                                  {{ $branch->userInfo->user_name }}
                                </td>
                                <td>
                                  @if($branch->status == 1)
                                    <label>Active</label>
                                  @else
                                    <label>Deactive</label>
                                  @endif
                                </td>
                                <td>
                                  <a class="btn btn-pill" href="{{ $branch->id }}"><i class="fa fa-edit"></i></a>
                                </td>
                              </tr>
                              @endforeach
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <form method="post" action="{{ route('admin_school_management_add_branch_post') }}">
                      @csrf
                      @method('POST')
                      <div class="row">
                        <div class="col-lg-6 col-md-6">
                          <div class="form-group">
                            <label>School: <span class="text-danger">*</span></label>
                            <select name="school_id" id="school_id" class="form-control btn-pill" required="">
                              @foreach($schools as $school)
                              <option value="{{ $school->id }}">{{ $school->name }}</option>
                              @endforeach
                            </select>
                          </div>
                        </div>
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
                            <label>Latitude: </label>
                            <input type="text" name="latitude" id="latitude" class="form-control btn-pill" placeholder="Latitude">
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                          <div class="form-group">
                            <label>Longitude: </label>
                            <input type="text" name="longitude" id="longitude" class="form-control btn-pill" placeholder="Longitude">
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
                        <div class="col-lg-12 col-md-12">
                          <hr>
                          <h6>Login Details</h6>
                        </div>
                        <div class="col-lg-6 col-md-6">
                          <div class="form-group">
                            <label>First Name: <span class="text-danger">*</span></label>
                            <input type="text" name="first_name" id="first_name" class="form-control btn-pill" placeholder="First Name" required="">
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                          <div class="form-group">
                            <label>Last Name: </label>
                            <input type="text" name="last_name" id="last_name" class="form-control btn-pill" placeholder="Last Name">
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                          <div class="form-group">
                            <label>User Name: <span class="text-danger">*</span></label>
                            <input type="text" name="user_name" id="user_name" class="form-control btn-pill" placeholder="User Name" required="">
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                          <div class="form-group">
                            <label>Email: <span class="text-danger">*</span></label>
                            <input type="email" name="login_email" id="login_email" class="form-control btn-pill" placeholder="Email" required="">
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                          <div class="form-group">
                            <label>Password: <span class="text-danger">*</span></label>
                            <input type="password" name="password" id="password" class="form-control btn-pill" placeholder="Password" required="">
                          </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                          <button type="submit" class="btn btn-primary btn-pill">Save</button>
                        </div>
                      </div>
                    </form>
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
    $("#sidebar-school-management").addClass("open");
    $("#sidebar-school-management-add-branch").addClass("active");
  });
</script>
@endsection