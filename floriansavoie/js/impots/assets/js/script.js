
function calculer() {
    const taux = 10 ;
    const loyer = document.getElementById('taux').value;
    annuel = loyer * 12 ;
    impot = annuel * taux / 100 ;
   return resultat = document.getElementById('impotapayer').innerHTML=impot+"€" ;

}