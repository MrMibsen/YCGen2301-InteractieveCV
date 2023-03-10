// what button
$(document).ready(function(){
    $("#but_what").click(function(){
      $("#what_content").load("what.html");
    });
  });

// $(document).ready(function () {
//     $("#but_study").click(function () {
//       $("#study_content").load("study.html");
//     });
//   });

function what_showFunction() {
  var x = document.getElementById("what_content");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}

//STUDY Button
function study_cont(){
  document.getElementById("study_content").innerHTML = "TEKST"
}