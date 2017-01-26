<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">
    #box_new{ padding:0px 0px 0px 0px; background:#FFF;}
    #td{ background:none; border-bottom:#CCC solid 1px;}
    #td a{color: #999999; font-size: 13px; font-weight: normal;}
    #td:hover{background: #f7f7f7; color: #ffffff;}
    #td a:hover{ text-decoration: none; color: #F00;}
</style>

<div class="well" id="box_container_o">
    <div class="tabbable">

        <ul class="nav nav-tabs" id="myTab" style="margin:0px; padding:0px;">
            <li class="active"><a href="#pane_echo_1" data-toggle="tab"><i class="icon-share-alt"></i> <?php echo $this->tak->get_name_menu('11'); ?></a></li>
            <li><a href="#pane_echo_2" data-toggle="tab"><i class="icon-share-alt"></i> <?php echo $this->tak->get_name_menu('12'); ?></a></li>
            <li><a href="#pane_echo_3" data-toggle="tab"><i class="icon-share-alt"></i> <?php echo $this->tak->get_name_menu('13'); ?></a></li>
        </ul>
        
        <div class="tab-content">
            <div id="pane_echo_1" class="tab-pane active" style=" padding-bottom:0px;">
               <div class="alert" id="box_new">
                   <table cellpadding="0" cellspacing="0" border="0" class="display" id="echo1" width="100%;">
                    <thead>
                        <tr id="tr" style="padding:0px; margin:0px; display: none;">
                            <th id="tr" width="2"></th>
                            <th id="tr"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?PHP
                        $a=0;
                            $echo_hot1 = $this->tak->get_dengue('11'); // ประกาศสำนักงานสาธารณสุขจังหวัด
                            foreach ($echo_hot1->result() as $rs_echo1):
                                $a++;
                            ?>
                            <tr style="background:none;">
                                <td id="td" style="color:#FFF; font-size:9px; margin:0px; padding:0px; display: none;"><?= $a++ ?></td>
                                <td id="td">
                                    <a href="<?php echo base_url()?>file_download/<?php echo $rs_echo1->file?>" target="_blank">
                                        <i class="icon-comment"></i>
                                        <?= $rs_echo1->title ?><br/>
                                        <i class="icon-calendar"></i>
                                        <font style="color:#F00; font-size:12px;">วันที่ : [<?= $this->tak->thaidate($rs_echo1->d_update) ?>]</font> 
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        
        <!-- Tab 2 -->
        <div id="pane_echo_2" class="tab-pane" style=" padding-bottom:0px;">
            <div class="alert" id="box_new">
               <table cellpadding="0" cellspacing="0" border="0" class="display" id="echo1" width="100%;">
                <thead>
                    <tr id="tr" style="padding:0px; margin:0px; display: none;">
                        <th id="tr" width="2"></th>
                        <th id="tr"></th>
                    </tr>
                </thead>
                <tbody>
                    <?PHP
                    $b=0;
                            $echo_hot2 = $this->tak->get_dengue('12'); // ประกาศสำนักงานสาธารณสุขจังหวัด
                            foreach ($echo_hot2->result() as $rs_echo2):
                                $b++;
                            ?>
                            <tr style="background:none;">
                                <td id="td" style="color:#FFF; font-size:9px; margin:0px; padding:0px; display: none;"><?= $b++ ?></td>
                                <td id="td">
                                    <a href="<?php echo base_url()?>file_download/<?php echo $rs_echo2->file?>" target="_blank">
                                        <i class="icon-comment"></i>
                                        <?= $rs_echo2->title ?><br/>
                                        <i class="icon-calendar"></i>
                                        <font style="color:#F00; font-size:12px;">วันที่ : [<?= $this->tak->thaidate($rs_echo2->d_update) ?>]</font> 
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        
        <!-- Tab 3 -->
        <div id="pane_echo_3" class="tab-pane" style=" padding-bottom:0px;">
            <div class="alert" id="box_new">
               <table cellpadding="0" cellspacing="0" border="0" class="display" id="echo1" width="100%;">
                <thead>
                    <tr id="tr" style="padding:0px; margin:0px; display: none;">
                        <th id="tr" width="2"></th>
                        <th id="tr"></th>
                    </tr>
                </thead>
                <tbody>
                    <?PHP
                    $c=0;
                            $echo_hot3 = $this->tak->get_dengue('13'); // ประกาศสำนักงานสาธารณสุขจังหวัด
                            foreach ($echo_hot3->result() as $rs_echo3):
                                $c++;
                            ?>
                            <tr style="background:none;">
                                <td id="td" style="color:#FFF; font-size:9px; margin:0px; padding:0px; display: none;"><?= $c++ ?></td>
                                <td id="td">
                                    <a href="<?php echo base_url()?>file_download/<?php echo $rs_echo3->file?>" target="_blank">
                                        <i class="icon-comment"></i>
                                        <?= $rs_echo3->title ?><br/>
                                        <i class="icon-calendar"></i>
                                        <font style="color:#F00; font-size:12px;">วันที่ : [<?= $this->tak->thaidate($rs_echo3->d_update) ?>]</font> 
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div><!-- /.tab-content -->



