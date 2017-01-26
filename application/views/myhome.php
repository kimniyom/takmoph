<style type="text/css">
    #box_new{ padding:0px 0px 0px 0px; background:#FFF;}
    h3{text-shadow: 0 1px 0 rgba(255, 255, 255, 0.4); color: #002166;}
</style>

<?php
$this->load->library("takmoph_libraries");
$this->load->model("menu_model");
$this->load->model('homepage_model');
$this->load->model('sub_homepage_model');
$libraries = new takmoph_libraries();
?>

<div class="well" id="bg_gray" style=" margin-bottom: 0px; margin-top: 0px; padding-top: 0px;">
    <div class="bottom-line"></div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" style=" margin: 0px;">
                <h3><i class="fa fa-th-large"></i> เมนู</h3>
                <hr id="hr"/>
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
                    $menu_model = new menu_model();
                    //$color = $menu_model->get_color($rs->menu_color);
                    ?>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4" style="padding:0px 5px 5px 0px;">
                        <?php
                        if ($rs->mas_status == '0') {
                            ?>
                            <a href="<?= site_url($rs->link . '/' . $this->takmoph_libraries->encode($rs->admin_menu_id) . '/' . $rs->mas_menu) ?>" style=" text-decoration: none;">

                                <div id="submenu" class="btn btn-block hvr-trim" style="background:<?php echo $rs->bgcolor ?>;color:<?php echo $rs->textcolor ?>; border-radius:0px;">
                                    <div id="submenu_img"><img src="<?= base_url() ?>icon_menu/<?= $rs->menu_icon ?>"></div>
                                    <center>
                                        <div class="text-menu"><?= $rs->mas_menu ?></div>
                                    </center>
                                </div>
                            </a>

                            <!-- ลิงค์ ข้างนอก -->
                        <?php } else if ($rs->mas_status == '2') {
                            ?>

                            <a href="<?php echo $rs->link_out; ?>" target="_blank" style=" text-decoration: none;">
                                <div id="submenu" class="btn btn-block hvr-trim" style="background:<?php echo $rs->bgcolor ?>;color:<?php echo $rs->textcolor ?>; border-radius:0px;">
                                    <div id="submenu_img"><img src="<?= base_url() ?>icon_menu/<?= $rs->menu_icon ?>"></div>
                                    <center>
                                        <div class="text-menu"> <?= $rs->mas_menu ?></div>
                                    </center>
                                </div></a>

                            <!-- Droupdown -->
                            <?php
                        } else {
                            ?>

                            <a href="<?php echo site_url('menu/submenu/' . $this->takmoph_libraries->encode($rs->id)); ?>" style=" text-decoration: none;">
                                <div id="submenu" class="btn btn-block hvr-trim" style="background:<?php echo $rs->bgcolor ?>;color:<?php echo $rs->textcolor ?>; border-radius:0px;">
                                    <div id="submenu_img"><img src="<?= base_url() ?>icon_menu/<?= $rs->menu_icon ?>"></div>
                                    <center>
                                        <div class="text-menu"> <?= $rs->mas_menu ?></div>
                                    </center>
                                </div></a>
                        <?php } ?>

                    </div>

                <?php endforeach; ?>


                <!-- #######################################
                                                    Menu Down Load
                ########################################-->

                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4" style="padding:0px 5px 5px 0px;">
                    <a href="<?php echo site_url('formdownload'); ?>" style="text-decoration:">
                        <div id="submenu" class="btn btn-info btn-block hvr-trim" style="border-radius:0px;">
                            <div id="submenu_img"><img src="<?= base_url() ?>icon_menu/folder-icon.png"></div>
                            <center>
                                <div class="text-menu"> แบบฟอร์มต่าง ๆ </div>
                            </center>
                        </div></a>
                </div>

                <!--
                    งานข้อมูล
                -->
                <div style=" clear: both;">
                    <h3 style=" padding-top: 20px;"><i class="fa fa-database"></i> งานข้อมูล</h3>
                    <hr id="hr"/>
                    <div class="row">
                        <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">

                            <a href="http://www.takis.takpho.go.th" target="_blank" style=" text-decoration: none;">
                                <div class="hvr-grow-rotate" style=" width: 100%;">
                                    <div class="container-card" style="max-height: 150px; text-align: center;" id="menu-hover">
                                        <div class="img-wrapper">
                                            <img src="<?php echo base_url() ?>images/takis.jpg" class="img-responsive" style="height:100px;"/>
                                        </div>
                                        <p class="detail" style=" font-weight: bold; font-size: 20px;">
                                            Takis(ตากคิด)<br/>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">

                            <a href="http://www.thic.takpho.go.th" target="_blank" style=" text-decoration: none;">
                                <div class="hvr-grow-rotate" style=" width: 100%;">
                                    <div class="container-card" style="max-height: 150px; text-align: center;" id="menu-hover">
                                        <div class="img-wrapper">
                                            <img src="<?php echo base_url() ?>images/takic.jpg" class="img-responsive" style="height:100px;"/>
                                        </div>
                                        <p class="detail" style=" font-weight: bold; font-size: 20px;">
                                            ศูนย์ข้อมูล
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- HDC -->
                        <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">

                            <a href="http://tak.hdc.moph.go.th/" target="_blank" style=" text-decoration: none;">
                                <div class="hvr-grow-rotate" style=" width: 100%;">
                                    <div class="container-card" style="max-height: 150px; text-align: center;" id="menu-hover">
                                        <div class="img-wrapper">
                                            <img src="<?php echo base_url() ?>images/hdc-logo.jpg" class="img-responsive" style="height:100px;"/>
                                        </div>
                                        <p class="detail" style=" font-weight: bold; font-size: 20px;">
                                            HDC
                                        </p>
                                    </div>
                                </div>
                            </a>

                        </div>
                    
                        <!-- HDC -->
                        <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">

                            <a href="http://www.tim.takpho.go.th/" target="_blank" style=" text-decoration: none;">
                                <div class="hvr-grow-rotate" style=" width: 100%;">
                                    <div class="container-card" style="max-height: 150px; text-align: center;" id="menu-hover">
                                        <div class="img-wrapper">
                                            <img src="<?php echo base_url() ?>images/tim-logo.jpg" class="img-responsive" style="height:100px;"/>
                                        </div>
                                        <p class="detail" style=" font-weight: bold; font-size: 12px; margin-top:0px; padding-top:10px;">
                                            ข้อมูลสุขภาพประชากรต่างชาติ
                                        </p>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>

                </div>

            </div><!-- End Menu Group -->
            <!-- #######################################
                                                END MENU GROUP
                ########################################-->

            <!-- ######################################
                                                    ข่าวล่าสุด
            ##########################################-->

            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <h3><i class="fa fa-newspaper-o"></i> ข่าวล่าสุด</h3>
                <hr id="hr"/>
                <!-- Slide News -->
                <?php
                $i = 0;
                $news = $this->news->get_news_limit();
                foreach ($news->result() as $new):
                    $i++;
                    ?>
                    <div class="font_news">
                        <a href="<?php echo site_url('news/view/' . $this->takmoph_libraries->encode($new->id)) ?>">
                            <div class="media hvr-bounce-to-right" id="box-lastnews" style=" width: 100%; margin-bottom: 10px;">
                                <span  class="pull-left">
                                    <img src="<?php echo base_url() ?>upload_images/news/<?php echo $new->images; ?>" class="img-responsive img_news" style="max-width: 120px;"/>
                                </span>
                                <div clas="media-body" style=" padding: 10px;">
                                    <?php echo $new->titel; ?>
                                    <br/>
                                    <font class="pull-right" style=" font-size: 12px;">
                                    <?php echo $libraries->thaidate($new->date); ?>
                                    </font>
                                </div>
                            </div>
                        </a>
                    </div>

                <?php endforeach; ?>
                <div class="row" style=" margin-bottom: 20px; margin-top: 10px;">
                    <a href="<?php echo site_url('news') ?>" style=" position: absolute; right: 15px;">
                        <button type="button" class="btn btn-default btn-sm" style=" margin-right: 0px;">ข่าวทั้งหมด <i class="fa fa-arrow-circle-o-right"></i></button>
                    </a>
                </div>
                <!-- EndSlide News -->
            </div><!-- End Col -->

        </div><!-- End Row -->
    </div><!-- End container -->
</div> <!-- End Well -->


<div class="bottom-line"></div>

<!-- ######################################
                                        นโยบาย,ตรวจงาน,นิเทศงาน
##########################################-->

<div class=" container">

    <h3><i class="fa fa-users"></i> นโยบาย/ตรวจราชการ/นิเทศ</h3>
    <hr id="hr"/>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <div class="panel panel-warning">
                <div class=" panel-heading"><h4 id="head-panel"><?php echo $this->tak->get_name_menu('11'); ?></h4></div>

                <div class="list-group">
                    <?php
                    $a = 0;
                    $echohot1 = $this->tak->get_dengue('11'); // ประกาศสำนักงานสาธารณสุขจังหวัด
                    foreach ($echohot1->result() as $rs_echohot1):
                        $a++;
                        if ($a == 1):
                            $img_new = '<img src="' . base_url() . 'images/icon_new.gif"/>';
                            ?>
                            <a href="<?php echo base_url() ?>file_download/<?php echo $rs_echohot1->file ?>" target="_blank" class="list-group-item">
                                <?php echo $rs_echohot1->title ?>
                                <?php echo $img_new ?>
                            </a>
                        <?php endif; ?>

                    <?php endforeach; ?>
                </div>
                <div class="panel-footer" style=" text-align: right;">
                    <a href="<?php echo site_url('menu/filemenu/11') ?>">
                        <button type="button" class="btn btn-default btn-xs">ทั้งหมด ...</button>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <div class="panel panel-primary">
                <div class=" panel-heading"><h4 id="head-panel"><?php echo $this->tak->get_name_menu('12'); ?></h4></div>
                <div class="list-group">
                    <?php
                    $a = 0;
                    $echohot2 = $this->tak->get_dengue('12'); // ประกาศสำนักงานสาธารณสุขจังหวัด
                    foreach ($echohot2->result() as $rs_echohot2):
                        $a++;
                        if ($a == 1):
                            $img_new = '<img src="' . base_url() . 'images/icon_new.gif"/>';
                            ?>
                            <a href="<?php echo base_url() ?>file_download/<?php echo $rs_echohot2->file ?>" target="_blank" class="list-group-item">
                                <?php echo $rs_echohot2->title ?>
                                <?php echo $img_new ?>
                            </a>
                        <?php endif; ?>

                    <?php endforeach; ?>
                </div>
                <div class="panel-footer" style=" text-align: right;">
                    <a href="<?php echo site_url('menu/filemenu/12') ?>">
                        <button type="button" class="btn btn-default btn-xs">ทั้งหมด ...</button>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <div class="panel panel-success">
                <div class=" panel-heading"><h4 id="head-panel"><?php echo $this->tak->get_name_menu('13'); ?></h4></div>
                <div class="list-group">
                    <?php
                    $a = 0;
                    $echohot3 = $this->tak->get_dengue('13'); // ประกาศสำนักงานสาธารณสุขจังหวัด
                    foreach ($echohot3->result() as $rs_echohot3):
                        $a++;
                        if ($a == 1):
                            $img_new = '<img src="' . base_url() . 'images/icon_new.gif"/>';
                            ?>
                            <a href="<?php echo base_url() ?>file_download/<?php echo $rs_echohot3->file ?>" target="_blank" class="list-group-item">
                                <?php echo $rs_echohot3->title ?>
                                <?php echo $img_new ?>
                            </a>
                        <?php endif; ?>

                    <?php endforeach; ?>
                </div>
                <div class="panel-footer" style=" text-align: right;">
                    <a href="<?php echo site_url('menu/filemenu/13') ?>">
                        <button type="button" class="btn btn-default btn-xs">ทั้งหมด ...</button>
                    </a>
                </div>
            </div>
        </div>
    </div>

</div>


<!--
    ประกาศจังหวั สาสุข ระบบงานสารบัญ
-->

<div style=" margin-bottom: 0px;">

    <div class="bottom-line"></div>
    <div class="container">
        <h3><i class="fa fa-bullhorn"></i> ประกาศ</h3>
        <hr id="hr" style=" margin-bottom: 0px;"/>
        <div class="well" style=" margin-top: 0px;">
            <!-- Search Report -->
            <div class="row">
                <div class=" pull-right" style=" margin-right: 15px;">
                    <a href="http://203.157.203.22/archives/search_docall.php" target="_blank"><div class="btn btn-warning btn-sm">ค้นหาประเภทเอกสารเพิ่มเติม <i class="icon-search"></i></div></a>
                    <a href="http://203.157.203.22/archives/search_storeall.php" target="_blank"><div class="btn btn-primary btn-sm">ค้นหาหมวดเอกสารเพิ่มเติม <i class="icon-search"></i></div></a>
                </div>
            </div>
            <br/>
            <div id="document-office"></div>
        </div>
    </div>
</div>


<!--
 ########### HomePage ################
-->

<div id="homepage"></div>


<!-- ระบบงานต่าง ๆ -->
<div class="well" id="bg_gray" style=" margin-top: 0px; padding-top: 0px; margin-bottom: 0px;">
    <div class="bottom-line"></div>
    <div style="margin-top: 0px;">
        <div class="container" style=" margin-bottom: 30px;">
            <h3><i class="fa fa-th"></i> ระบบงาน</h3>
            <hr id="hr"/>
            <div class="row">

                <!-- Menu Program -->
                <?php
                $menu_system = $this->tak->get_menu_system();
                foreach ($menu_system->result() as $mm):
                    ?>
                    <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                        <a href="<?= $mm->link ?>" target="_blank" style=" text-decoration: none;">
                            <div class="hvr-grow" style=" width: 100%;">
                                <div class="container-card" style="max-height: 150px; text-align: center;" id="menu-hover">
                                    <div class="img-wrapper">
                                        <img src="<?php echo base_url() ?>icon_menu/<?php echo $mm->system_images ?>" class="img-responsive" style="height:100px;"/>
                                    </div>
                                    <p class="detail" style=" margin: 0px; padding: 2px; font-weight: bold; padding-top: 10px;">
                                        <?php echo $mm->system_title ?><br/>
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>
    </div>
</div>
<script type="text/javascript">
    loadhomepage();
    $(document).ready(function () {
        var width = $(window).width();
        if (width < 768) {
            $(".img_news").css("width", "100px");
            $(".font_news").css("font-size", "12px");
        }

        var url = "<?php echo site_url('document_office/index') ?>";
        var data = {a: 1};
        $.post(url, data, function (result) {
            $("#document-office").html(result);
        });
    });

    function loadhomepage() {
        var url = "<?php echo site_url('homepage/index') ?>";
        var data = {a: 1};
        $.post(url, data, function (success) {
            $("#homepage").html(success);
        });

    }
</script>
