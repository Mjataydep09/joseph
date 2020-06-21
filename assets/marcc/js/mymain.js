
  var gear = document.querySelector(".gear");


  function myFunction(x) {
if (x.matches) { // If media query matches
    gear.setAttribute("viewBox", "150 0 1000 768");

} else {
gear.setAttribute("viewBox", "0 0 1300 768");

}
}
        var x = window.matchMedia("(max-width: 400px)")
      myFunction(x) // Call listener function at run time
      x.addListener(myFunction)

      function closeNav() {
   document.getElementById("sidebarr").className = "col-md-2 collapsedd";
   document.getElementById("mySidebarrbtn").style.display = "block";
  document.getElementById("contentt").className = "col-md-12";




}

function openNav() {
  document.getElementById("sidebarr").className = "col-md-2";
  document.getElementById("mySidebarrbtn").style.display = "none";
 document.getElementById("contentt").className = "col-md-10";
}


// function pilos11() {
//    document.getElementById("pilos1").style.transform = "scale(1)";
//    document.getElementById("pilos1").style.height = "auto";
//    document.getElementById("pilos1").style.opacity = "1";
//    document.getElementById("misvis2").style.transform = "scale(0)";
//    document.getElementById("misvis2").style.height = "1px";
//    document.getElementById("misvis2").style.opacity = "0";
// }
//
// function misvis22() {
//   document.getElementById("pilos1").style.transform = "scale(0)";
//   document.getElementById("pilos1").style.height = "1px";
//   document.getElementById("pilos1").style.opacity = "0";
//   document.getElementById("misvis2").style.transform = "scale(1)";
//   document.getElementById("misvis2").style.height = "auto";
//
//   document.getElementById("misvis2").style.opacity = "1";
//   // var element = document.getElementById("pilos1");
//   // element.display = "none";
// }

  $(function () {
    $('#myTab li:last-child a').tab('show')
  });

  $(document).ready(function(){
  $("#galleries").find(".galleries-images").each(function(item){
    $(this).on("click", () => {
       $(this).toggleClass('gallery-scale');
    })
  })
  });
