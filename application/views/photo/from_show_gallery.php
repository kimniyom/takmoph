<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<style type="text/css">
		img:hover{ cursor:pointer; opacity:0.5;}
	</style>
	<script type="text/javascript">
		function del_album(AlbumID){
			var url = "<?=site_url('upload_photo/del_album')?>";
			var data = {AlbumID:AlbumID};
			
			$.post(url,data,
				function(success){
					window.location = "<?=site_url('upload_photo/from_show_album')?>";
				}
			)//Endpost
		}
	</script>
    
    <script type="text/javascript">
		function del_gallery(GalleryID,GalleryShot){
			var url = "<?=site_url('upload_photo/del_gallery')?>";
			var data = {GalleryID:GalleryID,GalleryShot:GalleryShot};
			
			$.post(url,data,
				function(success){
					window.location.reload();
				}
			)//Endpost
		}
	</script>
    
    <script type="text/javascript">
		function edit_album(){
            $('#myModal').modal();
		}
		
		$(document).ready(function(){
			$("#save_edit").click(function(){
				var url = "<?=site_url('upload_photo/save_edit_album/')?>";
				var AlbumID = $("#AlbumID").val();
				var AlbumName = $("#AlbumName").val();
				var detail = $("#detail").val();
				var data = {AlbumID:AlbumID,AlbumName:AlbumName,detail:detail};
				
				$.post(url,data,
					function(success){
						window.location.reload();
					}
				)//Endpost
				
			})
		});
	</script>
</head>
<body>

	<!-- Model Edit Album -->
    <!-- Modal -->
    <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Modal header</h3>
      </div>
      <div class="modal-body">
        <input type="hidden" id="AlbumID" value="<?=$album->AlbumID?>" style="width:97%;"/>
        ชื่ออัลบั้ม<br /><input type="text" id="AlbumName" value="<?=$album->AlbumName?>" style="width:97%;"/><br />
		รายละเอียด<br /><textarea id="detail" rows="5" style="width:97%;"><?=$album->detail?></textarea>
      </div>
      <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
        <button class="btn btn-primary" id="save_edit">Save changes</button>
      </div>
    </div>

	<div id="container">
		<h1><?=$album->AlbumName?>
            <div class="btn-group" style="float:right;">
              <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                จัดการ <span class="caret"></span>
              </a>
              <ul class="dropdown-menu">
                <li><a href="<?=site_url('upload_photo/from_upload_gallery/'.(int)$album->AlbumID)?>"><i class="icon-plus"></i> เพิ่มรูปภาพ</a></li>
                <li><a href="#" onclick="edit_album();"><i class="icon-edit"></i> แก้ไขอัลบั้ม</a></li>
                <li><a href="#" onclick="del_album('<?=$album->AlbumID?>');"><i class="icon-remove"></i> ลบอัลบั้ม</a></li>
              </ul>
            </div>
        </h1>
			<div id="body" style="text-align:center;">
            <div class="alert" style="text-align:left;"><?=$album->detail?></div>
             * ดับเบิ้ลคลิกที่รูปภาพ หมายถึง การลบภาพน้้น<br />
               <? foreach($gallery->result() as $rs): ?>
               	<? if($rs->GalleryShot != ''){ ?>
               		<img src="<?=base_url()?>album/gallery/<?=$rs->GalleryShot?>" width="20%" class="img-polaroid" ondblclick="return del_gallery('<?=$rs->GalleryID?>','<?=$rs->GalleryShot?>');"/>
                <? } else { ?>
                	<div class="alert"><img src="<?=base_url()?>images/no-sign_1334604348.png" /></div>
                <? } ?>
               <? endforeach; ?>
			</div>
			<p class="footer">&nbsp;</p>
	</div>

</body>
</html>