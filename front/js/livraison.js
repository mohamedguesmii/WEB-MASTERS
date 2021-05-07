function verifL() {
    var errors = "<ul>";
    var nom = document.querySelector('#nom').value;  
    var tel = document.querySelector('#tel').value;
    var adresse = document.querySelector('#adresse').value;
    var email = document.querySelector('#email').value;
    
    if (tel.length != 8) {
        
        document.querySelector('#tel').focus();
        alert("Veuilez saisir un numero valide");
        return false;
        
    }
    if (adresse === '-- Region --') {
       
        document.querySelector('#adresse').focus();
        alert("Veuilez saisir votre adresse");
        return false;
    }
    
  
}
