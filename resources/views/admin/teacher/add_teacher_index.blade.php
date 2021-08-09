@extends('admin.layouts.app')
@section('title', 'Add Teacher')
@section('content')
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-header">
              <div class="row">
                <div class="col-lg-6 main-header">
                  <h2>Add Teacher<span></span></h2>
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
                                <th>Name</th>
                                <th>National ID</th>
                                <th>Phone</th>
                                <th>Gender</th>
                                <th>Blood Group</th>
                                <th>Religion</th>
                                <th>DOB</th>
                                <th>Present Addr.</th>
                                <th>Permenent Addr.</th>
                                <th>Salary</th>
                                <th>Joining Date</th>
                                <th>Assoc. User</th>
                                <th>Photo</th>
                                <th>Resume</th>
                                <th>Status</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach($teachers as $teacher)
                              <tr>
                                <td>{{ $teacher->first_name }} {{ $teacher->last_name }}</td>
                                <td>{{ $teacher->national_id }}</td>
                                <td>{{ $teacher->phone }}</td>
                                <td>{{ $teacher->genderInfo->name }}</td>
                                <td>{{ $teacher->bloodGroupInfo->name }}</td>
                                <td>{{ $teacher->religion }}</td>
                                <td>{{ $teacher->dob }}</td>
                                <td>{{ $teacher->present_address }}</td>
                                <td>{{ $teacher->permenent_address }}</td>
                                <td>{{ $teacher->salary }}</td>
                                <td>{{ $teacher->joining_date }}</td>
                                <td>{{ $teacher->userInfo->first_name }} {{ $teacher->userInfo->last_name }}</td>
                                <td>
                                  <img src="{{ asset($teacher->photo) }}" class="img-fluid">
                                </td>
                                <td>
                                  <a class="btn btn-pill" href="{{ asset($teacher->resume) }}">
                                    <i class="fa fa-file"></i>
                                  </a>
                                </td>
                                <td>
                                  @if($teacher->status == 1)
                                    <label>Active</label>
                                  @else
                                    <label>Deactive</label>
                                  @endif
                                </td>
                                <td>
                                  <a class="btn btn-pill" href="{{ $teacher->id }}"><i class="fa fa-edit"></i></a>
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
                    <form method="post" enctype="multipart/form-data" action="{{ route('admin_teacher_management_add_teacher_post') }}">
                      @csrf
                      @method('POST')
                      <div class="row">
                        <div class="col-lg-6 col-md-6">
                          <div class="form-group">
                            <label>First Name: <span class="text-danger">*</span></label>
                            <input type="text" name="first_name" id="first_name" class="form-control btn-pill" required="" placeholder="First Name">
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                          <div class="form-group">
                            <label>Last Name: <span class="text-danger">*</span></label>
                            <input type="text" name="last_name" id="last_name" class="form-control btn-pill" required="" placeholder="Last Name">
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                          <div class="form-group">
                            <label>National ID: <span class="text-danger">*</span></label>
                            <input type="text" name="national_id" id="national_id" class="form-control btn-pill" required="" placeholder="National ID">
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
                            <label>Gender: <span class="text-danger">*</span></label>
                            <select name="gender_id" id="gender_id" class="form-control btn-pill" required="">
                              @foreach($genders as $gender)
                              <option value="{{ $gender->id }}">{{ $gender->name }}</option>
                              @endforeach
                            </select>
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                          <div class="form-group">
                            <label>Blood Group: <span class="text-danger">*</span></label>
                            <select name="blood_group_id" id="blood_group_id" class="form-control btn-pill" required="">
                              @foreach($blood_groups as $blood_group)
                              <option value="{{ $blood_group->id }}">{{ $blood_group->name }}</option>
                              @endforeach
                            </select>
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                          <div class="form-group">
                            <label>Religion: </label>
                            <input type="text" name="religion" id="religion" class="form-control btn-pill" placeholder="Religion">
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                          <div class="form-group">
                            <label>Date of Birth: <span class="text-danger">*</span></label>
                            <input type="date" name="dob" id="dob" class="form-control btn-pill" required="" placeholder="Date of Birth">
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                          <div class="form-group">
                            <label>Present Address: <span class="text-danger">*</span></label>
                            <textarea name="present_address" id="present_address" class="form-control btn-pill" required="" placeholder="Present Address"></textarea>
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                          <div class="form-group">
                            <label>Permenent Address: <span class="text-danger">*</span></label>
                            <textarea name="permenent_address" id="permenent_address" class="form-control btn-pill" required="" placeholder="Permenent Address"></textarea>
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                          <div class="form-group">
                            <label>Salary: </label>
                            <input type="number" name="salary" id="salary" class="form-control btn-pill" placeholder="Salary" step="0.01">
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                          <div class="form-group">
                            <label>Joining Date: </label>
                            <input type="date" name="joining_date" id="joining_date" class="form-control btn-pill" placeholder="Joining Date">
                          </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                          <hr>
                          <h6>Academic Information</h6>
                        </div>
                        <div class="col-lg-6 col-md-6">
                          <div class="form-group">
                            <label>Email: <span class="text-danger">*</span></label>
                            <input type="email" name="email" id="email" class="form-control btn-pill" required="" placeholder="Email">
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                          <div class="form-group">
                            <label>User Name: <span class="text-danger">*</span></label>
                            <input type="text" name="user_name" id="user_name" class="form-control btn-pill" required="" placeholder="User Name">
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                          <div class="form-group">
                            <label>Password: <span class="text-danger">*</span></label>
                            <input type="password" name="password" id="password" class="form-control btn-pill" required="" placeholder="Password">
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                          <div class="form-group">
                            <label>Resume: </label>
                            <input type="file" name="resume" id="resume" class="form-control btn-pill" placeholder="Resume">
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                          <div class="form-group">
                            <label>Photo: </label>
                            <input type="file" name="photo" id="photo" class="form-control btn-pill" placeholder="Photo">
                          </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                          <div class="form-group">
                            <label>Other Info: </label>
                            <textarea name="other_info" id="other_info" class="form-control btn-pill" placeholder="Other Info"></textarea>
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
    $("#sidebar-teacher-management").addClass("open");
    $("#sidebar-teacher-management-add-teacher").addClass("active");
  });
</script>
@endsection