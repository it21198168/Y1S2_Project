function check_pass() {
	if (
		document.getElementById("pwd").value ==
		document.getElementById("cnfrmpwd").value
	) {
		document.getElementById("submitBtn").disabled = false;
	} else {
		document.getElementById("submitBtn").disabled = true;
		alert("Password Mismatch");
	}
}

