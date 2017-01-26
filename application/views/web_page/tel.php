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
            <h3 id="head_submenu"><i class="fa fa-phone text-warning"></i> <?php echo $head ?></h3>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" style="padding-right: 0px;">
            <?php echo $model->breadcrumb($list, $active); ?>
        </div>
    </div>


    <hr id="hr"/>


    <div style="position:relative; padding:5px; border-radius: 0px;">
        <h4>หมายเลขโทรศัพท์ สสจ.ตาก</h4><br/>
        <table width="100%"class="table table-bordered">
            <tr>
                <td><h4>โทรศัพท์  0-5551-8100</h4></td>
            <tr>
                <td><h4>โทรสาร   0-5551-8109</h4></td>
            </tr>
        </table>
    
        <b>หมายเลขโทรศัพท์ภายใน สสจ.ตาก</b><br/><br/>
        <table width="100%" class="table table-bordered">
            <tr >
                <th width="34%" bordercolor="1" scope="col"><div align="left" class="style11">นพ.สสจ.</div></th>
                <th width="10%" scope="col"><div align="right"><span class="style11">111</span></div></th>
                <th width="42%" scope="col"><div align="left"><span class="style11">พัฒนายุทธศาสตร์</span></div></th>
                <th width="13%" scope="col"><div align="right"><span class="style11">118,119</span></div></th>
            </tr>
            <tr >
                <th bordercolor="1" scope="col"><div align="left" class="style11">งานเลขา ฯ </div></th>
                <th scope="col">
                    <div align="left" class="style11">
                        <div align="right">139</div>
                    </div>
                </th>
                <th scope="col"><div align="left"><span class="style11">งานเทคโนโลยีสารสนเทศ</span></div></th>
                <th scope="col"><div align="right" class="style11">133</div></th>
            </tr>
            <tr>
                <th bordercolor="1" scope="col"><div align="left" class="style11">ผชช.พ.ว</div></th>
                <th scope="col"><div align="right" class="style11">199</div></th>
                <th scope="col"><div align="left"><span class="style11">งานพัฒนาบุคลากร</span></div></th>
                <th scope="col"><div align="right"><span class="style11">132</span></div></th>
            </tr>
            <tr>
                <th height="18" scope="col"><div align="left" class="style11">ผชช.ส</div></th>
                <th scope="col"><div align="right"><span class="style11">113</span></div></th>
                <th scope="col"><div align="left" class="style11">งานวัณโรค (TB) (ตรวจสอบอีกครั้ง)</div></th>
                <th scope="col"><div align="right"><span class="style11">147</span></div></th>
            </tr>
            <tr>
                <th scope="col"><div align="left" class="style11">จบส.8 </div></th>
                <th scope="col"><div align="right"><span class="style11">141</span></div></th>
                <th scope="col"><div align="left"><span class="style11">งานควบคุมโรคไม่ติดต่อ</span></div></th>
                <th scope="col"><div align="right"><span class="style11">120</span></div></th>
            </tr>
            <tr>
                <th height="18" scope="col"><div align="left" class="style11">หัวหน้าบริหาร</div></th>
                <th scope="col"><div align="right"><span class="style11">140</span></div></th>
                <th scope="col"><div align="left" class="style11">งานเอดส์</div></th>
                <th scope="col"><div align="right" class="style11">121</div></th>
            </tr>
            <tr>
                <th scope="col"><div align="left" class="style11">งานธุรการ</div></th>
                <th scope="col"><div align="right"><span class="style11">131,138</span></div></th>
                <th scope="col"><div align="left" class="style11">งานกิจการพิเศษ(งานสาธารณสุขต่างด้าว)</div></th>
                <th scope="col"><div align="right" class="style11">146</div></th>
            </tr>
            <tr>
                <th scope="col"><div align="left" class="style11">บริหาร(งานพัสดุ)</div></th>
                <th scope="col"><div align="right" class="style11">114</div></th>
                <th scope="col"><div align="left" class="style11">งานคุ้มครองผู้บริโภค</div></th>
                <th scope="col"><div align="right" class="style11">122,125</div></th>
            </tr>
            <tr>
                <th scope="col"><div align="left" class="style11">บริหารงานบุคลากร</div></th>
                <th scope="col"><div align="right"><span class="style11">115,137</span></div></th>
                <th scope="col"><div align="left" class="style11">งานอนามัยสิ่งแวดล้อม</div></th>
                <th scope="col"><div align="right"><span class="style11">135</span></div></th>
            </tr>
            <tr>
                <th scope="col"><div align="left"><span class="style11">งานการเงิน</span></div></th>
                <th scope="col"><div align="right" class="style11">117</div></th>
                <th scope="col"><div align="left" class="style11">งาน ปชส. (โสต)</div></th>
                <th scope="col"><div align="right"><span class="style11">129</span></div></th>
            </tr>
            <tr>
                <th scope="col"><div align="left"><span class="style11">งานตรวจสอบ</span></div></th>
                <th scope="col"><div align="right" class="style11">116</div></th>
                <th scope="col"><div align="left"><span class="style11">ห้องวิทยุ(รับ)</span></div></th>
                <th scope="col"><div align="right"><span class="style11">124</span></div></th>
            </tr>
            <tr>
                <th scope="col"><div align="left"><span class="style11">งานส่งเสริม , ทันตกรรม </span></div></th>
                <th scope="col"><div align="right" class="style11">126,144</div></th>
                <th scope="col"><div align="left"><span class="style11">ห้องวิทยุ (ส่ง)</span></div></th>
                <th scope="col"><div align="right"><span class="style11">156</span></div></th>
            </tr>
            <tr>
                <th height="18"  scope="col"><div align="left"><span class="style11">งานประกันสุขภาพ</span></div></th>
                <th  scope="col"><div align="right"><span class="style11">110,130</span></div></th>
                <th  scope="col"><div align="left" class="style11">ป้อมยาม</div></th>
                <th  scope="col"><div align="right" class="style11">157</div></th>
            </tr>
            <tr>
                <th  scope="col"><div align="left" class="style11">ร้านค้า</div></th>
                <th  scope="col"><div align="right"><span class="style11">159</span></div></th>
                <th height="18"  scope="col">&nbsp;</th>
                <th  scope="col">&nbsp;</th>
            </tr>
        </table>
   
        <b>หมายเลขโทรศัพท์สำนักงานสาธารณสุขอำเภอ</b><br/><br/>
        <table  width="100%" class="table table-bordered">
            <tr>
                <th width="20%" bordercolor="1" scope="col"><div align="left" class="style29">สาธารสุขอำเภอ</div></th>
                <th width="60%" class="style18" scope="col"><div align="right" class="style27">
                        <div align="left" class="style29">โทรศัพท์</div>
                    </div></th>
                <th width="20%" scope="col"><div align="center"><span class="style29">โทรสาร</span></div></th>
            </tr>
            <tr>
                <th valign="top" bordercolor="1" scope="col"><div align="left" class="style11">สสอ.เมือง</div></th>
                <th class="style18" scope="col"><div align="left" class="style26">
                        <div align="left">0-5551-3598,0-5551-5953,0-5551-6302</div>
                    </div></th>
                <th class="style26" scope="col"><div align="center">0-5551-6302</div></th>
            </tr>
            <tr>
                <th valign="top" bordercolor="1" scope="col"><div align="left"><span class="style11">สสอ.บ้านตาก</span></div></th>
                <th bordercolor="1" scope="col"><div align="left" class="style11">
                        <div align="left"><span class="style26">0-5559-1021</span></div>
                    </div></th>
                <th colspan="2" class="style26" scope="col"><div align="center">0-5559-1021</div></th>
            </tr>
            <tr>
                <th height="18" scope="col"><div align="left" class="style11">สสอ.สามเงา</div></th>
                <th class="style18" scope="col"><div align="left"><span class="style26">0-5559-9100</span></div></th>
                <th class="style26" scope="col"><div align="left" class="style11">
                        <div align="center"><span class="style26 style11"></span></div>
                    </div>
                    <div align="center"> 0-5559-9100</div></th>
            </tr>
            <tr>
                <th scope="col"><div align="left" class="style11">สสอ.วังเจ้า</div></th>
                <th class="style18" scope="col"><div align="left"><span class="style26">0-5559-3089</span></div></th>
                <th class="style26" scope="col"><div align="center">0-5555-6247</div></th>
            </tr>
            <tr>
                <th height="18" scope="col"><div align="left" class="style11">สสอ.แม่สอด</div></th>
                <th class="style18" scope="col"><div align="left"><span class="style26">0-55531890</span></div></th>
                <th class="style26" scope="col"><div align="left" class="style11"></div>
                    <div align="center">0-5553-3344</div></th>
            </tr>
            <tr>
                <th scope="col"><div align="left" class="style11">สสอ.แม่ระมาด</div></th>
                <th class="style18" scope="col"><div align="left"><span class="style26">0-5558-1241</span></div></th>
                <th class="style26" scope="col"><div align="center">0-5558-1157</div></th>
            </tr>
            <tr>
                <th scope="col"><div align="left"><span class="style11">สสอ.ท่าสองยาง</span></div></th>
                <th class="style26" scope="col"><div align="right" class="style27">
                        <div align="left">0-5558-9008,0-5558-9116</div>
                    </div></th>
                <th class="style26" scope="col"><div align="right" class="style27">
                        <div align="center">0-5558-9008</div>
                    </div></th>
            </tr>
            <tr>
                <th height="7" scope="col"><div align="left"><span class="style11">สสอ.พบพระ</span></div></th>
                <th class="style26" scope="col"><div align="left">0-5552-0351,0-5552-0357</div></th>
                <th class="style26" scope="col"><div align="center">0-5552-0351</div></th>
            </tr>
            <tr>
                <th scope="col"><div align="left"><span class="style11">สสอ.อุ้มผาง</span></div></th>
                <th class="style26" scope="col"><div align="left">0-5556-1000</div></th>
                <th class="style26" scope="col"><div align="center">0-5556-1000</div></th>
            </tr>
        </table>

    
        <b>หมายเลขโทรศัพท์โรงพยาบาล</b><br/><br/>
        <table class="table table-bordered" width="100%">
            <tr>
                <th width="20%" bordercolor="1" scope="col"><div align="left"><span class="style30">โรงพยาบาล</span></div></th>
                <th width="62%" class="style18" scope="col"><div align="right" class="style291">
                        <div align="left">โทรศัพท์</div>
                    </div></th>
                <th width="18%" scope="col"><div align="left"></div>
                    <div align="center"><span class="style30">โทรสาร</span></div></th>
            </tr>
            <tr>
                <th valign="top" bordercolor="1" scope="col"><div align="left" class="style11">รพ.ตสม.</div></th>
                <th class="style18" scope="col"><div align="left" class="style26">0-5551-1024,0-5551-3983-4</div></th>
                <th class="style26" scope="col"><div align="center">0-5551-3037</div></th>
            </tr>
            <tr>
                <th valign="top" bordercolor="1" scope="col"><div align="left" class="style11">รพ.แม่สอด</div></th>
                <th bordercolor="1" scope="col"><div align="left" class="style11">
                        <div align="left"><span class="style26">0-5553-1224,0-5553-1229,0-5558-1990,0-5553-6633-6</span></div>
                    </div></th>
                <th colspan="2" class="style26" scope="col"><div align="center">0-5553-3046</div></th>
            </tr>
            <tr>
                <th scope="col"><div align="left" class="style11">รพ.บ้านตาก</div></th>
                <th class="style18" scope="col"><div align="left"><span class="style26">0-5559-1023,0-5554-8066,0-5559-1435-6</span></div></th>
                <th class="style26" scope="col"><div align="center">0-5559-1023</div></th>
            </tr>
            <tr>
                <th height="18" scope="col"><div align="left" class="style11">รพ.สามเงา</div></th>
                <th class="style18" scope="col"><div align="left"><span class="style26">0-5559-9072,0-5554-9257-8</span></div></th>
                <th class="style26" scope="col"><div align="left" class="style11"></div>
                    <div align="center">0-5559-9072</div></th>
            </tr>
            <tr>
                <th scope="col"><div align="left" class="style11">รพ.แม่ระมาด</div></th>
                <th class="style18" scope="col"><div align="left"><span class="style26">0-5558-1229,0-5558-1136</span></div></th>
                <th class="style26" scope="col"><div align="center">0-5558-1085</div></th>
            </tr>
            <tr>
                <th scope="col"><div align="left"><span class="style11">รพ.ท่าสองยาง</span></div></th>
                <th class="style26" scope="col"><div align="right" class="style27">
                        <div align="left">0-5558-9125,0-5558-9020,0-5558-9255-6</div>
                    </div></th>
                <th class="style26" scope="col"><div align="right" class="style27">
                        <div align="center">0-5558-9009</div>
                    </div></th>
            </tr>
            <tr>
                <th height="7" scope="col"><div align="left"><span class="style11">รพ.พบพระ</span></div></th>
                <th class="style26" scope="col"><div align="left">0-5556-9023,0-5556-9211</div></th>
                <th class="style26" scope="col"><div align="center">0-5556-9117</div></th>
            </tr>
            <tr>
                <th scope="col"><div align="left"><span class="style11">รพ.อุ้มผาง</span></div></th>
                <th class="style26" scope="col"><div align="left">0-5556-1270-2,0-5556-1016</div></th>
                <th class="style26" scope="col"><div align="center">0-5556-1121</div></th>
            </tr>
        </table>
    </div>
</div>

