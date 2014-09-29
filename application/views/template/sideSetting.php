<?php $type = $this->uri->segment(1) ?>
<?php $type2 = $this->uri->segment(2) ?>    
<?php $type3 = $this->uri->segment(3) ?>    
<div class="col-md-3">
    <ul class="nav nav-pills nav-stacked">
        <?php if($this->session->userdata('role') == "owner"){ ?>
        <li <?php if($type == "users" ){?><?="class = 'active'"; }?> ><a href="<?php echo base_url() ?>users/edituser/<?php echo $this->session->userdata('id'); ?>">Basic Setting</a></li>
        <li <?php if($type == "stadium" ){?><?="class = 'active'"; }?> >
            <a href="<?= base_url() ?>stadium">Manage stadium </a>           
        </li>
      
        <li <?php if($type2 == "historyBooking" ){?><?="class = 'active'"; }?> ><a href="<?= base_url() ?>stadium/historyBooking">History Booking stadium </a></li>
        <?php }else{?>
        <li <?php if($type == "users" ){?><?="class = 'active'"; }?> ><a href="<?php echo base_url() ?>users/edituser/<?php echo $this->session->userdata('id'); ?>">Basic Setting</a></li>
        <li <?php if($type == "booking" ){?><?="class = 'active'"; }?>><a href="<?= base_url() ?>booking/historybooking">History Reserve</a></li>
        <?php }?>
    </ul>                            
</div>