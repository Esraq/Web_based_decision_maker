<?php
include_once("navigation.php");
?>		<!-- second post -->
<title>Phone Finder</title>
                <h1 class="page-header">
					<small > Phone Finder</small>
                </h1>
        <div class="row">

        <div class="col-md-8 col-md-offset-2">
                    <table class="table">
                    <tbody>
						<tr>
							<th width="40%">Display Size</th>
							<td width="30%">
								<select  class="form-control" id="">
									<option value="">Min</option>
									<option value="4">4''</option>
									<option value="4.5">4.5''</option>
									<option value="5">5''</option>
									<option value="5.5">5.5''</option>
								</select> 
							</td>
							<td width="30%">
								<select  class="form-control" id="">
									<option value="">Max</option>
									<option value="4.5">4.5''</option>
									<option value="5">5''</option>
									<option value="5.5">5.5''</option>
									<option value="6">6''</option>
								</select> 
							</td>
						</tr>
						<tr>
							<th width="40%">CPU Core</th>
							<td colspan="2">
								<select  class="form-control" id="">
									<option value="">Choose Minimum</option>
									<option value="1">Single Core</option>
									<option value="2">Duel Core</option>
									<option value="4">Quad Core</option>
									<option value="6">Hexa Core</option>
									<option value="8">Octa Core</option>
								</select> 
							</td>
						</tr>
						<tr>
							<th width="40%">Battary Capacity</th>
							<td colspan="2">
								<select  class="form-control" id="">
									<option value="">Choose Minimum</option>
									<option value="1500">1500 mAh</option>
									<option value="2000">2000 mAh</option>
									<option value="2500">2500 mAh</option>
									<option value="3000">3000 mAh</option>
								</select> 
							</td>
						</tr>
						<tr>
							<th width="40%">RAM</th>
							<td colspan="2">
								<select  class="form-control" id="">
									<option value="">Choose Minimum</option>
									<option value="1">1 GB</option>
									<option value="2">2 GB</option>
									<option value="3">3 GB</option>
								</select> 
							</td>
						</tr>
						<tr>
							<th width="40%">ROM (Storage)</th>
							<td colspan="2">
								<select  class="form-control" id="">
									<option value="">Choose Minimum</option>
									<option value="4">4 GB</option>
									<option value="8">8 GB</option>
									<option value="16">16 GB</option>
								</select> 
							</td>
						</tr>
						<tr>
							<th width="40%">Primary Camera</th>
							<td colspan="2">
								<select  class="form-control" id="">
									<option value="">Choose Minimum</option>
									<option value="5">5 MP</option>
									<option value="8">8 MP</option>
									<option value="12">12 MP</option>
								</select> 
							</td>
						</tr>
						</tbody>
						</table>

                    <a href="search.php" class="btn btn-lg btn-success btn-block">Show Result</a>
			</div>
			</div>



<?php
	include_once("right_panel.php");
	include_once("footer.php");
?>			
			