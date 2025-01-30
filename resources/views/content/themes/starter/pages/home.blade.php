{{-- Extend the Layout --}}
@extends("$theme_dir.layouts.$layoutName")

{{-- Content --}}
@section('content')
	<section class="scr-register">
		<div class="container">
			<h1>Welcome To Vormia</h1>
			<a href="{{ url('vrm-admin') }}">click here to login</a>
		</div>
	</section>
@endsection
