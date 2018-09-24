<?php

namespace App\Http\Controllers;

use App\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller{


	// To fetch all authors
	public function showAllAuthors(){
		return response()->json(Author::all());
	}

	// To fetch a single author
	public function showoneAuthor($id){
		return response()->json(Author::find($id));
	}

	// To create an author

	public function create(Request $request){
		$author = Author::create($request->all());
		return response()->json($author, 201);
	}

	// To update an author
	public function update($id,Request $request){
		$author = Author::findorFail($id);
		$author->update($request->all());

		return response()->json($author,200);
	}

	// To delete an author
	public function delete($id){
		Author::findorFail($id)->delete();
		return response('Delete successfully',200);
	}
}