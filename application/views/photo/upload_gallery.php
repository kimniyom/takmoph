<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<script type="text/javascript">
            $(document).ready(function() {	
                $('#file_upload').uploadify({
						'buttonText' : 'กรุณาเลือกรูปภาพ ...',
                        'auto'     : true, //เปิดใช้การอัพโหลดแบบอัติโนมัติ
                        'swf'      : '<?=base_url()?>lib/images/uploadify.swf', //โฟเดอร์ที่เก็บไฟล์ปุ่มอัพโหลด
                        'uploader' : '<?=site_url('upload_photo/upload_gallery/'.$AlbumID)?>', //เมื่อ submit แล้วให้ action ไปที่ไฟล์ไหน
                        'fileSizeLimit' : '10MB',//อัพโหลดได้ครั้งละไม่เกิน 1024kb
						'width'          : '350',
                    	'height'         : '40',
                        'fileTypeExts' : '*.gif; *.jpg; *.png; *.JPG;', //กำหนดชนิดของไฟล์ที่สามารถอัพโหลดได้
                        'multi'    : true,//เปิดใช้งานการอัพโหลดแบบหลายไฟล์ในครั้งเดียว
                        'queueSizeLimit' : 10, //อัพโหลดได้ครั้งละ 5 ไฟล์
                        'onUploadComplete' : function(success) { //เมื่ออัพโหลดเสร็จแล้วให้เรียกใช้งาน function load()

                        }
                });
            });
        </script>
</head>
<body>

	<div id="container">
		<h1><?=$head?></h1>
			<div id="body">
            <center>
				อัพโหลดได้ไม่เกินครั้งละ 10MB,
				อัพโหลดได้ไม่เกินครั้งละ 10 ไฟล์
                <br /><br />
				<form>
                	<div id="queue"></div>
					<div style="width:350px;">
						<input id="file_upload" name="file_upload" type="file" multiple>
					</div>
				</form><br /><br /><br />

				<a href="<?=site_url('upload_photo/show_gallery/'.$AlbumID)?>" style="text-decoration:none;">
					<div class="btn" style="width:200px;">กลับไปที่อัลบั้ม</div></a>
				</center>
			</div>
			<p class="footer">&nbsp;</p>
	</div>

</body>
</html>