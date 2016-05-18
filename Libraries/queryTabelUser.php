<?php namespace App\Libraries;
use DB;
class queryTabelUser{
	public static function selectUserByIdUser($id){
		$data = DB::table("user")
			->where('id_user','=',$id)
			->select('id_user','full_name','email','phone')
			->take(1)
			->get();
		if(count($data) <= 0){
			return false;
		}else{		
			return $data;
		}
	}

	public static function selectUserPassAndEmail($email){
		$data = DB::table("user")
			->where('email','=',$email)
			->select('id_user','full_name','email','phone','password','salt')
			->take(1)
			->get();
		return $data;
	}
	
	public static function insertNewUser($username,$email,$phone,$password,$salt){
		$data = DB::table("user")
			->where('email','=',$email)
			->select('id_user')
			->take(1)
			->get();
		
		if(count($data) <= 0){	
			$id = DB::table('user')
				  ->insertGetId(array('full_name' => $username,'email' => $email,'phone' => $phone,'password' => $password,'salt' => $salt));	
			return array(true, $id);	
		}else{
			return array(false, $data);
		}
	}
	
	public static function selectUserEmailByEmail($email){
		$data = DB::table("user")
			->where('email','=',$email)
			->select('email')
			->take(1)
			->get();
		
		if(count($data) <= 0){	
			return true;	
		}else{
			return false;
		}
	}
}
?>