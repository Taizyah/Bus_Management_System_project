var sideBarClose = document.querySelector('.cancel');
var sideBarOpen = document.querySelector('.hamburger');
var sideBar = document.querySelector('.side-bar');
var sideBarUl = document.querySelector('.sidebar-navlists');
var sideBarTitle = document.querySelector('.sideBarTitle');

sideBarClose.addEventListener('click', closeSideBar);
sideBarOpen.addEventListener('click', openSideBar);

let isOpen = true;

function closeSideBar() {
    // if(isOpen === "true") {
        sideBar.style.width = '0px';
        sideBarUl.style.visibility = 'hidden';
        sideBarTitle.style.visibility = 'hidden';
        sideBarClose.style.visibility = 'hidden';
        isOpen = false;
     }
// }
 function openSideBar () {     
        sideBar.style.width = '400px'; 
        sideBarUl.style.visibility = 'visible';
        sideBarTitle.style.visibility = 'visible';
        sideBarClose.style.visibility = 'visible';
        isOpen = false;        
 }


