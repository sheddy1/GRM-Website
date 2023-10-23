    const share_button = document.getElementById("info_share");

    const close_button = document.getElementById("info_share_box_close");

    const show_share = document.getElementById("info_share_box");

    share_button.addEventListener("click", (event) => {
        if(show_share.style.display == "none")
        {
            show_share.style.display = "block";
        }
    });

     close_button.addEventListener("click", (event) => {
        if(show_share.style.display == "block")
        {
            show_share.style.display = "none";
        }
     });

     //filer grieviance code

     const filter_button = document.getElementById("info_filter1");

     const show_filter = document.getElementById("info_filter");

     const close_filter_button = document.getElementById("info_filter_close");

     filter_button.addEventListener("click", (event) => {
        if(show_filter.style.display == "none")
        {
            show_filter.style.display = "block";
        }
     });

     close_filter_button.addEventListener("click", (event) => {
        if(show_filter.style.display == "block")
        {
            show_filter.style.display = "none";
        }
     });

     

     //end of filter grieviance code

     $(document).ready(function(){
        $(".grieve_open").click(function(){
          $(".ul_whole1").toggleClass("ul_whole2");
        });
      });

      //list edit code

    //   const edit_button = document.getElementById("info_text_edit");

    //  const show_edit = document.getElementById("info_edit");

      //const close_edit_button = document.getElementById("info_edit_close");

    //  edit_button.addEventListener("click", (event) => {
    //     if(show_edit.style.display == "none")
    //     {
    //         show_edit.style.display = "block";
    //     }
    //  });

    //  close_edit_button.addEventListener("click", (event) => {
    //     if(show_edit.style.display == "block")
    //     {
    //         show_edit.style.display = "none";
    //     }
    //  });

    // close_edit_button.addEventListener("click", (event) => {
    //     //alert("God is great");
    //     sessionStorage.setItem('edit_show_id', 'none');
    //     var a = sessionStorage.getItem("edit_show_id");
    //     alert("sheddy " + a);
    //  });

      //end of list edit code