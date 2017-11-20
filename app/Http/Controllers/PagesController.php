<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;
use Session;


class PagesController extends Controller {

public function getIndex() {
		$posts = Post::orderBy('created_at', 'desc')->limit(4)->get();
		return view('pages.welcome')->withPosts($posts);
	# process variable data or params
	# talk to the model
	#receive from the model
	# compile or process data from the model if needed
	# pass that data to the correct view

}

public function getAbout(){
	$first ='alex';
	$last ='curtis';
	
	$fullname =$first . " " . $last;
	$email = 'tijaniademola25@yahoo.com';
	$data = [];
	$data ['email']=$email;
	$data ['fullname']=$fullname;
	
return  view('pages.about')->withData($data);
}

public function getContact(){
	return  view('pages.contact');
}


}
