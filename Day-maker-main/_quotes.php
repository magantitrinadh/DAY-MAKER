<?php
$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://quotes15.p.rapidapi.com/quotes/random/",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"x-rapidapi-host: quotes15.p.rapidapi.com",
		"x-rapidapi-key: e108e5d99emsh48509a9db16048bp149fdcjsn96811bc8f447"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	//echo"This is response";
	//echo $response;

	$obj = json_decode($response);
/*	echo "Yours today's quote is :";
	echo $obj->content;
	echo " Author of the Quote is : ";
	echo $obj->name; 
*/

	//document.getElementById("demo").innerHTML = ;

}
?>
