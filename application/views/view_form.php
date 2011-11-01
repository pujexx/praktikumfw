<?php echo form_open("home/terima");?>
<?php echo "NIM : ".form_input("nim");?>
<br>
<?php echo "NAMA : ".form_input("nama");?>
<br>
<?php echo "Alamat : ".form_textarea("alamat");?>
<br>
<?php echo form_submit("submit","simpan");?>
<?php echo form_close();?>