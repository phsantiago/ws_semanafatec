<?php 
  if (!defined('BASE_PATH'))
    die();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width">
	</head>
	<body>
		<!-- <a href="zxing://scan/?ret=#ret={CODE}">  -->
		    <button onClick="readBarcode()">LER CODIGO</button>
		    <span id="code"></span>
		<!-- </a> -->
		<script type="text/javascript">
			function readBarcode(){
				
				var href=window.location.href;//works
				
				var ptr=href.lastIndexOf("#");
				
				if(ptr>0){
					href=href.substr(0,ptr);
				}

				window.location.hash="zxing://scan/?ret="+escape(href+"#{CODE}");

				document.getElementById('code').innerHTML = window.location.hash;
			}
		</script>
	</body>
</html>