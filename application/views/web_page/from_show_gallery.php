<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="text/javascript">
		$(document).ready(function() {
			$('.fancybox').fancybox();
			$('.fancybox-thumbs').fancybox({
				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,
				arrows    : false,
				nextClick : true,

				helpers : {
					thumbs : {
						width  : 50,
						height : 50
					}
				}
			});
		});
	</script>
    
    


</head>
<body>

	<div id="container" style="position:relative;">
             <a href="<?=site_url('photo/from_show_album/')?>">
             <button class="btn" style="float:right; position:absolute; right:0px;"><i class="icon-picture"></i> อัลั้มทั้งหมด</button>
             </a>
		<h1 id="h1">
			<center><?=$album->AlbumName?></center>
		</h1>
        <div class="alert" style="font-size:12px; margin:0px 10px;"><?=$album->detail?><br /> </div>
			<div id="body" style="text-align:center;">
               <? foreach($gallery->result() as $rs): ?>
               	<? if($rs->GalleryShot != ''){ ?>
                <a href="<?=base_url()?>album/gallery/<?=$rs->GalleryShot?>" class="fancybox-thumbs" data-fancybox-group="buttons">
               		<img src="<?=base_url()?>album/gallery/<?=$rs->GalleryShot?>" width="20%" class="img-polaroid"/></a>
                <? } else { ?>
                	<div class="alert"><img src="<?=base_url()?>images/no-sign_1334604348.png" /></div>
                <? } ?>
               <? endforeach; ?>
			</div>
			<p class="footer"><i class="icon-calendar"></i> อัพเดทวันที่ : <?=$this->tak->thaidate($album->date)?></p>
	</div>
</body>
</html>