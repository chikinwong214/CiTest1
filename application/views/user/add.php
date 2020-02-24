<body>
<form action="<?php echo site_url('user/insert');?>" method="post">
    Name <input type="text" name="name" value="<?php echo set_value('name')?>" />
    <?php echo form_error('name','<span>','</span>'); ?>
    <br>
    Password <input type="password" name="password"/><br>
    Email <input type="text" name="email" value="<?php echo set_value('email')?>" />
    <?php echo form_error('email','<span>','</span>'); ?>
    <br>
    <input type="submit" value="submit" /><br>
</form>
<img src="<?php echo base_url();?>uploads/jh.jpg" alt="" width="200">
</body>
