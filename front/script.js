function verifL() {
  
    var adresse = document.querySelector('#adresse').value;
   
    if (adresse === '-- Region --') {
       
        document.querySelector('#adresse').focus();
        alert("Veuilez saisir votre adresse");
        return false;
    }
}
function verifC() {
    
    var paiment = document.querySelector('#paiment').value;
  
    if (paiment === '-- Paiment --') {
       
        document.querySelector('#paiment').focus();
        alert("Veuilez saisir votre methode de paiment");
        return false;
    }
}