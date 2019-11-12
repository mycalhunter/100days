// Created By :  Md Hidaytullah Rahmani

$(".getColor").on("change", function() {
  //Get Color
  var color = $(".getColor").val();
  //apply cuurent color to div
  //$(".color-output").css("background",color);
  //Show color code
  $(".coloroutput").html("You color code is <span>" + color + "</span>");
});

$(".getDate").on("change", function() {
  //Get Color
  var date = $(".getDate").val();
  //apply cuurent color to div
  //$(".color-output").css("background",color);
  //Show color code
  $(".dateoutput").html("You date is <span>" + date + "</span>");
});

$(".getDateTime").on("change", function() {
  //Get Color
  var datetime = $(".getDateTime").val();
  //apply cuurent color to div
  //$(".color-output").css("background",color);
  //Show color code
  $(".datetimeoutput").html("You datetime is <span>" + datetime + "</span>");
});

$(".getRange").on("change", function() {
  //Get Color
  var range = $(".getRange").val();
  //apply cuurent color to div
  //$(".color-output").css("background",color);
  //Show color code
  $(".rangeoutput").html("You range is <span>" + range + "</span>");
});