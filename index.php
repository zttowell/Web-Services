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
			<li><a href="about.php">ABOUT</a></li>
			<li><a href="contact.php">CONTACT</a></li>
		</ul>
	</div>
</div>
<div id="photo">
</div>
<div id="sidebar">
	<h2>
		WELCOME
	</h2>
	<p>
		Welcome to T&amp;O Web Services. We are a company that provides web services in Bell, Coryell, Lampasas, Williamson, 
		Milam, and Falls county. We build websites, web applications, and optimize businesses online presance. If you wish to 
		recieve any of our services or have any questions, do not hesitate to contact us.
	</p>
</div>
<div id="divider">

</div>
<div id="section0">

</div>
<div id="section1">

</div>
<div id="section2">

</div>
<div id="section3">

</div>
<div id="footer">

</div>
</div>
</body>
</html>
