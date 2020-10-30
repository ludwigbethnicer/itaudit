<div class="container pb-5">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-3"></div>
		<div class="col-md-3">
			<a class="btn btn-md mb-2 btn-danger btn-block text-uppercase" href="./itassetmngt.php">Next</a>
		</div>
		<div class="col-md-3">
			<a class="btn btn-md mb-2 btn-secondary btn-block text-uppercase" href="./auditstart.php">Back</a>
		</div>
	</div>
	
	<fieldset class="mb-2">
		<legend>How many PC to be audit?</legend>
		<button id="addpc" accesskey="a">Add PC</button>
		<button id="removepc" accesskey="r" disabled>Remove PC</button>
		<hr class="my-3">
		<div id="auditpc" class="text-center"></div>	
	</fieldset>
</div>

<script src="assets/js/addpc.js"></script>