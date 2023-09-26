function serviceprice() {

	let first, last, email, service, pages, date, total;

	var price;
	first = document.getElementById("firstn").value;
	last = document.getElementById("lastn").value;
	email = document.getElementById("email").value;
	service = document.getElementById("service").value;
	pages = document.getElementById("pages").value;
	total = document.getElementById("total").value;

	//date
	date = document.getElementById("date").value;
	var todaysDate = new Date();
	var selectedDate = new Date(date);

	//errors 
	firsterror = document.getElementById("firsterror").innerHTML = "";
	lasterror = document.getElementById("lasterror").innerHTML = "";
	emailerror = document.getElementById("emailerror").innerHTML = "";
	serviceerror = document.getElementById("serviceerror").innerHTML = "";
	pageserror = document.getElementById("pageserror").innerHTML = "";
	daterror = document.getElementById("dateerror").innerHTML = "";


	if (first == "" ) {
		document.getElementById("firsterror").innerHTML = "Required Field";
		document.getElementById("firstn").focus();
	}
	else if (last == "" ) {
		document.getElementById("lasterror").innerHTML = "Required Field";
		document.getElementById("lastn").focus();
	}
	else if (email == "") {
		document.getElementById("emailerror").innerHTML = "Required Field";
		document.getElementById("email").focus();
	}
	else if (service == "") {
		document.getElementById("serviceerror").innerHTML = "Required Field";
		document.getElementById("service").focus();
	}
	else if (pages < 0 || pages > 5) {
		document.getElementById("pageserror").innerHTML = "Invalid Number of Pages";
		document.getElementById("pages").focus();
	}
	else if (selectedDate < todaysDate) {
		document.getElementById("dateerror").innerHTML = "Invalid Date";
		document.getElementById("date").focus();
	}
	else {
		price = calcPrice(service, pages);
		
	}

	document.getElementById("total").innerHTML =" Your Total is $" + price;

}

function calcPrice(x, y) {
	if (x = "Business Website") {
		return 100 * y;
	}
	else if (x = "Personal Website") {
		return 75 * y;
	}
	else if (x = "Website Maintenance") {
		return 40 * y;
	}
	else {
		return 300;
	}
}

function changeWelcome(x) {

	let welcome;

	welcome = document.getElementById("welcometitle");

	welcome.innerHTML = "Raaby's Portfolio"
	x.src = "circleme2.png"
}


function backWelcome(x) {

	let welcome;

	welcome = document.getElementById("welcometitle");

	welcome.innerHTML = "Welcome";
	x.src = "thumbnail_Image.jpg"
}

function buttonOn() {
  document.getElementById("shopb").disabled = false;
}
