$(function(){
    $(document).on('click', '#submit', function(e){
      e.preventDefault();
      var link = $(this).attr("type");
      Swal.fire({
          position: "top-end",
          icon: "success",
          title: "Your work has been saved",
          showConfirmButton: false,
          timer: 1500
        });
    })
  });