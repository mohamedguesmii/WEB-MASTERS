function verif()
{
var type = document.querySelector('#type').value;

if (type.charAt(0) < 'A' || type.charAt(0) > 'Z') {
    //document.getElementById('erreur').innerHTML = "Le nom doit commencer par une lettre Majuscule";
    //return false;
    errors += "<li>Le nom doit commencer par une lettre Majuscule </li>";
}
}