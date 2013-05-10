<!DOCTYPE html>
<html>
<head>
	<title>RVC - responding to voice command - speech API experiment</title>

	<link rel="stylesheet" href="style.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>


</head>
<body>

<div id="canvas"></div>

<div id="box"></div>
<div id="commands"></div>

<div id="directions">
	<div id="up">up</div>
	<div id="left">left</div>
	<div id="right">right</div>
	<div id="down">down</div>
</div>

<div id="levenshtein">
	threshold level<br />
	<input id="level" type="range" min="0" max="5" step= "1" value="0" />
</div>


	<script src="levenshtein.js"></script>
	<script src="rvc.js"></script>

</body>
</html>
