function verifL() {
    var errors = "<ul>";
    var nom = document.querySelector('#nom').value;  
    var tel = document.querySelector('#tel').value;
    var adresse = document.querySelector('#adresse').value;
    var email = document.querySelector('#email').value;
    
    if (tel.length != 8) {
        errors += "<li>Numero de telephone errone </li>";
        document.querySelector('#tel').focus();
    }

    if (adresse === '-- Region --') {
        errors += "<li>Veuillez indiquer votre Region </li>";
        document.querySelector('#adresse').focus();
    }
    if ((email.substring(indexOf("@")!="@gmail.com"))||(email.substring(indexOf("@")!="outlook.com"))||(email.substring(indexOf("@")!="@esprit.tn"))|| (email.substring(indexOf("@")=="@yahoo.com"))) {
        errors += "<li>Veuillez saisir une adresse mail valide </li>";
        document.querySelector('#email').focus();
    }

    if (errors !== "<ul>") {
        document.querySelector('#erreur').style.color = 'red';
        errors += "</ul>"
        document.getElementById('erreur').innerHTML = errors;
        return false;
    } else {
        var msg = "Merci pour votre confiance Livraison validee Mr " + nom + " \nTelephone " + tel + "Votre Livraison arrivera dans 3 jours" ;

        alert(msg);
    }

}