<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>สำนักงานสาธารณสุขจังหวัดตาก</title>
        <link rel="stylesheet" href="<?= base_url() ?>css/style.css" type="text/css" media="all" />
        <!--<link rel="stylesheet" href="<?//= base_url() ?>css/flexslider.css" type="text/css" media="all" />-->

        <link rel="stylesheet" href="<?= base_url() ?>css/bootstrap.css" type="text/css" media="all" />
        <link rel="stylesheet" href="<?= base_url() ?>css/bootstrap.min.css" type="text/css" media="all" />
        <link rel="stylesheet" href="<?= base_url() ?>css/bootstrap-responsive.css" type="text/css" media="all" />
        <link rel="stylesheet" href="<?= base_url() ?>css/bootstrap-responsive.min.css" type="text/css" media="all" />
        <!--
                Slide Album
        -->
        <link rel="stylesheet" href="<?= base_url() ?>css/skin.css" type="text/css" media="all" />
        <link rel="stylesheet" href="<?= base_url() ?>css/skin_mymenu.css" type="text/css" media="all" />

        <style type="text/css">
            .ui-menu { width: 200px; border:#CCC solid 5px;}
            .btn:hover{ background:#FFF; box-shadow:inset #CCC 0px 0px 10px 0px; color:#F00;}
        </style>

        <!--<script src="<?//= base_url() ?>/js/jquery-1.9.1.min.js" type="text/javascript"></script>-->
        <script type="text/javascript" src="<?= base_url() ?>slide_gallery/lib/jquery-1.8.2.min.js"></script>

        <!--<script src="<?//= base_url() ?>js/jquery.flexslider-min.js" type="text/javascript"></script>-->
        <script src="<?= base_url() ?>js/functions.js" type="text/javascript"></script>

        <script src="<?= base_url() ?>js/bootstrap.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>js/bootstrap-dropdown.js" type="text/javascript"></script>

        <!--
              Slide Album
        -->
        <script src="<?= base_url() ?>js/jquery.jcarousel.min.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>js/libraly/Myslide.js" type="text/javascript"></script>

        <!-- Datatable -->
        <link rel="stylesheet" href="<?= base_url() ?>assets/dataTable/css/demo_table.css" type="text/css" media="all" />
        <link rel="stylesheet" href="<?= base_url() ?>assets/dataTable/css/jquery.dataTables_themeroller.css" type="text/css" media="all" />
        <link rel="stylesheet" href="<?= base_url() ?>assets/dataTable/css/jquery.dataTables.css" type="text/css" media="all" />
        <script src="<?= base_url() ?>assets/dataTable/js/jquery.dataTables.js" type="text/javascript"></script>

        <script type="text/javascript" charset="utf-8">
            $(document).ready(function () {
                $('#new1,#new2,#new3,#new4,#new5,#new6', '#echo1').dataTable({
                    "bJQueryUI": false,
                    //"sPaginationType" : "full_numbers",// แสดงตัวแบ่งหน้า
                    "bLengthChange": false, // แสดงจำนวน record ที่จะแสดงในตาราง
                    "iDisplayLength": 5, // กำหนดค่า default ของจำนวน record
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

                $("#commit").click(function () {

                    var mas_username = $("#username").val();
                    var mas_password = $("#password").val();

                    if (mas_username == "" && mas_password == "") {
                        $("#error").fadeIn(200, function () {
                            $("#error").text("! กรุณากรอกข้อมูลให้ครบทุกช่อง");
                            return false;
                        });
                    } else {
                        $("#error").hide();
                        $("#load").fadeIn(200);
                        $.post("<?= site_url('takmoph2014/do_login') ?>", {
                            username: $("#username").val(),
                            password: $("#password").val()},
                        function (result) {
                            if (result === 'Success') {
                                window.location = "<?= site_url('takmoph_admin'); ?>";
                            } else {
                                $("#load").fadeOut(200, function () {
                                    $("#error").fadeIn(200, function () {
                                        $("#error").text("! กรุณาตรวจสอบ Usernamr หรือ Password ใหม่");
                                        return false;
                                    });
                                });
                            }
                        });
                    }

                });

                $("#click_login").click(function () {
                    $("#box_login").fadeToggle(300);
                });

            });
        </script>

        <!-- Add mousewheel plugin (this is optional)
            <script type="text/javascript" src="<?= base_url() ?>slide_gallery/lib/jquery.mousewheel-3.0.6.pack.js"></script>
            <script type="text/javascript" src="<?= base_url() ?>slide_gallery/source/jquery.fancybox.js?v=2.1.3"></script>
            <link rel="stylesheet" type="text/css" href="<?= base_url() ?>slide_gallery/source/jquery.fancybox.css?v=2.1.2" media="screen" />
            <link rel="stylesheet" type="text/css" href="<?= base_url() ?>slide_gallery/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
            <script type="text/javascript" src="<?= base_url() ?>slide_gallery/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
            <link rel="stylesheet" type="text/css" href="<?= base_url() ?>slide_gallery/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
            <script type="text/javascript" src="<?= base_url() ?>slide_gallery/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
            <script type="text/javascript" src="<?= base_url() ?>slide_gallery/source/helpers/jquery.fancybox-media.js?v=1.0.5"></script>
        -->
        <!-- Slide Images News -->

        <link href="<?= base_url() ?>assets/slide_news/css/wow-slider.css" rel="stylesheet" type="text/css">
        <link href="<?= base_url() ?>assets/slide_news/css/slider-style.css" rel="stylesheet" type="text/css">


    </head>

    <body>

        <div id ="test"></div>

        <div class="menu_top">
            <div class="navbar navbar-fixed-top navbar-inverse">
                <div class="navbar-inner" style="background:url(<?= base_url() ?>images/h_menu_green.jpg); border-bottom:#6C0 solid 1px;">
                    <div class="container">
                        <a class="brand" href="#" id="_link"></a>
                        <div class="nav-collapse collapse">
                            <ul class="nav">
                                <li><a href="<?= site_url('takmoph2014') ?>" id="_link"><i class="icon-home"></i> หน้าแรก</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="_link"> เกี่ยวกับสำนักงาน <i class=" icon-chevron-down"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#"><i class="icon-hand-right"></i> โครงสร้างผู้บริหาร</a></li>
                                        <li><a href="<?= site_url('takmoph2014/history') ?>"><i class="icon-hand-right"></i> ประวัติความเป็นมา</a></li>
                                        <li><a href="<?= site_url('takmoph2014/mission') ?>" ><i class="icon-hand-right"></i> ภารกิจ</a></li>
                                    </ul>
                                </li>
                                <li><a href="http://www.thic.takpho.go.th/index.php/report_icenter/main" target="_blank" id="_link">ข้อมูลสาธารณสุข</a></li>
                                <li><a href="<?= site_url('takmoph2014/tel') ?>" id="_link">หมายเลขโทรศัพท์</a></li>
                            </ul>
                            <?php if ($this->session->userdata('username') == "") { ?>
                                <!-- Start of the nav bar content -->
                                <div class="nav-collapse"><!-- Other nav bar content -->
                                    <!-- The drop down menu -->

                                    <ul class="nav pull-right">
                                        <li class="dropdown">
                                            <a class="dropdown-toggle" id="click_login" href="#"><i class="icon-user"></i> Login</a>
                                            <div class="dropdown-menu" id="box_login" style="padding: 15px; padding-bottom: 0px;">
                                                <input id="username" style="margin-bottom: 15px;" type="text" name="username" placeholder="USERNAME" size="30" />
                                                <input id="password" style="margin-bottom: 15px;" type="password" name="password" placeholder="PASSWORD"size="30" />
                                                <input class="btn btn-primary" style="width: 100%; height: 32px; font-size: 13px;" type="button" id="commit" value="Sign In" />
                                                <div style="height:35px;" align="center">
                                                    <div id="load" style=" width:16px; height:16px; display:none;"><img src="<?= base_url() ?>images/loading4.gif" width="16" height="16"></div>
                                                    <div id="error" style="width:100%; display:none; font-size:10px; color:#F00;"></div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            <?php } else { ?>
                                <div class="btn-group" style="float:right;">
                                    <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                        เลือก
                                        <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?= site_url('takmoph_admin') ?>"><i class="icon-wrench"></i> หมวดจัดการระบบ</a></li>
                                        <li><a href="<?= site_url('takmoph2014/logout') ?>"><i class="icon-off"></i> ออกจากระบบ</a></li>
                                    </ul>
                                </div>
                            <?php } ?>

                            <!---------------------------------->


                        </div><!--/.nav-collapse -->
                    </div>
                </div>
            </div>

        </div><!-- menu_top-->

        <div class="main_head">
            <div align="center"></div>

            <div class="sub_main_head" style="position:relative;">
                <div class="shadow"></div>
                <div class="main">
                    <!-- slider -->
                    <center>
                        <div class="_banner" style=" width: 1000px; height: 260px;">
                            <!--<img src="<?//php echo base_url();?>images/images_slide/banner.png"/>-->
                            <embed src="<?php echo base_url(); ?>assets/flash/banner.swf" width="100%" type="application/x-shockwave-flash" height="260" wmode="transparent" />
                        </div>
                    </center>
                </div>
                <!-- end of slider -->
                <!-- cols -->
            </div>
        </div>
    </div><!-- ปิด main_head-->



    <!-- container -->
    <div class="container" style="width:100%; background:url(<?= base_url() ?>images/nav-bg.png) top #F5F5F5; background-repeat:repeat-x;">
        <div class="container" style="width:100%; background:url(<?= base_url() ?>images/nav-bg-bottom.png) bottom; background-repeat:repeat-x;">

            <div align="center"><div class="clean_line"></div></div>

            <center>
                <div class="sub_container">
                    <table width="100%">
                        <tr>
                            <td>

                                <div class="menu_left">

                                    <!-- Menu Persident -->
                                    <div id="submenu_left" class="btn" style="height:auto; text-align:center;">
                                        <img src="<?= base_url() ?>/images/ssj.png">
                                        <div id="t_submenu">นายพูลลาภ ฉันทวิจิตรวงศ์ <br/> นายแพทย์ สสจ.ตาก</div>
                                    </div>

                                    <div id="bottom_menu"><div id="sub_buttom_left"></div><div id="sub_buttom_right"></div></div>

                                    <?php
                                    $menu = $this->tak->get_mas_menu();
                                    foreach ($menu->result() as $rs):
                                        if ($rs->menu_color == 's') {
                                            $color = 'btn';
                                        } else if ($rs->menu_color == 'g') {
                                            $color = 'btn btn-success';
                                        } else if ($rs->menu_color == 'o') {
                                            $color = 'btn btn-warning';
                                        } else if ($rs->menu_color == 'r') {
                                            $color = 'btn btn-danger';
                                        } else if ($rs->menu_color == 'b') {
                                            $color = 'btn btn-primary';
                                        }

                                        if ($rs->mas_status == '0') {
                                            ?>
                                            <a href="<?= site_url($rs->link . '/' . $rs->admin_menu_id . '/' . $rs->mas_menu) ?>">
                                                <div id="submenu_left" class="<?= $color ?>">
                                                    <div id="submenu_left_img"><img src="<?= base_url() ?>icon_menu/<?= $rs->menu_icon ?>"></div>
                                                    <div id="t_submenu"><?= $rs->mas_menu ?></div>
                                                </div></a>
                                        <?php } else { ?>
                                            <div class="btn-group" style="margin:0px;">
                                                <div id="submenu_left" class="<?= $color ?> dropdown-toggle" data-toggle="dropdown">
                                                    <div id="submenu_left_img">
                                                        <img src="<?= base_url() ?>icon_menu/<?= $rs->menu_icon ?>">
                                                    </div>
                                                    <div id="t_submenu" style="position:relative;">
                                                        <?= $rs->mas_menu ?>
                                                        <span class="caret" style=" right:0px;position:absolute;"></span>
                                                    </div>
                                                </div>
                                                <?php
                                                $sub_menu = $this->tak->get_sub_menu($rs->id);
                                                $count_menu = $this->tak->count_menu($rs->id);
                                                if ($count_menu <= 11) {
                                                    $height = 'height:auto;';
                                                } else {
                                                    $height = "height:300px;";
                                                };
                                                ?>
                                                <ul class="dropdown-menu" style="width:auto; <?= $height ?> overflow:auto;">
                                                    <?php
                                                    foreach ($sub_menu->result() as $sub):
                                                        if ($sub->link != '') {
                                                            $link = site_url('menu/get_menu/' . $sub->link);
                                                            $target = "";
                                                        } else {
                                                            $link = base_url() . "file_download/" . $sub->file;
                                                            $target = "target='_blank'";
                                                        }
                                                        ?>
                                                        <li><a href="<?= $link ?>" <?= $target ?>><i class="icon-share-alt"></i> <?= $sub->sub_name ?></a>
                                            <?php endforeach; ?>
                                                </ul>
                                            </div>
    <?php } ?>
<?php endforeach; ?>

                                    <!--
                                               <ul class="dropdown-menu" style="width:auto;">
                                                    <li class="dropdown-submenu"><a href="#"><i class="icon-share-alt"></i> แบบฟอร์มกองทุนสำรองเลี้ยงชีพลูกจ้างประจำ (กสจ.)</a>
                                                            <ul class="dropdown-menu">
                                                                <li><a href="#"><i class="icon-hand-right"></i> งานบริหารทั่วไป</a></li>
                                                                <li><a href="#"><i class="icon-hand-right"></i> งานบริหารทั่วไป</a></li>
                                                                <li><a href="#"><i class="icon-hand-right"></i> งานบริหารทั่วไป</a></li>
                                                                <li><a href="#"><i class="icon-hand-right"></i> งานบริหารทั่วไป</a></li>
                                                                <li><a href="#"><i class="icon-hand-right"></i> งานบริหารทั่วไป</a></li>
                                                            </ul>
                                                    </li>
                                                    <li><a href="#"><i class="icon-share-alt"></i>Another action</a></li>
                                                    <li><a href="#"><i class="icon-share-alt"></i>Something else here</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#"><i class="icon-share-alt"></i>Separated link</a></li>
                                                </ul>
                                    -->

                                    <div id="bottom_menu"><div id="sub_buttom_left"></div><div id="sub_buttom_right"></div></div>

                                    <!-- Menu Down Load ########################################################################-->
                                    <div class="btn-group" style="margin:0px;">
                                        <div id="submenu_left" class="btn dropdown-toggle" data-toggle="dropdown">
                                            <div id="submenu_left_img">
                                                <img src="<?= base_url() ?>icon_menu/folder-icon.png">
                                            </div>
                                            <div id="t_submenu" style="position:relative;">
                                                แบบฟอร์มต่าง ๆ
                                                <span class="caret" style=" right:0px;position:absolute;"></span>
                                            </div>
                                        </div>
                                        <ul class="dropdown-menu" style="width:auto;">
                                            <?php
                                            $mas_from = $this->tak->get_mas_from();
                                            foreach ($mas_from->result() as $rt):
                                                ?>
                                                        <?php if ($rt->from_status == '0') { ?>
                                                    <li><a href="<?= base_url() ?>file_download/<?= $rt->file ?>" target="_blank"><i class="icon-share-alt"></i> <?= $rt->mas_from ?></a></li>
                                                        <?php } else { ?>
                                                    <li class="dropdown-submenu"><a href="#"><i class="icon-share-alt"></i> <?= $rt->mas_from ?></a>
                                                        <ul class="dropdown-menu">
                                                            <?php
                                                            $sub_from = $this->tak->get_sub_from($rt->id);
                                                            foreach ($sub_from->result() as $data):
                                                                ?>
                                                                <li><a href="<?= base_url() ?>file_download/<?= $data->file ?>" target="_blank"><i class="icon-share-alt"></i> <?= $data->sub_name ?></a></li>
                                                    <?php endforeach; ?>
                                                        </ul>
                                                    </li>
    <?php } ?>
<?php endforeach; ?>
                                        </ul>
                                    </div>
                                    <!-- End Menu Down Load -->
                                    <div id="bottom_menu"><div id="sub_buttom_left"></div><div id="sub_buttom_right"></div></div>



                                    <!-- Histats.com  START  (standard)-->
                                    <div id="submenu_left" class="btn btn-info" style="height:auto; text-align:center;">
                                        <center>
                                            <div id="t_submenu">สถิติผู้เข้าชม</div>
                                            <script type="text/javascript">
                                                document.write(unescape("%3Cscript src=%27http://s10.histats.com/js15.js%27 type=%27text/javascript%27%3E%3C/script%3E"));
                                            </script>
                                            <a href="http://www.histats.com" target="_blank" title="" ><script  type="text/javascript" >
                                                try {
                                                    Histats.start(1, 1947305, 4, 201, 118, 45, "00010010");
                                                    Histats.track_hits();
                                                } catch (err) {
                                                }
                                                ;
                                                </script></a>
                                            <noscript><a href="http://www.histats.com" target="_blank"><img  src="http://sstatic1.histats.com/0.gif?1947305&101" alt="" border="0"></a></noscript>
                                        </center>
                                        <!-- Histats.com  END  -->
                                    </div>
                                </div>

                                <div class="right">
                                    <?php $this->load->view('from/page_news'); ?>
                                    <?PHP
                                    if ($detail == "") {
                                        $this->load->view($page . ".php");
                                    } else {
                                        $this->load->view($page . ".php", $detail);
                                    }
                                    ?>
                                    </br>

                                    <!--<div class="btn" style="width:735px; padding:8px;">-->
                                    <div align="center"><img src="<?= base_url() ?>images/section-shadow.png" width="700" height="22" /></div>

                                    <div class="thumbnail" style="width:230px; float:left; margin-right:15px; text-align:center;">
                                        <img class="thumbnail" src="<?= base_url() ?>images/takis.jpg" alt="">
                                        <h3>ระบบสารสนเทศ</h3>
                                        <p>สาธารณสุข จังหวัดตาก</p>
                                        <a href="http://www.takis.takpho.go.th" target="_blank"><input type="button" class="btn" value="รายละเอียด"/></a>
                                    </div>

                                    <div class="thumbnail" style="width:230px; float:left; margin-right:5px;  text-align:center;">
                                        <img class="thumbnail" src="<?= base_url() ?>images/takic.jpg" alt="">
                                        <h3>ระบบศูนย์ข้อมูล</h3>
                                        <p>จังหวัดตาก</p>
                                        <a href="http://www.takic.takpho.go.th" target="_blank"><input type="button" class="btn" value="รายละเอียด"/></a>
                                    </div>

                                    <div class="thumbnail" style="width:230px; float:right;  text-align:center;">
                                        <img class="thumbnail" src="<?= base_url() ?>images/gvp.jpg" alt="">
                                        <h3>อ่านรายงาน</h3>
                                        <p>การประชุม กวป.</p>
                                        <a href="http://203.157.203.2/meeting_system/"  target="_blank"><input type="button" class="btn" value="รายละเอียด"/></a>
                                    </div>


                                    <div id="hade_home" style="width:95%; height:220px; padding-left:0px; margin-top:0px; clear:both;" class="alert alert-info">
                                        <ul id="mymenu" class="jcarousel-skin-tango_menu" style="height:220px; position:relative;">
<?php
$menu_system = $this->tak->get_menu_system();
foreach ($menu_system->result() as $mm):
    ?>
                                                <li>
                                                    <div class="thumbnail" style="width:210px; float:left; margin-right:8px;  text-align:center;">
                                                        <img class="thumbnail" src="<?= base_url() ?>icon_menu/<?= $mm->system_images ?>" alt="">
                                                        <p><?= $mm->system_title ?></p>
                                                        <a href="<?= $mm->link ?>" target="_blank"><input type="button" class="btn" value="รายละเอียด"/></a>
                                                    </div>
                                                </li>
<?php endforeach; ?>
                                        </ul>
                                    </div>

                                </div>

                            </td>
                        </tr>
                    </table>
                    <p class="footer"> ใช้เวลาในการโหลดหน้านี้ <strong>{elapsed_time}</strong> วินาที</p>

                    <div class="well"></div>

                </div>
            </center>

            <div align="center"><div class="bottom_line"></div></div>
        </div>

    </div>

    <!-- footer -->
    <div class="footer_page">
        <div class="sub_footer" style="top:0px; background:url(<?= base_url() ?>images/header_shadow.png) top center no-repeat; height:50px;">
            <center><img src="<?= base_url() ?>images/cradit.png"/></center>
        </div>
    </div>
    <!-- Script Slide News -->
    <script type="text/javascript" src="<?= base_url() ?>assets/slide_news/js/wow-slider.js"></script>
</body>
</html>