</div><!-- /.tabbable -->
</div><!-- End BG -->
<!--
    ประกาศด่วน
-->


<div align="center"><img src="<?= base_url() ?>images/section-shadow.png" width="700" height="22" /></div>
<!-- Search Report -->
<div class="well" style="text-align:center; padding: 10px;" id="box_container">
    <a href="http://203.157.203.2/archives/search_docall.php" target="_blank"><div class="btn btn-warning">ค้นหาประเภทเอกสารเพิ่มเติม <i class="icon-search"></i></div></a>
    <a href="http://203.157.203.2/archives/search_storeall.php" target="_blank"><div class="btn btn-primary">ค้นหาหมวดเอกสารเพิ่มเติม <i class="icon-search"></i></div></a>
</div>

<div class="well" id="box_container">
    <div class="tabbable">

        <ul class="nav nav-tabs" id="myTab" style="margin:0px; padding:0px;">
            <li class="active"><a href="#pane1" data-toggle="tab"><i class="icon-share-alt"></i> ประกาศสาธารณสุขจังหวัด</a></li>
            <li><a href="#pane3" data-toggle="tab"><i class="icon-share-alt"></i> ประกาศจังหวัด</a></li>
        </ul>
        <?php $Opentable = "<table class='table table-hover' width='724'><tbody>"; ?>
        <?php $Closetable = "</table>"; ?>

        <div class="tab-content">
            <div id="pane1" class="tab-pane active">
                <div class="alert" id="box_new">
                    <table cellpadding="0" cellspacing="0" border="0" class="display" id="new1" width="100%;">
                        <thead>
                            <tr id="tr" style="padding:0px; margin:0px; display: none;">
                                <th id="tr" width="2"></th>
                                <th id="tr"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?PHP
                            $i = 1;
                            $echo = $this->tak->get_archives('8'); // ประกาศสำนักงานสาธารณสุขจังหวัด
                            foreach ($echo->result() as $rs1):
                                ?>
                            <tr style="background:none;">
                                <td id="td" style="color:#FFF; font-size:9px; margin:0px; padding:0px; display: none;"><?= $i++ ?></td>
                                <td id="td">
                                    <a href="http://203.157.203.2/archives/docex_img.php?DO_Id=<?= $rs1->DO_Id ?>" target="_blank">
                                        <i class="icon-comment"></i>
                                        <?= $rs1->DO_Title ?><br/>
                                        <i class="icon-calendar"></i>
                                        <font style="color:#F00; font-size:12px;">วันที่ : [<?= $this->tak->thaidate($rs1->DO_Date) ?>]</font> 
                                        <img src="<?= base_url() ?>images/icon_new.gif"/>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div id="pane3" class="tab-pane">
            <div class="alert" id="box_new">
                <table cellpadding="0" cellspacing="0" border="0" class="display" id="new2" width="100%;">
                    <thead>
                        <tr id="tr" style="padding:0px; margin:0px; display: none;">
                            <th id="tr" width="2" style="padding:0px; margin:0px;"></th>
                            <th id="tr"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?PHP
                        $i = 1;
                            $echo1 = $this->tak->get_archives('4'); // ประกาศจังหวัด
                            foreach ($echo1->result() as $rs3):
                                ?>
                            <tr style="background:none;">
                                <td id="td" style="color:#FFF; font-size:9px; margin:0px; padding:0px; display: none;"><?= $i++ ?></td>
                                <td id="td">
                                    <a href="http://203.157.203.2/archives/docex_img.php?DO_Id=<?= $rs3->DO_Id ?>" target="_blank">
                                        <i class="icon-comment"></i>
                                        <?= $rs3->DO_Title ?><br/>
                                        <i class="icon-calendar"></i>
                                        <font style="color:#F00; font-size:12px;">วันที่ : [<?= $this->tak->thaidate($rs3->DO_Date) ?>]</font> 
                                        <img src="<?= base_url() ?>images/icon_new.gif"/>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div><!-- /.tab-content -->



