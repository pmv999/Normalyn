(function ($){
   $("#frm_login").submit(function(ev){
       $('#alert').html('');
       $.ajax({
           url: 'login/validate',
           type: 'POST',
           data: $(this).serialize(),
           success: function(err){
                var json =JSON.parse(err);
                // console.log(json);
                window.location.replace(json.url);
           },
           statusCode: {
               400: function(xhr){
                $("#email > input").removeClass('is-invalid');
                $("#pass > input").removeClass('is-invalid');
                var json=JSON.parse(xhr.responseText);
                   if(json.email.length != 0){
                       $("#email > div").html(json.email);
                       $("#email > input").addClass('is-invalid');
                   }
                   if(json.pass.length != 0){
                    $("#pass > div").html(json.pass);
                    $("#pass > input").addClass('is-invalid');
                }
               },
               401: function(xhr){
                   var json =JSON.parse(xhr.responseText);
                   console.log(json);
                   $("#alert").html('<div class="alert alert-danger" role="alert">'+json.msg+'</div>');
               }
           }
       });
       ev.preventDefault();
   });
})(jQuery)