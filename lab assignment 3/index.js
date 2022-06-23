let survey = (window.prompt("Are you first time user? (Y/N)")).toLowerCase();
console.log(survey);
if(survey == "y" || survey =="n"){
    alert("Thank you for your response! Hope you enjoy our myTutor WebPage!");
}else{
    alert("Soryy for disturbing!!");
}

function w3_open() {
    document.getElementById("mySidebar").style.width = "20%";
    document.getElementById("mySidebar").style.display = "block";
}

function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
}