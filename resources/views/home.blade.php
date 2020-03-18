@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    <h1>
                      Add a new blog post
                    </h1>
                    <form action="/content" method="POST">
                      @csrf
                      <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" class="form-control" placeholder="Enter Title" id="title" name="title">
                      </div>

                      <div class="form-group">
                        <label for="posted_by">Posted By:</label>
                        <input type="text" class="form-control" placeholder="Enter Your Name" id="posted_by" name="posted_by">
                      </div>

                      <div class="form-group">
                        <label for="content">Message:</label>
                        <input type="text" class="form-control" placeholder="Enter Your Blog Message" id="content" name="content">
                      </div>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
