<?php
if(isset($_POST['results']))
{
	$a = $_POST["a"];
	$oper = $_POST["oper"];
	$b = $_POST["b"];
	$results;
	switch($oper)
	{
		case '+':
		$results = $a+$b;
		break;
		case '-':
		$results = $a-$b;
		break;
		case '/':
		$results = $a/$b;
		break;
		case '*':
		$results = $a*$b;
		break;
		$results = "undefine";
	}
	
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<title>web calculator</title>
<style type="text/css" media="all">
            *{
				margin:0;
				padding:0;
				box-sizing:border-box;
				font-family:Arial;
			}
			body{
				height:100vh;
			}
			form{
				width:90%;
				margin:10% auto;
				background:#eee;
				padding:20px;
				overflow:hidden;
			}
			table{
				width:100%;
				border-collapse:collapse;
			}
			tr td,th{
				padding:5px;
				border:1px solid #ddd;
				border-collapse:collapse;
			}
			tr th{
				padding:10px 0;
			}
			table tr td input{
				width: 100%;
				padding:8px 10px;
			}
			button {
				padding:10px 20px;
				width:100%;
				user-select:none;
			}
			</style>
			</head>
			<body>
			  <form action="" method="POST">
			      <table>
				  <tr>
				     <th colspan="3">Calculator</th>
				  </tr>
				  <tr>
				  <td><input type="number" name="a" placeholder="first number"/></td>
				  <td><input type="text" name="oper" placeholder="Operator"/></td>
				  <td><input type="number" name="b" placeholder="second number"/></td>
				  </tr>
				  <tr>
				  <td>The answer is:</td><td><?php echo $result; ?></td>
				  
				  </tr>
				  </table>
			</form>
			</body>
				
</html>

