<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <!-- Ckeditor -->    
        <script type="text/javascript">
            $(document).ready(function () {
                $("#add_new").click(function () {
                    $("#box_insert_new").show();
                });
            });
        </script>

        <script type="text/javascript" charset="utf-8">
            $(document).ready(function () {
                $('#tb_mas_menu').dataTable({
                    "bJQueryUI": false,
                    //"sPaginationType" : "full_numbers",// แสดงตัวแบ่งหน้า
                    "bLengthChange": false, // แสดงจำนวน record ที่จะแสดงในตาราง
                    "iDisplayLength": 20, // กำหนดค่า default ของจำนวน record 
                    //"sScrollY": "100px",
                    "bFilter": false, // แสดง search box
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

            function edit_menu_system(system_id) {
                var url = "<?php echo site_url('takmoph_admin/edit_menu_system'); ?>";
                var data = {menu_id: system_id};
                $.post(url, data, function (success) {
                    $("#popup_edit").modal();
                    $("#load_form_edit").html(success);
                });
            }

            function save_edit() {
                var url = "<?php echo site_url('takmoph_admin/save_edit_menu_system'); ?>";
                var menu_id = $("#menu_id").val();
                var menu_name = $("#menu_name").val();
                var menu_link = $("#menu_link").val();

                var data = {menu_id: menu_id, menu_name: menu_name, menu_link: menu_link};
                $.post(url, data, function (success) {
                    window.location.reload();
                });
            }

            function check(system_id, status) {
                var url = "<?php echo site_url('takmoph_admin/check_menu_system'); ?>";
                var data = {system_id: system_id,status: status};
                $.post(url, data, function (success) {
                    window.location.reload();
                });
            }

        </script>

    </head>

    <body>

        <!-- Popup Edit -->
        <div class="modal fade" id="popup_edit">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-body" id="load_form_edit">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">ปิด</button>
                        <button type="button" class="btn btn-primary" onclick="save_edit();">แก้ไขข้อมูล</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <!-- End POPUP Edit -->


        <div class="alert" id="box_insert_new" style="display:none;">
            <button type="button" class="close" onclick="$('#box_insert_new').hide();">
                <span aria-hidden="true">&times;</span>
            </button><br/>
            <form id="from" name="from" action="<?= site_url('takmoph_admin/save_menu_system') ?>" method="post">
                <label>เมนู</label>
                <input type="text" id="system_title" name="system_title" style="width:98%;" required="required" class="form-control"/>
                <label>ลิงค์</label>
                <input type="text" id="link" name="link" style="width:98%;" required="required" class="form-control"/>
                <label>ผู้เผยแพร่</label>
                <input type="text" id="user_" name="user_" class="form-control"
                       style="width:98%;" value="<?= $this->session->userdata('name') . '-' . $this->session->userdata('lname'); ?>" readonly="readonly"/>
                <br/>
                <input type="submit" class="btn btn-success" value="บันทึกข้อมูล" />
                <input type="reset" class="btn btn-danger" value="ยกเลิก" />
            </form>
        </div>


        <!-- Dialog Insert News -->
        <div id="container">
            <h1><?= $head ?>
                <div class="btn btn-default" style="float:right;" id="add_new"><i class="glyphicon glyphicon-plus"></i> เพิ่มเมนู</div>
            </h1>
            <div id="body" style="text-align:center;">
                <table width="100%" id="tb_mas_menu" class="table table-striped">
                    <thead>
                        <tr>
                            <th align="left">#</th>
                            <th align="left">หัวข้อ</th>
                            <th align="left">รูป</th>
                            <th align="left">ลิงค์</th>
                            <th align="left">สถานะ</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($menu_system->result() as $rs):
                            ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td align="left"><?= $rs->system_title ?></td>
                                <td align="left"><?= $rs->system_images ?></td>
                                <td align="left"><?= $rs->link ?></td>
                                <td>
                                    <?php if ($rs->status_show == 'Yes') { ?>
                                        <input type="radio" id="status_show" checked="checked" onclick="check('<?= $rs->system_id ?>','1');"/>
                                    <?php } else { ?>
                                        <input type="radio" id="status_noshow" onclick="check('<?= $rs->system_id ?>','0');"/>
                                    <?php } ?>
                                </td>
                                <td>
                                    <div class="btn-group" style=" text-align:left;">
                                        <a class="btn dropdown-toggle btn-default btn-xs" data-toggle="dropdown" href="#">
                                            จัดการ <span class="caret"></span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="Javascript:edit_menu_system('<?php echo $rs->system_id; ?>'); "><i class="glyphicon glyphicon-edit"></i> แก้ไข</a></li>
                                            <li><a href="<?= site_url('takmoph_admin/delete_menu_system/' . $rs->system_id . '/' . $rs->system_images) ?>"><i class="glyphicon glyphicon-remove"></i> ลบ</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <p class="footer">&nbsp;</p>
        </div>

    </body>
</html>