@extends('test.layouts.dashboardApp')


@section('content')

	<div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                         <div class="row">
                                    <div class="col-md-12">
                                    	<div class="jumbotron jumbotron-fluid">
			                          <div class="">
			                            <h1 class=" text-center text-primary">News Board</h1>
			                          </div>
			                        </div>

                        <div class="card">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
  
                                        <div class="">
                                            <img src="{{asset('assets/images/small/img-2.jpg')}}" class="img-fluid" alt="Responsive image">
                                        </div>
                                    
	                                        <div class="card-body">
		                                        <h5 class="card-title">Guiders and Stakeholders meeting</h5>
		                                        <p class="card-text">This is another card with title and supporting text below. This card has some additional content to make it slightly taller overall.</p>
		                                        <p class="card-text"><i class="bx bx-user bx-sm pr-2"></i><small class="text-muted">Posted by: Admin</small><small class="text-muted pl-2">Date:24-05-2020 by 10:00pm</small></p>
                                       		 </div>
                                    	</div>
                                	</div>
                              	</div>
                            </div>  
                                <!-- end row -->
                          </div>
		                <footer class="footer">
		                    <div class="container-fluid">
		                        <div class="row">
		                            <div class="col-sm-6">
		                                <script>document.write(new Date().getFullYear())</script> © SecuredInvestment.
		                            </div>
		                            <div class="col-sm-6">
		                                <div class="text-sm-right d-none d-sm-block">
		                                    
		                                </div>
		                            </div>
		                        </div>
		                    </div>
		                </footer>
            		</div>
            	</div>
            <!-- end main content-->
			</div>
        <!-- END layout-wrapper -->


       <!-- Right bar overlay-->

         <div class="rightbar-overlay"></div>


@endsection




									