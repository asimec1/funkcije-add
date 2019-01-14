<!DOCTYPE HTML>
<html>
	<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300">
	<title>Zadatak</title>
	<style>
	
	body{
		font-family: 'Open Sans Condensed', arial, sans;
		font-size: 110%;
		color: #232323;
		width: 50%;
		margin: 0 auto;
		margin-top: 2em;
	}
		
	input[type="number"]{
		box-sizing: border-box;
		-webkit-box-sizing: border-box;
		-moz-box-sizing: border-box;
		outline: none;
		display: block;
		width: 100%;
		padding: 7px;
		border: none;
		border-bottom: 1px solid #ddd;
		background: transparent;
		margin-bottom: 10px;
		font: 16px Arial, Helvetica, sans-serif;
		height: 45px;
		font-family: 'Open Sans Condensed', arial, sans;
	}	
	label {
		width: 140px;
		display:inline-block;
	}
	.block {
		margin: 4px 0;
	}
	input[type="submit"] {
		-moz-box-shadow: inset 0px 1px 0px 0px #45D6D6;
		-webkit-box-shadow: inset 0px 1px 0px 0px #45D6D6;
		box-shadow: inset 0px 1px 0px 0px #45D6D6;
		background-color: #2CBBBB;
		border: 1px solid #27A0A0;
		display: inline-block;
		cursor: pointer;
		color: #FFFFFF;
		font-family: 'Open Sans Condensed', arial, sans;
		font-size: 14px;
		padding: 8px 18px;
		text-decoration: none;
		text-transform: uppercase;
	}
	</style>
	</head>

	<body>
		<?php 
		  function add($x,$y) { 
			 $total = $x + $y; 
			 return "$x + $y = " . $total; 
		  } 
		  echo add(4,16); 
		?>
	</body>
</html>