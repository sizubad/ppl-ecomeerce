<!DOCTYPE html>
<html lang="en">
<head>
	@include('frontend.layouts.head')	
</head>
<body class="animsition">

	@include('frontend.layouts.header')
	@yield('main-content')
	@include('frontend.layouts.footer')
	@include('frontend.layouts.notification')

</body>
</html>