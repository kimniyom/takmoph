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
        </script>

        <script type="text/javascript">
            function check_false(user_id, admin_menu_id) {
                var url = "<?= site_url('takmoph_admin/add_permissions/') ?>";
                var data = {user_id: user_id, admin_menu_id: admin_menu_id};

                $.post(url, data,
                        function (success) {
                            //window.location.reload();
                        }
                );// Endpost

            }
        </script>

        <script type="text/javascript">
            function check_true(id) {
                var url = "<?= site_url('takmoph_admin/del_permissions/') ?>";
                var data = {id: id};

                $.post(url, data,
                        function (success) {
                            //window.location.reload();
                        }
                );// Endpost
            }
        </script>

        <script type="text/javascript">

                function edit_user() {
                    var url = "<?= site_url('takmoph_admin/edit_user') ?>";
                    var user_id = $("#user_id").val();
                    var username = $("#username").val();
                    var password = $("#password").val();
                    var name = $("#name").val();
                    var lname = $("#lname").val();

                    var data = {
                        user_id: user_id,
                        username: username,
                        password: password,
                        name: name,
                        lname: lname
                    };

                    $.post(url, data, function (success) {
                        window.location.reload();
                    });
                }

        </script>

    </head>

    <body>

        <!-- Dialog Insert News -->
        <div id="container">
            <h1><?= $head ?></h1>
            <div class="well" id="box_insert_new" style="margin:10px;">

                <label>ชื่อ</label>
                <input type="hidden" value="<?php echo $user->user_id; ?>" id="user_id" name="user_id" class="form-control"/>
                <input type="text" id="name" name="name" style="width:98%;" required="required" value="<?= $user->name ?>" class="form-control"/>
                <label>นามสกุล</label>
                <input type="text" id="lname" name="lname" style="width:98%;" required="required" value="<?= $user->lname ?>" class="form-control"/>
                <label>username</label>
                <input type="text" id="username" name="username" style="width:98%;" required="required" value="<?= $user->username ?>" class="form-control"/>
                <label>password</label>
                <input type="text" id="password" name="password" style="width:98%;" required="required" value="<?= $user->password ?>" class="form-control"/>
                <br/>
                <input type="button" class="btn btn-primary" value="แก้ไขข้อมูลผู้ใช้งาน" onclick="edit_user();"/>

            </div>
            <div id="body">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        เลือกสิทธิ์การใช้งาน
                    </div>
                    <div class="panel-body">
                        <table width="100%" id="tb_mas_menu" class="table">
                            <thead>
                                <tr>
                                    <th align="left" width="5%">#</th>
                                    <th align="left">เมนู</th>
                                    <th align="center">สถานะ</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                foreach ($menu_admin->result() as $rs):
                                    ?>
                                    <tr>
                                        <td><?= $i++ ?></td>
                                        <td align="left"><?= $rs->admin_menu_name ?></td>
                                        <td>
                                            <?php if ($rs->active == 1) { ?>
                                                <input type="checkbox" id="status_show"  checked="checked" onclick="return check_true('<?= $rs->id ?>');"/>
                                            <?php } else { ?>
                                                <input type="checkbox" id="status_noshow" onclick="return check_false('<?= $user->user_id ?>', '<?= $rs->admin_menu_id ?>');"/>
                                            <?php } ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
            <p class="footer">&nbsp;</p>
        </div>

    </body>
</html>