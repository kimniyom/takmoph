<?php
$f5 = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
?>


<div class="container">

    <?php
    $this->load->library('takmoph_libraries');
    $model = new takmoph_libraries();
    /*
      $list = array(
      array('url' => '', 'label' => 'menu1'),
      array('url' => '', 'label' => 'menu2')
      );
     * 
     */
    $active = $head;
    $list = "";
    ?>
    <div class="row" style=" margin: 0px; padding: 0px;">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" style="padding-left: 0px;">
            <h3 id="head_submenu"><i class="fa fa-building-o"></i> <?php echo $head ?></h3>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" style="padding-right: 0px;">
            <?php echo $model->breadcrumb($list, $active); ?>
        </div>
    </div>


    <hr id="hr" style=" margin-bottom: 0px;"/>

    <div class="well" style=" font-size: 16px;">

        <TABLE width="100%" height="100%" border=0 align="center" cellPadding=0 cellSpacing=0 borderColor=#a14444
               bgColor=#f3f4f5>
            <TBODY>
                <TR vAlign=top align=left>
                    <TD  background="images/menu-sideleft.gif"  height=169><table width="100%"  border="0" cellspacing="0" 
                                                                                  cellpadding="5">
                            <tr>
                                <td><span class="style5"><strong> บทบาทสำนักงานสาธารณสุขจังหวัด </strong></span></td>
                            </tr>
                        </table>
                        <table width="100%" border="0" cellspacing="2" cellpadding="2">
                            <tr>
                                <td><span class="style5"> <br/><?php echo $f5; ?>เป็นหน่วยงานที่ขึ้นตรงต่อผู้ว่าราชการจังหวัด มีนายแพทย์สาธารณสุขจังหวัดเป็น 
                                        ตัวแทนกระทรวงสาธารณสุขในจังหวัดนั้น ๆ </span></td>
                            </tr>
                            <tr>
                                <td><span class="style5"> เป็นผู้บังคับบัญชาดูแลรับผิดชอบ สำนักงานสาธารณสุขจังหวัด ได้รับการนิเทศงาน 
                                        กำกับดูแลและสนับสนุนทรัพยากร </span></td>
                            </tr>
                            <tr>
                                <td><span class="style5"> จากสำนักงานปลัดกระทรวงสาธารณสุข(ผ่านทางสำนักตรวจราชการกระทรวง) 
                                        และกรมวิชาการต่าง ๆ </span></td>
                            </tr>
                            <tr>
                                <td><span class="style5"> สำนักงานสาธารณสุขจังหวัดตาก 
                                        มีอำนาจหน้าที่เกี่ยวกับการจัดทำแผนยุทธศาสตร์ด้านสุขภาพของจังหวัด การกำกับ ดูแล </span></td>
                            </tr>
                            <tr>
                                <td><span class="style5">ประเมินผล และสนับสนุนการปฏิบัติงานของหน่วยงาน สาธารณสุขในจังหวัด 
                                        และปฏิบัติงานร่วมกับหรือสนับสนุนการปฏิบัติงาน </span></td>
                            </tr>
                            <tr>
                                <td><span class="style5"> ของหน่วยงานที่เกี่ยวข้องหรือที่ได้รับมอบหมาย </span></td>
                            </tr>
                            <tr>
                                <td><span class="style5"> นอกจากนี้ ยังมีโรงพยาบาลระดับจังหวัด คือ โรงพยาบาลศูนย์และโรงพยาบาลทั่วไป (150 – 
                                        1000 เตียง) รวมทั้งโรงพยาบาลระดับ </span></td>
                            </tr>
                            <tr>
                                <td><span class="style5"> อำเภอ คือ โรงพยาบาลชุมชน (10 – 120 เตียง) ทั้งหมดขึ้นตรงต่อนายแพทย์สาธารณสุขจังหวัด </span></td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td bgcolor="#FFCCFF"><span class="style5"><strong> โรงพยาบาลศูนย์/ทั่วไป </strong></span></td>
                            </tr>
                            <tr>
                                <td><span class="style5"> <?php echo $f5;?>แบ่งงานภายในออกเป็น 5 กลุ่มคือ กลุ่มภารกิจด้านอำนวยการ 
                                        กลุ่มภารกิจด้านพัฒนาระบบบริการสุขภาพ กลุ่มภารกิจด้านการพยาบาล </span></td>
                            </tr>
                            <tr>
                                <td><span class="style5"> กลุ่มภารกิจด้านบริการตติยภูมิ และกลุ่มภารกิจด้านบริการปฐมภูมิและทุติยภูมิ </span></td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td bgcolor="#FFCCFF"><span class="style5"><strong> โรงพยาบาลชุมชน </strong></span></td>
                            </tr>
                            <tr>
                                <td><span class="style5"> <?php echo $f5;?>แบ่งงานภายในออกเป็น 3 กลุ่มภารกิจ คือ กลุ่มภารกิจด้านอำนวยการ กลุ่มภารกิจด้านบริการ 
                                        และกลุ่มภารกิจด้านการพยาบาล </span></td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td bgcolor="#FFCCFF"><span class="style5"><strong> สำนักงานสาธารณสุขอำเภอ/กิ่งอำเภอ </strong></span></td>
                            </tr>
                            <tr>
                                <td><span class="style5"> <?php echo $f5;?>เป็นหน่วยงานที่ขึ้นตรงต่อนายอำเภอ มีสาธารณสุขอำเภอ/กิ่งอำเภอ 
                                        เป็นหัวหน้ามีหน้าที่ทางด้านบริหาร ส่งเสริม สนับสนุน ควบคุม </span></td>
                            </tr>
                            <tr>
                                <td><span class="style5"> กำกับ ติดตามและประเมินผลการปฏิบัติงานของสถานีอนามัย 
                                        สำนักงานสาธารณสุขอำเภอได้รับการนิเทศงาน และประสานงานจาก </span></td>
                            </tr>
                            <tr>
                                <td><span class="style5"> สำนักงานสาธารณสุขจังหวัด ซึ่งจะเป็นผู้สนับสนุนทางวิชาการและบริหาร </span></td>
                            </tr>
                            <tr>
                                <td><span class="style5"> มีอำนาจหน้าที่เกี่ยวกับการจัดทำแผนยุทธศาสตร์ด้านสุขภาพของอำเภอ การกำกับ ดูแล 
                                        ประเมินผล และสนับสนุนการปฏิบัติงานของ </span></td>
                            </tr>
                            <tr>
                                <td><span class="style5"> หน่วยงานสาธารณสุขในอำเภอ 
                                        และปฏิบัติงานร่วมกับหรือสนับสนุนการปฏิบัติงานของหน่วยงานที่เกี่ยวข้องหรือได้รับมอบหมาย </span></td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td bgcolor="#FFCCFF"><span class="style7"> สถานีอนามัย </span></td>
                            </tr>
                            <tr>
                                <td><span class="style5"> <?php echo $f5;?>เป็นหน่วยบริการสาธารณสุขระดับตำบล หรือระดับหมู่บ้าน มีหน้าที่ในการจัดบริการ </span></td>
                            </tr>
                            <tr>
                                <td><span class="style5"> สาธารณสุขผสมผสานแก่ประชาชนในชนบท ในเขตพื้นที่รับผิดชอบ 
                                        โดยครอบคลุมประชากรประมาณ 1,000 – 5,000 คน มีเจ้า </span></td>
                            </tr>
                            <tr>
                                <td><span class="style5"> หน้าที่ปฏิบัติงานประจำ คือ เจ้าพนักงานสาธารณสุขชุมชน (พนักงานอนามัย 
                                        ผดุงครรภ์และพยาบาลเทคนิค) ซึ่งจบการศึกษาจาก </span></td>
                            </tr>
                            <tr>
                                <td><span class="style5"> วิทยาลัยการสาธารณสุขสิรินธร และวิทยาลัยพยาบาลราชชนนี ปัจจุบันเริ่มมีทันตาภิบาล 
                                        พยาบาลวิชาชีพ และนักวิชาการสาธารณสุข </span></td>
                            </tr>
                            <tr>
                                <td><span class="style5"> บรรจุเข้าทำงานในระดับสถานีอนามัยด้วย </span></td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                            </tr>
                        </table>
                        <table width="100%" border="0" align="center" cellpadding="5" cellspacing="0">
                            <tr></tr>
                        </table></TD>
                </TR>
            </TBODY>
        </TABLE>

    </div>

</div>