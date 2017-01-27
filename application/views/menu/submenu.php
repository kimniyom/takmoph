<div class="container">

    <?php
    $this->load->library('takmoph_libraries');
    $model = new takmoph_libraries();
    /*
      $list = array(
      array('url' => '', 'label' => 'menu1'),
      array('url' => '', 'label' => 'menu2')
      );
     * 
     */
    $active = $head;
    $list = "";
    ?>
    <div class="row" style=" margin: 0px; padding: 0px;">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" style="padding-left: 0px;">
            <h3 id="head_submenu"><img src="<?= base_url() ?>icon_menu/<?php echo $masmenu->icon ?>"> <?php echo $head ?></h3>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" style="padding-right: 0px;">
            <?php echo $model->breadcrumb($list, $active); ?>
        </div>
    </div>

    <hr id="hr"/>

    <table class="table table-hover table-bordered table-responsive" id="tb_submenu">
        <thead style=" display: none;">
            <tr>
                <th style=" display: none;">#</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i = 0;
            foreach ($submenu->result() as $sub):
                $i ++;
                /*
                  if ($sub->link != '') {
                 */
                $url = array('menu/views',$this->takmoph_libraries->encode($sub->sub_id),$this->takmoph_libraries->encode($sub->mas_id));
                $target = "";
                $typefile = "fa fa-file-zip-o";
                /*
                  } else {

                  $link = base_url() . "file_download/" . $sub->file;
                  $target = "target='_blank'";
                  $text = "Download";
                  $file = substr($sub->file, -3);
                  if ($file == "pdf") {
                  $typefile = "fa fa-file-pdf-o";
                  } else if ($file == "zip") {
                  $typefile = "fa fa-file-zip-o";
                  } else if ($file == "rar") {
                  $typefile = "fa fa-file-zip-o";
                  } else {
                  $typefile = "fa fa-file-o";
                  }
                  /*
                  }
                 * 
                 */
                ?>
                <tr>
                    <td style=" display: none;"><?php echo $i; ?></td>
                    <td>
                        <a href="<?php echo site_url($url)?>" style=" text-decoration: none;"><i class="<?php echo $typefile ?> fa-2x text-warning"></i> 
                            <?= $sub->sub_name ?> <?php if($sub->d_update) echo "(".$model->thaidate($sub->d_update).")"; else echo ""; ?></a>
                    </td>
                </tr>

            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        $("#tb_submenu").dataTable();
    });
</script>