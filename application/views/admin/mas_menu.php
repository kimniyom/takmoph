<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <style type="text/css">
            .t_box{ width:97%;}
        </style>
        <script type="text/javascript">
            function edit_mas_menu(mas_id) {
                var url = "<?= site_url('menager_menu/from_edit_menu') ?>";
                var data = {mas_id: mas_id};

                $.post(url, data,
                        function (success) {
                            $("#load_edit_menu").html(success);
                            $('#myModal').modal();
                        }
                );// Endpost

            }
        </script>

        <script type="text/javascript">
            function del_mas_menu(mas_id) {
                $('#confrim').modal();
                $("#del_mas_menu").click(function () {
                    var url = "<?= site_url('menager_menu/delete_mas_menu') ?>";
                    var data = {mas_id: mas_id};

                    $.post(url, data,
                            function (success) {
                                window.location.reload();
                            }
                    );// Endpost
                });
            }
        </script>

        <script type="text/javascript" charset="utf-8">
            $(document).ready(function () {
                $('#tb_mas_menu').dataTable({
                    "bJQueryUI": false,
                    //"sPaginationType" : "full_numbers",// แสดงตัวแบ่งหน้า
                    "bLengthChange": false, // แสดงจำนวน record ที่จะแสดงในตาราง
                    "iDisplayLength": 10, // กำหนดค่า default ของจำนวน record 
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
            $(document).ready(function () {
                $("#c_insert").click(function () {
                    $("#Insert_menu").modal();
                });
            });
        </script>

        <script type="text/javascript">
            $(document).ready(function () {
                var url = "<?= site_url('menager_menu/get_icon') ?>";
                var icon_id = $("#icon_id").val();
                var data = {icon_id: icon_id};
                $.post(url, data,
                        function (success) {
                            $("#icon_show_add").html(success);
                        }
                );//endpost

                $("#icon_id").change(function () {
                    var url = "<?= site_url('menager_menu/get_icon') ?>";
                    var icon_id = $("#icon_id").val();
                    var data = {icon_id: icon_id};
                    $.post(url, data,
                            function (success) {
                                $("#icon_show_add").html(success);
                            }
                    );//endpost 
                });

                $("#mas_status").change(function () {
                    var mas_status = $("#mas_status").val();
                    if (mas_status == '0') {
                        $("#box_link_out").hide();
                        $("#box_link").show(function () {
                            var url = "<?php echo site_url('menager_menu/GetUncheckMenu/') ?>";
                            var data = {a: 1};
                            $.post(url, data, function (success) {
                                $("#linkmenu").html(success);
                            });
                        });
                        return false;
                    } else if (mas_status == '1') {
                        var _link = "";
                        $("#box_link").hide();
                        $("#box_link_out").hide();
                    } else {
                        $("#box_link_out").show();
                    }

                });

                $("#save_menu").click(function () {
                    var url = "<?= site_url('menager_menu/save_menu') ?>";
                    var mas_menu = $("#mas_menu").val();
                    var mas_status = $("#mas_status").val();
                    var color = $("#color").val();
                    var icon_id = $("#icon_id").val();
                    var _link = $("#link").val();
                    var link_out = $("#link_out").val();

                    var data = {mas_menu: mas_menu, mas_status: mas_status, color: color, _link: _link, icon_id: icon_id, link_out: link_out};

                    $.post(url, data,
                            function (success) {
                                window.location.reload();
                            }
                    );// Endpost

                });

            });
        </script>

        <script type="text/javascript">
            function set_level(id, level) {
                $("#menu_id").val(id);
                $("#_level").val(level);
                $("#set_level").modal();
                $("#btn_set_level").click(function () {
                    var url = "<?= site_url('takmoph_admin/save_level/') ?>";
                    var menu_id = $("#menu_id").val();
                    var level = $("#_level").val();
                    var data = {menu_id: menu_id, level: level};
                    $.post(url, data,
                            function (success) {
                                window.location.reload();
                            }
                    ); // End Post

                });
            }
        </script>

    </head>

    <body>


        <div class="modal fade" id="set_level">
            <div class="modal-dialog" style="width:300px;">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 id="myModalLabel"><span class="glyphicon glyphicon-sort-by-order"></span> ลำดับการแสดงผล</h4>
                    </div>
                    <div class="modal-body">
                        MenuId : <input type="text" id="menu_id" readonly="readonly" class="form-control input-sm"/><br />
                        Level : <input type="text" id="_level" class="form-control input-sm"/>
                    </div>
                    <div class="modal-footer">
                        <center>
                            <button class="btn btn-primary" id="btn_set_level">แก้ไข</button>
                        </center>
                    </div>
                </div>
            </div>
        </div>


        <div id="confrim" class="modal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 id="myModalLabel">!แจ้งเตือน</h4>
                    </div>
                    <div class="modal-body"><img src="<?= base_url() ?>images/warning-icon.png"/> คุณต้องการลบเมนูนี้ ใช่ หรือ ไม่</div>
                    <div class="modal-footer">
                        <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
                        <button class="btn btn-primary" id="del_mas_menu">Ok</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 id="myModalLabel">แก้ไขเมนู</h4>
                    </div>
                    <div class="modal-body"><div id="load_edit_menu"></div></div>
                    <div class="modal-footer">
                        <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                        <button class="btn btn-primary" id="save_edit">Save changes</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Insert Menu -->
        <div class="modal fade" id="Insert_menu">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 id="myModalLabel">เพิ่มเมนู</h4>
                    </div>
                    <div class="modal-body">
                        <div class="well">
                            <div class="form-group">
                                <label for="exampleInputEmail1">เมนู : </label>
                                <input type="text" id="mas_menu" class="form-control input-sm"/>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">ไอคอน : </label>
                                <div class="row">
                                    <div class="col-lg-9 col-sm-9 col-md-9">
                                        <select id="icon_id" class="form-control">
                                            <?php foreach ($icon->result() as $rs): ?>
                                                <option value="<?= $rs->icon_id ?>"><?= $rs->icon ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="col-lg-3 col-sm-3 col-md-3">
                                        <div class="btn btn-default" id="icon_show_add" style="margin-bottom:0px; padding: 5px;"></div>
                                    </div>
                                </div>
                            </div>

                            <?php
                            $color = array("s", "g", "b", "o", "r");
                            $color_var = array("เทา", "เขียว", "น้ำเงิน", "ส้ม", "แดง");
                            ?>

                            <div class="form-group">
                                <label for="exampleInputEmail1">สีเมนู : </label>
                                <select id="color" class="form-control">
                                    <?php for ($i = 0; $i <= 4; $i++): ?>
                                        <option value="<?= $color[$i] ?>"><?= $color_var[$i] ?></option>
                                    <?php endfor; ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">ประเภท : </label>
                                <select  id="mas_status" class="form-control input-sm">
                                    <option value="">== กรุณาเลือก ==</option>
                                    <option value="0">ลิงค์ในระบบ</option>
                                    <option value="1">DropDown</option>
                                    <option value="2">ลิงค์ไปยังเว็บไซต์ภายนอก</option>
                                </select><br />
                                <div id="box_link" style="display:none;">
                                    ลิงค์ : <br />
                                    <div id="linkmenu"></div>
                                </div>

                                <div id="box_link_out" style="display:none;">
                                    Url ลิงค์ข้างนอก : <br />
                                    <input type="text" id="link_out" class=" form-control"/>
                                </div>

                            </div>
                        </div>
                    </div><!-- modal body -->
                    <div class="modal-footer">
                        <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                        <button class="btn btn-primary" id="save_menu">Save changes</button>
                    </div>
                </div>
            </div>


        </div>

        <!-- ############ -->

        <div id="container">
            <h1><?= $head ?>
                <a href="javascript:void(0);" id="c_insert"><div class="btn btn-default" style=" float:right;">
                        <span class=" glyphicon glyphicon-plus"></span> เพิ่มเมนู</div></a>
            </h1>
            <div id="body" style=" background: none;">
                <table width="100%" id="tb_mas_menu" class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th align="left">เมนู</th>
                            <th align="left">ประเภท</th>
                            <th>สี</th>
                            <th>ไอคอน</th>
                            <th align="left">ลิงค์</th>
                            <th align="center">ลำดับ</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($mas_menu->result() as $rs):
                            if ($rs->menu_color == 's') {
                                $color = 'btn btn-default';
                            } else if ($rs->menu_color == 'g') {
                                $color = 'btn btn-success';
                            } else if ($rs->menu_color == 'o') {
                                $color = 'btn btn-warning';
                            } else if ($rs->menu_color == 'r') {
                                $color = 'btn btn-danger';
                            } else if ($rs->menu_color == 'b') {
                                $color = 'btn btn-primary';
                            }
                            ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td align="left">
                                    <?php if ($rs->mas_status == '1') { ?> 
                                        <a href="<?= site_url('menager_menu/get_sub_menu/' . $rs->id); ?>"><?= $rs->mas_menu ?></a> 
                                    <?php } else { ?> 
                                        <?= $rs->mas_menu ?>
                                    <?php } ?>
                                </td>
                                <td align="left"><?php
                                    if ($rs->mas_status == '0') {
                                        echo "Link";
                                    } else {
                                        echo "DropDown";
                                    }
                                    ?></td>
                                <td><div class="<?= $color ?>">&nbsp;</div></td>
                                <td><img src="<?= base_url() ?>icon_menu/<?= $rs->menu_icon ?>"/></td>
                                <td align="left"><?php
                                    if ($rs->mas_status == '0') {
                                        echo $rs->link;
                                    } else if ($rs->mas_status == '1') {
                                        echo "DropDown";
                                    } else {
                                        echo $rs->link_out;
                                    }
                                    ?></td>
                                <td>
                                    <input type="text" id="lever" value="<?= $rs->level ?>" style="width:30px;" class=" form-control input-sm" readonly="readonly"
                                           onclick="set_level('<?= $rs->id ?>', '<?= $rs->level ?>');"/>
                                </td>
                                <td>
                                    <div class="btn-group" style=" text-align:left;">
                                        <a class="btn btn-default dropdown-toggle btn-sm" data-toggle="dropdown" href="javascript:void(0);">
                                            <span class=" glyphicon glyphicon-cog"></span> จัดการ <span class="caret"></span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#" onclick="edit_mas_menu('<?= $rs->id ?>');"><span class=" glyphicon glyphicon-edit"></span> แก้ไข</a></li>
                                            <li><a href="#" onclick="del_mas_menu('<?= $rs->id ?>');"><span class=" glyphicon glyphicon-trash"></span> ลบ</a></li>
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