<?php namespace App\Http\Controllers;
use App\Libraries\seoFunction;
use \Validator, \Redirect, \Request, Session, Input, URL;

class viewController extends Controller {

	public function homepage(){
		$seoF = new seoFunction;
		$metaData = $seoF::metaData('home');
			
		return View('frontend/main/home')
				->with(compact('metaData'));
	}
	public function pricing(){
		$seoF = new seoFunction;
		$metaData = $seoF::metaData('pricing');
	
		return View('frontend/main/pricing')
			->with(compact('metaData'));
	}
	public function help(){
		$seoF = new seoFunction;
		$metaData = $seoF::metaData('help');
		
		return View('frontend/main/help')
			->with(compact('metaData'));
	}
	public function studyCase($name){
		$seoF = new seoFunction;
		$metaData = $seoF::metaData('customer');
	
		if($name == 'linda-jensen'){
			return View('frontend/main/study-case-linda')
				->with(compact('metaData'));
		}else if($name == 'denise-chen'){
			return View('frontend/main/study-case-denise')
				->with(compact('metaData'));
		}else if($name == 'jennifer-williams'){
			return View('frontend/main/study-case-jennifer')
				->with(compact('metaData'));
		}
	}	
	
	public function contact(){
		$seoF = new seoFunction;
		$metaData = $seoF::metaData('contact');
	
		return View('frontend/main/contact')
			->with(compact('metaData'));
	}
	
	public function login(){
		$seoF = new seoFunction;
		$metaData = $seoF::metaData('login');	
	
		return View('frontend/main/login')
				->with(compact('metaData'));
	}
	
	public function signup(){
		$seoF = new seoFunction;
		$metaData = $seoF::metaData('signup');	
		return View('frontend/main/signup')
				->with(compact('metaData'));
	}
	
	public function reset(){
		$seoF = new seoFunction;
		$metaData = $seoF::metaData('reset');
		
		return View('frontend/main/reset')
				->with(compact('metaData'));
	}
}