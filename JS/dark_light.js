
let body=document.getElementById("body");
// La varaible dark_ligth fait référence au bouton
let dark_light = document.getElementById("dark_light");
body.setAttribute("data-theme","light");
// Quand on clique sur le bouton dark_light
dark_light.addEventListener("click",dark_light0);

function dark_light0()
{
    if(body.getAttribute("data-theme")=="light")
    {
        body.setAttribute("data-theme","dark");
        dark_light.innerHTML="Mode clair";

    
    }
    else
    {
        body.setAttribute ("data-theme","light");
        dark_light.innerHTML="Mode sombre";
    }

}