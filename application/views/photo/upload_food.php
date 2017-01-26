<!doctype html>
<html>
<head lang="en">
	<meta charset="utf-8">	
    	<style>
			.wrap{
				width: 700px;
				margin: 10px auto;
				padding: 10px 15px;
				background: white;
				border: 2px solid #DBDBDB;
				-webkit-border-radius: 5px;
				-moz-border-radius: 5px;
				border-radius: 5px;
				text-align: center;
				overflow: hidden;
			}
			img#uploadPreview{
				border: 0;
				border-radius: 3px;
				-webkit-box-shadow: 0px 2px 7px 0px rgba(0, 0, 0, .27);
				box-shadow: 0px 2px 7px 0px rgba(0, 0, 0, .27);
				margin-bottom: 30px;
				overflow: hidden;
			}
			input[type="submit"]{
				border-radius: 10px;
				background-color: #61B3DE;
				border: 0;
				color: white;
				font-weight: bold;
				font-style: italic;
				padding: 6px 15px 5px;
				cursor: pointer;
			}
			
		</style>
    	<link rel="stylesheet" type="text/css" href="<?=base_url()?>css/imgareaselect-animated.css" />
        <script type="text/javascript" src="<?=base_url()?>js/jquery.min.js"></script>
    	<script type="text/javascript" src="<?=base_url()?>js/jquery.imgareaselect.pack.js"></script>
        <script type="text/javascript" src="<?=base_url()?>js/script.js"></script>
        
</head>
<body>
	<div class="wrap">
    <h1><?=$head?></h1><br/>
	<!-- image preview area-->
	<img id="uploadPreview" style="display:none;"/>
	<!-- image uploading form -->
	<form action="<?=site_url('admin_menager/upload_food/'.$food_id.'/'.$kitchen_id)?>" method="post" enctype="multipart/form-data">
		<input id="uploadImage" type="file" accept="image/jpeg" name="image" />
		<input type="submit" value="Upload">

		<!-- hidden inputs -->
		<input type="hidden" id="x" name="x" />
		<input type="hidden" id="y" name="y" />
		<input type="hidden" id="w" name="w" />
		<input type="hidden" id="h" name="h" />
	</form>
	</div>    

</body>
</html>