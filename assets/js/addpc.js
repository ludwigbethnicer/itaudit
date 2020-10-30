const addpc = document.getElementById("addpc");
var i = 0;
const div = document.getElementById("auditpc");
const removepc = document.getElementById("removepc");

addpc.addEventListener("click", function() {
	i++;
	const pcno = document.createElement('a');
	// const pcno = document.createElement('input');
	// pcno.id = i;
	// pcno.onclick = "window.location.href='./chckpntstndrd.php'";
	// pcno.type = "button";
	// pcno.value = "PC" + i;

	pcno.id = "pc" + i;
	pcno.className = "btn btn-md btn-secondary btn-inline text-uppercase m-2";
	pcno.href = "./chckpntstndrd.php";
	pcno.innerHTML = "PC" + i;

	div.appendChild(pcno);

	if (i > 0) {
		removepc.removeAttribute("disabled");
	}
});

removepc.addEventListener("click", function() {
	$('#pc' + i).remove();
	$('#pc' + i).remove();
	i = i - 1;

	if (i <= 0) {
		removepc.setAttribute("disabled", "true");
	}
});