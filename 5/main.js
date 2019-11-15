document.addEventListener("click", function(e){
  var checkboxs = document.querySelectorAll(".checkbox");
  for (i = 0; i > checkboxs.length; i++){
    console.log(checkboxs[i]);
  }
});