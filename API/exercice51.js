function calculNombre (){
    
if(localStorage.comptloc==null) 
localStorage.comptloc=0;

else{
    localStorage.comptloc++; 
}
 
    if (sessionStorage.comptses==null)
{
 // même chose que localStorage.setItem('comptloc ', 0)
sessionStorage.comptses=0;
}
else
{
    sessionStorage.comptses++;
}



};