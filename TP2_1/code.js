function mfValidation(f) 
{
	ok = true ; 
	var nom = f.lastname.value ;
	var prenom = f.firstname.value ;
	var email = f.mail.value ;
	var phone= f.phone.value;
	var adresse = f.adresse.value ;
	var ville = f.Ville.value ;
	var code = f.code.value ;
	var regex1=/^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/;
	var regex2=/^[0-9]{4}$/;
	var regex3 = /^[0-9]{3}$/;
	if (nom=="") 
	{
		alert("Le champ nom est obligatoire") ;
		ok = false ;
	}
	if (prenom=="")
	{
		alert("Le champ prénom est obligatoire") ;
		ok = false ;
	}
	if (email=="") 
	{
		alert("Le champ e-mail est obligatoire") ;
		ok = false ;
	}
	else if ((p1 = email.indexOf("@")) == -1) 
	{
		alert("Il n'y a pas d'arrobas dans cette adresse") ;
		ok = false ;
	} else if (( p2 = email.indexOf(".")) == -1) 
	{
		alert("Il n'y a pas de point dans cette adresse") ;
		ok = false ;
	}
	if (phone=="") 
	{
		alert("Le Numéro de téléphone est obligatoire") ;
		ok = false ;
	}
	else if (phone.match(regex1))
    {
        alert("Le numéro de téléphone doit être un nombre !!");
		ok = false ;
    }
	if (adresse=="")
	{
		alert("L'adresse est obligatoire") ;
		ok = false ;
	}
	if (ville=="")
	{
		alert("La ville est obligatoire") ;
		ok = false ;
	}
	if (code=="")
	{
		alert("Le code postal est obligatoire") ;
		ok = false ;
	}
	return ok ;
}

function personnel()
{
	document.getElementById("tva").innerHTML = "";
	document.getElementById("gender").innerHTML = "<input type='radio' name='gender' value='male' checked> Male<br><input type='radio' name='gender' value='female'> Female<br><input type='radio' name='gender' value='other'> Other<br><br>";
}

function professionel()
{
	document.getElementById("tva").innerHTML = "N° TVA:<br><input type=\"text\" name=\"tva\"><br><br>";
	document.getElementById("gender").innerHTML = "";
}

function postale (){
	var e = document.getElementById("ville2");
	var ville = e.options[e.selectedIndex].value;

	console.log(ville);

	if (ville == "Mons") {
		document.getElementById("code").innerHTML = "<select name='code' id='code' > <option>7000</option><option>7001</option><option>7002</option></select>";
		return true;
	}
	if (ville == "Charleroi") {
		document.getElementById("code").innerHTML = "<select name='code' id='code' > <option>6000</option><option>6001</option><option>6002</option></select>";
		return true;
	}
	if (ville == "Bornival") {
		document.getElementById("code").innerHTML = "<select name='code' id='code' > <option>1404</select>";
		return true;
	}
	if (ville = "Liège") {
		document.getElementById("code").innerHTML = "<select name='code' id='code' > <option>4000</option><option>4001</option><option>4002</option></select>";
		return true;
	}
	if (ville ="Huy"){
		document.getElementById("code").innerHTML = "<select name='code' id='code' > <option>4500</option><option>4501</option><option>4502</option></select>";
		return true;
	}
	if (ville =="Namur"){
		document.getElementById("code").innerHTML = "<select name='code' id='code' > <option>5000</option><option>5001</option><option>5002</option></select>";
		return true;
	}
	if (ville =="Dinant"){
		document.getElementById("code").innerHTML = "<select name='code' id='code' > <option>5500</option><option>5501</option><option>5502</option></select>";
		return true;
	}

}
function ville() {
	var e = document.getElementById("region");
	var region = e.options[e.selectedIndex].value;

	console.log(region);
	if (region == "f2") {
		document.getElementById("ville").innerHTML = "<select name='ville2' id='ville2' onchange='postale()'> <option>...</option><option>Mons</option><option>Charleroi</option></select>";
		return true;
	}
	if (region == "f3") {
		document.getElementById("ville").innerHTML = "<select name='ville2' id='ville2' onchange='postale()'> <option>...</option><option>Archennes</option><option>Bornival</option></select>";
		return true;
	}
	if (region == "f4") {
		document.getElementById("ville").innerHTML = "<select name='ville2' id='ville2' onchange='postale()'> <option>...</option><option>Liège</option><option>Huy</option></select>";
		return true;
	}
	if (region == "f5") {
		document.getElementById("ville").innerHTML = "<select name='ville2' id='ville2' onchange='postale()'> <option>...</option><option>Namur</option><option>Dinant</option></select>";
		return true;
	}
	if (region == "f6") {
		document.getElementById("ville").innerHTML = "<select name='ville2' id='ville2' onchange='postale()'> <option>...</option><option>Arlon</option><option>Bastogne</option></select>";
		return true;
	}
	if (region == "f7") {
		document.getElementById("ville").innerHTML = "<select name='ville2' id='ville2' onchange='postale()'> <option>...</option><option>Leuven</option><option>Affligem</option></select>";
		return true;
	}
	if (region == "f8") {
		document.getElementById("ville").innerHTML = "<select name='ville2' id='ville2' onchange='postale()'> <option>...</option><option>Anvers</option><option>Maline</option></select>";
		return true;
	}
}

