const menuCollapse = document.querySelector("#menu-collapse");
let sidebarCollapse = false;
/***DOCENTE */
const formDocente = document.querySelector("#form-docente");

const deletebutton = document.querySelector(".delete-button");

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


/***POST DOCENTE */

if(formDocente){
   formDocente.addEventListener("submit", e =>{
   
      e.preventDefault();
      let data = Object.fromEntries(new FormData(e.target));
      fetch("docente", {
         method: "POST",
         headers: {
            'Content-Type': 'application/json',
         },
         body: JSON.stringify(data)
      }).then(response => response.json())
      .then(data => {
         console.log(data)
         if(data.status === 400){
            Swal.fire({
               icon: 'error',
               title: 'Oops...',
               text: data.msg,
            })
         }
         if(data.status === 200){
            Swal.fire(
               'Todo Bien!',
               data.msg,
               'success'
             );
            formDocente.reset();
         }
      }).catch((error) => {
         Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: error,
          })
       });
   })
}

function handleDelete(e){
   Swal.fire({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
      if (result.isConfirmed) {

         console.log(e.target.value)
        Swal.fire(
          'Deleted!',
          'Your file has been deleted.',
          'success'
        )
        setTimeout(() => {
            window.location.href = "http://localhost:8000/resultado-encuesta";
        }, 1000);
      }
    })
}
      

