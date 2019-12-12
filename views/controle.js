document.getElementById("formulaire").addEventListener("submit",function(e){
    var nom= document.getElementById("nom");
    var prenom= document.getElementById("prenom");
    var adresse_mail= document.getElementById("adresse_mail");
    var nom_animal= document.getElementById("nom_animal");
    var telephone= document.getElementById("telephone");
    if(!telephone.value)
    {
        erreur= "your mobile number is recommended !";
    }
    if(!adresse_mail.value)
    {
        erreur ="your E-mail is recommended !";
    }
    if(!nom_animal.value)
    {
        erreur="please enter the animal name !";
    }
    if(!prenom.value)
    {
        erreur="your last name is recommended !";
    }
    if(!nom.value)
    {
        erreur = "your name is recommended !";
    }
    if(erreur)
    {
        e.preventDefault();
        document.getElementById("erreur").innerHTML = erreur;
        return false;
    }
    else
    {
       alert('Infos saved !');
    }
});