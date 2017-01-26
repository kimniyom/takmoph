<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <style type="text/css">
            .t_box{ width:97%;}
        </style>
        <script type="text/javascript">
            $(document).ready(function ( ) {

                var url = "<?= site_url('menager_menu/get_icon') ?>";
                var icon_id = $("#icon").val();
                var data = {icon_id: icon_id};
                $.post(url, data,
                        function (success) {
                            $("#icon_show").html(success);
                        });//endpost

                $("#_icon_id").change(function () {
                    var url = "<?php echo site_url('menager_menu/get_icon'); ?>";
                    var icon_id = $(this).val();
                    var data = {icon_id: icon_id};
                    $.post(url, data,
                            function (success) {
                                $("#icon_show").html(success);
                            });//endpost
                });

                $("#save_edit").click(function () {
                    //alert("1234");
                    var url = "<?= site_url('menager_menu/save_edit_menu') ?>";
                    var mas_id = $("#_mas_id").val();
                    var mas_menu = $("#_mas_menu").val();
                    var color = $("#_color").val();
                    var icon_id = $("#_icon_id").val();
                    var _link = $("#_page").val();

                    var data = {mas_id: mas_id, mas_menu: mas_menu, color: color, _link: _link, icon_id: icon_id};

                    $.post(url, data,
                            function (success) {
                                window.location.reload();
                            });// Endpost
                });
            });
        </script>

    </head>

    <body>
        <div class="well">
            <input type="hidden" id="icon" value="<?= $mas_menu->icon_id ?>" readonly="readonly" class="form-control input-sm"/>
            <div class="form-group">
                <label>รหัส : </label>
                <input type="text" id="_mas_id" value="<?= $mas_menu->id ?>" readonly="readonly" class="form-control input-sm"/>
            </div>
            <div class="form-group">
                <label>เมนู :</label>
                <input type="text" id="_mas_menu" value="<?= $mas_menu->mas_menu ?>" class="form-control input-sm"/>
            </div>

            <div class="form-group">
                <label>ไอคอน :</label>
                <div class="row">
                    <div class=" col-lg-9 col-sm-9 col-md-9">
                        <select id="_icon_id" class="form-control" name="_icon_id" style=" padding: 5px;">
                            <?php foreach ($icon->result() as $rs): ?>
                                <option value="<?= $rs->icon_id ?>" 
                                        <?php if ($mas_menu->icon_id == $rs->icon_id) { ?> selected="selected" <?php } ?>>
                                    <img src="<?= base_url() ?>icon_menu/<?= $rs->icon ?>"/><?= $rs->icon ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class=" col-lg-3 col-sm-3 col-md-3">
                        <div class="btn btn-default" id="icon_show" style="margin-bottom:0px;"></div>
                    </div>
                </div>
            </div>

            <?php
            $color = array("s", "g", "b", "o", "r");
            $color_var = array("เทา", "เขียว", "น้ำเงิน", "ส้ม", "แดง");
            ?>
            <div class="form-group">
                <label>สีเมนู :</label>
                <select id="_color" class="form-control input-sm">
                    <?php for ($i = 0; $i <= 4; $i++): ?>
                        <option value="<?= $color[$i] ?>" 
                                <?php if ($mas_menu->menu_color == $color[$i]) { ?> selected="selected" <?php } ?>><?= $color_var[$i] ?>
                        </option>
                    <?php endfor; ?>
                </select>
            </div>

            <?php if ($mas_menu->mas_status == '0') { ?>
                <div class="form-group">
                    <label>ลิงค์ :</label>
                    <input type="text" id="_page" value="<?= $mas_menu->link ?>" class="form-control input-sm"/>
                </div>  
            <?php } ?>
        </div>
    </body>
</html>