</div><!-- /.tabbable --></br>
</div><!-- End BG -->

<div align="center"><img src="<?= base_url() ?>images/section-shadow.png" width="700" height="22" /></div>

<div id="box_container" class="well">
    <div class="tabbable">
        <ul class="nav nav-tabs" id="myTab" style="margin:0px; padding:0px;">
            <li class="active"><a href="#pane4" data-toggle="tab"><i class="icon-share-alt"></i> หนังสือเวียนภายใน</a></li>
            <li><a href="#pane5" data-toggle="tab"><i class="icon-share-alt"></i> หนังสือเวียนภายนอก</a></li>
            <li><a href="#pane6" data-toggle="tab"><i class="icon-share-alt"></i> ประชุม สัมนา อบรมระยะสั้น</a></li>
        </ul>  

        <div class="tab-content">
            <div id="pane4" class="tab-pane active">
                <div class="alert" id="box_new">
                    <table cellpadding="0" cellspacing="0" border="0" class="display" id="new3" width="100%;">
                        <thead>
                            <tr id="tr" style="padding:0px; margin:0px; display: none;">
                                <th id="tr" width="2" style="padding:0px; margin:0px;"></th>
                                <th id="tr"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?PHP
                            $i = 1;
                            $echoin = $this->tak->get_archives('1');
                            foreach ($echoin->result() as $rs4):
                                ?>
                            <tr style="background:none;">
                                <td id="td" style="color:#FFF; font-size:9px; margin:0px; padding:0px; display: none;"><?= $i++ ?></td>
                                <td id="td">
                                    <a href="http://203.157.203.2/archives/docex_img.php?DO_Id=<?= $rs4->DO_Id ?>" target="_blank">
                                        <i class="icon-comment"></i>
                                        <?= $rs4->DO_Title ?><br/>
                                        <i class="icon-calendar"></i>
                                        <font style="color:#F00; font-size:12px;">วันที่ : [<?= $this->tak->thaidate($rs4->DO_Date) ?>]</font> 
                                        <img src="<?= base_url() ?>images/icon_new.gif"/>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div id="pane5" class="tab-pane">
            <div class="alert" id="box_new">
                <table cellpadding="0" cellspacing="0" border="0" class="display" id="new4" width="100%;">
                    <thead>
                        <tr id="tr" style="padding:0px; margin:0px; display: none;">
                            <th id="tr" width="2" style="padding:0px; margin:0px;"></th>
                            <th id="tr"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?PHP
                        $i = 1;
                        $echo_out = $this->tak->get_archives('6');
                        foreach ($echo_out->result() as $rs5):
                            ?>
                        <tr style="background:none;">
                            <td id="td" style="color:#FFF; font-size:9px; margin:0px; padding:0px; display: none;"><?= $i++ ?></td>
                            <td id="td">
                                <a href="http://203.157.203.2/archives/docex_img.php?DO_Id=<?= $rs5->DO_Id ?>" target="_blank">
                                    <i class="icon-comment"></i>
                                    <?= $rs5->DO_Title ?><br/>
                                    <i class="icon-calendar"></i>
                                    <font style="color:#F00; font-size:12px;">วันที่ : [<?= $this->tak->thaidate($rs5->DO_Date) ?>]</font> 
                                    <img src="<?= base_url() ?>images/icon_new.gif"/>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <div id="pane6" class="tab-pane">
        <div class="alert" id="box_new">
            <table cellpadding="0" cellspacing="0" border="0" class="display" id="new5" width="100%;">
                <thead>
                    <tr id="tr" style="padding:0px; margin:0px; display: none;">
                        <th id="tr" width="2" style="padding:0px; margin:0px;"></th>
                        <th id="tr"></th>
                    </tr>
                </thead>
                <tbody>
                    <?PHP
                    $i = 1;
                    $get_semina = $this->tak->get_semina();
                    foreach ($get_semina->result() as $semina):
                        ?>
                    <tr style="background:none;">
                        <td id="td" style="color:#FFF; font-size:9px; margin:0px; padding:0px; display: none;"><?= $i++ ?></td>
                        <td id="td">
                            <a href="http://203.157.203.2/archives/storeex_img.php?id=<?= $semina->Store_Id ?>" target="_blank">
                                <i class="icon-comment"></i>
                                <?= $semina->Store_Title ?><br/>
                                <i class="icon-calendar"></i>
                                <font style="color:#F00; font-size:12px;">วันที่ : [<?= $this->tak->thaidate($semina->Store_Date) ?>]</font> 
                                <img src="<?= base_url() ?>images/icon_new.gif"/>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
