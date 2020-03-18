<?php
$username = 'Eko';
$password = '12345';
$domian = 'http://carbus.co.id';
$img = 'https://thrubus.co.id/images/thrubus.png';
?>
<div class="new-user-password">
    <table style="width:100%;max-width: 768px;padding: 25px; margin: 0 auto; font-family:'Open Sans', 'Helvetica', 'Arial';border-style: solid;border-width: thin;border-color: #dadce0;border-radius: 8px;padding: 40px 20px;">

        <tr>
            <td style="font-size:13px;color:#282828;font-weight:normal;text-align:left;font-family:'Open Sans',sans-serif;line-height:24px;vertical-align:top;padding:15px 8px 10px 8px" bgcolor="#ffffff">
                <img src="<?php echo $img ?>" style="margin-bottom: 16px;margin: 0 auto;display: block;" />
                <p style="margin: 0; padding: 0;">Hi <?php echo $username ?>,</p>
                <p style="margin: 0; padding: 0;"> Terima kasih untuk membuat account di Thrubus.</p> 
                <p style="margin: 0; padding: 0;"> Nama pengguna Anda adalah <b><?php echo $username ?></b>.</p> 
                <p style="margin: 0; padding: 0;"> Password Anda adalah <b><?php echo $password ?></b>.</p> 
                <p style="margin: 0; padding: 0;">Anda dapat mengakses daerah akun Anda ke tampilan perintah, mengubah password Anda, dan lebih banyak di: 
                &nbsp;<a href="<?php echo $domian ?>"><?php echo $domian ?></a>&nbsp; Kami berharap dapat melihat Anda segera.</p>
            </td>
        </tr>

        <tr>
            <td style="font-family:'Open Sans',sans-serif;font-size:13px;padding:0px 10px 0px 10px;text-align:left">
                <p style="margin: 0;padding: 0">Jika Anda membutuhkan bantuan tambahan, atau Anda tidak membuat perubahan ini, silahkan hubungi <a href="mailto:help@thrubus.co.id" style="color:#ff6c37;text-decoration:none;font-weight:bold" target="_blank">help@thrubus.co.id</a>.</p>
                <p style="margin: 0;padding: 0">Tepuk tangan,<br>Tim Thrubus</p>
            </td>
        </tr>

    </table>
</div>