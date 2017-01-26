<style type="text/css">
    #thumbnail{
        border: none;
    }
</style>
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

    <div class="row">
        <center>
            <div class="col-sm-4 col-md-4"></div>
            <div class="col-sm-4 col-md-4">
                <div class="thumbnail" id="thumbnail">
                    <img src="<?php echo base_url() ?>images/_ssj.jpg" class="thumbnail"/>
                    <div class="caption">
                        <h3>นายพูลลาภ ฉันทวิจิตรวงศ์</h3>
                        <p>นายแพทย์ สสจ.ตาก</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-md-4"></div>
        </center>
    </div> 


    <div class="row">
        <center>
            <div class="col-sm-4 col-md-4 col-lg-4">
                <div class="thumbnail" id="thumbnail">
                    <div class="caption">
                        <img src="<?php echo base_url() ?>images/wor.jpg" class="thumbnail"/>
                        <h3>นายปองพล วรปาณิ</h3>
                        <p>
                            นายแพทย์ เชี่ยวชาญ(ด้านเวชกรรมป้องกัน)
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4">
                <div class="thumbnail" id="thumbnail">
                    <img src="<?php echo base_url() ?>images/hin.jpg" class="thumbnail"/>
                    <div class="caption">
                        <h3>นายหิน สิทธิกัน</h3>
                        <p>
                            นักวิชาการสาธารณสุข
                            ชำนาญการพิเศษ
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4">
                <div class="thumbnail" id="thumbnail">
                    <img src="<?php echo base_url() ?>images/nod.jpg" class="thumbnail"/>
                    <div class="caption">
                        <h3>นายสุพร กาวินำ</h3>
                        <p>
                            นักวิชาการสาธารณสุข
                            ชำนาญการพิเศษ
                            รักษาการแทนในตำแหน่ง
                            นักวิชาการสาธารณสุข เชี่ยวชาญ
                            (ด้านส่งเสริมพัฒนา)
                        </p>
                    </div>
                </div>
            </div>
    </div>
</center>
</div>