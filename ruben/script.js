// what button
$(document).ready(function(){
    $("#but_what").click(function(){
      $("#what_content").load("what.html");
    });
  });

$(document).ready(function () {
    $("#but_study").click(function () {
      $("#study_content").load("study.html");
    });
  });

$(document).ready(function () {
  $("#but_work").click(function () {
    $("#work_content").load("work.html");
  });
});

function what_showFunction() {
  var x = document.getElementById("what_content");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}

function study_showFunction() {
  var x = document.getElementById("study_content");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}

function work_showFunction() {
  var x = document.getElementById("work_content");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
