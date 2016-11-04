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
		    <span id="code"><?php echo htmlspecialchars_decode($_GET['code']); ?></span>
		<!-- </a> -->
		<script type="text/javascript">
			function readBarcode(){
				
				var href=window.location.href;//works
				var ptr=href.lastIndexOf("#");
				
				if(ptr>0){
					href=href.substr(0,ptr);
				}

				window.location.href="zxing://scan/?ret="+escape(href+"?code={CODE}");



			}
		</script>
	</body>
</html>