</div><!-- /.tab-content -->

</div><!-- /.tabbable -->

</div>

<div align="center"><img src="<?= base_url() ?>images/section-shadow.png" width="600" height="22" /></div>


<div id="box_container_b" class="well" style=" position: relative; height: 310px;">

    <div class="thumbnail" style="width:193px; float:left; margin-right:10px; background: #FFF; text-align:center;">
        <img class="thumbnail" src="<?= base_url() ?>images/takis.jpg" alt="">
        <h3>ระบบสารสนเทศ</h3>
        <p>สาธารณสุข จังหวัดตาก</p>
        <a href="http://www.takis.takpho.go.th" target="_blank"><input type="button" class="btn" value="รายละเอียด"/></a>
    </div>

    <div class="thumbnail" style="width:193px; float:left; margin-right:5px; background: #FFF;  text-align:center;">
        <img class="thumbnail" src="<?= base_url() ?>images/takic.jpg" alt="">
        <h3>ระบบศูนย์ข้อมูล</h3>
        <p>จังหวัดตาก</p>
        <a href="http://www.thic.takpho.go.th" target="_blank"><input type="button" class="btn" value="รายละเอียด"/></a>
    </div>

    <div class="thumbnail" style="width:193px; float:right; background: #FFF;  text-align:center;">
        <img class="thumbnail" src="<?= base_url() ?>images/gvp.jpg" alt="">
        <h3>อ่านรายงาน</h3>
        <p>การประชุม กวป.</p>
        <a href="http://203.157.203.2/meeting_system/"  target="_blank"><input type="button" class="btn" value="รายละเอียด"/></a>
    </div>

</div>

<div align="center"><img src="<?= base_url() ?>images/section-shadow.png" width="600" height="22" /></div>

<!-- Menu Program -->
<div id="box_container_b" class="well">
    <div id="hade_home" style="width:605px; height:220px; padding-left:0px; margin-top:0px; clear:both; background: none; border-radius:0px ; ">
        <ul id="mymenu" class="jcarousel-skin-tango_menu" style="height:220px;">
            <?php
            $menu_system = $this->tak->get_menu_system();
            foreach ($menu_system->result() as $mm):
                ?>
            <li>
                <div class="thumbnail" style="width:165px; float:left; margin-right:2px; background: #ffffcc;  text-align:center;">
                    <img class="thumbnail" src="<?= base_url() ?>icon_menu/<?= $mm->system_images ?>" alt="" style="width:155px;">
                    <p style="text-overflow: ellipsis; white-space:nowrap; width:150px; overflow:hidden;"><?= $mm->system_title ?></p>
                    <a href="<?= $mm->link ?>" target="_blank"><input type="button" class="btn" value="รายละเอียด"/></a>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>
</div>
</div>



<!--</div>--> 




