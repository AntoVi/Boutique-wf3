/* Création de la fonction */
function messageOff() 
{
    if(document.querySelector('.disparition'))
    {
        setTimeout(
            function(){
                document.querySelector('.disparition').style.display = "none";
            },7000
        );
    }

}

/* Appel de la fonction */
messageOff();