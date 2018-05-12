@extends('admin.layouts.main')
@section('name', '404')
@section('custom-content')

<div class="error-body">
      <div class="error-page">

        <div class="error-content">
         	<div class="container">
         	
        		<h2 class="headline text-yellow"> 404</h2>
        		
			  <h3 class="margin-top-0"><i class="fa fa-warning text-yellow"></i> PAGE NOT FOUND !</h3>

			  <p>
				YOU SEEM TO BE TRYING TO FIND HIS WAY HOME
			  </p>
				<div class="text-center">
				  <a href="{{route('admin')}}" class="btn btn-info btn-block btn-flat margin-top-10">Back to dashboard</a>
				</div>
				 <h5>or <br>Try using the search form.</h5>

			  <form class="search-form form-element" action="?s=" method="get">
				<div class="input-group">
				  <input type="text" name="search" class="form-control" placeholder="Search">

				  <div class="input-group-btn">
					<button type="submit" class="btn btn-info btn-flat"><i class="fa fa-search"></i>
					</button>
				  </div>
				</div>
				<!-- /.input-group -->
			  </form>
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
