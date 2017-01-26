<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>สำนักงานสาธารณสุขจังหวัดตาก</title>
        <link rel="stylesheet" href="<?= base_url() ?>css/style.css" type="text/css" media="all" />


        <link rel="stylesheet" href="<?//= base_url() ?>css/bootstrap.css" type="text/css" media="all" />
        <link rel="stylesheet" href="<?//= base_url() ?>css/bootstrap.min.css" type="text/css" media="all" />
        <link rel="stylesheet" href="<?//= base_url() ?>css/bootstrap-responsive.css" type="text/css" media="all" />
        <link rel="stylesheet" href="<?//= base_url() ?>css/bootstrap-responsive.min.css" type="text/css" media="all" />       
        
        <script src="<?= base_url() ?>js/jquery-1.10.1.min.js"></script>
        <!--
                Slide Album
        -->
        <link rel="stylesheet" href="<?= base_url() ?>css/skin.css" type="text/css" media="all" />
        <link rel="stylesheet" href="<?= base_url() ?>css/skin_mymenu.css" type="text/css" media="all" />

        <style type="text/css">
            .ui-menu { width: 200px; border:#CCC solid 5px;}
            h1 {
                color: #444;
                background-color: transparent;
                border-bottom: 1px solid #D0D0D0;
                font-size: 19px;
                font-weight: normal;
                margin: 0 0 14px 0;
                padding: 14px 15px 10px 15px;
            }
        </style>


        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>css/imgareaselect-animated.css" />
        
        <script type="text/javascript" src="<?= base_url() ?>js/jquery.imgareaselect.pack.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>js/script.js"></script>


        <script src="<?= base_url() ?>js/bootstrap.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>js/bootstrap-dropdown.js" type="text/javascript"></script>
        <!--
              Slide Album
        -->

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
                    top: 50
                });
            });
        </script>


        <!-- Datatable -->
        <link rel="stylesheet" href="<?= base_url() ?>assets/DataTables-1.10.6/media/css/jquery.dataTables.css" type="text/css" media="all" />
        <script src="<?= base_url() ?>assets/DataTables-1.10.6/media/js/jquery.dataTables.js" type="text/javascript"></script>

        <script src="<?= base_url() ?>assets/DataTables-1.10.6/extensions/FixedHeader/js/dataTables.fixedHeader.js" type="text/javascript"></script>

        <script type="text/javascript" charset="utf-8">
            $(document).ready(function () {
                $('#new1,#new2,#new3,#new4,#new5,#new6').dataTable({
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

        <!-- Upload -->
        <script src="<?= base_url() ?>lib/js/jquery.uploadify-3.1.js" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>lib/css/uploadify.css">

        <!--
        <script src="<?//= base_url() ?>assets/ckeditor/ckeditor.js"></script>
        -->

    </head>

    <body>
        <?PHP
        /*
          if($this->session->userdata('status') == ""){
          echo $this->tak->redir('');
          }
         */
        ?>
        <div id ="test"></div>
        <div align="center">
            <div class="menu_top">               

                <div class="navbar navbar-fixed-top navbar-inverse">
                    <div class="navbar-inner" style="background:url(<?= base_url() ?>images/h_menu_green.jpg); border-bottom:#6C0 solid 1px;">
                        <div class="container">
                            <a class="brand" href="#" id="_link">สสจ. ตาก(ส่วนผู้ดูแลระบบ)</a>
                            <div class="nav-collapse collapse">
                                <ul class="nav">
                                    <li><a href="<?= site_url('takmoph2014/main/') ?>" id="_link"><i class="icon-home"></i> หน้าเว็บไซต์</a></li>
                                    <li><a href="<?= site_url('takmoph_admin') ?>" id="_link"><i class="icon-th-large"></i> เมนูหลัก</a></li>
                                    <li><a href="javascript:history.back();" id="_link"><i class="icon-arrow-left"></i> กลับ</a></li>
                                    <!--
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="_link"> จัดการระบบ <i class=" icon-chevron-down"></i></a>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown-submenu"><a href="#"><i class="icon-hand-right"></i> ประวัติความเป็นมา</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#"><i class="icon-hand-right"></i> งานบริหารทั่วไป</a></li>
                                                    <li><a href="#"><i class="icon-hand-right"></i> งานบริหารทั่วไป</a></li>
                                                    <li><a href="#"><i class="icon-hand-right"></i> งานบริหารทั่วไป</a></li>
                                                    <li><a href="#"><i class="icon-hand-right"></i> งานบริหารทั่วไป</a></li>
                                                    <li><a href="#"><i class="icon-hand-right"></i> งานบริหารทั่วไป</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#" ><i class="icon-hand-right"></i> ภารกิจ</a></li>
                                        </ul>
                                    </li>
                                    -->
                                </ul>

                                <!-- Start of the nav bar content -->
                                <div class="nav-collapse"><!-- Other nav bar content -->
                                    <!-- The drop down menu -->
                                    <ul class="nav pull-right">
                                        <li class="dropdown">
                                            <a class="dropdown-toggle" id="click_login" href="#"><i class="icon-user"></i> 
                                                สวัสดีคุณ : <?= $this->session->userdata('name') . ' ' . $this->session->userdata('lname'); ?>
                                            </a>
                                        </li>
                                    </ul>
                                </div>                             
                                <!---------------------------------->


                            </div><!--/.nav-collapse -->
                        </div>
                    </div>
                </div>

            </div><!-- menu_top-->
        </div>


        <!-- container -->
        <div class="container" style="width:100%; background:url(<?= base_url() ?>images/nav-bg.png) top; background-repeat:repeat-x;">
            <div class="container" style="width:100%; background:url(<?= base_url() ?>images/nav-bg-bottom.png) bottom; background-repeat:repeat-x;">
                <div align="center"><div class="clean_line"></div></div>

                <div class="container">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a> <span class="divider">/</span></li>
                        <li><a href="#">Library</a> <span class="divider">/</span></li>
                        <li class="active">Data</li>
                    </ul>
                    <table width="100%">

                        <tr>
                            <td>
                                <div class="right" style="width:100%;">

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
                                </div>

                            </td>
                        </tr>
                    </table>
                    <p class="footer"> ใช้เวลาในการโหลดหน้านี้ <strong>{elapsed_time}</strong> วินาที</p>
                </div>


                <div align="center"><div class="bottom_line"></div></div>
            </div>
        </div>

        <!-- footer -->
        <div class="footer_page">
            <div class="sub_footer" style="top:0px; background:url(<?= base_url() ?>images/header_shadow.png) top center no-repeat; height:50px;">
                <center><img src="<?= base_url() ?>images/cradit.png"/></center>
            </div>
        </div>




    </body>
</html>