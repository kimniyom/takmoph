<div class=" container">

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
            <h3 id="head_submenu"> 
                <?php if (!empty($icon)) { ?>
                    <img src="<?php echo base_url() ?>icon_menu/<?php echo $icon ?>" style=" max-width: 32px;"/>
                <?php } else { ?>
                    <i class="fa fa-file-text-o text-danger"></i>
                <?php } ?>
                <?php echo $head ?>
            </h3>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" style="padding-right: 0px;">
            <?php echo $model->breadcrumb($list, $active); ?>
        </div>
    </div>

    <hr id="hr"/>

    <!-- Dialog Insert News -->

            <table class="table table-bordered table-hover" id="tb_filemenu">
                <thead>
                    <tr>
                        <th align="left" style=" width: 2%;">#</th>
                        <th align="left">หัวข้อ</th>
                        <th align="left" style=" width: 15%;"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    foreach ($file->result() as $rs):
                        $url = array('menu/view',$this->takmoph_libraries->encode($rs->id),$this->takmoph_libraries->encode($groupmenu))
                        ?>
                        <tr>
                            <td style=" text-align: center;"><?= $i++ ?></td>
                            <td align="left"><a href="<?php echo site_url($url) ?>"><?= $rs->title ?></a></td>
                            <td align="center">
                                <?php if (!empty($rs->d_update)) { ?>
                                    <?php echo $model->thaidate($rs->d_update)?>
                                <?php } else { ?>
                                    <?php echo "-"; ?>
                                <?php } ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

</div>

<script type="text/javascript" charset="utf-8">
    $(document).ready(function () {
        $('#tb_filemenu').dataTable({
            "bJQueryUI": false,
            //"sPaginationType" : "full_numbers",// แสดงตัวแบ่งหน้า
            "bLengthChange": false, // แสดงจำนวน record ที่จะแสดงในตาราง
            "iDisplayLength": 15, // กำหนดค่า default ของจำนวน record 
            //"sScrollY": "100px",
            //"bFilter": false, // แสดง search box
            "oLanguage": {
                "sLengthMenu": "แสดง _MENU_ เร็คคอร์ด ต่อหน้า",
                "sZeroRecords": "ไม่เจอข้อมูลที่ค้นหา",
                "sInfo": "แสดง _START_ ถึง _END_ ของ _TOTAL_ เร็คคอร์ด",
                "sInfoEmpty": "แสดง 0 ถึง 0 ของ 0 เร็คคอร์ด",
                "sInfoFiltered": "(จากเร็คคอร์ดทั้งหมด _MAX_ เร็คคอร์ด)",
                "sSearch": "ค้นหา :",
                "oPaginate": {
                    "sFirst": "หน้าแรก",
                    "sLast": "หน้าสุดท้าย",
                    "sNext": "ถัดไป",
                    "sPrevious": "กลับ"
                }
            }
        });
    });
</script>