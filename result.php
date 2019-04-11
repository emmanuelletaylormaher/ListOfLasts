<!DOCTYPE html>
<html>
<head>
	<title>Results!</title>
	<link href="https://fonts.googleapis.com/css?family=Sniglet" type="text/css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Merriweather">
	<link rel="stylesheet" type="text/css" href="styles.css" media="screen" / >
	<style type="text/css">
		body{
			font-family: Arial;
			color: white;	
		}	

		.split {
		  height: 100%;
		  width: 50%;
		  position: fixed;
		  z-index: 1;
		  top: 0;
		  overflow-x: hidden;
		  padding-top: 20px;
		}

		/* Control the left side */
		.left {
		  left: 0;
		  background-color: #111;
		}

		/* Control the right side */
		.right {
		  right: 0;
		  background-color: red;
		}

		/* If you want the content centered horizontally and vertically */
		.centered {
		  position: absolute;
		  top: 50%;
		  left: 50%;
		  transform: translate(-50%, -50%);
		  text-align: center;
}
	</style>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
	</script>
	<script type="text/javascript" src="script.js"></script>
</head>
<body>

	<div>
		<div class="split left" id="leftDiv">
	  		<div class="centered">
	    		<h2>leg</h2>
	    		<p>horse</p>
	  		</div>
		</div>

		<div class="split right" id="rightDiv">
	  		<div class="centered">
	    		<h2>egg</h2>
	    		<p>yes, egg</p>
	  		</div>
		</div>
	</div>
	
	
</body>
</html>