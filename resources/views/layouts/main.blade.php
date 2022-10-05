
<!DOCTYPE html>
<html lang="en">
@include('layouts.header')
<body>
	<div class="main-wrapper">
		@include('layouts.navbar')
		@include('layouts.sidebar')
		@yield('konten')
	</div>
	@include('layouts.script')
</body>

</html>