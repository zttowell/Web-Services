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
<div id="content_about">
	<h2>
		About Us
	</h2>
	<p>
		T and O's is owned and operated by Zachary Towell and Orlando Scott. T and O&apos;s targets businesses and individuals located in and around Central Texas. T and O&apos;s is based out of Temple and Belton, but services Bell, Coryell, Lampasas, Williamson, 
		Milam, and Falls counties. T and O&apos;s aims to help Businesses create a beautiful online presence. T and O&apos;s will not only create a website to add to your online presence, but will clean up your existing online presence. T and O&apos;s aims to take the hassle out of having a website, while still having an up to date and gorgeous, responsive web page. T and O&apos;s also builds web applications. If you are interested in any of T and O&apos;s services do not hesitate to click on the contact us link above.
	</p>
</div>
<div id="sidebar_about">
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
<div id="footer_about">
<p>Copyright &copy; 2013 Zachary Towell and Orlando Scott. All Rights Reserved.</p>
</div>
</div>
</body>
</html>
