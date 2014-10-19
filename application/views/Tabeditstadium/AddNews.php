<div class="tab-pane" id="p7">
        <div class="content" id="news_content" style="padding-top:0;padding-bottom:0">
        <div class="title"><center>ข่าว</center></div>
    <div class="row" >
            <div class="span10 offset1" style="margin-top:20px;margin-bottom:20px">
                <table class="table" style="margin-bottom:0" id="news-table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>หัวข้อ</th>
                            <th>วัน/เวลาที่ลง</th>
                        </tr>
                    </thead>
                    <tbody id="news-list">
                        <?php
                        $i = 1;
                        foreach ($all_news as $news) {
                            echo '<tr data-id="' . $news->id . '">';
                            echo '<td>' . $i++ . '</td>';
                            echo '<td>' . $news->title . '</td>';
                            echo '<td>' . $news->timestamp . '</td>';
                            echo '</tr>';
                        }

                        if (count($all_news) == 0) {
                            echo '<tr>';
                            echo '<td style="text-align: center; color: red" colspan="5">(ยังไม่มีข่าว)</td>';
                            echo '</tr>';
                        }
                        ?>


                    </tbody>
                </table>
                <center id="loading" class="hide"><i class="icon-spinner icon-spin icon-4x"></i></center>
                <div class="row">
                    <!--<div class="span1 offset4">
                    <?php
                    if ($count_news > 10) {
                        echo '<button onclick="appendNews()" class="btn btn-main">ดูเพิ่ม</button>';
                    }
                    ?>
                </div>-->
                    <div class="span6 offset2" style="text-align: center">
                        <button class="btn  btn-main" onclick="showAddForm()"  > เพิ่มข่าว</button>
                    </div>
                </div>

            </div>
        </div>
    
    
    
    <div class="row" id="addForm">

            <div class="span12" style="padding-bottom:0">

                <form class="form-horizontal well" style="margin-bottom:0" onSubmit="return submitNews();">
                    <div class="control-group">
                        <label class="control-label" for="news_title">หัวข้อ</label>
                        <div class="controls" >
                            <input type="text" class="span5" name="news_title" id="news_title"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="banner">แบนเนอร์</label>
                        <div class="controls">
                            <div class="input-append">
                                <button class="btn" type="button" id="banner">เลือกรูป</button>
                            </div>
                        </div>
                    </div>
                    <div class="control-group" id="ct">
                        <label class="control-label" for="caption">คำบรรยายใต้ภาพ</label>
                        <div class="controls">
                            <div class="input-append">
                                <input type="text" class="span5" name="caption" id="caption"/>
                            </div>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="news_content">เนื้อหา</label>
                        <div class="controls" >
                            <textarea rows="12" name="news_content" class="span7" id="em1"></textarea>
                        </div>
                    </div>   
                    <div class="control-group">
                        <div class="controls" id="addNews" >
                            <input type="submit" class="btn btn-main span3"  value="เพิ่ม!">
                        </div> 
                    </div>
                    <!--<input type="hidden" name="member_id" id="member_id" value="<?php echo $user_id; ?>" />-->
                </form> 
            </div>
        </div>
        </div>
</div>