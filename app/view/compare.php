<?php
include_once("navigation.php");
?>
<title>Compare</title>
<style>
th, td {
	vertical-align: bottom;
}
</style>

			<style>
			
			 #ajax_compare_result1 :hover{
				 background-color:lightgray;
			}
			 #ajax_compare_result2 :hover{
				 background-color:lightgray;
			}

				</style>
					<script>
					$(document).ready(function () {
						var searchkey='<?php echo $searchKey;?>';
						if(searchkey>1){
							populate1stproduct(searchkey);
						}
					});
					function populate1stproduct(id){
						$('#better1').html('');
						$('#better2').html('');
						$('#ajax_compare_result1').html('');
						$('#compare_search-bar1').val('');
						$.getJSON('data/get_product_by_id.php?searchkey='+id,function(data){
							$('#phone_name1').html(data[0].name);
							$('#image1').attr('src',data[0].image);
							var g;
							if(data[0].g2==1)g='2G';
							if(data[0].g3==1)g='2G, 3G';
							if(data[0].g4==1)g='2G, 3G, 4G';
							$('#network_technology1').html(g);//bepar
							var nt2=$('#network_technology2').html();
							if(nt2==''){
							}
							else{
								if(g.length>nt2.length){
									$('#network_technology1').removeClass();
									$('#network_technology2').removeClass();
									$('#network_technology1').addClass('progress-bar progress-bar-success');
									$('#network_technology2').addClass('progress-bar progress-bar-warning');
									
								}
								else if(g.length==nt2.length){
									$('#network_technology1').removeClass();
									$('#network_technology2').removeClass();
									$('#network_technology1').addClass('progress-bar progress-bar-info');
									$('#network_technology2').addClass('progress-bar progress-bar-info');
								}
								else {
									$('#network_technology1').removeClass();
									$('#network_technology2').removeClass();
									$('#network_technology1').addClass('progress-bar progress-bar-warning');
									$('#network_technology2').addClass('progress-bar progress-bar-success');
								}
							}
							$('#dimension1').html(data[0].dim);
							$('#weight1').html(data[0].weight+' g');//g
							var wt1=$('#weight1').html();
							var wt2=$('#weight2').html();
							if(wt2==''){
							}
							else{
								if(wt1>wt2){
									$('#weight1').removeClass();
									$('#weight2').removeClass();
									$('#weight1').addClass('progress-bar progress-bar-warning');
									$('#weight2').addClass('progress-bar progress-bar-success');
									$('#better2').append('This is Lighter. </br>');
								}
								else if(wt1==wt2){
									$('#weight1').removeClass();
									$('#weight2').removeClass();
									$('#weight1').addClass('progress-bar progress-bar-info');
									$('#weight2').addClass('progress-bar progress-bar-info');
								}
								else {
									$('#weight1').removeClass();
									$('#weight2').removeClass();
									$('#weight1').addClass('progress-bar progress-bar-success');
									$('#weight2').addClass('progress-bar progress-bar-warning');
									$('#better1').append('This is Lighter. </br>');
								}
							}
							$('#display_type1').html(data[0].disp_type);
							$('#display_size1').html(data[0].size+' inch');
							$('#resolution1').html(data[0].resolution+'p');//g
							var res1=$('#resolution1').html();
							var res2=$('#resolution2').html();
							if(res2==''){
							}
							else{
								if(res1>res2){
									$('#resolution1').removeClass();
									$('#resolution2').removeClass();
									$('#resolution1').addClass('progress-bar progress-bar-success');
									$('#resolution2').addClass('progress-bar progress-bar-warning');
									$('#better1').append('Has better Resolution. </br>');
								}
								else if(res1==res2){
									$('#resolution1').removeClass();
									$('#resolution2').removeClass();
									$('#resolution1').addClass('progress-bar progress-bar-info');
									$('#resolution2').addClass('progress-bar progress-bar-info');
								}
								else {
									$('#resolution1').removeClass();
									$('#resolution2').removeClass();
									$('#resolution1').addClass('progress-bar progress-bar-warning');
									$('#resolution2').addClass('progress-bar progress-bar-success');
									$('#better2').append('Has better Resolution. </br>');
								}
							}
							$('#protection1').html(data[0].protection);
							$('#os1').html(data[0].OS);
							$('#cpu1').html(data[0].CPU);//g
							$('#vrate1').html(data[0].vrate);//g
							var cpu1=$('#cpu1').html();
							var vrate1=parseInt($('#vrate1').html());
							var cpu2=$('#cpu2').html();
							var vrate2=parseInt($('#vrate2').html());
							if(cpu2==''){
							}
							else{
								if(cpu1==cpu2||vrate1==vrate2){
									$('#cpu1').removeClass();
									$('#cpu2').removeClass();
									$('#cpu1').addClass('progress-bar progress-bar-info');
									$('#cpu2').addClass('progress-bar progress-bar-info');
								}
								else if(vrate1>vrate2){
									$('#cpu1').removeClass();
									$('#cpu2').removeClass();
									$('#cpu1').addClass('progress-bar progress-bar-success');
									$('#cpu2').addClass('progress-bar progress-bar-warning');
								}
								else {
									$('#cpu1').removeClass();
									$('#cpu2').removeClass();
									$('#cpu1').addClass('progress-bar progress-bar-warning');
									$('#cpu2').addClass('progress-bar progress-bar-success');
								}
							}
							$('#gpu1').html(data[0].GPU);
							$('#rom1').html(data[0].rom+' GB');//g
							$('#rom1').data('myval',data[0].rom);
							var rom1=parseInt($('#rom1').data('myval'));
							var rom2=parseInt($('#rom2').data('myval'));
							if(isNaN(rom2)){
							}
							else{
								if(rom1 > rom2){
									$('#rom1').removeClass();
									$('#rom2').removeClass();
									$('#rom1').addClass('progress-bar progress-bar-success');
									$('#rom2').addClass('progress-bar progress-bar-warning');
									$('#better1').append('More Storage. </br>');
								}
								else if(rom1==rom2){
									$('#rom1').removeClass();
									$('#rom2').removeClass();
									$('#rom1').addClass('progress-bar progress-bar-info');
									$('#rom2').addClass('progress-bar progress-bar-info');
								}
								else {
									$('#rom1').removeClass();
									$('#rom2').removeClass();
									$('#rom1').addClass('progress-bar progress-bar-warning');
									$('#rom2').addClass('progress-bar progress-bar-success');
									$('#better2').append('More Storage. </br>')
								}
							}
							$('#ram1').html(data[0].ram+' GB');//g
							var ram1=$('#ram1').html();
							var ram2=$('#ram2').html();
							if(ram2==''){
							}
							else{
								if(ram1>ram2){
									$('#ram1').removeClass();
									$('#ram2').removeClass();
									$('#ram1').addClass('progress-bar progress-bar-success');
									$('#ram2').addClass('progress-bar progress-bar-warning');
									$('#better1').append('Has Larger Memory. </br>')
								}
								else if(ram1==ram2){
									$('#ram1').removeClass();
									$('#ram2').removeClass();
									$('#ram1').addClass('progress-bar progress-bar-info');
									$('#ram2').addClass('progress-bar progress-bar-info');
								}
								else {
									$('#ram1').removeClass();
									$('#ram2').removeClass();
									$('#ram1').addClass('progress-bar progress-bar-warning');
									$('#ram2').addClass('progress-bar progress-bar-success');
									$('#better2').append('Has Larger Memory. </br>')
								}
							}
							$('#back_camera1').html(data[0].back+' MP');//g
							var bc1=$('#back_camera1').html();
							var bc2=$('#back_camera2').html();
							if(bc2==''){
							}
							else{
								if(bc1>bc2){
									$('#back_camera1').removeClass();
									$('#back_camera2').removeClass();
									$('#back_camera1').addClass('progress-bar progress-bar-success');
									$('#back_camera2').addClass('progress-bar progress-bar-warning');
								}
								else if(bc1==bc2){
									$('#back_camera1').removeClass();
									$('#back_camera2').removeClass();
									$('#back_camera1').addClass('progress-bar progress-bar-info');
									$('#back_camera2').addClass('progress-bar progress-bar-info');
								}
								else {
									$('#back_camera1').removeClass();
									$('#back_camera2').removeClass();
									$('#back_camera1').addClass('progress-bar progress-bar-warning');
									$('#back_camera2').addClass('progress-bar progress-bar-success');
								}
							}
							$('#front_camera1').html(data[0].front+' MP');//g
							var fc1=$('#front_camera1').html();
							var fc2=$('#front_camera2').html();
							if(fc2==''){
							}
							else{
								if(fc1>fc2){
									$('#front_camera1').removeClass();
									$('#front_camera2').removeClass();
									$('#front_camera1').addClass('progress-bar progress-bar-success');
									$('#front_camera2').addClass('progress-bar progress-bar-warning');
								}
								else if(fc1==fc2){
									$('#front_camera1').removeClass();
									$('#front_camera2').removeClass();
									$('#front_camera1').addClass('progress-bar progress-bar-info');
									$('#front_camera2').addClass('progress-bar progress-bar-info');
								}
								else {
									$('#front_camera1').removeClass();
									$('#front_camera2').removeClass();
									$('#front_camera1').addClass('progress-bar progress-bar-warning');
									$('#front_camera2').addClass('progress-bar progress-bar-success');
								}
							}
							$('#battery1').html(data[0].battary+' mAh');//g
							var b1=$('#battery1').html();
							var b2=$('#battery2').html();
							if(b2==''){
							}
							else{
								if(b1>b2){
									$('#battery1').removeClass();
									$('#battery2').removeClass();
									$('#battery1').addClass('progress-bar progress-bar-success');
									$('#battery2').addClass('progress-bar progress-bar-warning');
									$('#better1').append('Has Longer Battary backup. </br>');
								}
								else if(b1==b2){
									$('#battery1').removeClass();
									$('#battery2').removeClass();
									$('#battery1').addClass('progress-bar progress-bar-info');
									$('#battery2').addClass('progress-bar progress-bar-info');
								}
								else {
									$('#battery1').removeClass();
									$('#battery2').removeClass();
									$('#battery1').addClass('progress-bar progress-bar-warning');
									$('#battery2').addClass('progress-bar progress-bar-success');
									$('#better2').append('Has Longer Battary backup. </br>');
								}
							}
							$('#battary_type1').html(data[0].b_type);
							$('#price1').html(data[0].price+' BDT');//g
							var p1=$('#price1').html();
							var p2=$('#price2').html();
							if(p2==''){
							}
							else{
								if(p1>p2){
									$('#price1').removeClass();
									$('#price2').removeClass();
									$('#price1').addClass('progress-bar progress-bar-warning');
									$('#price2').addClass('progress-bar progress-bar-success');
									$('#better2').append('This is cheaper. </br>');
								}
								else if(p1==p2){
									$('#price1').removeClass();
									$('#price2').removeClass();
									$('#price1').addClass('progress-bar progress-bar-info');
									$('#price2').addClass('progress-bar progress-bar-info');
								}
								else {
									$('#price1').removeClass();
									$('#price2').removeClass();
									$('#price1').addClass('progress-bar progress-bar-success');
									$('#price2').addClass('progress-bar progress-bar-warning');
									$('#better1').append('This is cheaper. </br>');
								}
							}
						});
					}
					function populate2ndproduct(id){
						$('#better1').html('');
						$('#better2').html('');
						$('#ajax_compare_result2').html('');
						$('#compare_search-bar2').val('');
						$.getJSON('data/get_product_by_id.php?searchkey='+id,function(data){
							$('#phone_name2').html(data[0].name);
							$('#image2').attr('src',data[0].image);
							var g;
							if(data[0].g2==1)g='2G';
							if(data[0].g3==1)g='2G, 3G';
							if(data[0].g4==1)g='2G, 3G, 4G';
							$('#network_technology2').html(g);//bepar
							var nt1=$('#network_technology1').html();
							if(nt1==''){
							}
							else{
								if(g.length>nt1.length){
									$('#network_technology1').removeClass();
									$('#network_technology2').removeClass();
									$('#network_technology2').addClass('progress-bar progress-bar-success');
									$('#network_technology1').addClass('progress-bar progress-bar-warning');
								}
								else if(g.length==nt1.length){
									$('#network_technology1').removeClass();
									$('#network_technology2').removeClass();
									$('#network_technology2').addClass('progress-bar progress-bar-info');
									$('#network_technology1').addClass('progress-bar progress-bar-info');
								}
								else {
									$('#network_technology1').removeClass();
									$('#network_technology2').removeClass();
									$('#network_technology2').addClass('progress-bar progress-bar-warning');
									$('#network_technology1').addClass('progress-bar progress-bar-success');
								}
							}
							$('#dimension2').html(data[0].dim);
							$('#weight2').html(data[0].weight+' g');
							var wt1=$('#weight1').html();
							var wt2=$('#weight2').html();
							if(wt1==''){
							}
							else{
								if(wt1<wt2){
									$('#weight1').removeClass();
									$('#weight2').removeClass();
									$('#weight2').addClass('progress-bar progress-bar-warning');
									$('#weight1').addClass('progress-bar progress-bar-success');
									$('#better1').append('This is Lighter </br>');
								}
								else if(wt1==wt2){
									$('#weight1').removeClass();
									$('#weight2').removeClass();
									$('#weight1').addClass('progress-bar progress-bar-info');
									$('#weight2').addClass('progress-bar progress-bar-info');
								}
								else {
									$('#weight1').removeClass();
									$('#weight2').removeClass();
									$('#weight2').addClass('progress-bar progress-bar-success');
									$('#weight1').addClass('progress-bar progress-bar-warning');
									$('#better2').append('This is Lighter </br>');
								}
							}
							$('#display_type2').html(data[0].disp_type);
							$('#display_size2').html(data[0].size+' inch');
							$('#resolution2').html(data[0].resolution+'p');//g
							var res1=$('#resolution1').html();
							var res2=$('#resolution2').html();
							if(res1==''){
							}
							else{
								if(res1<res2){
									$('#resolution1').removeClass();
									$('#resolution2').removeClass();
									$('#resolution2').addClass('progress-bar progress-bar-success');
									$('#resolution1').addClass('progress-bar progress-bar-warning');
									$('#better2').append('Has better resolution. </br>');
								}
								else if(res1==res2){
									$('#resolution1').removeClass();
									$('#resolution2').removeClass();
									$('#resolution1').addClass('progress-bar progress-bar-info');
									$('#resolution2').addClass('progress-bar progress-bar-info');
								}
								else {
									$('#resolution1').removeClass();
									$('#resolution2').removeClass();
									$('#resolution2').addClass('progress-bar progress-bar-warning');
									$('#resolution1').addClass('progress-bar progress-bar-success');
									$('#better1').append('Has better resolution. </br>');
								}
							}
							$('#protection2').html(data[0].protection);
							$('#os2').html(data[0].OS);
							$('#cpu2').html(data[0].CPU);//g
							$('#vrate2').html(data[0].vrate);//g
							var cpu1=$('#cpu1').html();
							var vrate1=parseInt($('#vrate1').html());
							var cpu2=$('#cpu2').html();
							var vrate2=parseInt($('#vrate2').html());
							if(cpu1==''){
							}
							else{
								if(cpu1==cpu2||vrate1==vrate2){
									$('#cpu1').removeClass();
									$('#cpu2').removeClass();
									$('#cpu2').addClass('progress-bar progress-bar-info');
									$('#cpu1').addClass('progress-bar progress-bar-info');
								}
								else if(vrate1>vrate2){
									$('#cpu1').removeClass();
									$('#cpu2').removeClass();
									$('#cpu1').addClass('progress-bar progress-bar-success');
									$('#cpu2').addClass('progress-bar progress-bar-warning');
								}
								else {
									$('#cpu1').removeClass();
									$('#cpu2').removeClass();
									$('#cpu2').addClass('progress-bar progress-bar-success');
									$('#cpu1').addClass('progress-bar progress-bar-warning');
								}
							}
							$('#gpu2').html(data[0].GPU);
							$('#rom2').html(data[0].rom+' GB');//g
							$('#rom2').data('myval',data[0].rom);
							var rom1=parseInt($('#rom1').data('myval'));
							var rom2=parseInt($('#rom2').data('myval'));
							if(isNaN(rom1)){
							}
							else{
								if(rom1 < rom2){
									$('#rom1').removeClass();
									$('#rom2').removeClass();
									$('#rom2').addClass('progress-bar progress-bar-success');
									$('#rom1').addClass('progress-bar progress-bar-warning');
									$('#better2').append('More storage. </br>');
								}
								else if(rom1==rom2){
									$('#rom1').removeClass();
									$('#rom2').removeClass();
									$('#rom1').addClass('progress-bar progress-bar-info');
									$('#rom2').addClass('progress-bar progress-bar-info');
								}
								else {
									$('#rom1').removeClass();
									$('#rom2').removeClass();
									$('#rom2').addClass('progress-bar progress-bar-warning');
									$('#rom1').addClass('progress-bar progress-bar-success');
									$('#better1').append('More Storage. </br>');
								}
							}
							$('#ram2').html(data[0].ram+' GB');//g
							var ram1=$('#ram1').html();
							var ram2=$('#ram2').html();
							if(ram1==''){
							}
							else{
								if(ram1<ram2){
									$('#ram1').removeClass();
									$('#ram2').removeClass();
									$('#ram2').addClass('progress-bar progress-bar-success');
									$('#ram1').addClass('progress-bar progress-bar-warning');
									$('#better2').append('Has Larger Memory. </br>');
								}
								else if(ram1==ram2){
									$('#ram1').removeClass();
									$('#ram2').removeClass();
									$('#ram1').addClass('progress-bar progress-bar-info');
									$('#ram2').addClass('progress-bar progress-bar-info');
								}
								else {
									$('#ram1').removeClass();
									$('#ram2').removeClass();
									$('#ram2').addClass('progress-bar progress-bar-warning');
									$('#ram1').addClass('progress-bar progress-bar-success');
									$('#better1').append('Has Larger Memory. </br>');
								}
							}
							$('#back_camera2').html(data[0].back+' MP');//g
							var bc1=$('#back_camera1').html();
							var bc2=$('#back_camera2').html();
							if(bc1==''){
							}
							else{
								if(bc1<bc2){
									$('#back_camera1').removeClass();
									$('#back_camera2').removeClass();
									$('#back_camera2').addClass('progress-bar progress-bar-success');
									$('#back_camera1').addClass('progress-bar progress-bar-warning');
								}
								else if(bc1==bc2){
									$('#back_camera1').removeClass();
									$('#back_camera2').removeClass();
									$('#back_camera1').addClass('progress-bar progress-bar-info');
									$('#back_camera2').addClass('progress-bar progress-bar-info');
								}
								else {
									$('#back_camera1').removeClass();
									$('#back_camera2').removeClass();
									$('#back_camera2').addClass('progress-bar progress-bar-warning');
									$('#back_camera1').addClass('progress-bar progress-bar-success');
								}
							}
							$('#front_camera2').html(data[0].front+' MP');//g
							var fc1=$('#front_camera1').html();
							var fc2=$('#front_camera2').html();
							if(fc1==''){
							}
							else{
								if(fc1<fc2){
									$('#front_camera1').removeClass();
									$('#front_camera2').removeClass();
									$('#front_camera2').addClass('progress-bar progress-bar-success');
									$('#front_camera1').addClass('progress-bar progress-bar-warning');
								}
								else if(fc1==fc2){
									$('#front_camera1').removeClass();
									$('#front_camera2').removeClass();
									$('#front_camera1').addClass('progress-bar progress-bar-info');
									$('#front_camera2').addClass('progress-bar progress-bar-info');
								}
								else {
									$('#front_camera1').removeClass();
									$('#front_camera2').removeClass();
									$('#front_camera2').addClass('progress-bar progress-bar-warning');
									$('#front_camera1').addClass('progress-bar progress-bar-success');
								}
							}
							$('#battery2').html(data[0].battary+' mAh');//g
							var b1=$('#battery1').html();
							var b2=$('#battery2').html();
							if(b1==''){
							}
							else{
								if(b1<b2){
									$('#battery1').removeClass();
									$('#battery2').removeClass();
									$('#battery2').addClass('progress-bar progress-bar-success');
									$('#battery1').addClass('progress-bar progress-bar-warning');
									$('#better2').append('Has Longer Battary backup. </br>');
								}
								else if(b1==b2){
									$('#battery1').removeClass();
									$('#battery2').removeClass();
									$('#battery1').addClass('progress-bar progress-bar-info');
									$('#battery2').addClass('progress-bar progress-bar-info');
								}
								else {
									$('#battery1').removeClass();
									$('#battery2').removeClass();
									$('#battery2').addClass('progress-bar progress-bar-warning');
									$('#battery1').addClass('progress-bar progress-bar-success');
									$('#better1').append('Has Longer Battary backup. </br>');
								}
							}
							$('#battary_type2').html(data[0].b_type);
							$('#price2').html(data[0].price+' BDT');//g
							var p1=$('#price1').html();
							var p2=$('#price2').html();
							if(p1==''){
							}
							else{
								if(p1<p2){
									$('#price1').removeClass();
									$('#price2').removeClass();
									$('#price2').addClass('progress-bar progress-bar-warning');
									$('#price1').addClass('progress-bar progress-bar-success');
									$('#better1').append('This is cheaper. </br>');
								}
								else if(p1==p2){
									$('#price1').removeClass();
									$('#price2').removeClass();
									$('#price1').addClass('progress-bar progress-bar-info');
									$('#price2').addClass('progress-bar progress-bar-info');
								}
								else {
									$('#price1').removeClass();
									$('#price2').removeClass();
									$('#price2').addClass('progress-bar progress-bar-success');
									$('#price1').addClass('progress-bar progress-bar-warning');
									$('#better2').append('This is cheaper. </br>');
								}
							}
						});
					}
					
						$(document).ready(function () {
							$("#compare_search-bar1").keyup(function(){
								$('#ajax_compare_result1').html('');
								var searchkey= $("#compare_search-bar1").val();
								var expression = new RegExp(searchkey,'i');
								$.getJSON('data/get_product_for_search_ajax.php?searchkey='+searchkey,function(data){
									$.each(data,function(key,value){
									if(value.name.search(expression)!=-1 && $('#ajax_compare_result1').children().length <7 && searchkey != ''){
										$('#ajax_compare_result1').append('<li class="list-group-item"><button style="display: block;border: none; background-color: Transparent;background-repeat:no-repeat;" onclick="populate1stproduct('
										+value.id+')"><img src="'+value.image+'" height="40" width="40" class="img-thumbnail"/>'
										+value.name+'</button></li>');
									}
								});
							});
						});
						$("#compare_search-bar2").keyup(function(){
								$('#ajax_compare_result2').html('');
								var searchkey= $("#compare_search-bar2").val();
								var expression = new RegExp(searchkey,'i');
								$.getJSON('data/get_product_for_search_ajax.php?searchkey='+searchkey,function(data){
									$.each(data,function(key,value){
									if(value.name.search(expression)!=-1 && $('#ajax_compare_result2').children().length <7 && searchkey != ''){
										$('#ajax_compare_result2').append('<li class="list-group-item"><button style="display: block;border: none; background-color: Transparent;background-repeat:no-repeat;" onclick="populate2ndproduct('
										+value.id+')"><img src="'+value.image+'" height="40" width="40" class="img-thumbnail"/>'
										+value.name+'</button></li>');
									}
								});
							});
						});
					});
					</script>
                <h1 class="page-header">Product compare
                </h1>
            <div class="well">
            <div class="row">
                        <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <tbody>
                                        <tr class="">
                                            <td colspan="2" ></td>
                                            <td>
											<div class="input-group" style="width:100%">
												<input id='compare_search-bar1' type="text" class="form-control" placeholder="Search..."  autocomplete="off">
												<!-- <span class="input-group-btn">
													<button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
												</span> -->
															<span id="vrate1" style="display:none" ></span>
															<span id="vrate2" style="display:none" ></span>
											</div>
											<ul class="list-group" id="ajax_compare_result1" style="position:absolute;left:226px;max-width:376px;width:255px;word-wrap: break-word;"></ul>
											</td>
											<td>
											<div class="input-group" style="width:100%">
												<input id='compare_search-bar2' type="text" class="form-control" placeholder="Search..."  autocomplete="off">
												<!-- <span class="input-group-btn">
													<button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
												</span> -->
											</div>
											<ul class="list-group" id="ajax_compare_result2" style="position:absolute;left:484px;max-width:376px;width:255px;word-wrap: break-word;"></ul>
											</td>							
                                        </tr>
                                        <tr>
                                            <td colspan="2" ></td>
                                            <th id="phone_name1" >  </th>
											<th id="phone_name2"> </th>
                                        </tr>
										

                                        <tr class="">
                                            <td colspan="2" ></td>
                                            <td>
												<img id="image1" style="height: 150px; margin-left: 50px;" src="" alt="">
											</td>
                                            <td>
												<img id="image2" style="height: 150px; margin-left: 50px;" src="" alt="">
											</td>
                                        </tr>
						 <tr>
                                            <td colspan="2" ></td>
                                            <td style='color:blue;font-weight:bold' id="better1"></td>
                                            <td style='color:blue;font-weight:bold' id="better2"></td>
                                        </tr>
                                        <tr>
                                            <th rowspan="1" width="10%"><strong>Network</strong></th>
                                            <th width="16%">Technologies</th>
                                            <td width="32%"><div class="progress">
													<div class="" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:100%" id="network_technology1"></div>
												</div></td>
                                            <td width="32%"><div class="progress">
													<div class="" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:100%" id="network_technology2"></div>
												</div></td>
                                        </tr>
										
										
                                        <tr>
                                            <th  rowspan="2">Body</th>
                                            <th >Dimension</th>
                                            <td id="dimension1"></td>
                                            <td id="dimension2"></td>
                                        </tr>
										
										<tr class="">
                                            <th>Weight</th>
                                            <td>
												<div class="progress">
													<div class="" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:100%" id="weight1"></div>
												</div>
											</td>
                                            <td>
												<div class="progress">
													<div class="" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:100%" id="weight2"></div>
												</div>
											</td>
                                        </tr>										
										
										
                                        <tr>
                                            <th  rowspan="4">Display</th>
                                            <th >Type</th>
                                            <td id="display_type1"></td>
                                            <td id="display_type2"> </td>
                                        </tr>
										
										<tr class="">
                                            <th>Size</th>
                                            <td id="display_size1"> </td>
                                            <td id="display_size2"></td>
                                        </tr>	
										
										<tr class="">
                                            <th>Resolution</th>
											<td>
												<div class="progress">
													<div class="" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:100%" id="resolution1"></div>
												</div>
											</td>
                                            <td>
												<div class="progress">
													<div class="" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:100%" id="resolution2"></div>
												</div>
											</td>

                                        </tr>
										<tr class="">
                                            <th>Protection</th>
                                            <td id="protection1">
											</td>
                                            <td id="protection2">
											</td>
                                        </tr>
										<tr>
                                            <th rowspan="3">Platform</th>
                                            <th >OS</th>
                                            <td  id="os1"></td>
                                            <td id="os2" ></td>
                                        </tr>
										<tr>
                                            <th >CPU</th>
                                            <td>
												<div class="progress">
													<div  id="cpu1" class="" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:100%"></div>
												</div>
											</td>
                                            <td>
												<div class="progress">
													<div  id="cpu2" class="" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:100%"></div>
												</div>
											</td>
                                        </tr>
										<tr>
                                            <th >GPU</th>
                                            <td  id="gpu1"></td>
                                            <td  id="gpu2"></td>
                                        </tr>
										
                                        <tr>
                                            <th  rowspan="2">Memory</th>
                                            <th >ROM</th>
											
                                            <td>
												<div class="progress">
													<div  id="rom1" data-myval='' class="" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:100%"></div>
												</div>
											</td>
											
                                            <td>
												<div class="progress">
													<div  id="rom2" data-myval='' class="" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:100%"></div>
												</div>
											</td>

											
                                        </tr>
                                        <tr>
                                            <th >RAM</th>
											<td>
												<div class="progress">
													<div id="ram1" class="" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:100%"></div>
												</div>
											</td>
                                            <td>
												<div class="progress">
													<div id="ram2" class="" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:100%"></div>
												</div>
											</td>
											
                                        </tr>
										
										
                                        <tr>
                                            <th  rowspan="2">Camera</th>
                                            <th >Primary</th>
                                            <td >
												<div class="progress">
													<div  id="back_camera1" class="" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:100%"></div>
												</div>
											</td>
                                            <td >
												<div class="progress">
													<div  id="back_camera2" class="" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:100%"></div>
												</div>
											</td>
                                        </tr>
										
										<tr class="">
                                            <th>Secondary</th>
                                            <td><div class="progress">
													<div  id="front_camera1" class="" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:100%"></div>
												</div></td>
                                            <td><div class="progress">
													<div  id="front_camera2" class="" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:100%"></div>
												</div></td>
                                        </tr>	
										

                                        <tr>
                                            <th  rowspan="2">Battary</th>
                                            <th >Capacity</th>
											<td>
												<div class="progress">
													<div id="battery1" class="" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:100%"></div>
												</div>
											</td>
                                            <td>
												<div class="progress">
													<div id="battery2" class="" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:100%"></div>
												</div>
											</td>
                                        </tr>
										
										<tr class="">
                                            <th>Type</th>
                                            <td id="battary_type1" > </td>
                                            <td id="battary_type2"></td>
                                        </tr>	
										
										
                                        <tr>
                                            <th colspan="2">Price</th>
											
											<td>
												<div class="progress">
													<div id="price1" class="" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:100%"></div>
												</div>
											</td>
                                            <td>
												<div class="progress">
													<div id="price2" class="" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:100%"></div>
												</div>
											</td>
											
                                        </tr>										
										
										</tbody>
                                </table>
                        </div>
			
			
            </div>
            </div>
            <!-- /.col-md-4 -->
<?php
	include_once("right_panel.php");
	include_once("footer.php");
?>	
				
			