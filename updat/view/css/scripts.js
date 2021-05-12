function verif() {
    
 
    var date1 = document.getElementById('dated').value ;  
    var date2 = document.getElementById('datef').value ;

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
