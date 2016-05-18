<?php namespace App\Http\Controllers;
use App\Libraries\globalFunction;
use App\Libraries\queryTabelContact;
use App\Libraries\queryTabelUser;
use \Validator, \Redirect, \Request, Session, Input, URL;

class postController extends Controller {
	
	public function userAction(){
		//declare requirements
		$layer =  Request::get('userLayer');
		$action =  $layer[0]['action'];
		$qContact = new queryTabelContact();
		$gFunct = new globalFunction();
		
		if($layer !== null){
			if($action == 'user-contact'){
				$userName = $layer[0]['name'];
				$email = $layer[0]['email'];
				$subject = $layer[0]['subject'];
				$subjectText = $layer[0]['subjectText'];
				
				if($qContact::insertNewContact($userName,$email,$subject,$subjectText)){
					exit(json_encode(array(
						'returnValue' => false,
						'serverResponse' => 'insertTrue'
					)));
				}else{
					exit(json_encode(array(
						'returnValue' => false,
						'serverResponse' => 'insertFalse'
					)));
				}
			}
		}else{
			//something wierd, illegal action
			abort(403);
		}
	}
	
	public function auth(){
		//declare requirements
		$layer =  Request::get('userLayer');
		$action =  $layer[0]['action'];
		$qUser = new queryTabelUser();
		$gFunct = new globalFunction();

		if($layer !== null){
			if($action == 'user-login'){
				$email = $layer[0]['mail'];
				$getPassMd5 = $layer[0]['pass'];
				$userData = $qUser::selectUserPassAndEmail($email);

				foreach($userData as $row){
					$getSalt = $row -> salt;
					$getPassword = $row -> password;
				}
				
				$authCon = $gFunct::auth($getPassMd5,$getSalt,$getPassword);
				
				//remove sensitive userdata
				unset($userData[0]->password);
				unset($userData[0]->salt);
				
				if($authCon === false){
					echo(json_encode(array(
						'returnValue' => false,
						'serverResponse' => 'passwordFalse'
					)));
				}else{
					echo(json_encode(array(
						'returnValue' => true,
						'serverResponse' => 'loginTrue'
					)));
				}
				
			}if($action == 'user-google-signup'){
				$email = $layer[0]['email'];
				$fullName = $layer[0]['firstname'].' '.$layer[0]['lastname'];
				$id = $layer[0]['googleid'];
		
				$userData = $qUser::selectUserPassAndEmail($email);
				if(count($userData) > 0){
					//if already exist then execute login funct
					exit(json_encode(array(
						'returnValue' => true,
						'serverResponse' => 'loginTrue'
					)));
				}else{
					//sign up new user
					//we need to collect mobile number
					//then return require params 
					exit(json_encode(array(
						'serverResponse' => 'socialSignUp',
						'returnValue' => true,
						'fullName' => $fullName,
						'email' => $email 
					)));
					
				}
					
			}else if($action == 'user-signup'){
				$username = strtolower($layer[0]['name']);
				$email = strtolower(trim($layer[0]['email']));
				$phone = $layer[0]['mobile'];
				$md5Pass = $layer[0]['pass'];
				
				$passwordArr = $gFunct::generateUserPassword($md5Pass);
				$password = $passwordArr[0];
				$salt = $passwordArr[1];
				
				$saveCon  = $qUser::insertNewUser($username,$email,$phone,$password,$salt);
				
				if($saveCon[0] === true){
					$idUser = $saveCon[1];
					//user has been created
					//get info for this user
					$userData = $qUser::selectUserByIdUser($idUser);	
					echo(json_encode(array(
						'returnValue' => true,
						'serverResponse' => 'insertTrue'
					)));
				}else{
					echo(json_encode(array(
						'returnValue' => false,
						'serverResponse' => 'insertFalse'
					)));
				}
			}else if($action == 'user-email-checking'){
				$email = strtolower(trim($layer[0]['email']));
				$emailCondition = $qUser::selectUserEmailByEmail($email);
				
				if($emailCondition === true){
					exit(json_encode(array(
						'returnValue' => true
					)));
				}else{
					exit(json_encode(array(
						'returnValue' => false
					)));
				}
			}
		}else{
			//something wierd, illegal action
			abort(403);
		}
	}

}