<?php
include_once("navigation.php");
$news=getAllPosts('news')[0];
$previews=getAllPosts('preview')[0];
include_once("navigation.php");
//var_dump($_COOKIE);
?>		<!-- second post -->
    <title> Home</title>
		<script>
		$(document).ready(function () {
			
		});
			function getNewerPost(type){
				if($("#new_news_li").hasClass("disabled") && type=="news"){
					return;
				}
				else if($("#new_preview_li").hasClass("disabled") && type=="preview"){
					return;
				}
				$.ajax({
					url: "data/get_post_ajax.php?type="+type,
					success: function (resp) {
						resp=jQuery.parseJSON(resp);
						for(i=0;i <=resp.length-1; i++){
							if(type=='news'){
								if(resp[i].id==$("#news_link").data('newsid')){		
									var new_news_index=--i; //if i do i-1 it will show a more recent news
									if(new_news_index==0){
										$("#new_news_li").addClass('disabled');
									}
									$("#news_image").attr('src',resp[new_news_index].image);
									$("#news_link").data('newsid',resp[new_news_index].id);
									$("#news_link").attr('href','?view_news='+resp[new_news_index].id);
									$("#news_title").html(resp[new_news_index].post_title);
									var news_content=resp[new_news_index].post_text;
									news_content=news_content.replace(/\n/g,"<br/>");
									news_content=news_content.substr(0, 248);
									news_content=news_content+"...";
									$("#news_content").html(news_content);
									if($("#old_news_li").hasClass("disabled")){
										$("#old_news_li").removeClass("disabled");
									}
									break;
								}
							}
							else if(type=='preview'){
								if(resp[i].id==$("#preview_link").data('previewid')){
									var new_preview_index=--i; //if i do i-1 it will show a more recent preview
									if(new_preview_index==0){
										$("#new_preview_li").addClass('disabled');
									}
									$("#preview_image").attr('src',resp[new_preview_index].image);
									$("#preview_link").data('previewid',resp[new_preview_index].id);
									$("#preview_link").attr('href','?view_news='+resp[new_preview_index].id);
									$("#preview_title").html(resp[new_preview_index].post_title);
									var preview_content=resp[new_preview_index].post_text;
									preview_content=preview_content.replace(/\n/g,"<br/>");
									preview_content=preview_content.substr(0, 248);
									preview_content=preview_content+"...";
									$("#preview_content").html(preview_content);
									if($("#old_preview_li").hasClass("disabled")){
										$("#old_preview_li").removeClass("disabled");
									}
									break;
								}
							}
						}
					},
					error: function (resp) {
						alert("Error");
					}
				});
			}
			function getOlderPost(type){
				if($("#old_news_li").hasClass("disabled") && type=="news"){
					return;
				}
				else if($("#old_preview_li").hasClass("disabled") && type=="preview"){
					return;
				}
				$.ajax({
					url: "data/get_post_ajax.php?type="+type,
					success: function (resp) {
						resp=jQuery.parseJSON(resp);
						for(i=0;i <=resp.length-1; i++){
							if(type=='news'){
								if(resp[i].id==$("#news_link").data('newsid')){
									var new_news_index=++i; //if i do i-1 it will show a more recent news
									if(new_news_index==resp.length-1){
										$("#old_news_li").addClass('disabled');
									}
									$("#news_image").attr('src',resp[new_news_index].image);
									$("#news_link").data('newsid',resp[new_news_index].id);
									$("#news_link").attr('href','?view_news='+resp[new_news_index].id);
									$("#news_title").html(resp[new_news_index].post_title);
									var news_content=resp[new_news_index].post_text;
									news_content=news_content.replace(/\n/g,"<br/>");
									news_content=news_content.substr(0, 248);
									news_content=news_content+"...";
									$("#news_content").html(news_content);
									if($("#new_news_li").hasClass("disabled")){
										$("#new_news_li").removeClass("disabled");
									}
									break;
								}
							}
							else if(type=='preview'){
								if(resp[i].id==$("#preview_link").data('previewid')){
									var new_preview_index=++i; //if i do i-1 it will show a more recent preview
									if(new_preview_index==resp.length-1){
										$("#old_preview_li").addClass('disabled');
									}
									$("#preview_image").attr('src',resp[new_preview_index].image);
									$("#preview_link").data('previewid',resp[new_preview_index].id);
									$("#preview_link").attr('href','?view_news='+resp[new_preview_index].id);
									$("#preview_title").html(resp[new_preview_index].post_title);
									var preview_content=resp[new_preview_index].post_text;
									preview_content=preview_content.replace(/\n/g,"<br/>");
									preview_content=preview_content.substr(0, 248);
									preview_content=preview_content+"...";
									$("#preview_content").html(preview_content);
									if($("#new_preview_li").hasClass("disabled")){
										$("#new_preview_li").removeClass("disabled");
									}
									break;
								}
							}
						}
					},
				error: function (resp) {
					alert("Error");
				}
			});
				
			}
		</script>
                <h1 class="page-header">
					<a href="<?= ROOT ?>/?product_news">News</a>
                </h1>

                <!-- First Blog Post -->

            <!-- <div class="row"> -->
            <div class="well well-lg">
            <div class="row">
			
            <div class="col-md-3">
                <img id="news_image" class="img-responsive img-rounded" style="height: 150px;" src="<?=$news['image']?>" alt="">
            </div>
            <!-- /.col-md-8 -->
            <div class="col-md-9">
                <a id="news_link" data-newsid="<?=$news['id']?>" href="?view_news=<?=$news['id']?>"  style="color:black; text-decoration:none;"><h3 id="news_title"><?=$news['post_title']?></h3>
                <p id="news_content"><?=$news['part']?>...</p>
                </a><!-- <a class="btn btn-primary btn-sm" href="#">Call to Action!</a> -->
            </div>

					<!-- Rating anc views 
					<div class="ratings">
										<p class="pull-right">12 reviews</p>
										<p>
											<span class="glyphicon glyphicon-star"></span>
											<span class="glyphicon glyphicon-star"></span>
											<span class="glyphicon glyphicon-star"></span>
											<span class="glyphicon glyphicon-star"></span>
											<span class="glyphicon glyphicon-star-empty"></span>
										</p>
									</div>
					-->
            </div>
            </div>
            <!-- /.col-md-4 -->
        <!-- </div> -->
        <!-- /.row -->
       <!--  <hr> -->

                <!-- Third Blog Post -->


                <!-- Pager -->
                <ul class="pager">
                    <li id="old_news_li" class="previous">
                        <a  id="old_news_link" onclick="getOlderPost('news')" style="cursor: pointer;">&larr; Older</a>
                    </li>
                    <li id="new_news_li" class="next disabled">
                        <a id="new_news_link" onclick="getNewerPost('news')" style="cursor: pointer;" >Newer &rarr;</a>
                    </li>
                </ul>


		<!-- second post -->
		
                <h1 class="page-header">
                    <a href="<?= ROOT ?>/?product_previews">Previews</a>
                </h1>

                <!-- First Blog Post -->

            <!-- <div class="row"> -->
            <div class="well well-lg">
            <div class="row">
            <div class="col-md-3">
                <img id="preview_image" class="img-responsive img-rounded" style="height: 150px;" src="<?=$previews['image']?>" alt="">
            </div>
            <!-- /.col-md-8 -->
            <div class="col-md-9">
                <a id="preview_link" data-previewid="<?=$previews['id']?>" href="<?= ROOT ?>/?view_news=<?=$previews['id']?>"  style="color:black; text-decoration:none;"><h3 id="preview_title"><?=$previews['post_title']?></h3>
                <p id="preview_content"><?=$previews['part']?>...</p>
                </a> <!-- <a class="btn btn-primary btn-sm" href="#">Call to Action!</a> -->
            </div>

            </div>
            </div>


                <!-- Pager -->
                <ul class="pager">
                    <li id="old_preview_li" class="previous">
                        <a onclick="getOlderPost('preview')" style="cursor: pointer;">&larr; Older</a>
                    </li>
                    <li id="new_preview_li" class="next disabled">
                        <a onclick="getNewerPost('preview')" style="cursor: pointer;">Newer &rarr;</a>
                    </li>
                </ul>
				
				
				


				
<?php
	include_once("right_panel.php");
	include_once("footer.php");
?>	
				
			