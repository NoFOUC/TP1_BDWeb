function mfValidation(f) 
{

	ok = true ; 
	var nom = f.firstname.value ;
	var prenom = f.lastname.value ;
	var email = f.mail.value ;
	var phone= f.phone.value;
	var adresse=f.adresse.value;
	var ville=f.Ville.value;
	var code=f.code.value;
	var paiement=f.owner.value;
	var cvv=f.cvv.value;
	var regex1=/^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/;
	var regex2=/^[0-9]{4}$/;
	var regex3=/^[0-9]{3}$/;
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
		alert("Le N° de téléphone est obligatoire") ;
		ok = false ;
	}
	else if (phone.match(regex1))
    {
        alert("Le numéro de téléphone doit être un nombre !!");
        return false;
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
		alert("Le code postale est obligatoire") ;
		ok = false ;
	}
	else if (code.match(regex2))
    {
        alert("Max 4 chiffres !!");
        return false;
    }
	if (paiement=="") 
	{
		alert("Le propriétaire est obligatoire") ;
		ok = false ;
	}	
	if (cvv=="") 
	{
		alert("Le cvv est obligatoire") ;
		ok = false ;
	}	
	else if (cvv.match(regex3))
    {
        alert("exactement 3 chffires !!");
        return false;
    }
	
	

	return ok ;
}
function ville()
{
	var e = document.getElementById("region");
	var region = e.options[e.selectedIndex].value;
	if(region=="f2")
	{
		document.getElementById("ville").innerHTML = "<select name='ville2' id='ville2'> <option>Mons</option><option>Charleroi</option></select>";
		return true;
	}
	if(region=="f3")
	{
		document.getElementById("ville").innerHTML = "<select name='ville2' id='ville2'> <option>Archennes</option><option>Bornival</option></select>";
		return true;
	}
	
}
function professionel()
{
	
	document.getElementById("tva").innerHTML = "N° TVA:<br><input type='text' name='tva'><br><br>";
	document.getElementById("gender").innerHTML = "";
}
function personnel()
{
	document.getElementById("tva").innerHTML = "";	
	document.getElementById("gender").innerHTML = "<input type='radio' name='gender' value='male' checked> Male<br><input type='radio' name='gender' value='female'> Female<br><input type='radio' name='gender' value='other'> Other<br><br>";
}