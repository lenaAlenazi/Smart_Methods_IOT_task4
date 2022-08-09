<html>
<title>Control Panel</title>
<style>
body{
	font-family: arial;
	font-size: 18px;
	margin: 0;
  background-image: url("background.gif");
	color: #000;
	display: flex;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
}
#F{
		margin-left: 145;
	width: 140px;
	padding: 9px 22px;
	background: white;
	border: 2px solid #009999;
	color: #008f8f;
	font-size: 18px;
	cursor: pointer;
	border-radius: 10px;
  }
  #F:hover {
	background-color:#00FFFF;
	transition: 0.7s;
  }
#L{
	width: 140px;
	padding: 9px 22px;
	background: white;
	border: 2px solid #009999;
  color: #008f8f;
	font-size: 18px;
	cursor: pointer;
	border-radius: 10px;
  }
  #L:hover {
	background-color:#00FFFF;
	transition: 0.7s;
  }
  #S{
	width: 140px;
	padding: 9px 22px;
	background: white;
	border: 2px solid #009999;
	color: #008f8f;
	font-size: 18px;
	cursor: pointer;
	border-radius: 10px;
  }
  #S:hover {
	background-color:#00FFFF;
	transition: 0.7s;
  }
  #R{
	width: 140px;
	padding: 9px 22px;
	background: white;
	border: 2px solid #009999;
	color: #008f8f;
	font-size: 18px;
	cursor: pointer;
	border-radius: 10px;
  }
  #R:hover {
	background-color:#00FFFF;
	transition: 0.7s;
  }
  #B{
	margin-left: 145;
	width: 140px;
	padding: 9px 22px;
	background: white;
	border: 2px solid #009999;
	color: #008f8f;
	font-size: 18px;
	cursor: pointer;
	border-radius: 10px;
  }
  #B:hover {
	background-color:#00FFFF;
	transition: 0.7s;
  }
</style>
<body>

 <form action="Dir.php" method="get">

        <button name="F" id="F" >Forward</button><br></br>
        <button name="L" id="L" >Left</button>
        <button name="S" id="S" >Stop</button>
        <button name="R" id="R" >Right</button>
			<br> </br>
	<button name="B" id="B" >Backward</button>
</form>
</body>
</html>
