/*google traduce*/
function googleTranslateElementInit() {
    new google.translate.TranslateElement({ pageLanguage: 'fr' },
        'google_translate_element');
}
/*nav responsive */
$(document).ready(function(){
  $("#labelBurger").click(function(){
    $("#service").fadeToggle("slow");
  });
});

/*zoom cards*/
$("#target1").click(function () {
  $("#lienModalites").toggle("slow", 0);
  $("#lienIti").toggle("slow", 0);
});

$("#target2").click(function () {
  $("#lienTarif").toggle("slow", 0);
  $("#lienIti").toggle("slow", 0);
});

$("#target3-*/").click(function () {
  $("#lienTarif").toggle("slow", 0);
  $("#lienModalites").toggle("slow", 0);
});

/*titre carousel*/
let h1 = document.createElement('titreCarousel');
h1.textContent = 'Paysages des volcans';

//popup sur livre d'or





