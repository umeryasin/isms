@extends('admin.layouts.app')
@section('title', 'Student Type')
@section('content')
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-header">
              <div class="row">
                <div class="col-lg-6 main-header">
                  <h2>Student Type<span></span></h2>
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
                                <th>Type</th>
                                <th>Note</th>
                                <th>Status</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach($student_types as $student_type)
                              <tr>
                                <td>{{ $student_type->schoolInfo->name }}</td>
                                <td>{{ $student_type->name }}</td>
                                <td>{{ $student_type->note }}</td>
                                <td>
                                  @if($student_type->status == 1)
                                    <label>Active</label>
                                  @else
                                    <label>Deactive</label>
                                  @endif
                                </td>
                                <td>
                                  <a class="btn btn-pill" href="{{ $student_type->id }}"><i class="fa fa-edit"></i></a>
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
                    <form method="post" action="{{ route('admin_student_management_add_student_type_post') }}">
                      @csrf
                      @method('POST')
                      <div class="row">
                        <div class="col-lg-6 col-md-6">
                          <div class="form-group">
                            <label>School <span class="text-danger">*</span></label>
                            <select name="school_id" id="school_id" class="form-control btn-pill" required="">
                              @foreach($schools as $school)
                              <option value="{{ $school->id }}">{{ $school->name }}</option>
                              @endforeach
                            </select>
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                          <div class="form-group">
                            <label>Student Type: <span class="text-danger">*</span></label>
                            <input type="text" name="name" id="name" class="form-control btn-pill" required="" placeholder="Name">
                          </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                          <div class="form-group">
                            <label>Note: </label>
                            <textarea name="note" id="note" class="form-control btn-pill" placeholder="Note"></textarea>
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
    $("#sidebar-student-management-add-student-type").addClass("active");
  });
</script>
@endsection