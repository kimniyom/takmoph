


<?php
$this->load->library('takmoph_libraries');
$model = new takmoph_libraries();

$list = array(
    //array('url' => 'takmoph_admin', 'label' => 'เมนูหลัก'),
    array('url' => 'menu/submenu/' . $this->takmoph_libraries->encode($group->id), 'label' => $groupmenu),
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
    <h3 style=" color: #0099ff;">หัวข้อ: <?= $datas->sub_name ?></h3>
    <hr/>

    <?php
    if ($datas->file) {
        $i = 1;
        ?>
        <a href="<?= base_url() ?>file_download/<?= $datas->file ?>">
            <img src="<?= base_url() ?>images/rar-icon.png"/> <?= $datas->file ?></a><br/>
        <?php
    } else {
        $i = 0;
    }
    ?>

    <?php
    foreach ($file->result() as $rs): $i++;
        ?>
        <a href="<?= base_url() ?>file_download/<?= $rs->file ?>">
            <img src="<?= base_url() ?>images/rar-icon.png"/> <?= $rs->file ?></a> 
        <a href="javascript:DeleteFile('<?php echo $rs->id ?>')"><i class="fa fa-trash-o"></i></a><br/>
    <?php endforeach; ?>
    <div class="pull-right">วันที่: <?php if($datas->d_update) echo $model->thaidate($datas->d_update); else echo ""; ?></div>
</div>

