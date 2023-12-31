@extends('frontend.main_master')
@section('home_content')
<div class="breadcrumb">
   <div class="container">
      <div class="breadcrumb-inner">
         <ul class="list-inline list-unstyled">
            <li><a href="#">Home</a></li>
            <li class='active'>Forgot Password</li>
         </ul>
      </div>
      <!-- /.breadcrumb-inner -->
   </div>
   <!-- /.container -->
</div>
<!-- /.breadcrumb -->
<div class="body-content">
   <div class="container">
      <div class="sign-in-page">
         <div class="row">
            <!-- Sign-in -->
            <div class="col-md-6 col-sm-6 sign-in">
               <h4 class="">Forgot Password</h4>
               <p class="">Forgot Your Password? No Problem.</p>

               <form method="POST" action="{{ route('password.email') }}">
                @csrf

               <form class="register-form outer-top-xs" role="form">
                  <div class="form-group">
                     <label class="info-title" for="exampleInputEmail1">Email Address <span>*</span></label>
                     <input type="email" id="email" name="email" class="form-control unicase-form-control text-input" >
                  </div>


                  <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Email Password Reset Link</button>
               </form>
            </div>
            <!-- Sign-in -->
         </div>
         <!-- /.row -->
      </div>
      <!-- /.sigin-in-->
      <!-- ============================================== BRANDS CAROUSEL ============================================== -->
      @include('frontend.body.brands')
      <!-- /.logo-slider -->
      <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->
   </div>
   <!-- /.container -->
</div>
<!-- /.body-content -->
@endsection
