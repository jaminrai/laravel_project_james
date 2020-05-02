<?php 

namespace App\Http\Controllers;
use Illimunate\Http\Request;

class HomeController extends controller{

	public function index(){
		echo "this is controller";
	}

	public function call(){
		$users=['Ram','Shyam','Hari','Geeta','Sita'];
		$name="Jamin Rai";

		
		return view("call")->withUsers($users)->withName($name);
	}

	public function services(){
		return view("home.services");
	} 

	public function about(){
		return view("home.about");
	}

	public function team(){
		return view("home.team");
	}
}

 ?>