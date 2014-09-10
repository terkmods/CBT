<div class="col-md-5 pull-right">
                            <ul class="top-ul">
                                <li><a href="<?php echo base_url()?>reg">Already a member?</a></li>
                                <li><a role="button" data-toggle="modal" data-target="#myModal">Sign in</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                                
                            <?php
                            echo'<font color=red>';
                            echo $this->session->flashdata('msg_error');
                            echo '</font>'
                            ?>
                        </div>