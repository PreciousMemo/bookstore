<html>
<head>

<title>Client SOAP</title>
<style type=text/css>
		


</style>

</head>
<body background ="background.jpg">
<?php
	// FOR DISABLE ERROR INPUT NOTICE
	error_reporting( error_reporting() & ~E_NOTICE );
	// FOR CALL NUSOAP
	require("lib/nusoap.php");
?>
<input type="button" id="BACK" value="BACK" onclick="location.href = 'http://ec2-35-162-130-156.us-west-2.compute.amazonaws.com/index.html';" class="btn btn-default"/>
<!-- EDIT SERVICE -->
<h1> Edit Book By Name Service </h1>
<?php
  	if($_POST['submit_edit'] == "Submit") {
		//$from_name=$_POST['from_name'];
		//$to_name=$_POST['to_name'];
		//$priceVarTH=$_POST['priceVarTH'];
		//$thick=$_POST['thick'];
        $client = new nusoap_client("http://ec2-35-162-130-156.us-west-2.compute.amazonaws.com/WebServiceServer.php?wsdl",true); 
        $params = array(
			'from_name'=>$_POST['from_name'],
			//'to_name'=>$to_name,
			'priceVarTH'=>$_POST['priceVarTH'],
			'thick'=>$_POST['thick']
			);
        $data = $client->call("EditXMLTH",$params); 
        echo $data;
    }
?>
<form method="POST">
	<p>From Book Name: 
	<INPUT type="text" name="from_name" size="50" maxlength="100">
	<br>
	TO:
	<br>
	<INPUT type="text" name="priceVarTH" size="50" maxlength="100"> </p>
	<INPUT type="text" name="thick" size="50" maxlength="100"> </p>
	<INPUT type="submit" name="submit_edit" value="Submit">
	<br>
	
</form>
<!-- EDIT SERVICE -->

</body>
</html>
