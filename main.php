<?php
$url_folder = substr(substr($_SERVER["REQUEST_URI"],1), 0, strpos(substr($_SERVER["REQUEST_URI"],1), "/"));
?>
<link rel="stylesheet" type="text/css" href="/<?php echo $url_folder ;?>/templates/zumron_base/styles.css" />
<body>
	<div class="all">
		<div class="column-middle" id="column1">
			<div class="box1">
				<div class="dragbox" id="item1" >
					<center><h2></h2></center>
					<div class="dragbox-content" ></div>
				</div>
			</div>
			<div class="box2">
				<div class="dragbox" id="item2" >
					<center><h2></h2></center>
				</div>
			</div>
		</div>		
	</div>
</body>

