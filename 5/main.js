var checkboxs = document.getElementsByClassName("checkbox");
document.addEventListener("click", function() {
  for (i = 0; i < checkboxs.length; i++) {
    if (checkboxs[i].checked) {
      //console.log("Checked");
      checkboxs[i].parentElement.style.backgroundColor = "#ff923be8";
      //console.log(checkboxs[i].parentElement);
    } else {
      checkboxs[i].parentElement.style.backgroundColor = "#3ec2b5ed";
    }
  }
});