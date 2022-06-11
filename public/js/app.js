const menuCollapse = document.querySelector("#menu-collapse");
let sidebarCollapse = false;

menuCollapse.addEventListener('click', () => {
   const sidebar = document.querySelector("#sidebar");
   const textLogo = document.querySelector(".site-name");
   const contentSidebar = document.querySelectorAll(".sidebar .list-options span");
   const systemLogo = document.querySelector(".system-logo");

   if(!sidebarCollapse){
      sidebar.classList.add("hide-collpase");
      systemLogo.classList.add("new-style-logo");
      textLogo.classList.add("hide");
      contentSidebar.forEach(item => {
         item.classList.add("hide");
      })
      sidebarCollapse = true;
   }else{
      sidebar.classList.remove('hide-collpase');
      systemLogo.classList.remove("new-style-logo");
      textLogo.classList.remove("hide");
      contentSidebar.forEach(item => {
         item.classList.remove("hide");
      })
      sidebarCollapse = false;
   }
})
