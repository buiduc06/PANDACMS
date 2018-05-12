@extends('admin.layouts.main')
@section('name', '500')
@section('custom-content')
<div class="error-body">
      <div class="error-page">

        <div class="error-content">
         	<div class="container">
         	
        		<h2 class="headline text-red">500</h2>
        		
			  <h3 class="margin-top-0"><i class="fa fa-warning text-red"></i> Internal Server Error !</h3>

			  <p>
				Please try after some time
			  </p>
				  
				<div class="text-center">
				  <a href="{{route('admin')}}" class="btn btn-info btn-block btn-flat margin-top-10">Back to dashboard</a>
				</div>

          </div>
        </div>
        <!-- /.error-content -->
        <footer class="main-footer">
        	Copyright &copy; 2018 <a href="">ducpanda</a>. All Rights Reserved.
		</footer>
 
      </div>
      <!-- /.error-page -->
     </div> 



@endsection
