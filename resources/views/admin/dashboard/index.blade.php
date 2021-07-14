@extends('admin.layouts.app')
@section('title', 'Dashboard')
@section('content')
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-header">
              <div class="row">
                <div class="col-lg-6 main-header">
                  <h2>Default<span>Dashboard </span></h2>
                  <h6 class="mb-0">admin panel</h6>
                </div>
                <div class="col-lg-6 breadcrumb-right">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i class="pe-7s-home"></i></a></li>
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item active">Default  </li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-12 xl-100">
                <div class="row">
                  <div class="col-xl-3 xl-50 col-md-6 box-col-6">
                    <div class="card gradient-primary o-hidden">
                      <div class="card-body tag-card">
                        <div class="default-chart">
                          <div class="apex-widgets">
                            <div id="area-widget-chart"></div>
                          </div>
                          <div class="widgets-bottom">
                            <h5 class="f-w-700 mb-0">Total Sale<span class="pull-right">70 / 100   </span></h5>
                          </div>
                        </div><span class="tag-hover-effect"><span class="dots-group"><span class="dots dots1"></span><span class="dots dots2 dot-small"></span><span class="dots dots3 dot-small"></span><span class="dots dots4 dot-medium"></span><span class="dots dots5 dot-small"></span><span class="dots dots6 dot-small"></span><span class="dots dots7 dot-small-semi"></span><span class="dots dots8 dot-small-semi"></span><span class="dots dots9 dot-small"></span></span></span>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 xl-50 col-md-6 box-col-6">
                    <div class="card gradient-secondary o-hidden">
                      <div class="card-body tag-card">
                        <div class="default-chart">
                          <div class="apex-widgets">
                            <div id="area-widget-chart-2"></div>
                          </div>
                          <div class="widgets-bottom">
                            <h5 class="f-w-700 mb-0">Total Visits<span class="pull-right">70 / 100   </span></h5>
                          </div>
                        </div><span class="tag-hover-effect"><span class="dots-group"><span class="dots dots1"></span><span class="dots dots2 dot-small"></span><span class="dots dots3 dot-small"></span><span class="dots dots4 dot-medium"></span><span class="dots dots5 dot-small"></span><span class="dots dots6 dot-small"></span><span class="dots dots7 dot-small-semi"></span><span class="dots dots8 dot-small-semi"></span><span class="dots dots9 dot-small"></span></span></span>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 xl-50 col-md-6 box-col-6">
                    <div class="card gradient-warning o-hidden">
                      <div class="card-body tag-card">
                        <div class="default-chart">
                          <div class="apex-widgets">
                            <div id="area-widget-chart-3"></div>
                          </div>
                          <div class="widgets-bottom">
                            <h5 class="f-w-700 mb-0">Total Stock<span class="pull-right">70 / 100   </span></h5>
                          </div>
                        </div><span class="tag-hover-effect"><span class="dots-group"><span class="dots dots1"></span><span class="dots dots2 dot-small"></span><span class="dots dots3 dot-small"></span><span class="dots dots4 dot-medium"></span><span class="dots dots5 dot-small"></span><span class="dots dots6 dot-small"></span><span class="dots dots7 dot-small-semi"></span><span class="dots dots8 dot-small-semi"></span><span class="dots dots9 dot-small">     </span></span></span>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 xl-50 col-md-6 box-col-6">
                    <div class="card gradient-info o-hidden">
                      <div class="card-body tag-card">
                        <div class="default-chart">
                          <div class="apex-widgets">
                            <div id="area-widget-chart-4"></div>
                          </div>
                          <div class="widgets-bottom">
                            <h5 class="f-w-700 mb-0">Total Value<span class="pull-right">70 / 100   </span></h5>
                          </div>
                        </div><span class="tag-hover-effect"><span class="dots-group"><span class="dots dots1"></span><span class="dots dots2 dot-small"></span><span class="dots dots3 dot-small"></span><span class="dots dots4 dot-medium"></span><span class="dots dots5 dot-small"></span><span class="dots dots6 dot-small"></span><span class="dots dots7 dot-small-semi"></span><span class="dots dots8 dot-small-semi"></span><span class="dots dots9 dot-small">     </span></span></span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-8 xl-100 box-col-12">
                <div class="card year-overview">
                  <div class="card-header no-border d-flex">
                    <h5>Year Overview</h5>
                    <ul class="creative-dots">
                      <li class="bg-primary big-dot"></li>
                      <li class="bg-secondary semi-big-dot"></li>
                      <li class="bg-warning medium-dot"></li>
                      <li class="bg-info semi-medium-dot"></li>
                      <li class="bg-secondary semi-small-dot"></li>
                      <li class="bg-primary small-dot"></li>
                    </ul>
                    <div class="header-right pull-right text-right">
                      <h5 class="mb-2">70 / 100</h5>
                      <h6 class="f-w-700 mb-0 default-text">Total 71,52,225 $</h6>
                    </div>
                  </div>
                  <div class="card-body row">
                    <div class="col-6 p-0 ct-10 default-chartist-container"></div>
                    <div class="col-6 p-0 ct-11 default-chartist-container"></div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 xl-100 box-col-12">
                <div class="card">
                  <div class="card-header no-border">
                    <h5>Sales By Countries</h5>
                    <ul class="creative-dots">
                      <li class="bg-primary big-dot"></li>
                      <li class="bg-secondary semi-big-dot"></li>
                      <li class="bg-warning medium-dot"></li>
                      <li class="bg-info semi-medium-dot"></li>
                      <li class="bg-secondary semi-small-dot"></li>
                      <li class="bg-primary small-dot"></li>
                    </ul>
                    <div class="card-header-right">
                      <ul class="list-unstyled card-option">
                        <li><i class="icofont icofont-gear fa fa-spin font-primary"></i></li>
                        <li><i class="view-html fa fa-code font-primary"></i></li>
                        <li><i class="icofont icofont-maximize full-card font-primary"></i></li>
                        <li><i class="icofont icofont-minus minimize-card font-primary"></i></li>
                        <li><i class="icofont icofont-refresh reload-card font-primary"></i></li>
                        <li><i class="icofont icofont-error close-card font-primary"></i></li>
                      </ul>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="radial-default">
                      <div id="circlechart"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 xl-50 box-col-12">
                <div class="card gradient-secondary o-hidden monthly-overview">
                  <div class="card-header no-border bg-transparent">
                    <h5>Monthly Overview</h5>
                    <h6 class="mb-0">January</h6><span class="pull-right right-badge"><span class="badge badge-pill">70 / 100</span></span>
                  </div>
                  <div class="card-body p-0">
                    <div class="text-bg"><span>0.7</span></div>
                    <div class="area-range-apex">
                      <div id="area-range"></div>
                    </div><span class="overview-dots full-lg-dots"><span class="dots-group"><span class="dots dots1"></span><span class="dots dots2 dot-small"></span><span class="dots dots3 dot-small"></span><span class="dots dots4 dot-medium"></span><span class="dots dots5 dot-small"></span><span class="dots dots6 dot-small"></span><span class="dots dots7 dot-small-semi"></span><span class="dots dots8 dot-small-semi"></span><span class="dots dots9 dot-small"></span></span></span>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 xl-50 box-col-6">
                <div class="card">
                  <div class="card-header no-border">
                    <h5>Best Sellers Product</h5>
                    <ul class="creative-dots">
                      <li class="bg-primary big-dot"></li>
                      <li class="bg-secondary semi-big-dot"></li>
                      <li class="bg-warning medium-dot"></li>
                      <li class="bg-info semi-medium-dot"></li>
                      <li class="bg-secondary semi-small-dot"></li>
                      <li class="bg-primary small-dot"></li>
                    </ul>
                    <div class="card-header-right">
                      <ul class="list-unstyled card-option">
                        <li><i class="icofont icofont-gear fa fa-spin font-warning"></i></li>
                        <li><i class="view-html fa fa-code font-warning"></i></li>
                        <li><i class="icofont icofont-maximize full-card font-warning"></i></li>
                        <li><i class="icofont icofont-minus minimize-card font-warning"></i></li>
                        <li><i class="icofont icofont-refresh reload-card font-warning"></i></li>
                        <li><i class="icofont icofont-error close-card font-warning"></i></li>
                      </ul>
                    </div>
                  </div>
                  <div class="card-body pb-0 pt-0">
                    <div class="music-layer">
                      <button class="btn btn-pill">View More</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 xl-100 box-col-6">
                <div class="card gradient-primary o-hidden monthly-overview yearly">
                  <div class="card-header no-border bg-transparent">
                    <h5>Yearly Overview</h5>
                    <h6 class="mb-0">Monday</h6><span class="pull-right right-badge"><span class="badge badge-pill">50 / 100</span></span>
                  </div>
                  <div class="card-body p-0">
                    <div class="text-bg"><span>0.5</span></div>
                    <div class="area-range-apex">
                      <div id="area-range-1"></div>
                    </div><span class="overview-dots full-width-dots"><span class="dots-group"><span class="dots dots1"></span><span class="dots dots2 dot-small"></span><span class="dots dots3 dot-small"></span><span class="dots dots4 dot-medium"></span><span class="dots dots5 dot-small"></span><span class="dots dots6 dot-small"></span><span class="dots dots7 dot-small-semi"></span><span class="dots dots8 dot-small-semi"></span><span class="dots dots9 dot-small"> </span></span></span>
                  </div>
                </div>
              </div>
              <div class="col-xl-6 xl-100 box-col-12">
                <div class="card weather-bg">
                  <div class="card-header no-border bg-transparent">
                    <h5>Weather Overview</h5>
                  </div>
                  <div class="card-body weather-bottom-bg p-0">
                    <div class="cloud"><img src="../assets/images/cloud.png" alt=""></div>
                    <div class="cloud-rain"></div>
                    <div class="media weather-details"><span class="weather-title"><i class="fa fa-circle-o d-block text-right"></i><span>16</span></span>
                      <div class="media-body">
                        <h5>London</h5><span class="d-block">01, Dec 2021</span>
                        <h6 class="mb-0">Wind : 50km/h  </h6>
                      </div>
                    </div><img class="img-fluid" src="{{ asset('assets/images/dashboard/weather-image.png') }}" alt="">
                  </div>
                </div>
              </div>
              <div class="col-xl-6 xl-100 box-col-12">
                <div class="card">
                  <div class="card-header no-border">
                    <h5>Today's Activity</h5>
                    <ul class="creative-dots">
                      <li class="bg-primary big-dot"></li>
                      <li class="bg-secondary semi-big-dot"></li>
                      <li class="bg-warning medium-dot"></li>
                      <li class="bg-info semi-medium-dot"></li>
                      <li class="bg-secondary semi-small-dot"></li>
                      <li class="bg-primary small-dot"></li>
                    </ul>
                    <div class="card-header-right">
                      <ul class="list-unstyled card-option">
                        <li><i class="icofont icofont-gear fa fa-spin font-primary"></i></li>
                        <li><i class="view-html fa fa-code font-primary"></i></li>
                        <li><i class="icofont icofont-maximize full-card font-primary"></i></li>
                        <li><i class="icofont icofont-minus minimize-card font-primary"></i></li>
                        <li><i class="icofont icofont-refresh reload-card font-primary"></i></li>
                        <li><i class="icofont icofont-error close-card font-primary"></i></li>
                      </ul>
                    </div>
                  </div>
                  <div class="card-body pt-0">
                    <div class="activity-table table-responsive">
                      <table class="table table-bordernone">
                        <tbody>
                          <tr>
                            <td>
                              <div class="activity-image"><img class="img-fluid" src="../assets/images/dashboard/clipboard.png" alt=""></div>
                            </td>
                            <td>
                              <div class="activity-details">
                                <h4 class="default-text">15 <span class="f-14">November</span></h4>
                                <h6>New Task Added</h6>
                              </div>
                            </td>
                            <td>
                              <div class="activity-time"><span class="font-primary f-w-700">1 Day Ago</span><span class="d-block light-text">Your Work Deadline 18<sup>th</sup></span></div>
                            </td>
                            <td>
                              <button class="btn btn-shadow-primary">View</button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="activity-image activity-secondary"><img class="img-fluid" src="../assets/images/dashboard/greeting.png" alt=""></div>
                            </td>
                            <td>
                              <div class="activity-details">
                                <h4 class="default-text">01 <span class="f-14">January</span></h4>
                                <h6>New Task Added</h6>
                              </div>
                            </td>
                            <td>
                              <div class="activity-time"><span class="font-secondary f-w-700">10 Minute Ago</span><span class="d-block light-text">Update Your Work Today</span></div>
                            </td>
                            <td>
                              <button class="btn btn-shadow-secondary">View</button>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-8 xl-100 box-col-12">
                <div class="card">
                  <div class="card-header no-border">
                    <h5>Recent Buyers</h5>
                    <ul class="creative-dots">
                      <li class="bg-primary big-dot"></li>
                      <li class="bg-secondary semi-big-dot"></li>
                      <li class="bg-warning medium-dot"></li>
                      <li class="bg-info semi-medium-dot"></li>
                      <li class="bg-secondary semi-small-dot"></li>
                      <li class="bg-primary small-dot"></li>
                    </ul>
                    <div class="card-header-right">
                      <ul class="list-unstyled card-option">
                        <li><i class="icofont icofont-gear fa fa-spin font-primary"></i></li>
                        <li><i class="view-html fa fa-code font-primary"></i></li>
                        <li><i class="icofont icofont-maximize full-card font-primary"></i></li>
                        <li><i class="icofont icofont-minus minimize-card font-primary"></i></li>
                        <li><i class="icofont icofont-refresh reload-card font-primary"></i></li>
                        <li><i class="icofont icofont-error close-card font-primary"></i></li>
                      </ul>
                    </div>
                  </div>
                  <div class="card-body pt-0">
                    <div class="activity-table table-responsive recent-table">
                      <table class="table table-bordernone">
                        <tbody>
                          <tr>
                            <td>
                              <div class="recent-images"><img class="img-fluid" src="../assets/images/dashboard/recent-user-1.png" alt=""></div>
                            </td>
                            <td>
                              <h5 class="default-text mb-0 f-w-700 f-18">Nick Stone</h5>
                            </td>
                            <td><span class="badge badge-pill recent-badge f-12">New York</span></td>
                            <td class="f-w-700">458-4594-5451</td>
                            <td>
                              <h6 class="mb-0">15 Jan</h6>
                            </td>
                            <td><span class="badge badge-pill recent-badge"><i data-feather="more-horizontal"></i></span></td>
                          </tr>
                          <tr>
                            <td>
                              <div class="recent-images-primary"><img class="img-fluid" src="../assets/images/dashboard/recent-user-2.png" alt=""></div>
                            </td>
                            <td>
                              <h5 class="font-primary mb-0 f-w-700 f-18">Milano Esco</h5>
                            </td>
                            <td><span class="badge badge-pill recent-badge f-12">Brazil</span></td>
                            <td class="f-w-700">812-4896-9812</td>
                            <td>
                              <h6 class="mb-0">06 Feb</h6>
                            </td>
                            <td><span class="badge badge-pill recent-badge"><i data-feather="more-horizontal"></i></span></td>
                          </tr>
                          <tr>
                            <td>
                              <div class="recent-images-secondary"><img class="img-fluid" src="../assets/images/dashboard/recent-user-3.png" alt=""></div>
                            </td>
                            <td>
                              <h5 class="font-secondary mb-0 f-w-700 f-18">Charlie Pol</h5>
                            </td>
                            <td><span class="badge badge-pill recent-badge f-12">London</span></td>
                            <td class="f-w-700">215-0324-6541</td>
                            <td>
                              <h6 class="mb-0">22 Feb</h6>
                            </td>
                            <td><span class="badge badge-pill recent-badge"><i data-feather="more-horizontal"></i></span></td>
                          </tr>
                          <tr>
                            <td>
                              <div class="recent-images-warning"><img class="img-fluid" src="../assets/images/dashboard/recent-user-4.png" alt=""></div>
                            </td>
                            <td>
                              <h5 class="font-warning mb-0 f-w-700 f-18">Jordi Esol</h5>
                            </td>
                            <td><span class="badge badge-pill recent-badge f-12">U.S.A</span></td>
                            <td class="f-w-700">748-0012-3487</td>
                            <td>
                              <h6 class="mb-0">18 Mar</h6>
                            </td>
                            <td><span class="badge badge-pill recent-badge"><i data-feather="more-horizontal"></i></span></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 xl-100 box-col-12">
                <div class="card gradient-primary o-hidden">
                  <div class="card-body">
                    <div class="setting-dot">
                      <div class="setting-bg-primary date-picker-setting position-set pull-right"><i class="fa fa-spin fa-cog"></i></div>
                    </div>
                    <div class="default-datepicker">
                      <div class="datepicker-here" data-language="en"></div>
                    </div><span class="default-dots-stay overview-dots full-width-dots"><span class="dots-group"><span class="dots dots1"></span><span class="dots dots2 dot-small"></span><span class="dots dots3 dot-small"></span><span class="dots dots4 dot-medium"></span><span class="dots dots5 dot-small"></span><span class="dots dots6 dot-small"></span><span class="dots dots7 dot-small-semi"></span><span class="dots dots8 dot-small-semi"></span><span class="dots dots9 dot-small">   </span></span></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid Ends-->
          <div class="welcome-popup modal fade" id="loadModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <div class="modal-body">
                  <div class="modal-header"></div>
                  <div class="contain p-30">
                    <div class="text-center">
                      <h3>Welcome to creative admin</h3>
                      <p>start your project with developer friendly admin </p>
                      <button class="btn btn-primary btn-lg txt-white" type="button" data-dismiss="modal" aria-label="Close">Get Started</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection
@section('custom-js')
<script type="text/javascript">
  $(document).ready(function(){
    $("#sidebar-dashboard").addClass("open");
    $("#sidebar-dashboard-main").addClass("active");
  });
</script>
@endsection