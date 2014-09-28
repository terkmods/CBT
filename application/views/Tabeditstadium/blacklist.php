<div class="tab-pane" id="p3"> <!-- Start tab 3 -->
    <div class="col-md-12">
        <div style="margin: 20px 10px 10px 0px">
            <form class="navbar-form navbar-left" role="search">
                <div class="form-group ">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
                <a href="#" class="btn btn-success" role="button" >Add Blacklist</a>
            </form>



        </div>
        <table class="table tablecompare">
            <thead>
                <tr>
                    <th>Picture</th>
                    <th>Name</th>
                    <th>profile URL</th>
                    <th>Reason</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($blacklist as $b) {?>
                <tr>
                    <td><img class="img-circle" data-src="holder.js/140x140" alt="140x140" src="<?=  base_url()?>asset/images/profilepic/<?=$b->profilepic_path?>" style="width: 100px; height: 100px;"></td>
                    <td><?=$b->fname?></td>
                    <td><a href="<?=  base_url()?>/users/profile/<?=$b->user_id?>">www.cbtonline.in.th/<?=$b->profile_url?></a></td>
                    <td><?=$b->reason?></td>
                    <td><a href="#" class="btn btn-danger" role="button" >Unblacklist</a></td>
                </tr>
                <?php } ?>
                
            </tbody>
        </table>
    </div>
</div>
