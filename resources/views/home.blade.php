@extends('layouts.master')
@section('title')
الصفحة الرئيسية
@endsection
@section('css')
<!--  Owl-carousel css-->
<link href="{{URL::asset('assets/plugins/owl-carousel/owl.carousel.css')}}" rel="stylesheet" />
<!-- Maps css -->
<link href="{{URL::asset('assets/plugins/jqvmap/jqvmap.min.css')}}" rel="stylesheet">
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="left-content">
						<div>
						  <h2 class="main-content-title tx-24 mg-b-1 mg-b-lg-1">Hi, welcome back!</h2>
						  <p class="mg-b-0">Sales monitoring dashboard template.</p>
						</div>
					</div>
					<div class="main-dashboard-header-right">
						<div>
							<label class="tx-13">Customer Ratings</label>
							<div class="main-star">
								<i class="typcn typcn-star active"></i> <i class="typcn typcn-star active"></i> <i class="typcn typcn-star active"></i> <i class="typcn typcn-star active"></i> <i class="typcn typcn-star"></i> <span>(14,873)</span>
							</div>
						</div>
						
					</div>
				</div>
				<!-- /breadcrumb -->
@endsection
@section('content')
				<!-- row -->
				<div class="row row-sm">
					<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
						<div class="card overflow-hidden sales-card bg-primary-gradient">
							<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
								<div class="">
									<h6 class="mb-3 tx-12 text-white">TODAY ORDERS</h6>
								</div>
								<div class="pb-0 mt-0">
									<div class="d-flex">
										<div class="">
											<h4 class="tx-20 font-weight-bold mb-1 text-white">$5,74.12</h4>
											<p class="mb-0 tx-12 text-white op-7">Compared to last week</p>
										</div>
										<span class="float-right my-auto mr-auto">
											<i class="fas fa-arrow-circle-up text-white"></i>
											<span class="text-white op-7"> +427</span>
										</span>
									</div>
								</div>
							</div>
							<span id="compositeline" class="pt-1">5,9,5,6,4,12,18,14,10,15,12,5,8,5,12,5,12,10,16,12</span>
						</div>
					</div>
					<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
						<div class="card overflow-hidden sales-card bg-danger-gradient">
							<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
								<div class="">
									<h6 class="mb-3 tx-12 text-white">TODAY EARNINGS</h6>
								</div>
								<div class="pb-0 mt-0">
									<div class="d-flex">
										<div class="">
											<h4 class="tx-20 font-weight-bold mb-1 text-white">$1,230.17</h4>
											<p class="mb-0 tx-12 text-white op-7">Compared to last week</p>
										</div>
										<span class="float-right my-auto mr-auto">
											<i class="fas fa-arrow-circle-down text-white"></i>
											<span class="text-white op-7"> -23.09%</span>
										</span>
									</div>
								</div>
							</div>
							<span id="compositeline2" class="pt-1">3,2,4,6,12,14,8,7,14,16,12,7,8,4,3,2,2,5,6,7</span>
						</div>
					</div>
					<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
						<div class="card overflow-hidden sales-card bg-success-gradient">
							<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
								<div class="">
									<h6 class="mb-3 tx-12 text-white">TOTAL EARNINGS</h6>
								</div>
								<div class="pb-0 mt-0">
									<div class="d-flex">
										<div class="">
											<h4 class="tx-20 font-weight-bold mb-1 text-white">$7,125.70</h4>
											<p class="mb-0 tx-12 text-white op-7">Compared to last week</p>
										</div>
										<span class="float-right my-auto mr-auto">
											<i class="fas fa-arrow-circle-up text-white"></i>
											<span class="text-white op-7"> 52.09%</span>
										</span>
									</div>
								</div>
							</div>
							<span id="compositeline3" class="pt-1">5,10,5,20,22,12,15,18,20,15,8,12,22,5,10,12,22,15,16,10</span>
						</div>
					</div>
					<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
						<div class="card overflow-hidden sales-card bg-warning-gradient">
							<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
								<div class="">
									<h6 class="mb-3 tx-12 text-white">PRODUCT SOLD</h6>
								</div>
								<div class="pb-0 mt-0">
									<div class="d-flex">
										<div class="">
											<h4 class="tx-20 font-weight-bold mb-1 text-white">$4,820.50</h4>
											<p class="mb-0 tx-12 text-white op-7">Compared to last week</p>
										</div>
										<span class="float-right my-auto mr-auto">
											<i class="fas fa-arrow-circle-down text-white"></i>
											<span class="text-white op-7"> -152.3</span>
										</span>
									</div>
								</div>
							</div>
							<span id="compositeline4" class="pt-1">5,9,5,6,4,12,18,14,10,15,12,5,8,5,12,5,12,10,16,12</span>
						</div>
					</div>
				</div>
				<!-- row closed -->

				<!-- row opened -->
				<div class="row row-sm">
					<div class="col-md-12 col-lg-12 col-xl-7">
						<div class="card">
							<div class="card-header bg-transparent pd-b-0 pd-t-20 bd-b-0">
								<div class="d-flex justify-content-between">
									<h4 class="card-title mb-0">Order status</h4>
									<i class="mdi mdi-dots-horizontal text-gray"></i>
								</div>
								<p class="tx-12 text-muted mb-0">Order Status and Tracking. Track your order from ship date to arrival. To begin, enter your order number.</p>
							</div>
							<div class="card-body">
								<div class="total-revenue">
									<div>
									  <h4>120,750</h4>
									  <label><span class="bg-primary"></span>success</label>
									</div>
									<div>
									  <h4>56,108</h4>
									  <label><span class="bg-danger"></span>Pending</label>
									</div>
									<div>
									  <h4>32,895</h4>
									  <label><span class="bg-warning"></span>Failed</label>
									</div>
								  </div>
								<div id="bar" class="sales-bar mt-4"></div>
							</div>
						</div>
					</div>
					<div class="col-lg-12 col-xl-5">
						<div class="card card-dashboard-map-one">
							<label class="main-content-label">Sales Revenue by Customers in USA</label>
							<span class="d-block mg-b-20 text-muted tx-12">Sales Performance of all states in the United States</span>
							<div class="">
								<div class="vmap-wrapper ht-180" id="vmap2"></div>
							</div>
						</div>
					</div>
				</div>
				<!-- row closed -->

				<!-- row opened -->
				<div class="row row-sm">
				<div class="row row-sm">
					<div class="col-xl-4 col-lg-6 col-md-12 col-sm-12">
						<div class="card">
							<div class="card-header bg-transparent pd-b-0 pd-t-20 bd-b-0">
								<div class="d-flex justify-content-between">
									<h4 class="card-title mg-b-10">Overall Rating</h4>
									<i class="mdi mdi-dots-vertical"></i>
								</div>
								<p class="tx-12 tx-gray-500 mb-0">Opinion of a customer on the product in the form of ratings 5-star rating. <a href="">Learn more</a></p>
							</div><!-- card-header -->
							<div class="card-body pd-y-7">
								<div class="d-flex align-items-baseline">
									<h1 class="tx-30 mg-b-5 mg-l-5">4.8</h1>
									<p class="tx-11  mg-b-0"><span class="tx-medium tx-success">1.6% <i class="icon ion-md-arrow-up"></i></span></p>
								</div>
								<h6 class="tx-uppercase tx-spacing-1 tx-semibold tx-10 tx-color-02 mg-b-15">Overall product rating by the customers.</h6>
								<table class="table table-borderless mt-3 rating-table">
									<tbody>
										<tr>
											<td class="text-gray"><small class="mr-1">1</small></td>
											<td class="text-gray"><span><i class="ion ion-md-star tx-18 text-warning"></i></span></td>
											<td class="w-100">
												<div class="progress mt-2 ht-5">
													<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="80" class="progress-bar wd-20p bg-danger" role="progressbar"></div>
												</div>
											</td>
											<td class=""><small class="text-gray">7</small></td>
										</tr>
										<tr>
											<td class="text-gray"><small class="mr-1">2</small></td>
											<td class="text-gray"><span><i class="ion ion-md-star tx-18 text-warning"></i></span></td>
											<td class="w-100">
												<div class="progress mt-2 ht-5">
													<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="80" class="progress-bar wd-30p bg-primary" role="progressbar"></div>
												</div>
											</td>
											<td class=""><small class="text-gray">27</small></td>
										</tr>
										<tr>
											<td class="text-gray"><small class="mr-1">3</small></td>
											<td class="text-gray"><span><i class="ion ion-md-star tx-18 text-warning"></i></span></td>
											<td class="w-100">
												<div class="progress mt-2 ht-5">
													<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="80" class="progress-bar wd-60p bg-warning" role="progressbar"></div>
												</div>
											</td>
											<td class=""><small class="text-gray">64</small></td>
										</tr>
										<tr>
											<td class="text-gray"><small class="mr-1">4</small></td>
											<td class="text-gray"><span><i class="ion ion-md-star tx-18 text-warning"></i></span></td>
											<td class="w-100">
												<div class="progress mt-2 ht-5">
													<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="80" class="progress-bar wd-70p bg-teal" role="progressbar"></div>
												</div>
											</td>
											<td class=""><small class="text-gray">93</small></td>
										</tr>
										<tr>
											<td class="text-gray"><small class="mr-1">5</small></td>
											<td class="text-gray"><span><i class="ion ion-md-star tx-18 text-warning"></i></span></td>
											<td class="w-100">
												<div class="progress mt-2 ht-5">
													<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="80" class="progress-bar wd-80p bg-success" role="progressbar"></div>
												</div>
											</td>
											<td class=""><small class="text-gray">82</small></td>
										</tr>
									</tbody>
								</table>
								<div class="wrapper d-flex justify-content-center image-group pb-3">
									<img src="{{URL::asset('assets/img/faces/1.jpg')}}" alt="profile" class="img-xs rounded-circle">
									<img src="{{URL::asset('assets/img/faces/2.jpg')}}" alt="profile" class="img-xs rounded-circle">
									<img src="{{URL::asset('assets/img/faces/13.jpg')}}" alt="profile" class="img-xs rounded-circle">
									<img src="{{URL::asset('assets/img/faces/14.jpg')}}" alt="profile" class="img-xs rounded-circle">
									<img src="{{URL::asset('assets/img/faces/5.jpg')}}" alt="profile" class="img-xs rounded-circle">
									<img src="{{URL::asset('assets/img/faces/16.jpg')}}" alt="profile" class="img-xs rounded-circle">
								</div>
							</div><!-- card-body -->
						</div>
					</div>
					<div class="col-xl-4 col-lg-6 col-md-12 col-sm-12">
						<div class="card order-list">
							<div class="card-body">
								<div class="d-flex justify-content-between">
									<h4 class="card-title mg-b-10">Order Activity</h4>
									<i class="mdi mdi-dots-vertical"></i>
								</div>
								<p class="tx-12 tx-gray-500 mb-3">Order Activity is ecommerce platforms to track the orders placed on their stores <a href="">Learn more</a></p>
								<ul class="list list-noborders pb-0 mb-0">
									<li class="list-item">
										<img class="img-sm rounded-circle bg-warning d-flex align-items-center justify-content-center text-white" src="{{URL::asset('assets/img/faces/3.jpg')}}" alt="Profile Image">
										<div class=" mr-3">
											<h6 class="mb-1 font-weight-medium">Lottie Arnold</h6>
											<p class="mb-0 text-muted tx-13">#PRD-10250</p>
										</div>
										<div class="mr-auto d-flex">
											<img class="img-sm ml-1" src="{{URL::asset('assets/img/ecommerce/03.jpg')}}" alt="thumb images">
											<img class="img-sm" src="{{URL::asset('assets/img/ecommerce/08.jpg')}}" alt="thumb images">
										</div>
									</li>
									<li class="list-item">
										<img class="img-sm rounded-circle bg-warning d-flex align-items-center justify-content-center text-white" src="{{URL::asset('assets/img/faces/9.jpg')}}" alt="Profile Image">
										<div class=" mr-3">
											<h6 class="mb-1 font-weight-medium">Alan Macedo</h6>
											<p class="mb-0 tx-13 text-muted">#PRD-10251</p>
										</div>
										<div class="mr-auto d-flex">
											<img class="img-sm ml-1" src="{{URL::asset('assets/img/ecommerce/04.jpg')}}" alt="thumb images">
											<img class="img-sm" src="{{URL::asset('assets/img/ecommerce/05.jpg')}}" alt="thumb images">
										</div>
									</li>
									<li class="list-item">
										<img class="img-sm rounded-circle bg-warning d-flex align-items-center justify-content-center text-white" src="{{URL::asset('assets/img/faces/5.jpg')}}" alt="Profile Image">
										<div class=" mr-3">
											<h6 class="mb-1 font-weight-medium">Bruce Tran</h6>
											<p class="mb-0 text-muted tx-13">#PRD-10252</p>
										</div>
										<div class="mr-auto d-flex">
											<img class="img-sm ml-1" src="{{URL::asset('assets/img/ecommerce/06.jpg')}}" alt="thumb images">
											<img class="img-sm" src="{{URL::asset('assets/img/ecommerce/07.jpg')}}" alt="thumb images">
										</div>
									</li>
									<li class="list-item">
										<img class="img-sm rounded-circle bg-warning d-flex align-items-center justify-content-center text-white" src="{{URL::asset('assets/img/faces/12.jpg')}}" alt="Profile Image">
										<div class=" mr-3">
											<h6 class="mb-1 font-weight-medium">Mina Harper</h6>
											<p class="mb-0 text-muted tx-13">#PRD-10253</p>
										</div>
										<div class="mr-auto d-flex">
											<img class="img-sm ml-1" src="{{URL::asset('assets/img/ecommerce/08.jpg')}}" alt="thumb images">
											<img class="img-sm" src="{{URL::asset('assets/img/ecommerce/09.jpg')}}" alt="thumb images">
										</div>
									</li>
									<li class="list-item pb-0 mb-0">
										<img class="img-sm rounded-circle bg-warning d-flex align-items-center justify-content-center text-white" src="{{URL::asset('assets/img/faces/8.jpg')}}" alt="Profile Image">
										<div class=" mr-3">
											<h6 class="mb-1 font-weight-medium">Maria Quinn</h6>
											<p class="mb-0 text-muted tx-13">#PRD-10254</p>
										</div>
										<div class="mr-auto d-flex">
											<img class="img-sm ml-1" src="{{URL::asset('assets/img/ecommerce/02.jpg')}}" alt="thumb images">
											<img class="img-sm" src="{{URL::asset('assets/img/ecommerce/01.jpg')}}" alt="thumb images">
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-xl-4 col-md-12 col-sm-12">
						<div class="card overflow-hidden latest-tasks">
							<div class="">
								<div class="d-flex justify-content-between pl-4 pt-4 pr-4">
									<h4 class="card-title mg-b-10">Latest Task</h4>
									<i class="mdi mdi-dots-vertical"></i>
								</div>
								<div class="">
									<ul class="nav nav-tabs nav-tabs-line nav-tabs-line-brand nav-tabs-bold" role="tablist">
										<li class="nav-item">
											<a class="nav-link active show" data-toggle="tab" href="#tasktab-1" role="tab" aria-selected="false">
												Today
											</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" data-toggle="tab" href="#tasktab-2" role="tab" aria-selected="false">
												Week
											</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" data-toggle="tab" href="#tasktab-3" role="tab" aria-selected="true">
												Month
											</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="card-body pt-3">
								<div class="tab-content">
									<div class="tab-pane fade active show" id="tasktab-1" role="tabpanel">
										<div class="">
											<div class="tasks">
												<div class=" task-line primary">
													<a href="#" class="span">
														XML Import & Export
													</a>
													<div class="time">
														12:00 PM
													</div>
												</div>
												<label class="checkbox">
													<span class="check-box">
														<span class="ckbox"><input checked type="checkbox"><span></span></span>
													</span>
												</label>
											</div>
											<div class="tasks">
												<div class="task-line pink">
													<a href="#" class="span">
														Database Optimization
													</a>
													<div class="time">
														02:13 PM
													</div>
												</div>
												<label class="checkbox">
													<span class="check-box">
														<span class="ckbox"><input type="checkbox"><span></span></span>
													</span>
												</label>
											</div>
											<div class="tasks">
												<div class="task-line success">
													<a href="#" class="span">
														Create Wireframes
													</a>
													<div class="time">
														06:20 PM
													</div>
												</div>
												<label class="checkbox">
													<span class="check-box">
														<span class="ckbox"><input type="checkbox"><span></span></span>
													</span>
												</label>
											</div>
											<div class="tasks">
												<div class="task-line warning">
													<a href="#" class="span">
														Develop MVP
													</a>
													<div class="time">
														10: 00 PM
													</div>
												</div>
												<label class="checkbox">
													<span class="check-box">
														<span class="ckbox"><input type="checkbox"><span></span></span>
													</span>
												</label>
											</div>
											<div class="tasks mb-0">
												<div class="task-line teal">
													<a href="#" class="span">
														Design Evommerce
													</a>
													<div class="time">
														10: 00 PM
													</div>
												</div>
												<label class="checkbox">
													<span class="check-box">
														<span class="ckbox"><input type="checkbox"><span></span></span>
													</span>
												</label>
											</div>
										</div>
									</div>
									<div class="tab-pane fade" id="tasktab-2" role="tabpanel">
										<div class="">
											<div class="tasks">
												<div class=" task-line teal">
													<a href="#" class="span">
														Management meeting
													</a>
													<div class="time">
														06:30 AM
													</div>
												</div>
												<label class="checkbox">
													<span class="check-box">
														<span class="ckbox"><input type="checkbox"><span></span></span>
													</span>
												</label>
											</div>
											<div class="tasks">
												<div class="task-line danger">
													<a href="#" class="span">
														Connect API to pages
													</a>
													<div class="time">
														08:00 AM
													</div>
												</div>
												<label class="checkbox">
													<span class="check-box">
														<span class="ckbox"><input type="checkbox"><span></span></span>
													</span>
												</label>
											</div>
											<div class="tasks">
												<div class="task-line purple">
													<a href="#" class="span">
														Icon change in Redesign App
													</a>
													<div class="time">
														11:20 AM
													</div>
												</div>
												<label class="checkbox">
													<span class="check-box">
														<span class="ckbox"><input type="checkbox"><span></span></span>
													</span>
												</label>
											</div>
											<div class="tasks">
												<div class="task-line warning">
													<a href="#" class="span">
														Test new features in tablets
													</a>
													<div class="time">
														02: 00 PM
													</div>
												</div>
												<label class="checkbox">
													<span class="check-box">
														<span class="ckbox"><input type="checkbox"><span></span></span>
													</span>
												</label>
											</div>
											<div class="tasks">
												<div class="task-line success">
													<a href="#" class="span">
														Design Logo
													</a>
													<div class="time">
														04: 00 PM
													</div>
												</div>
												<label class="checkbox">
													<span class="check-box">
														<span class="ckbox"><input type="checkbox"><span></span></span>
													</span>
												</label>
											</div>
										</div>
									</div>
									<div class="tab-pane fade" id="tasktab-3" role="tabpanel">
										<div class="">
											<div class="tasks">
												<div class=" task-line info">
													<a href="#" class="span">
														Design a Landing Page
													</a>
													<div class="time">
														06:12 AM
													</div>
												</div>
												<label class="checkbox">
													<span class="check-box">
														<span class="ckbox"><input type="checkbox"><span></span></span>
													</span>
												</label>
											</div>
											<div class="tasks">
												<div class="task-line danger">
													<a href="#" class="span">
														Food Delivery Mobile Application
													</a>
													<div class="time">
														3:00 PM
													</div>
												</div>
												<label class="checkbox">
													<span class="check-box">
														<span class="ckbox"><input type="checkbox"><span></span></span>
													</span>
												</label>
											</div>
											<div class="tasks">
												<div class="task-line warning">
													<a href="#" class="span">
														Export Database values
													</a>
													<div class="time">
														03:20 PM
													</div>
												</div>
												<label class="checkbox">
													<span class="check-box">
														<span class="ckbox"><input type="checkbox"><span></span></span>
													</span>
												</label>
											</div>
											<div class="tasks">
												<div class="task-line pink">
													<a href="#" class="span">
														Write Simple Python Script
													</a>
													<div class="time">
														04: 00 PM
													</div>
												</div>
												<label class="checkbox">
													<span class="check-box">
														<span class="ckbox"><input type="checkbox"><span></span></span>
													</span>
												</label>
											</div>
											<div class="tasks">
												<div class="task-line success">
													<a href="#" class="span">
														Write Simple Anugalr Program
													</a>
													<div class="time">
														05: 00 PM
													</div>
												</div>
												<label class="checkbox">
													<span class="check-box">
														<span class="ckbox"><input type="checkbox"><span></span></span>
													</span>
												</label>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>				
				</div>
				<!-- row close -->

				<!-- row opened -->
			
				<!-- /row -->
			</div>
		</div>
		<!-- Container closed -->
@endsection
@section('js')
<!--Internal  Chart.bundle js -->
<script src="{{URL::asset('assets/plugins/chart.js/Chart.bundle.min.js')}}"></script>
<!-- Moment js -->
<script src="{{URL::asset('assets/plugins/raphael/raphael.min.js')}}"></script>
<!--Internal  Flot js-->
<script src="{{URL::asset('assets/plugins/jquery.flot/jquery.flot.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jquery.flot/jquery.flot.pie.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jquery.flot/jquery.flot.resize.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jquery.flot/jquery.flot.categories.js')}}"></script>
<script src="{{URL::asset('assets/js/dashboard.sampledata.js')}}"></script>
<script src="{{URL::asset('assets/js/chart.flot.sampledata.js')}}"></script>
<!--Internal Apexchart js-->
<script src="{{URL::asset('assets/js/apexcharts.js')}}"></script>
<!-- Internal Map -->
<script src="{{URL::asset('assets/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<script src="{{URL::asset('assets/js/modal-popup.js')}}"></script>
<!--Internal  index js -->
<script src="{{URL::asset('assets/js/index.js')}}"></script>
<script src="{{URL::asset('assets/js/jquery.vmap.sampledata.js')}}"></script>	
@endsection