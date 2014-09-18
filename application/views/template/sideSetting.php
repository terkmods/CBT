<?php $type = $this->uri->segment(1) ?>
    
<div class="col-md-3">
    <ul class="nav nav-pills nav-stacked">
        <?php if($this->session->userdata('role') == "owner"){ ?>
        <li <?php if($type == "users" ){?><?="class = 'active'"; }?> ><a href="<?php echo base_url() ?>users/edituser/<?php echo $this->session->userdata('id'); ?>">Basic Setting</a></li>
        <li <?php if($type == "stadium" ){?><?="class = 'active'"; }?> ><a href="<?= base_url() ?>stadium">Manage stadium </a></li>
        <li><a href="hsre.html">History Reserve</a></li>
        <?php }else{?>
        <li <?php if($type == "users" ){?><?="class = 'active'"; }?> ><a href="<?php echo base_url() ?>users/edituser/<?php echo $this->session->userdata('id'); ?>">Basic Setting</a></li>
        <li><a href="hsre.html">History Reserve</a></li>
        <?php }?>
    </ul>                            
</div>