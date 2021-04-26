function verif() {
    
 
    var date1 = document.getElementById('dated').value ;  
    var date2 = document.getElementById('datef').value ;

date1 = new Date(date1);
date2 =new Date(date2);
var test = date1.getFullYear() ;   
var test2 = date2.getFullYear() ;    

if (test > test2)
{
    alert('Vous avez selection un date incorrect!!') ;
}
else 
{  
    alert('valid' +test + "" +test2);
}



    

    


}