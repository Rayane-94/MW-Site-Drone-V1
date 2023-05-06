let form_inscription = document.getElementById("form_inscription");
form_inscription.addEventListener('submit',VerifierFormulaireInscription);
function VerifierFormulaireInscription()
{
    let mdp1=document.getElementById("mdp1").value;
    let mdp2=document.getElementById("mdp2").value;

if (mdp1==mdp2)

{   console.debug("les mot de passe sont identiques");
    alert("Les mots de passe sont identiques")
}
else
{ 
    console.debug("les mot de passe sont diferent");
    alert("Les mots de passe ne sont pas identique");
    event.preventDefault();
  
}
}
