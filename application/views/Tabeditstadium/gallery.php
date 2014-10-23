<div class="tab-pane" id="p6">
    <form id="uploadja"  method="post" enctype="multipart/form-data" action="<?= base_url() ?>stadium/uploadGallery/<?= $this->uri->segment(3) ?>">
        <input id="input-id" type="file" class="file"   name="userfile" required="">

    </form>

    


    <div class="row">
        
            <div class="col-xs-6 col-md-12 ">
                <div class="btn-group">
                <?php foreach ($img as $i) { ?>
                <a href="#">
                    <img src="<?=base_url()?>asset/images/upload/<?= $i->picstadium_path ?>"  class="btn" style="height :180px" >
                </a>
                <?php } ?>
                </div>
            </div>

        
    </div>
</div>


