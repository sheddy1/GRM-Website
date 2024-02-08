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

 //function to clear register

 grieve_show.addEventListener("click", (event) => {
    grieve_box.style.visibility = "visible";
});

const clear = document.getElementById("form_btn2");

clear.addEventListener("click", (event) => {
    alert("Nassco");
    clear();

});

 
$(document).ready(function () {
    function clear()
    {  
        document.getElementById('state_select').value = "";
    }

    // function removeOptions(selectElement) {
    //     var i, L = selectElement.options.length - 1;
    //     for(i = L; i >= 0; i--) {
    //        selectElement.remove(i);
    //     }
    //  }
     
     // using the function:
     //removeOptions(document.getElementById('DropList'));
});