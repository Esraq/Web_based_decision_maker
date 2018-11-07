<?php

$popularProduct=getHitProduct();
$leatestProduct=getLeatestProduct();
$brands=getBrands();



?>



            </div>
			<!-- left body -->
			
			<!-- right body -->
            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- grid viwe brand name Well -->                <!-- grid viwe brand name Well -->
                <!-- grid viwe brand name Well -->                <!-- grid viwe brand name Well -->
				
				
				
				
				
				
                <div class="well">
                    <h4>Most Viewed Phone</h4>
                    <!-- <div class="row"> -->
                        <div class="table-responsive">
                                <table class="table">
                                    <tbody>
									<?php 
									//loop 5
									foreach($popularProduct as $pp){
									
									?>
                                        <tr class="success">
                                            <td><a href="<?= ROOT ?>/?view_product=<?=$pp['id']?>"><?=$pp['name']?></a></td>
                                        </tr>
									<?php //end 
									}
									?>
                                    </tbody>
                                </table>
                            </div>
                    <!-- </div> -->
                    <!-- /.row -->
                </div>

                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>Latest Phone</h4>
                    <!-- <div class="row"> -->
                        <div class="table-responsive">
                                <table class="table">
                                    <tbody>
									<?php //loop 5
									foreach($leatestProduct as $lp){
									?>
                                        <tr class="warning">
                                            <td><a href="<?= ROOT ?>/?view_product=<?=$lp['id']?>"><?=$lp['name']?></a></td>
                                        </tr>
									<?php //end 
									;}
									?>
                                    </tbody>
                                </table>
                            </div>
                    <!-- </div> -->
                    <!-- /.row -->
                </div>
				
				<div class="well">
							<h4 style="color:black; text-decoration:none;">All Brands</h4>
							<div class="row">
							
							<?php //loop 5
							foreach($brands as $brand){
							?>

								<div class="col-sm-4 col-lg-4 col-md-4">
									<a href="<?=ROOT?>/?product_search=<?=$brand?>"><?=$brand?></a>
								</div>
							<?php
							;}
							
							?>
								
								
							</div>
							<!-- /.row -->
				</div>				

            </div>
			<!-- right body -->

			<!-- </div> -->
        <!-- /.row -->
