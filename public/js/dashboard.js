function openNav() {

const sidebar_margin = document.getElementById("mySidebar");

  if(getComputedStyle(sidebar_margin).width == "50px")
{
  document.getElementById("mySidebar").style.width = "250px";
  //document.getElementById("content").style.marginLeft = "250px";
  document.getElementById("navbar").style.marginLeft = "250px";
  document.getElementById("dashboard-content").style.marginLeft = "0px";
}

  if(getComputedStyle(sidebar_margin).width == "250px"){
  document.getElementById("mySidebar").style.width = "50px";
  //document.getElementById("content").style.marginLeft= "50px";
  document.getElementById("navbar").style.marginLeft = "50px";
  document.getElementById("dashboard-content").style.marginLeft = "-500px";
}
}