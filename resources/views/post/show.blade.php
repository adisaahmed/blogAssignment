@extends('layouts.layout')

@section('content')
<div>
	<h1>
		Blog Post
	</h1>

	<div>
		Blog Title - {{ $content->title }}
	</div>

	<div>
		Author - {{ $content->posted_by }}
	</div>

	<div>
		Blog Content - {{ $content->content }}
	</div>

	<a href="/">
		<- Back to all blog
	</a>
</div>
@endsection