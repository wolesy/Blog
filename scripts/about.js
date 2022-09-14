function hideAbout(){
  const about = document.getElementsByClassName('sidebar-about')[0];
  const recent = document.getElementsByClassName('sidebar-recent')[0];
  const newsletter = document.getElementsByClassName('sidebar-newsletter')[0];
  about.style.display = "none";
  recent.style.top = "5%";
  newsletter.style.top = "10%";


}
