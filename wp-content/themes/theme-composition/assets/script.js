let box = document.getElementsByClassName("banniere__bloc--g");
let text = document.getElementsByClassName("banniere__titre--g");

box.addEventListener("mouseover", () => {
  text.style.display = "none";
});

// test.addEventListener("mouseenter", function( event ) {
//     // on met l'accent sur la cible de mouseenter
//     event.target.style.color = "purple";

//     // on réinitialise la couleur après quelques instants
//     setTimeout(function() {
//       event.target.style.color = "";
//     }, 500);
//   }, false);

//   // Ce gestionnaire sera exécuté à chaque fois que le curseur
//   // se déplacera sur un autre élément de la liste
//   test.addEventListener("mouseover", function( event ) {
//     // on met l'accent sur la cible de mouseover
//     event.target.style.color = "orange";

//     // on réinitialise la couleur après quelques instants
//     setTimeout(function() {
//       event.target.style.color = "";
//     }, 500);
//   }, false);

// // let togg2 = document.getElementById("togg2");
// // let d1 = document.getElementById("d1");
// // let d2 = document.getElementById("d2");

// function togg(){
//   if(getComputedStyle(d2).display != "none"){
//     d2.style.display = "none";
//   } else {
//     d2.style.display = "block";
//   }
// };
// togg2.onclick = togg;
