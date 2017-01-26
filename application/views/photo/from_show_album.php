<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<style type="text/css">
		#img{ position:relative;}
		#img:hover{ opacity:0.6;}
	</style>
    

</head>
<body>

	<div id="container">
		<h1><?=$head?> 
        	<a href="<?=site_url('upload_photo/from_create_album')?>"><div class="btn" style="float:right;"><i class="icon-plus"></i> สร้างอัลบั้มใหม่</div></a>
        </h1>
			<div id="body" style="text-align:center;">
               <? foreach($album->result() as $rs): ?>
               <a href="<?=site_url('upload_photo/show_gallery/'.(int)$rs->AlbumID)?>">
               		<div class="btn" style="padding:5px;"  id="img">
                    	<img src="<?=base_url()?>album/gallery/<?=$rs->AlbumShot?>"  width="200"/><br />
						<div class="btn" style="width:88%;"><? if(strlen($rs->AlbumName) > 20){ echo iconv_substr($rs->AlbumName,0,20, "UTF-8").'...';} else {echo $rs->AlbumName;} ?></div>
                    </div></a>
               <? endforeach; ?>
			</div>
			<p class="footer">&nbsp;</p>
	</div>

</body>
</html>