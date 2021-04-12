<?
/*
 Simple and easy for modification, PHP script for SMS sending through HTTP with you own Virtual mobile Number as Sender ID and delivery reports. 
 You just have to type your account information on www.proovl.com and upload file on server.

 Istruction:
 
  Find 3 parameters in <body> line 84 and type your account information on www.proovl.com
  
1.$token = "********"; // Change ********, and put your Authentication token in https://www.proovl.com account / example - API token: 7g234dsd4rh3dadwd36 
2.$user = "********"; //Change ********, and put your User token in https://www.proovl.com/sms-api account / example - User token: 123453 
3.$from = "********"; //Change ********, Proovl phone number. If you leave it empty you will see message: Missing "from" parameter

https://www.facebook.com/2WaySMSGateway/

*/


?>



<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Simple bulk sms script</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<style type="text/css">
body{
	font-family:"Lucida Grande", "Lucida Sans Unicode", Verdana, Arial, Helvetica, sans-serif; 
	font-size:12px;
}
p, h1, form, button{border:0; margin:0; padding:0;}
.spacer{clear:both; height:1px;}
/* ----------- My Form ----------- */
.myform{
	margin:0 auto;
	width:450px;
	padding:14px;
}
/* ----------- stylized ----------- */
	#stylized{
		border:solid 2px #b7ddf2;
		background:#ebf4fb;
	}
	#stylized h1 {
		font-size:14px;
		font-weight:bold;
		margin-bottom:8px;
	}
	#stylized p{
		font-size:11px;
		color:#666666;
		margin-bottom:20px;
		border-bottom:solid 1px #b7ddf2;
		padding-bottom:10px;
	
}
	</style> 
		<script type="text/javascript">
	
//Edit the counter/limiter value as your wish
var count = "160";   //Example: var count = "175";
function limiter(){
var tex = document.myform.text.value;
var len = tex.length;
if(len > count){
        tex = tex.substring(0,count);
        document.myform.text.value =tex;
        return false;
}
document.myform.limit.value = count-len;
}
</script> 

</head>

<body>



<?

$token = "********"; // Change ********, and put your Authentication token in https://www.proovl.com account / example - API token: 7g234dsd4rh3dadwd36 
$user = "********"; //Change ********, and put your User token in https://www.proovl.com/sms-api account / example - User token: 123453 
$from = "********"; //Change ********, Proovl phone number. If you leave it empty you will see message: Missing "from" parameter



echo "<script type=\"text/javascript\">\n"
."function cnt(to,x){\n"
."var y=to.value;\n"
."var r = 0;\n"
."a=y.replace(/\s/g,' ');\n"
."a=a.split(' ');\n"
."for (z=0; z<a.length; z++) {if (a[z].length > 0) r++;}\n"
."x.value=r;\n"
."}\n"
."</script>\n";

$submit = $_REQUEST["submit"];
$text = $_REQUEST["text"];
$to = $_REQUEST["to"];

	echo "<div id=\"stylized\" class=\"myform\">"
	   ."<p><b>Simple <a target=\"_blank\" href=\"http://www.proovl.com\">Bulk SMS</a> script PHP</b></p>"
	   ."<form name=\"myform\" method=post action=\"$PHP_SELF\">"
	   ."<table width=100% border=\"0\">"
	   ."<tr>"
		 ."<td>Numbers:<br>(one per line)</td>"
		 ."<td><textarea style=\"resize: none;width:80%;border: 1px solid #523f6d;outline:none;\" placeholder=\"xxxxxxx\nxxxxxxx\nxxxxxxx\nxxxxxxx\nxxxxxxx\"  rows=\"10\" cols=\"25\" name=\"to\" onkeyup=\"cnt(this,document.myform.c)\"></textarea></td>"
	   ."</tr>"
	      ."<tr>"   
	   ."<td></td>"
      ."<td><p>Numbers count: <input type=\"text\" name=\"c\" value=\"0\" size=4 readonly onkeyup=\"cnt(document.myform.w,this)\"></p></td>"
	   ."</tr>"
	   ."<tr>"
	   ."<tr>"
		 ."<td>Message: </td>"
		 ."<td><textarea style=\"resize: none;width:80%;padding;5px;border: 1px solid #523f6d;outline:none;\" wrap=physical rows=\"4\" cols=\"25\" name=\"text\" onkeyup=limiter()></textarea></td>"
	   ."</tr>"
	 	   ."<tr>"
	   ."<td></td>"
      ."<td><p>Character left: <script type=\"text/javascript\">"
       ."document.write(\"<input type=text name=limit size=4 readonly value=\"+count+\">\");"
       ."</script></p></td>"
	   ."</tr>"
	   ."<tr>"
		 ."<td>&nbsp;</td>"
		 ."<td><input style=\"width:8em;font-size:10px;\" type=submit name=submit value=Send>"
		 ."<div class=\"spacer\"></div></td>"
	   ."</tr>"
	   ."</table>"
	   ."</form>"
	   	   ."<br>Do you need Proovl Token for Bulk SMS? <a target=\"_blank\" href=\"http://www.proovl.com\">Order here</a><br>";


if ($submit == "Send") {
		
		if ($text == "") { echo "<center><br>Error!<br>Text not entered</center>"; die; } else { }
		if ($to == "") { echo "<center><br>Error!<br>Number not entered</center>"; die; } else { }
	
	
		$created = date('Y-m-d H:i:s');
	
	// You can change explode to (, \n ; . -) or something else. 
	
		$to_arr = explode("\n", $to);
	echo "<center><br><textarea style=\"resize: none;width:auto;border: 1px solid #523f6d;outline:none;\"  rows=\"10\" cols=\"55\" name=\"to\"\">";
		
		
		foreach ($to_arr as $to_x => $value){	
	
			$created = date('Y-m-d H:i:s');
	   $counth = count($to_arr);	
	
	$url = "https://www.proovl.com/api/send.php";

	$postfields = array(
		'user' => "$user",
		'token' => "$token",
		'route' => "$route",
		'from' => "$from",
		'to' => "$value",
		'text' => "$text"
	);

	if (!$curld = curl_init()) {
		exit;
	}

	curl_setopt($curld, CURLOPT_POST, true);
	curl_setopt($curld, CURLOPT_POSTFIELDS, $postfields);
	curl_setopt($curld, CURLOPT_URL,$url);
	curl_setopt($curld, CURLOPT_RETURNTRANSFER, true);

	$output = curl_exec($curld);
	
	$result = explode(';',$output);

	curl_close ($curld);
	
$value = preg_replace('/[^0-9]/i', '', $value);	
		

print_r($to_x + 1);


		echo ". $value ID:$result[1]: $result[0]! \n";
		
	
		}

	
				echo "</textarea><br> <a href=\"bulksms.php\"><b>Close</b></a></center>"; 
	
}





	echo "</div>";


?>

</body>
</html>