<?php namespace App\Http\Controllers;
use App\Libraries\test;
use \Validator, \Redirect, \Request, Session, Input, URL;

class json extends controller {

	public function json(){
		$base = URL::to('/');
		exit(json_encode(array(
				'html_Xa' => '',
				
				'passwordFalse' => 'Password or Email that you entered is not valid',
				'insertFail' => 'ups something wrong, please try again we will fix it soon',
				
				'message_Xa' => 'email address not registered',
				'message_Xb' => 'Kata Sandi yang ada  masukan salah',
				'message_Xc' => 'Tidak Boleh Kosong',
				'message_Xd' => 'at least three characters',
				'message_Xe' => 'allow numeric',
				'message_Xf' => 'Invalid email address.',
				'message_Xg' => 'is empty',
				'message_Xh' => 'should more than 5 characters',
				'message_Xj' => 'atau password yang di input tidak sama',
				'message_Xk' => 'Your password has been changed successfully',
				'message_Xl' => ' Your old password is incorrect.',
				'message_Xm' => 'we have already sent an activation link to the email address you submitted',
				'message_Xn' => 'please help us verify this email is yours by clicking the activation link in your email',
				'message_Xo' => 'this account has been suspended',
				'message_Xp' => 'Loading',
				'message_Xq' => 'submit your feedback with minimum 10 characters',
				'message_Xr' => 'Awaiting for approval',
				'message_Xs' => 'Instructions for resetting your password has been sent.',
				'message_Xt' => 'Reset Password',
				'message_Xu' => 'Post new project',
				'message_Xv' => 'this project already closed by someone or maybe you.',
				'message_Xw' => 'cannot save its already exist in database',
				'message_Xx' => 'cannot delete its already have subcategory',
				'message_Xy' => 'please select one of subcategory that you want to delete',
				'message_Xz' => 'cannot delete its already associated with product',
				'message_Za' => 'cannot delete, supplier name or supplier code already exist in database',
				'message_Zb' => 'choose of your product size minimum one selected',
				'message_Zc' => 'choose of your product color minimum one selected',
				'message_Zd' => 'Additional title is empty',
				'message_Ze' => 'Price should between IRD 1.000 and IDR 5.000.000',
				'message_Zf' => 'Discount allowed between 1% to 99%',
				'message_zG' => 'Pencarian tidak ditemukan.',
				'message_zH' => 'Hanya Angka dan minimum 6 karakter.',
				'message_zI' =>	'FIRST NAME too short, minimum 3 characters',
				'message_zJ' =>	'GENDER not selecteds',
				'message_zK' => 'You must agree with all of the terms and conditions',
				'message_zL' => 'not contain script tag',
				'message_zM' => 'the email address already registered',
				'message_zN' => 'You can log in with this email address',
				'message_zO' => 'Your account has beed created',
				'message_Zp' => 'ups something wrong it maybe happens with your email address cause it already registered',
				'message_Zq' => 'The email address that you entered is not valid',
				'message_Zr' => 'password that you entered is not valid',
				'message_Zs' => 'Sign in',
				'message_Zt' => 'Cannot Save your old password',
				'message_Zu' => 'zipcode should have 5 characters',
				'message_Zv' => 'Your address has been changed successfully',
				'message_Zw' => 'Your profile has been changed successfully',
				'message_Zx' => 'Login Success',
				'message_Aa' => 'Pilih salah satu jasa pengiriman',
				'message_Ab' => 'Saran atau Kritik anda terlalu pendek',
				'message_Ac' => 'Pilih salah satu metode pembayaran',
				'message_Ad' => 'Silahkan pilih Ulasan Positif atau Negatif',
				'message_Af' => 'Ulasan anda terlalu pendek',
				'message_Ag' => 'Silahkan pilih salah satu pringkat terbaik mewakili merek ini',
				'message_Ah' => 'Upload logo terlebih dahulu',
				'message_Ai' => 'file yang boleh di upload hanya berekstensi ',
				'message_Aj' => 'Nomor Handphone tidak valid',
				'message_Ak' => 'Registrasi anda telah kami terima dan segera kami review dan kami response dalam 1 x 24 jam mohon untuk terus perbarui informasi alamat email anda</br><br>Hormat kami<br>Mereklokal dan Tim',
				'message_Al' => 'anda dapat menggunakan email ini',
				'message_Am' => 'email telah terdaftar dan tidak bisa digunakan',
				'message_An' => 'Pilih tag yang mewakilik artikel ini',
				'message_Ao' => 'Thank you for contacting us, We have received your enquiry and will respond to you within 24 x 2 hours.  For urgent enquiries please call us on one of the telephone numbers above.',
				
				'address_Aa' => $base.'/auth',
				'address_Ab' => $base.'/actions',
				'base' => $base
		)));	
	}

}
