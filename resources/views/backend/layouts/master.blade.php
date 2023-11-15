<!DOCTYPE html>
<html lang="en">
<head>
	@include('backend.layouts.head')	
</head>
<body>
    <div class="container-fluid position-relative d-flex p-0">
	@include('backend.layouts.sidebar')
	<!-- Header -->
    <div class="content">
	@include('backend.layouts.header')
	<!--/ End Header -->

	        @yield('content')

	@include('backend.layouts.footer')
    </div>
    </div>
     <!-- Back to Top -->
     <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    @include('backend.layouts.script')

</body>
</html>