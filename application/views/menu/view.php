


<?php
$this->load->library('takmoph_libraries');
$model = new takmoph_libraries();

$list = array(
    //array('url' => 'takmoph_admin', 'label' => 'เมนูหลัก'),
    array('url' => 'menu/filemenu/' . $this->takmoph_libraries->encode($admin_menu_id), 'label' => $group),
);

$active = $head;
?>

<div class="container">
    <div class="row" style=" margin: 0px; padding: 0px;">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding-right: 0px;">
            <?php echo $model->breadcrumb($list, $active); ?>
        </div>
    </div>
    <hr id="hr"/>
    <h3 style=" color: #0099ff;">หัวข้อ: <?= $head ?></h3>
    <hr/>
    <h4>รายละเอียด: </h4><?php echo $datas->detail ?><br/>
    <hr/>
    <?php if ($datas->file) { ?>
        <a href="<?php echo base_url() ?>file_download/<?= $datas->file ?>" target="_blank">
            <i class="fa fa-file-zip-o"></i> ไฟล์แนบ</a>
        <hr/>
    <?php } ?>
    <div class="pull-right">วันที่: <?php echo $model->thaidate($datas->d_update) ?></div>
</div>

