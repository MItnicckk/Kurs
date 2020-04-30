<?php
class Enc {
	
	static public function get_keys() {
		
		$config = array(
						"private_key_type"=>OPENSSL_KEYTYPE_RSA,
						"private_key_bits"=>512
						);
		
		$res = openssl_pkey_new($config);
		$privKey = '';
		openssl_pkey_export($res,$privKey);
		
		$fpr = fopen("private.txt","w");
		fwrite($fpr,$privKey);
		fclose($fpr);
		

		$csr = openssl_csr_new($arr,$privKey);

		$cert = openssl_csr_sign($csr,NULL, $privKey,10);
		openssl_x509_export($cert,$str_cert);
		
		//openssl_csr_export_to_file($csr,'Z:/home/localhost/www/lessons/cipher/certificate.cert');
		$public_key = openssl_pkey_get_public($str_cert);
		$public_key_details = openssl_pkey_get_details($public_key);
		
		$public_key_string = $public_key_details['key'];
		
		$fpr1 = fopen("public.txt","w");
		fwrite($fpr1,$public_key_string);
		fclose($fpr1);
		
		return array('private'=>$privKey,'public'=>$public_key_string);
	}
	
	public function my_enc($str) {
		
		$path = "public.txt";
		$fpr = fopen($path,"r");
		$pub_key = fread($fpr,1024);
		fclose($fpr);
		
		openssl_public_encrypt($str,$result,$pub_key);
		
		return $result;
	}
	
	public function my_dec($str) {
		$path = "private.txt";
		$fpr = fopen($path,"r");
		$pr_key = fread($fpr,1024);
		fclose($fpr);
		
		openssl_private_decrypt($str,$result,$pr_key);
		
		return $result;
	}
	
}
?>