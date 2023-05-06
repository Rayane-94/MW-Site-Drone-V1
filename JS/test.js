let message = "La somme fait : ";
let val1 = 15;
let val2 = 4;
let resultat = val1 + val2;

console.log("VAL1 vaut : " + val1);
console.log("VAL2 vaut : " + val2);
console.log("RESULTAT vaut : " + resultat);
console.log(message + resultat);
console.log(message + val1+val2);

let p_footer = document.getElementById("p_footer");
p_footer.addEventListener('mouseover', mon_popup);
function mon_popup() {
alert ("Gestion de l'évènement 'mouse over' sur mon footer");    
}
