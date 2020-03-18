@extends('layouts.app')

@section('content')
<div>
	<h1>
		Blog Post
	</h1>

	@foreach($contents as $blogContent)
		<div>
			{{ $blogContent->title }} - {{ $blogContent->posted_by }}
		</div>
	@endforeach
</div>
@endsection