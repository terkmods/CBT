 <?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<?php
include 'template/head.php';
$num = 1;
//print_r($data);
?>

<div class="container">
    <h4> <a href="#"></a> Manage Stadium <font style="color: green"><?php echo $this->session->flashdata('msg'); ?></font></h4> 
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">Account Settings </div>
            <div class="panel-body">

                <!--
                    <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Link</label>
                    <div class="col-sm-4 badge">
                      http://www.cbtonline.com/terkmods
                    </div>
                  </div>
                  <div style="clear:both; margin-top:20px;"></div>
                
                    <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-4">
                      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                    </div>
                  </div>
                  <div style="clear:both; margin-top:20px;"></div>
                
                   <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Password</label>
                    <div class="col-sm-4">
                      <input type="password" class="form-control" id="inputEmail3" placeholder="Password">
                    </div>
                  </div>
                    <div style="clear:both; margin-top:20px;"></div>
                
                   <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Language</label>
                    <div class="form-group">
                    <select class="col-sm-4">
                  <option>Thailand</option>
                  <option>English</option>
                </select></div>
                  </div>
                -->


                <div class="container">


                        <?php include 'template/sideSetting.php'; ?>
                    <div class="col-md-9">
                        <div class="row" id="changeja">
                            <ul class="nav nav-tabs" id="myTab">

                                <li class="active"><a href="#p1">Basic Info</a></li>
                                <li ><a href="#addcourt">Add court</a></li>
                               
                                <li><a href="#p2">Add coach</a></li>
                                <li><a href="#p3">Blacklist</a></li>
                                <li><a href="#p4">announcement</a></li>
                                <li><a href="#p5">Add picture</a></li>
                                
                            </ul>
                            <div class="tab-content"  >
                                
                                <?php include 'Tabeditstadium/setting.php'; ?> <!--tab P1-->
                                <?php include 'Tabeditstadium/blacklist.php'; ?> <!--tab P2-->
                                 <?php include 'Tabeditstadium/coachfav.php'; ?> <!--tab P3-->
                                 <?php include 'Tabeditstadium/addcourt.php'; ?> <!--tab P3-->
                                 <?php include 'Tabeditstadium/mycourt.php'; ?> <!--tab P3-->
                                   <?php include 'Tabeditstadium/rule.php'; ?> <!--tab P3-->
                            </div>

                            <div style="clear:both; margin-top:20px;"></div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'template/modal.php'; ?>

<?php include 'template/footer.php'; ?>
<script>
    var states ;
    function keynaja() {
    var fullpart = "http://cbt.backeyefinder.in.th/coach/get_coach_name" ;
       var a = document.getElementById("test").value;
        console.log(a);
        $.ajax({
                type: "post",
                url: fullpart,
                data: {term: a}
            }).done(function (msg) {
                states = null
                console.log(msg);
                states=  msg;
                console.log(msg[0].name);
            });
        }

$(document).ready(function(){
  
var substringMatcher = function(strs) {
  return function findMatches(q, cb) {
    var matches, substrRegex;
 
    // an array that will be populated with substring matches
    matches = [];
 
    // regex used to determine if a string contains the substring `q`
    substrRegex = new RegExp(q, 'i');
 
    // iterate through the pool of strings and for any string that
    // contains the substring `q`, add it to the `matches` array
    $.each(strs, function(i, str) {
      if (substrRegex.test(str)) {
        // the typeahead jQuery plugin expects suggestions to a
        // JavaScript object, refer to typeahead docs for more info
        matches.push({ value: str });
      }
    });
 
    cb(matches);
  };
};

//    

$('#the-basics .typeahead').typeahead({
  hint: true,
  highlight: true,
  minLength: 1
},
{
  name: 'statess',
  displayKey: 'value',
  source: substringMatcher(statess)
  });
});
    </script>
<?php include 'template/footer_scrpit.php'; ?>

</body>
</html>