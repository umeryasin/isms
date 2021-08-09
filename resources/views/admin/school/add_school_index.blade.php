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
                                <th>Code</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Phone</th>
                                <th>Reg. Date</th>
                                <th>Email</th>
                                <th>Fax</th>
                                <th>Currency</th>
                                <th>Lat Lng</th>
                                <th>Google API</th>
                                <th>RTL</th>
                                <th>Frontend</th>
                                <th>Logo</th>
                                <th>Status</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach($schools as $school)
                              <tr>
                                <td>{{ $school->code }}</td>
                                <td>{{ $school->name }}</td>
                                <td>{{ $school->address }}</td>
                                <td>{{ $school->phone }}</td>
                                <td>{{ $school->registration_date }}</td>
                                <td>{{ $school->email }}</td>
                                <td>{{ $school->fax }}</td>
                                <td>{{ $school->currency }} - {{ $school->currency_symbol }}</td>
                                <td>{{ $school->latitude }}, {{ $school->longitude }}</td>
                                <td>{{ $school->google_api }}</td>
                                <td>
                                  @if($school->is_rtl == 1)
                                    <label>Active</label>
                                  @else
                                    <label>Deactive</label>
                                  @endif
                                </td>
                                <td>
                                  @if($school->is_frontend == 1)
                                    <label>Active</label>
                                  @else
                                    <label>Deactive</label>
                                  @endif
                                </td>
                                <td>
                                  <img src="{{ asset($school->logo) }}" class="img-fluid">
                                </td>
                                <td>
                                  @if($school->status == 1)
                                    <label>Active</label>
                                  @else
                                    <label>Deactive</label>
                                  @endif
                                </td>
                                <td>
                                  <a class="btn btn-pill" href="{{ $school->id }}"><i class="fa fa-edit"></i></a>
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
                    <form method="post" enctype="multipart/form-data" action="{{ route('admin_school_management_add_school_post') }}">
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
                            <label>Footer: </label>
                            <input type="text" name="footer_text" id="footer_text" class="form-control btn-pill" placeholder="Footer">
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                          <div class="form-group">
                            <label>Currency: </label>
                            <input type="text" name="currency" id="currency" class="form-control btn-pill" placeholder="Currency">
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                          <div class="form-group">
                            <label>Currency Symbol: </label>
                            <input type="text" name="currency_symbol" id="currency_symbol" class="form-control btn-pill" placeholder="Currency Symbol">
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
                            <label>School Logo: </label>
                            <input type="file" name="logo" id="logo" class="form-control btn-pill">
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