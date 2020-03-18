<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Content;

class ContentController extends Controller
{	
    // public function __construct(){
    //     $this->middleware('auth');
    // }
    
	public function welcome() {
		$blogContents = Content::all();
        
		return view('welcome', [
			'contents' => $blogContents
		]);
	}

    public function show($id) {
    	$blogContent = Content::findOrFail($id);

    	return view('post.show', [
            'content' => $blogContent
        ]);
    }

    public function create() {
    	return view('post.create');
    }

    public function store() {
    	$blogContent = new Content();

    	$blogContent->title = request('title');
    	$blogContent->posted_by = request('posted_by');
    	$blogContent->content = request('content');

    	$blogContent->save();

    	return redirect('/')->with('mssg', 'Content posted Successfully');
    }
}
