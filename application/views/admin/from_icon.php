<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <style type="text/css">
            .t_box{ width:97%;}
        </style>

        <script type="text/javascript">
            $(document).ready(function () {
                $('#file_upload').uploadify({
                    'buttonText': 'กรุณาเลือกรูปภาพ ...',
                    'auto': true, //เปิดใช้การอัพโหลดแบบอัติโนมัติ
                    'swf': '<?= base_url() ?>lib/images/uploadify.swf', //โฟเดอร์ที่เก็บไฟล์ปุ่มอัพโหลด
                    'uploader': '<?= site_url('upload_photo/upload_icon/') ?>', //เมื่อ submit แล้วให้ action ไปที่ไฟล์ไหน
                    'fileSizeLimit': '10MB', //อัพโหลดได้ครั้งละไม่เกิน 1024kb
                    'width': '350',
                    'height': '40',
                    'fileTypeExts': '*.gif; *.jpg; *.png', //กำหนดชนิดของไฟล์ที่สามารถอัพโหลดได้
                    'multi': true, //เปิดใช้งานการอัพโหลดแบบหลายไฟล์ในครั้งเดียว
                    'queueSizeLimit': 1, //อัพโหลดได้ครั้งละ 5 ไฟล์
                    'onUploadComplete': function (success) { //เมื่ออัพโหลดเสร็จแล้วให้เรียกใช้งาน function load()
                        window.location.reload();
                    }
                });
            });
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


    </head>

    <body>
        <!-- Insert Menu -->


        <div id="container">
            <h1><?= $head ?></h1>
            <div id="body" style="text-align:center;">
                <!-- Add Icon -->
                <center>
                    อัพโหลดได้ไม่เกินครั้งละ 10MB,
                    อัพโหลดได้ไม่เกินครั้งละ 1 ไฟล์
                    <br /><br />
                    <form>
                        <div id="queue"></div>
                        <div style="width:350px;">
                            <input id="file_upload" name="file_upload" type="file" multiple>
                        </div>
                    </form><br /><br /><br />
                </center>

                <table width="100%" id="tb_mas_menu">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th align="left">ไอคอน</th>
                            <th align="center">รูป</th>
                        </tr>
                    </thead>
                    <tbody>
                        <? $i=1;foreach($icon->result() as $rs): ?>
                        <tr>
                            <td><?= $i++ ?></td>
                            <td align="left"><?= $rs->icon ?></td>
                            <td><img src="<?= base_url() ?>icon_menu/<?= $rs->icon ?>"/></td>
                        </tr>
                        <? endforeach; ?>
                    </tbody>
                </table>
            </div>
            <p class="footer">&nbsp;</p>
        </div>

    </body>
</html>