 //open add code
 const grieve_show = document.getElementById("form_header_button");

 const grieve_hide = document.getElementById("info_share_box_close");

 const grieve_box = document.getElementById("check_grieve");

 grieve_show.addEventListener("click", (event) => {
     grieve_box.style.visibility = "visible";
 });

 grieve_hide.addEventListener("click", (event) => {
    grieve_box.style.visibility = "hidden";
     //window.location.reload();
 });