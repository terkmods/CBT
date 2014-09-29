<div class="tab-pane" id="p2"> <!-- Start tab 2 -->
    <div class="col-md-6 col-md-offset-3">
        <form class="navbar-form navbar-left" role="search">
            <div class="form-group " id="the-basics">
                <input type="text" class="form-control typeahead ja" placeholder="Search" id="test" onkeyup="keynaja()"  >
                
                <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
            </div>

        </form>
    </div>
    <div class="row text-center">
        <?php foreach ($coach as $r) { ?>


 }
        <div class="col-lg-4">
            <a href="coach.html"> <img class="img-circle" data-src="holder.js/140x140" alt="140x140" src="images/coach.jpg" style="width: 140px; height: 140px;"></a>
            <h2><?=$r->fname?>  <?=$r->lname?></h2>


            <p><a class="btn btn-default" href="#" role="button">Stadium coach <span class="glyphicon glyphicon-ok"></span></a></p>
        </div><!-- /.col-lg-4 -->
        <?php }?>
       
    </div>




</div><!-- end Tab2-->