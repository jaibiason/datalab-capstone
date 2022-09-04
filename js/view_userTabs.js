// detects which tab and corresponding content to show
function showUserRecord(evt, userDetail) {
  // if statement check for web view; will show all tabs if mobile view
  if(x.matches) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(userDetail).style.display = "block";
    evt.currentTarget.className += " active";
  }
}

var x = window.matchMedia("(min-width: 679px)")
// clicks on element with defaultOpen 
document.getElementById("defaultOpen").click();


// PAGE SCROLLING NAVIGATION
// Get all sections that have an ID defined
const sections = document.querySelectorAll("div[id]");

// Add an event listener listening for scroll
window.addEventListener("scroll", navHighlighter);

function navHighlighter() {
  
  // Get current scroll position
  let scrollY = window.pageYOffset;
  
  // Now we loop through sections to get height, top and ID values for each
  sections.forEach(current => {
    const sectionHeight = current.offsetHeight;
  
    const sectionTop = (current.getBoundingClientRect().top + window.pageYOffset) - 50;
    sectionId = current.getAttribute("id");
    
    /*
    - If our current scroll position enters the space where current section on screen is, add .active class to corresponding navigation link, else remove it
    - To know which link needs an active class, we use sectionId variable we are getting while looping through sections as an selector
    */
    if (
      scrollY > sectionTop &&
      scrollY <= sectionTop + sectionHeight
    ){
      console.log(sectionId);
      document.querySelector(".dashboard-bottom-nav a[href*=" + sectionId + "]").classList.add("active-div");
    } else {
      document.querySelector(".dashboard-bottom-nav a[href*=" + sectionId + "]").classList.remove("active-div");
    }
  });
}