<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
</head>
<body>

	<div id="container">
		<h1><?=$head?></h1>
			<div id="body">
                <div class="wrap">
                    <img id="uploadPreview" style="display:none;"/>
                        <form action="<?=site_url('upload_photo/upload_shot_photo/')?>" method="post" enctype="multipart/form-data">
                    		<input type="hidden" id="AlbumID" name="AlbumID" value="<?=$Album_id?>"/>
                            <p style="float:left;">ชื่ออัลบั้มภาพ</p><br/>
                            <input type="text" id="AlbumName" name="AlbumName" style="width:98%;" required="required"/><br/>
                            <p style="float:left;">รายละเอียด</p><br/>
                            <textarea id="detail" name="detail" rows="5" style="width:98%;" required="required"></textarea><br/>
                            <!-- hidden inputs -->
                            <input type="hidden" id="x" name="x" />
                            <input type="hidden" id="y" name="y" />
                            <input type="hidden" id="w" name="w" />
                            <input type="hidden" id="h" name="h" />
                            
                            <input id="uploadImage" type="file" accept="image/jpeg" name="image" required="required"/>
                            <input type="submit" value="Upload" class="btn_upload">
                    	</form>
                </div>
			</div>
			<p class="footer">&nbsp;</p>
	</div>

</body>
</html>