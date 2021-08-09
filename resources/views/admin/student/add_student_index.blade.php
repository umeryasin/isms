@extends('admin.layouts.app')
@section('title', 'Add Student')
@section('content')
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-header">
              <div class="row">
                <div class="col-lg-6 main-header">
                  <h2>Add Student<span></span></h2>
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
                              {{-- @foreach($teachers as $teacher)
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
                              @endforeach --}}
                            </tbody>
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
                              @foreach($schools as $school)
                              <option value="{{ $school->id }}">{{ $school->name }}</option>
                              @endforeach
                            </select>
                          </div>
                        </div><!--col-->
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
                            <label>Admission No: <span class="text-danger">*</span></label>
                            <input type="text" name="admission_no" id="admission_no" class="form-control btn-pill" required="" placeholder="Admission No">
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                          <div class="form-group">
                            <label>Admission Date: <span class="text-danger">*</span></label>
                            <input type="date" name="admission_date" id="admission_date" class="form-control btn-pill" required="" placeholder="Admission Date">
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
                            <label>Caste: </label>
                            <input type="text" name="caste" id="caste" class="form-control btn-pill" placeholder="Caste">
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
                            <label>Email: <span class="text-danger">*</span></label>
                            <input type="email" name="email" id="email" class="form-control btn-pill" required="" placeholder="Email">
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                          <div class="form-group">
                            <label>National ID: </label>
                            <input type="text" name="national_id" id="national_id" class="form-control btn-pill" placeholder="Salary" step="0.01">
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
                            <label>Student Type: <span class="text-danger">*</span></label>
                            <select name="student_type_id" id="student_type_id" required="" class="form-control btn-pill">
                              @foreach($student_types as $student_type)
                              <option value="{{ $student_type->id }}">{{ $student_type->name }}</option>
                              @endforeach
                            </select>
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                          <div class="form-group">
                            <label>Class: <span class="text-danger">*</span></label>
                            <select name="class_id" id="class_id" required="" class="form-control btn-pill">
                              @foreach($student_types as $student_type)
                              <option value="{{ $student_type->id }}">{{ $student_type->name }}</option>
                              @endforeach
                            </select>
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                          <div class="form-group">
                            <label>Section: <span class="text-danger">*</span></label>
                            <select name="section_id" id="section_id" required="" class="form-control btn-pill">
                              @foreach($student_types as $student_type)
                              <option value="{{ $student_type->id }}">{{ $student_type->name }}</option>
                              @endforeach
                            </select>
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                          <div class="form-group">
                            <label>Group: </label>
                            <select name="group_id" id="group_id" required="" class="form-control btn-pill">
                              @foreach($student_types as $student_type)
                              <option value="{{ $student_type->id }}">{{ $student_type->name }}</option>
                              @endforeach
                            </select>
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                          <div class="form-group">
                            <label>Roll No: </label>
                            <input type="text" name="roll_no" id="roll_no" class="form-control btn-pill" placeholder="Roll No.">
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                          <div class="form-group">
                            <label>Registration No: </label>
                            <input type="text" name="registration_no" id="registration_no" class="form-control btn-pill" placeholder="Registration No">
                          </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                          <hr>
                          <h6>Father Information</h6>
                        </div>
                        <div class="col-lg-6 col-md-6">
                          <div class="form-group">
                            <label>Father Name: </label>
                            <input type="text" name="father_name" id="father_name" class="form-control btn-pill" placeholder="Father Name">
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                          <div class="form-group">
                            <label>Father Phone: </label>
                            <input type="text" name="father_phone" id="father_phone" class="form-control btn-pill" placeholder="Father Phone">
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                          <div class="form-group">
                            <label>Father Education: </label>
                            <input type="text" name="father_education" id="father_education" class="form-control btn-pill" placeholder="Father Education">
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                          <div class="form-group">
                            <label>Father Profession: </label>
                            <input type="text" name="father_profession" id="father_profession" class="form-control btn-pill" placeholder="Father Profession">
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                          <div class="form-group">
                            <label>Father Designation: </label>
                            <input type="text" name="father_designation" id="father_designation" class="form-control btn-pill" placeholder="Father Designation">
                          </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                          <hr>
                          <h6>Address Information</h6>
                        </div>
                        <div class="col-lg-6 col-md-6">
                          <div class="form-group">
                            <label>Present Address: </label>
                            <textarea name="present_address" id="present_address" class="form-control btn-pill" placeholder="Present Address"></textarea>
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                          <div class="form-group">
                            <label>Permenent Address: </label>
                            <textarea name="permenent_address" id="permenent_address" class="form-control btn-pill" placeholder="Permenent Address"></textarea>
                          </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                          <hr>
                          <h6>Previous School</h6>
                        </div>
                        <div class="col-lg-6 col-md-6">
                          <div class="form-group">
                            <label>School Name: </label>
                            <input type="text" name="previous_school_name" id="school_name" class="form-control btn-pill" placeholder="School Name">
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                          <div class="form-group">
                            <label>Class: </label>
                            <input type="text" name="previous_class" id="previous_class" class="form-control btn-pill" placeholder="Class">
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                          <div class="form-group">
                            <label>Certificate: </label>
                            <input type="file" name="certificate" id="certificate" class="form-control btn-pill" accept="image/*">
                          </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                          <hr>
                          <h6>Other Information</h6>
                        </div>
                        <div class="col-lg-6 col-md-6">
                          <div class="form-group">
                            <label>User Name: <span class="text-danger">*</span></label>
                            <input type="text" name="user_name" id="user_name" class="form-control btn-pill" placeholder="User Name" required="">
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                          <div class="form-group">
                            <label>Password: <span class="text-danger">*</span></label>
                            <input type="text" name="user_name" id="user_name" class="form-control btn-pill" placeholder="User Name" required="">
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                          <div class="form-group">
                            <label>Other Info: <span class="text-danger">*</span></label>
                            <input type="text" name="user_name" id="user_name" class="form-control btn-pill" placeholder="User Name" required="">
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                          <div class="form-group">
                            <label>Photo: <span class="text-danger">*</span></label>
                            <input type="file" name="photo" id="photo" class="form-control btn-pill" accept="image/*">
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
    $("#sidebar-student-management").addClass("open");
    $("#sidebar-student-management-add-student").addClass("active");
  });
</script>
@endsection