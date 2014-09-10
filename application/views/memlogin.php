
<div class="col-md-5 pull-right">
    <ul class="top-ul">
        <li><a href="<?php echo base_url() ?>users/feed">Home</a></li>
        <li><a ><?php echo $this->session->userdata('profile_url'); ?></a></li>
    
        <li><a href="http://cbt.backeyefinder.in.th/index.php/users/logout">logout</a></li>

        <li ><a><img class="img-circle" src="<?php echo $this->session->userdata('path_pic'); ?>" width="30" alt=""></a></li>

    </ul>


</div>