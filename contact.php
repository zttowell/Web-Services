<!DOCTYPE html>

<html>
<head>
<title>T&amp;O Web Services</title>
<link rel="stylesheet" type="text/css" href="normalize.css">
<link rel="stylesheet" type="text/css" href="style.css">
	<script language=JavaScript>
	<!--
	//No Right click
	var message="";
	///////////////////////////////////
	function clickIE() {if (document.all) {(message);return false;}}
	function clickNS(e) {if 
	(document.layers||(document.getElementById&&!document.all)) {
	if (e.which==2||e.which==3) {(message);return false;}}}
	if (document.layers) 
	{document.captureEvents(Event.MOUSEDOWN);document.onmousedown=clickNS;}
	else{document.onmouseup=clickNS;document.oncontextmenu=clickIE;}

	document.oncontextmenu=new Function("return false")
	</script>

	<script type="text/javascript">
	//No Highlighting
	//form tags to omit in NS6+:
	var omitformtags=["input", "textarea", "select"]

	omitformtags=omitformtags.join("|")

	function disableselect(e){
	if (omitformtags.indexOf(e.target.tagName.toLowerCase())==-1)
	return false
	}

	function reEnable(){
	return true
	}

	if (typeof document.onselectstart!="undefined")
	document.onselectstart=new Function ("return false")
	else{
	document.onmousedown=disableselect
	document.onmouseup=reEnable
	}

	</script>
</head>
<body>
<div id="container">
<div id="navbar">
	<img id="logo" src="/images/logo_white.png" />
	<div id="links">
		<ul>
			<li><a href="index.php">HOME</a></li>
			<li><a href="about.php">ABOUT US</a></li>
			<li><a href="contact.php">CONTACT US</a></li>
		</ul>
	</div>
</div>
<div id="content_contact">
	<h2>
		Contact Us
	</h2>
	<br />
	<h3>
		Phone:
	</h3>
	<p>
		(254)231-5904<br />(254)458-2514
	</p>
	<h3>
		Email:
	</h3>
	<p>
		<a href="mailto:zttowell@gmail.com">zttowell@gmail.com</a><br />
		<a href="mailto:orlando.scott15@beltonnewtech.org">orlando.scott15@beltonnewtech.org</a>
	</p>
	<h3>
		Mail:
	</h3>
	<p>
		PO Box XX Temple TX 76502
	</p>
</div>
<div id="sidebar">
	<h2>
		Mailing List
	</h2>
	<br />
	<p>
		Subscribe to our mailing list below.
	</p>
	<div id="email_form">
		<form>
			<label>Email:</label><br /><br /><input type="text" name="email" /><br /><br />
			<input type="submit" value="Sign Up!" />
		</form>
	</div>
</div>
<div id="footer_contact">
<p>Copyright &copy; 2013 Zachary Towell and Orlando Scott. All Rights Reserved.</p>
</div>
</div>
</body>
</html>
