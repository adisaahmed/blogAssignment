@extends('layouts.layout')

@section('content')
<div>
    <div class="container">
    	<div class="row">
    		<h1 class="welcome_h1">
		        Blog Post
		    </h1>

		    <a href="/home">
		    	Add New Post
		    </a>
		    @foreach($contents as $blogContent)
    		<div class="col-md-12 col_md_12">
    			<h1>
    				{{ $blogContent->title }}
    			</h1>

    			<p>
    				{{ $blogContent->content }}
    				<a href="/content/{{$blogContent->id}}">
    					Continue Reading
    				</a>
    			</p>

    			<p>
    				{{ $blogContent->created_at }}
    			</p>
			    
			    <em>
			    	{{ $blogContent->posted_by }}
			    </em>
    		</div>
    		@endforeach
    	</div>
    </div>
</div>
@endsection