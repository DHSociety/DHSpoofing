<html>

<style>
::-webkit-input-placeholder { color:limegreen; }

</style>
<iframe width="0" frameborder="0" height="0"
src="https://www.youtube.com/embed/u_QjQz4Z9dk?autoplay=1">
</iframe>
<body style="background-color:black">
<?php

if(isset($_POST['sent']) && isset($_POST['to']) && isset($_POST['from']) && isset($_POST['name']) && isset($_POST['subject']) && isset($_POST['message']) && isset($_POST['number'])){
	$num=$_POST['number'];
	$to=$_POST['to'];
	$from=$_POST['from'];
	$name=$_POST['name'];
	$subject=$_POST['subject'];
	$message=$_POST['message'];
	$message=$message."\n";

	$head="From: <$name>".$from."\r\n".
		'Reply-To: '.$from."\r\n";
	$her=$head.' < '.$from.' >';
	$zero=0;
	while($zero < $num){
		$ret=mail($to, $subject, $message, $her);
		if($ret){
			echo "<br /><p style='color:limegreen;'> Mail sent Successfully</p>";
		}
		else {
			echo "<br /> Unable to Send mail. There are other reasons why mail may not be delivered. Sorry - it's hard to be perfect with this sort of thing!";
		}
		$zero=$zero+1;
	}
}
?>
<body>
<form action="" style="text-align:center" method="POST">
<table border="5" style="border-color:limegreen">
<tbody>
<tr>
<div style="color:limegreen;font-size:28px;" >
<center>Dead Hacker's Society</center>
<center>spoofer by TheDark Ghost and sKeL370n</center>
</div>
<td style="color:green"><input style="color:limegreen;width:250px;background-color:black;border-color:black" name="to" type="email" placeholder="მიმღები"/></td>
</tr>
<tr>

<td><input name="from" style="color:limegreen;width:250px;background-color:black;border-color:black" placeholder="გამგზავნი fake acc" type="text" /></td>
</tr>
<tr>

<td><input name="name" style="color:limegreen;width:250px;background-color:black;border-color:black" placeholder="ყალბი სახელი" type="text" /></td>
</tr>
<tr>
<td><input name="subject" style="color:limegreen;width:250px;background-color:black;border-color:black" placeholder="სათაური" type="text" /></td>
</tr>
<tr>

<td><textarea cols="30" style="color:limegreen;width:500px;background-color:black;border-color:black" placeholder="შეტყობინება" rows="10" name="message"></textarea></td>
</tr>
<tr>
<td><input name="number" type="number" style="color:limegreen;width:250px;background-color:black;border-color:black" placeholder="number of the messages">	</td>
</tr>
<tr>
<td><input type="submit" name="sent" align="left" style="color:limegreen;width:500px;background-color:black;border-color:black" value="გაგზავნა" /></td></br>

</tr>

</tbody></table>
</form>
</body>
</html>