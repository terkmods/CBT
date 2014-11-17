
<div class="col-md-5 pull-right">
    <ul class="top-ul">
        <li><a href="<?php echo base_url() ?>home">Home</a></li>
        <li><a href="<?php echo base_url() ?>users/profile/<?php echo $this->session->userdata('id'); ?>"><?php echo $this->session->userdata('profile_url'); ?></a></li>
    
        <li><a href="http://cbt.backeyefinder.in.th/index.php/users/logout">logout</a></li>


    </ul>


</div>