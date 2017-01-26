<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="shortcut icon" href="<?php echo base_url() ?>2036_green/images/logo_SSJ_120.png">
        <title>สำนักงานสาธารณสุขจังหวัดตาก</title>

        <!-- New Themes -->

        <link href="<?php echo base_url() ?>2036_green/css/tooplate_style.css" rel="stylesheet" type="text/css" />

        <script src="<?php echo base_url() ?>2036_green/js/jquery-1.8.2.js" type="text/javascript"></script>

        <!-- Slide New -->
        <link href="<?php echo base_url() ?>2036_green/assets/slide_news/js-image-slider.css" rel="stylesheet" type="text/css" />
        <script src="<?php echo base_url() ?>2036_green/assets/slide_news/js-image-slider.js" type="text/javascript"></script>

        <!-- Bootstrap -->
        <link href="<?php echo base_url() ?>2036_green/assets/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() ?>2036_green/assets/bootstrap/css/bootstrap-responsive.css" rel="stylesheet" type="text/css" />
        <script src="<?php echo base_url() ?>2036_green/assets/bootstrap/js/bootstrap.js" type="text/javascript"></script>

        <!--
                Slide Album
        -->
        <link rel="stylesheet" href="<?= base_url() ?>css/skin.css" type="text/css" media="all" />
        <link rel="stylesheet" href="<?= base_url() ?>css/skin_mymenu.css" type="text/css" media="all" />

        <style type="text/css">
            .ui-menu { width: 200px; border:#CCC solid 5px;}
            .btn:hover{ background:#FFF; box-shadow:inset #CCC 0px 0px 10px 0px; color:#F00;}
        </style>

        <script src="<?= base_url() ?>js/jquery.flexslider-min.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>js/functions.js" type="text/javascript"></script>
        <!--
              Slide Album
        -->
        <script src="<?= base_url() ?>js/jquery.jcarousel.min.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>js/libraly/Myslide.js" type="text/javascript"></script>

        <!-- Back Top -->
        <link rel="stylesheet" href="<?= base_url() ?>backtotop/backtotop.css" type="text/css" />
        <script type="text/javascript" src="<?= base_url() ?>backtotop/BackToTop.jquery.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>backtotop/jquery-ui.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                BackToTop({
                    text: '^ Back to top',
                    autoShow: true,
                    autoShowOffset: 300,
                    timeEffect: 800,
                    appearMethod: 'fade',
                    effectScroll: 'easeOutCubic', /** all effects http://jqueryui.com/docs/effect/#easing */
                    opacity: 1,
                    top: 10
                });
            });
        </script>

        <script src="<?php echo base_url() ?>js/login.js" type="text/javascript"></script>

        <!-- Datatable -->
        <link rel="stylesheet" href="<?= base_url() ?>assets/dataTable/css/demo_table.css" type="text/css" media="all" />
        <link rel="stylesheet" href="<?= base_url() ?>assets/dataTable/css/jquery.dataTables_themeroller.css" type="text/css" media="all" />
        <link rel="stylesheet" href="<?= base_url() ?>assets/dataTable/css/jquery.dataTables.css" type="text/css" media="all" />
        <script src="<?= base_url() ?>assets/dataTable/js/jquery.dataTables.js" type="text/javascript"></script>

        <script type="text/javascript" charset="utf-8">
            $(document).ready(function () {
                $('#new1,#new2,#new3,#new4,#new5,#new6,#echo1').dataTable({
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

        <!-- Add mousewheel plugin (this is optional) -->
        <script type="text/javascript" src="<?= base_url() ?>slide_gallery/lib/jquery.mousewheel-3.0.6.pack.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>slide_gallery/source/jquery.fancybox.js?v=2.1.3"></script>
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>slide_gallery/source/jquery.fancybox.css?v=2.1.2" media="screen" />

    </head>

    <body>
        <input type="hidden" id="base_url" name="base_url" value="<?php echo base_url(); ?>"/>
        <div class="home"></div>

        <div id="tooplate_wrapper">
            <div id="tooplate_sidebar">
                <div id="site_title">
                    <center>
					<!--
                        <a rel="nofollow" href="#">
                            <embed src="<?//php echo base_url() ?>assets/flash/logo_ssj.swf" width="100%" type="application/x-shockwave-flash" height="150" wmode="transparent" />
                        </a>
						-->
						<img src="<?php echo base_url()?>images/logomoph.png" width="130" style="margin:5px 0px 15px 0px;"/>
                    </center>
                </div> <!-- end of site_title -->


                <div id="home_service">
                    <!-- Menu Left -->

                    <!-- Menu Persident -->
                    <div id="submenu_left" class="btn" style="height:auto; text-align:center;"> 
                        <img src="<?php echo base_url() ?>/images/ssj.png">

                    </div>
                    <div id="submenu_left" class="btn">
                        <center>
                            <div id="submenu_left_img"></div>
                            <div id="t_submenu" style=" text-align: center;">นายพูลลาภ ฉันทวิจิตรวงศ์<br/>นายแพทย์ สสจ.ตาก</div>
                        </center>
                    </div>

                    <center><img src="<?php echo base_url() ?>images/bottom_shadow.png"/></center>

                    <div class="sidebar_box" style=" border: solid 1px #FFF; background: #ffffcc;">
                        <?php if (($this->session->userdata('status')) == '') { ?>
                            <center><h4>Admin Login</h4>
                                <div id="newsletter_box">
                                    <input type="text" id="username" name="username" placeholder="Username" class="newsletter_email" />
                                    <input type="password" id="password" name="password" placeholder="Password" class="newsletter_email" />
                                    <div class="btn btn-success" onclick="login();">
                                        <i class="icon icon-lock"></i> login
                                    </div>
                                    <div class="btn btn-danger"><i class="icon icon-remove"></i> cancel</div>
                                    <div id="error" style="display:none; color: red;"></div>
                                </div>
                            </center>
                        <?php } else { ?>
                            <center><h4>ยินดีต้อนรับ</h4>
                                <div id="newsletter_box">
                                    <label class="" style=" float: left;"><i class="icon icon-user"></i> <?php echo $this->session->userdata('name') . ' ' . $this->session->userdata('lname'); ?></label>
                                    <label class="" style=" float: left;"><i class="icon icon-align-justify"></i> <?php echo $this->tak->user_status($this->session->userdata('status')); ?></label>
                                    <p style=" width: 100px;">ffdbffn</p>
                                    <a href="<?php echo site_url('takmoph2014/logout') ?>">
                                        <div class="btn btn-danger" style=" clear: both; border-radius: 0px; border: none; "><i class="icon icon-off"></i> ออกจากระบบ</div></a>
                                </div>
                            </center>
                        <?php } ?>
                        <div class="cleaner"></div>
                    </div>

                    <?php if (($this->session->userdata('status')) != '') { ?>
                        <a href="<?php echo site_url('takmoph_admin') ?>">
                            <div id="submenu_left" class="btn btn-inverse">
                                <div id="submenu_left_img"><img src="<?php echo base_url() ?>images/settings-icon.png"></div>
                                <div id="t_submenu">จัดการเว็บไซต์</div>
                            </div></a>
                    <?php } ?>
                    <center><img src="<?php echo base_url() ?>images/bottom_shadow.png"/></center>

                    <!--
                    #
                    #
                    # Link Menu 
                    #
                    #
                    -->

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

                            <!-- ลิงค์ ข้างนอก -->
                        <?php } else if ($rs->mas_status == '2') { ?>

                            <a href="<?php echo $rs->link_out; ?>" target="_blank">
                                <div id="submenu_left" class="<?= $color ?>">
                                    <div id="submenu_left_img"><img src="<?= base_url() ?>icon_menu/<?= $rs->menu_icon ?>"></div>
                                    <div id="t_submenu"> <?= $rs->mas_menu ?></div>
                                </div></a>

                            <!-- Droupdown -->
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
                                }
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
       #
       #
       #  END Link Menu 
       #
       #
                    -->

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
                                    <li>
                                        <a href="<?= base_url() ?>file_download/<?= $rt->file ?>" target="_blank"><i class="icon-share-alt"></i>
                                            <?= $rt->mas_from ?></a>
                                    </li>
                                <?php } else { ?>
                                    <li class="dropdown-submenu"><a href="#"><i class="icon-share-alt"></i> <?= $rt->mas_from ?></a>
                                        <ul class="dropdown-menu">
                                            <?php
                                            $sub_from = $this->tak->get_sub_from($rt->id);
                                            foreach ($sub_from->result() as $data):
                                                ?>
                                                <li><a href="<?= base_url() ?>file_download/<?= $data->file ?>" target="_blank"><i class="icon-share-alt"></i>
                                                        <?= $data->sub_name ?></a>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </li>
                                <?php } ?>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <!-- End Menu Down Load -->

                    <center><img src="<?php echo base_url() ?>images/bottom_shadow.png"/></center>

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

                    <center><img src="<?php echo base_url() ?>images/bottom_shadow.png"/></center>

                    <!-- End Menu Left -->

                </div>


                <div class="sidebar_box sbb_last">

                </div>
            </div> <!-- end of sidebar -->

            <div id="tooplate_main">

                <div class="navbar">
                    <div class="navbar-inner" id="containermenu">
                        <div class="container">
                            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </a>
                            <div class="nav-collapse" style="float:right;">
                                <ul class="nav" style="margin-right:0px;">
                                    <li id="limenu" class="btn-success" style=" border-radius: 80px 0px 0px 0px; padding-left: 20px;">
                                        <a href="<?php echo site_url('takmoph2014') ?>">หน้าแรก <i class="icon icon-home icon-white"></i></a>
                                    </li>
                                    <li class="btn-success dropdown" id="limenu">
                                        <a href="#" class="dropdown" data-toggle="dropdown"><b class="caret"></b> เกี่ยวกับสำนักงาน </a>
                                        <ul class="dropdown-menu" id="link_submenu">
                                            <li><a href="<?php echo site_url('takmoph2014/president') ?>" id="link_mn">โครงสร้างผู้บริหาร</a></li>
                                            <li><a href="<?php echo site_url('takmoph2014/history') ?>" id="link_mn">ประวัติความเป็นมา</a></li>
                                            <li><a href="<?php echo site_url('takmoph2014/mission') ?>" id="link_mn">ภารกิจ</a></li>
                                        </ul>
                                    </li>
                                    <li id="limenu" class="btn-success"><a href="http://www.thic.takpho.go.th" target="_blank" ">ข้อมูลสาธารณสุข <i class="icon icon-briefcase icon-white"></i></a></li>
                                    <li id="limenu" class="btn-success"><a href="<?php echo site_url('takmoph2014/tel') ?>">เบอร์โทรศัพท์ <i class="icon icon-user icon-white"></i></a></li>
                                </ul>

                            </div><!-- /.nav-collapse -->
                        </div>
                    </div><!-- /navbar-inner -->
                </div>

                <div style='width:640px; margin-bottom:50px; box-shadow: 0px 0px 10px 0px #000;'>

                    <!-- Slide News -->
                    <div id="sliderFrame">
                        <div id="slider">
                            <?php
                            $news = $this->news->get_news_limit();
                            foreach ($news->result() as $new):
                                ?>
                                <a href="<?php echo site_url('news/show_detail_news/' . $new->id) ?>">
                                    <img src="<?php echo base_url() ?>upload_images/news/<?php echo $new->images; ?>" alt="<?php echo $new->titel; ?>"/>
                                </a>
                            <?php endforeach; ?>
                        </div>
                        <!--thumbnails-->
                        <div id="thumbs">
                            <?php
                            $news_t = $this->news->get_news_limit();
                            foreach ($news_t->result() as $newt):
                                ?>
                                <div class="thumb">
                                    <div class="frame"><img src="<?php echo base_url() ?>upload_images/news/<?php echo $newt->images; ?>" /></div>
                                    <div style="clear:both;"></div>
                                </div>
                            <?php endforeach; ?>
                            <div class="btn" style='padding:5px; margin-top: 10px; border-radius: 0px; float: right; text-align:center;  width:80px;'>
                                <center><i class="icon icon-th-list"></i><a href="<?php echo site_url('news/news_all'); ?>">ทั้งหมด</a></center>
                            </div>
                        </div>

                        <!--clear above float:left elements. It is required if above #slider is styled as float:left. -->
                        <div style="clear:both;height:0;"></div>
                    </div>

                    <!-- EndSlide News -->
                </div> <!-- end of featured project -->

                <div id="tooplate_content">
                    <?PHP
                    if ($detail == "") {
                        $this->load->view($page . ".php");
                    } else {
                        $this->load->view($page . ".php", $detail);
                    }
                    ?>

                </div> <!-- end of content -->

            </div> <!-- end of content -->

            <div class="cleaner"></div>
        </div> <!-- end of wrapper -->

        <div id="tooplate_footer_wrapper">
            <div id="tooplate_footer">

                <a href="<?php echo site_url('takmoph2014') ?>">หน้าแรก</a> | 
                <a href="<?php echo site_url('takmoph2014/president') ?>">โครงสร้างผู้บริหาร</a> |
                <a href="<?php echo site_url('takmoph2014/history') ?>">ประวัติความเป็นมา</a> |
                <a href="<?php echo site_url('takmoph2014/mission') ?>">ภารกิจ</a> |
                <a href="http://www.takic.takpho.go.th/index.php/report_icenter/main" target="_blank" ">ข้อมูลสาธารณสุข </a> |
                <a href="<?php echo site_url('takmoph2014/tel') ?>">เบอร์โทรศัพท์</a><br/>

                Copyright © 2014 <a href="#">งานเทคโนโลยีสารสนเทศ สำนักงานสาธารณสุขจังหวัดตาก</a> - Designed by <a rel="nofollow" href="#" target="_parent">Kimniyom</a>

            </div>
        </div>

    </body>
</html>
