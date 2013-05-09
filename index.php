<!DOCTYPE html>
<html>
<head>
	<title></title>

	<script src="kinetic-v4.0.5.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

	<style>

		#canvas {
			position: absolute;
			top: 30;
			left: 30;
      		box-shadow: 0 0 5px #ccc;
      		margin: 0 auto;
		}

		#box {
			width: 20px;
			height: 20px;
			position: absolute;
			top: 0;
			left: 0;
			background: #0099ff;
		}
		#commands {
			top: 30px;
			bottom: 30px;
			left: 30px;
			right: 30px;
			position: absolute;
			border: 1px solid #f3f3f3;
			padding: 20px;
			font-family: Verdana;
			color: #333;
		}
		#commands span {
			border-right: 1px solid #f3f3f3;
			padding: 0 5px;
		}

	</style>

</head>
<body>

<div id="canvas"></div>

<div id="box"></div>
<div id="commands"></div>

<script>

	var recognition = new webkitSpeechRecognition();
	recognition.continuous = true;
	recognition.interimResults = true;

	recognition.onresult = function(event) {
		final_transcript = '';
		var interim_transcript = '';

		for (var i = event.resultIndex; i < event.results.length; ++i) {
		  if (event.results[i].isFinal) {
		    final_transcript += event.results[i][0].transcript;
		  } else {
		    interim_transcript += event.results[i][0].transcript;
		  }
		}

		move(final_transcript);

	};
	
	recognition.start();


	var width = $(document).width(),
		height = $(document).height();

	function move(direction) {
		
		direction = direction.replace(" ","");
		if (direction === "") {
			return;
		}

		$('<span />').html(direction).appendTo('#commands');
		
		switch (direction) {
			case 'left': $('#box').animate({left: 0}, 5000);
					break;
			case 'right': $('#box').animate({left: width - 20}, 5000);
					break;
			case 'up': $('#box').animate({top: 0}, 5000);
					break;
			case 'down': $('#box').animate({top: height - 20}, 5000);
					break;
		}
	}


</script>

</body>
</html>
