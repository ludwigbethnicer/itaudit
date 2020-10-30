<div class="pb-5">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-2"></div>
		<div class="col-md-2"></div>
		<div class="col-md-2"></div>
		<div class="col-md-2"></div>
		<div class="col-md-2">
			<a class="btn btn-md mb-2 btn-secondary btn-block text-uppercase" href="./menu.php">Back</a>
		</div>
	</div>

	<div class="row">
		<div class="col-md-4">
			<div class="input-group mb-3 float-right mx-w-208px">
				<div class="input-group-prepend">
					<span class="input-group-text">Control#</span>
				</div>
				<input type="text" class="form-control" />
			</div>
		</div>
		<div class="col-md-4">
			<div class="input-group date mb-3" id="datetimepicker1">
				<div class="input-group-prepend">
					<span class="input-group-text">Date</span>
				</div>
				<input type="date" class="form-control" />
				<span class="input-group-addon">
					<span class="glyphicon glyphicon-calendar"></span>
				</span>
			</div>
		</div>
		<div class="col-md-4">
			<div class="input-group mb-3">
				<div class="input-group-prepend">
					<span class="input-group-text">Zone</span>
				</div>
				<input type="text" class="form-control" placeholder="Zone" name="zone_cmpny" list="zone_cmpnyList">
				<datalist id="zone_cmpnyList">
					<option value="01">
					<option value="02">
				</datalist>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-4">
			<div class="input-group mb-3">
				<div class="input-group-prepend">
					<span class="input-group-text">Region</span>
				</div>
				<input type="text" class="form-control" placeholder="Region" name="region_cmpny" list="region_cmpnyList">
				<datalist id="region_cmpnyList">
					<option value="Bohol">
					<option value="Cagayan de Oro">
					<option value="Zamboanga">
				</datalist>
			</div>
		</div>
		<div class="col-md-4">
			<div class="input-group mb-3">
				<div class="input-group-prepend">
					<span class="input-group-text">Area</span>
				</div>
				<input type="text" class="form-control" placeholder="Area" name="area_cmpny" list="area_cmpnyList">
				<datalist id="area_cmpnyList">
					<option value="A">
					<option value="B">
					<option value="C">
				</datalist>
			</div>
		</div>
		<div class="col-md-4">
			<div class="input-group mb-3">
				<div class="input-group-prepend">
					<span class="input-group-text">Branch</span>
				</div>
				<input type="text" class="form-control" placeholder="Branch" name="branch_cmpny" list="branch_cmpnyList" value="ML ">
				<datalist id="branch_cmpnyList">
					<option value="ML Sanito">
					<option value="ML Ipil">
					<option value="ML Cebu City">
				</datalist>
			</div>
		</div>
	</div>

	<fieldset class="mb-2">
		<legend>List of Branch Audited</legend>
		<table class="table table-hover">
			<thead>
				<tr>
					<th class="d-none d-lg-inline text-center align-middle">Control#</th>
					<th class="mw-114px text-center align-middle">Date</th>
					<th class="d-none d-lg-inline text-center align-middle">Zone</th>
					<th class="d-none d-lg-inline text-center align-middle">Region</th>
					<th class="d-none d-lg-inline text-center align-middle">Area</th>
					<th class="text-center align-middle">Branch</th>
					<th class="text-center align-middle mw-116px">Action</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td class="d-none d-lg-inline">20201030003</td>
					<td class="mw-114px">30-Oct-2020</td>
					<td class="d-none d-lg-inline"></td>
					<td class="d-none d-lg-inline"></td>
					<td class="d-none d-lg-inline"></td>
					<td></td>
					<td class="text-right mw-116px">
						<a class="btn btn-sm mb-2 btn-success btn-inline" href="">Edit</a>
						<a class="btn btn-sm mb-2 btn-danger btn-inline" href="">Delete</a>
					</td>
				</tr>
			</tbody>
		</table>
	</fieldset>
</div>