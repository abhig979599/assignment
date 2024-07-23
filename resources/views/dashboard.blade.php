@extends('layouts.master')

@section('content')
<div class="content-wrapper">
   <div class="page-header">
      <h3 class="page-title">
         Dashboard
      </h3>
   </div>
   <div class="row">
      <div class="col-sm-12 col-lg-8 col-md-12">
         <div class="row">
            <div class="col-md-4 stretch-card grid-margin">
               <div class="card  main_card_bg" style="background: #FFEFE7 !important;">
                  <div class="card-body" >
                     <h4 class="font-weight-normal mb-3 card-title">Available Position
                     </h4>
                     <h2 class="mb-3 card-title2">24</h2>
                     <h6 class="card-text mb-0" style="color:#FF5151 !important;">4 Urgently needed</h6>
                  </div>
               </div>
            </div>
            <div class="col-md-4 stretch-card grid-margin">
               <div class="card  main_card_bg" style="background: #E8F0FB !important;">
                  <div class="card-body" >
                     <h4 class="font-weight-normal mb-3 card-title">Job Open
                     </h4>
                     <h2 class="mb-3 card-title2">10</h2>
                     <h6 class="card-text mb-0" style="color:#3786F1 !important;">4 Active hiring</h6>
                  </div>
               </div>
            </div>
            <div class="col-md-4 stretch-card grid-margin">
               <div class="card  main_card_bg" style="background: #FDEBF9 !important;">
                  <div class="card-body" >
                     <h4 class="font-weight-normal mb-3 card-title">New Employees
                     </h4>
                     <h2 class="mb-3 card-title2">24</h2>
                     <h6 class="card-text mb-0" style="color:#EE61CF !important;">4 Department</h6>
                  </div>
               </div>
            </div>
            <div class="col-md-6 stretch-card grid-margin">
               <div class="card main_card_bg card-img-holder" style="background: #FFFFFF !important; padding: 20px;">
                  <div class="card-body p-3" >
                     <img src="{{asset('vendor/images/dashboard/2.svg')}}" class="card-img-absolute" alt="circle-image" />
                     <h4 class="font-weight-normal mb-3 card-title">Total Employees
                     </h4>
                     <h2 class="mb-3 card-title2">216</h2>
                     <h6 class="card-text mb-0" style="color:#gray !important;">
                        120 men<br>
                        96 women
                     </h6>
                  </div>
               </div>
            </div>
            <div class="col-md-6 stretch-card grid-margin">
               <div class="card main_card_bg card-img-holder" style="background: #FFFFFF !important; padding: 20px;">
                  <div class="card-body p-3" >
                     <img src="{{asset('vendor/images/dashboard/1.svg')}}" class="card-img-absolute" alt="circle-image" />
                     <h4 class="font-weight-normal mb-3 card-title">Talent Request
                     </h4>
                     <h2 class="mb-3 card-title2">16</h2>
                     <h6 class="card-text mb-0" style="color:#gray !important;">
                        6 men<br>
                        10 women
                     </h6>
                  </div>
               </div>
            </div>

            <div class="col-md-12 ">

               <div class="card p-3">

               <h3 class="page-title mb-3">
                  Announcement
               </h3>
               <ul class="list-group">
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                     <div>
                        <h5 class="mb-1">Outing schedule for every department</h5>
                        <small>5 Minutes ago</small>
                     </div>
                     <div>
                        <i class="mdi mdi-pin-outline mr-3 noti_icons"></i>   
                        <i class="mdi mdi-dots-horizontal mr-3 noti_icons"></i>   
                     </div>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                     <div>
                        <h5 class="mb-1">Meeting HR department</h5>
                        <small>Yesterday 12:30pm</small>
                     </div>
                     <div>
                        <i class="mdi mdi-pin-outline mr-3 noti_icons"></i>   
                        <i class="mdi mdi-dots-horizontal mr-3 noti_icons"></i>   
                     </div>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                     <div>
                        <h5 class="mb-1">IT Department need two more talent for UI/UX Designer Position</h5>
                        <small>Yesterday 09:15pm</small>
                     </div>
                     <div>
                        <i class="mdi mdi-pin-outline mr-3 noti_icons"></i>   
                        <i class="mdi mdi-dots-horizontal mr-3 noti_icons"></i>   
                     </div>
                  </li>
               </ul>
               <a href="#" class="my-3" style="color:red;text-decoration:none;text-align:center">See All Announcement</a>

               </div>

            </div> 

         </div>
      </div>


      <div class="col-sm-12 col-lg-4">
         <div class="stretch-card grid-margin">
            <div class="card  main_card_bg" style="background: #1B204A !important;">
               <div class="card-body" >
                  <h4 class="font-weight-normal mb-3 text-white">Recent Activity
                  </h4>
                  <p class="text-white mt-4">
                     10.40 AM, Fri 10 Sept 2021
                  </p>
                  <h4 class="mb-3 mt-4  text-white">
                     You Posted a New Job<br>
                  </h4>
                  <p class="text-white">
                     Kindly check the requirements and terms of work and make sure everything is right.
                  </p>
                  <p class="card-text mb-0 text-white mt-4 d-flex justify-content-between align-items-center">
                     Today you makes 12 Activity
                     <button style="background: #FF5151 !important;">See All Activity</button>
                  </p>
               </div>
            </div>
         </div>
         <div class="card p-3">
            <h3 class="page-title mb-3">
               Upcoming Schedule
            </h3>
            <ul class="list-group">
               <span>Priority</span>
               <li class="list-group-item d-flex justify-content-between align-items-center">
                  <div>
                     <h5 class="mb-1">Review Candidate Applications</h5>
                     <small>Today 11:30 PM</small>
                  </div>
                  <div>
                     <i class="mdi mdi-dots-horizontal mr-3 noti_icons"></i>   
                  </div>
               </li>
               <span>Other</span>
               <li class="list-group-item d-flex justify-content-between align-items-center">
                  <div>
                     <h5 class="mb-1">Interview with Other Candidate</h5>
                     <small>Today 12:30pm</small>
                  </div>
                  <div>
                     <i class="mdi mdi-dots-horizontal mr-3 noti_icons"></i>   
                  </div>
               </li>
               <li class="list-group-item d-flex justify-content-between align-items-center">
                  <div>
                     <h5 class="mb-1">Short Meeting with Product designer from IT Department</h5>
                     <small>Yesterday 09:15pm</small>
                  </div>
                  <div>
                     <i class="mdi mdi-dots-horizontal mr-3 noti_icons"></i>   
                  </div>
               </li>
            </ul>
            <a href="#" class="my-3" style="color:red;text-decoration:none;text-align:center">Create a new Schedule</a>
         </div>
      </div>

   </div>

   <div class="row mt-4">

      <div class="col-md-5 grid-margin stretch-card">
         <div class="card">
            <div class="card-body">
               <h4 class="card-title">Heading</h4>
               <div class="doughnutjs-wrapper d-flex justify-content-center">
                  <canvas id="traffic-chart"></canvas>
               </div>
               <div id="traffic-chart-legend" class="rounded-legend legend-vertical legend-bottom-left pt-4"></div>
            </div>

            <p class="m-4">Chart Link <a href="#" style="color:#000">Link</a></p>

         </div>


      </div>

      <div class="col-md-7 grid-margin stretch-card">
         <div class="card">
            <div class="card-body">
               <div class="clearfix">
                  <h4 class="card-title float-start">Heading</h4>
                  <div id="visit-sale-chart-legend" class="rounded-legend legend-horizontal legend-top-right float-end"></div>
               </div>
               <canvas id="visit-sale-chart" class="mt-4"></canvas>
            </div>

            <p class="m-4">Chart Link <a href="#" style="color:#000">Link</a></p>

         </div>
      </div>

   </div>
</div>

@endsection