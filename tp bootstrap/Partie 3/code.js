function mfValidation(f) {
    ok = true;
    var nom = f.lastname.value;
    var email = f.mail.value;
    var phone = f.phone.value;
    var regex1 = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/;
    var regex2 = /^[0-9]{4}$/;
    var regex3 = /^[0-9]{3}$/;
    if (nom == "") {
        alert("Le champ nom est obligatoire");
        ok = false;
    } else if (email == "") {
        alert("Le champ e-mail est obligatoire");
        ok = false;
    } else if ((p1 = email.indexOf("@")) == -1) {
        alert("Il n'y a pas d'arrobas dans cette adresse");
        ok = false;
    } else if ((p2 = email.indexOf(".")) == -1) {
        alert("Il n'y a pas de point dans cette adresse");
        ok = false;
    } else if (f.firstname.value == "") {
        alert("Le champ prénom est obligatoire");
        return false;
    } else if (f.adresse.value == "") {
        alert("Le champ adresse est obligatoire");
        return false;
    } else if (f.region.value == "...") {
        alert("Le champ region est obligatoire");
        return false;
    } else if (f.Ville.value == "") {
        alert("Le champ ville est obligatoire");
        return false;
    } else if (f.code.value == "") {
        alert("Le champ code est obligatoire");
        return false;
    } else if (phone == "") {
        alert("Le Numéro de téléphone est obligatoire");
        ok = false;
    } else if (phone.match(regex1) == null) {
        alert("Le numéro de téléphone doit être un nombre !!");
        return false;
    } else if (f.code.value.match(regex2) == null) {
        alert("Code postal invalide");
        return false;
    }
    return ok;
}

function personnel() {
    document.getElementById("tva").innerHTML = "";
    document.getElementById("gender").innerHTML = "<input type='radio' name='gender' value='male' checked> Male<br><input type='radio' name='gender' value='female'> Female<br><input type='radio' name='gender' value='other'> Other<br><br>";
}

function professional() {
    document.getElementById("gender").innerHTML = "";
    document.getElementById("tva").innerHTML = "N° TVA:<br> <input type='text' name='tva'><br><br>";
}

function ville() {
    var e = document.getElementById("region");
    var region = e.options[e.selectedIndex].value;
    if (region == "f2") {
        document.getElementById("ville").innerHTML = "<select name='ville2' id = 'ville2' onclick='postal()'> < option > Mons < /option><option>Charleroi</option > < /select>";
        return true;
    }
    if (region == "f3") {
        document.getElementById("ville").innerHTML = "<select name='ville2' id = 'ville2' onclick='postal()' > < option > Archennes < /option><option>Bornival</option > < /select>";
        return true;
    }
    if (region == "f4") {
        document.getElementById("ville").innerHTML = "<select name='ville2' id = 'ville2' onclick='postal()'><option>Marche en famenne</option><option>Liège</option> </select>";
        return true;
    }
    if (region == "f5") {
        document.getElementById("ville").innerHTML = "<select name='ville2' id='ville2' onclick='postal()'><option value='n1'>Petit Namur</option><option value='n2'>Namur</option></select>";
        return true;
    }
}

function postal() {
    var e = document.getElementById("ville2")
    var ville = e.options[e.selectedIndex].value;
    switch (ville) {
        case "n2":
            document.getElementById("code").value = "0000";
            break;
        case "Liège":
            document.getElementById("code").value = "0001";
            break;
        default:
            break;
    }

}