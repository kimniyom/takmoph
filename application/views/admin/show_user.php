<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <!-- Ckeditor -->    
        <script type="text/javascript">
            $(document).ready(function () {
                $("#add_new").click(function () {
                    $("#box-add-user").modal();
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

    </head>

    <body>
        <!-- Modal -->

        <div id="box-add-user" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form id="from" name="from" action="<?= site_url('takmoph_admin/save_user') ?>" method="post">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h3 id="myModalLabel">เพิ่มผู้ใช้งานระบบ</h3>
                        </div>
                        <div class="modal-body">

                            <label>ชื่อ</label>
                            <input type="text" id="name" name="name" style="width:98%;" required="required" class="form-control"/>
                            <label>นามสกุล</label>
                            <input type="text" id="lname" name="lname" style="width:98%;" required="required" class="form-control"/>
                            <label>username</label>
                            <input type="text" id="username" name="username" style="width:98%;" required="required" class="form-control"/>
                            <label>password</label>
                            <input type="password" id="password" name="password" style="width:98%;" required="required" class="form-control"/>
                        </div>
                        <div class="modal-footer">
                            <input type="submit" class="btn btn-success" value="บันทึกข้อมูล" />
                            <input type="reset" class="btn btn-danger" value="ยกเลิก" />
                            <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <!-- Dialog Insert News -->
        <div id="container">
            <h1><?= $head ?>
                <div class="btn btn-default" style="float:right;" id="add_new">
                    <span class=" glyphicon glyphicon-plus"></span> เพิ่มผู้ใช้งานระบบ</div>
            </h1>
            <div id="body" style=" background: none;">
                <table width="100%" id="tb_mas_menu" class="table">
                    <thead>
                        <tr>
                            <th align="left">#</th>
                            <th align="left">ชื่อ - นามสกุล</th>
                            <th align="left">Username</th>
                            <th align="left">Password</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($user->result() as $rs):
                            ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td align="left"><?= $rs->name . ' - ' . $rs->lname ?></td>
                                <td align="left"><?= $rs->username ?></td>
                                <td align="left"><?= $rs->password ?></td>
                                <td align="center">
                                    <?php if ($rs->status != 'S') { ?>
                                        <div class="btn-group" style=" text-align:left;">
                                            <a class="btn dropdown-toggle btn-default btn-xs" data-toggle="dropdown" href="javascript:void(0);">
                                                จัดการ <span class="caret"></span>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a href="<?= site_url('takmoph_admin/from_permissions/' . $rs->user_id) ?>"><i class=" glyphicon glyphicon-edit"></i> แก้ไข</a></li>
                                                <li><a href="<?= site_url('takmoph_admin/del_user/' . $rs->user_id) ?>"><i class=" glyphicon glyphicon-trash"></i> ลบ</a></li>
                                            </ul>
                                        </div>
                                    <?php } else { ?>
                                        ไม่สามารถจัดการได้
                                    <?php } ?>
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