function verif1() {

    var date1 = document.querySelector('#date').value;
    var date2 = document.querySelector('#datef').value;
    var evenement = document.querySelector('#type').value;
    var categorie = document.querySelector('#categorie').value;
    
date1 = new Date(date1);
date2 =new Date(date2);
var test = date1.getFullYear() ;   
var test2 = date2.getFullYear() ; 
var testm = date1.getMonth();
var test2m  = date2.getMonth();

var testj = date1.getDay(); 
var test2j =date2.getDay();

var d1 = date1.getTime();
var d2 = date2.getTime();

if ( evenement === 'select')
{
    alert("Veuillez Saisir le type de l'evenement") ;
    return false ;
}
if ( categorie === 'choix')
{
    alert("veuillez saisir la catégorie") ;
    return false ;
}
if (d1 > d2)
{
  alert("Dates à vérifier" ) ;
    return false ; 

}
else 
{  
    return true ;
}

     
}