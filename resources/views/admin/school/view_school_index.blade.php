@extends('admin.layouts.app')
@section('title', 'School')
@section('content')
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-header">
              <div class="row">
                <div class="col-lg-6 main-header">
                  <h2>School<span></span></h2>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-12 col-md-12">
                <div class="table-responsive">
                  <table class="table table-sm">
                    <thead>
                      <tr>
                        <th>Registration Date</th>
                        <th>Code</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Currency</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody></tbody>
                  </table>
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
    $("#sidebar-school-management-school-view").addClass("active");
  });
</script>
@endsection