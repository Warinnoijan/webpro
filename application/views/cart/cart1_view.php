<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แสดงรายละเอียดการเลือกสินค้า</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="confirm_select">
                    <h1>แสดงรายละเอียดการเลือกสินค้า</h1>
                    <hr class="style1">
                    <table class="table_confirm_select">
                        <thead>
                            <tr>
                                <th>รหัสสินค้า</th>
                                <th>รูปสินค้า</th>
                                <th>ประเภท</th>
                                <th>ชื่อสินค้า</th>
                                <th>ราคา</th>
                            </tr>
                        </thead>
                        <tbody class="content_confirm_select">
                            <?php foreach ($query as $rs) { ?>
                                <tr class="frist_row">
                                    <td style="width: 20px;"> <?php echo $rs->p_id; ?> </td>
                                    <td>
                                        <img src="<?php echo base_url('img'); ?>/<?php echo $rs->p_img; ?>" width="50px">
                                    </td>
                                    <td> <?php echo $rs->p_type; ?> </td>
                                    <td> <?php echo $rs->p_name; ?> </td>
                                    <td> <?php echo $rs->p_price; ?> </td>
                                </tr>
                                <tr class="second_row">
                                    <td colspan="2"><a href="<?php echo site_url('home/index') ?>" class="back_home"><i class="fa fa-chevron-left" aria-hidden="true"></i> กลับหน้าแรก</a></td>
                                    <td colspan="3"><a href="<?php echo site_url('cart/show_data/') . $rs->p_id; ?>" class="confirm">ยืนยันการเลือกสินค้า <i class="fa fa-chevron-right" aria-hidden="true"></i></a></td>

                                </tr>

                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>