$(document).ready(function(){
   
  //Search list field
  $("#searchText").keyup(function(){
    var query= $(this).val();
    if(query!="")
    {
        $.ajax({
            url: "php/search.php",
            method: "POST",
            data: {query:query},
            success: function(data)
            {
                $("#searchList").fadeIn();
                $("#searchList").html(data);
            }
        });
    }
    else
    $("#searchList").fadeOut();
   }); 
  
  //Login
  $("#logIn").click(function(){
    var username=$("#username").val();
    var password=$("#password").val();
    if(username!="" && password!="")
    {
      $.ajax({
        url:"php/logIn.php",
        method:"POST",
        data:{username:username, password:password},
        success:function(data){
            if(data == "Email")
            {
              alert("Nije ispravna email adresa za korisnika "+username);
            }
            else if(data == "Lozinka")
            {
              alert("Pogresna lozinka za korisnika "+username);
            }
            else if(data == "Karakter")
            {
              alert("Email adresa ili lozinka sadrže nedozvoljene karaktere")
            }
            else
            {
              $("#signinPage").hide();
              location.reload();
            }
            
        }
      });
    }
    else
    {
      alert("Niste popunili sva polja! Sva polja su obavezna!");
    }
  });
  
  //Registry
  $("#registry").click(function(){
    var name=$("#name").val();
    var lastname=$("#lastname").val();
    var email=$("#email").val();
    var pass=$("#pass").val();
    var passrepeat=$("#passrepeat").val();
    var addres=$("#addres").val();
    var phone=$("#phone").val();
    if(name!="" && lastname!="" && email!="" && pass!="" && passrepeat!="" && addres!="" && phone!="")
    {
      $.ajax({
        url:"php/registry.php",
        method:"POST",
        data:{name:name, lastname:lastname, email:email, pass:pass, passrepeat:passrepeat, addres:addres, phone:phone},
        success:function(data){
            if(data == "Lozinka")
            {
              alert("Lozinka i ponovljena lozinka se ne poklapaju!!");
            }
            else
            {
              $("#signupPage").hide();
              location.reload();
              alert("Uspešno ste se registrovali. Želimo Vam srećnu i uspešnu kupovinu!");
            }
            
        }
      });
    }
    else
    {
      alert("Niste popunili sva polja! Sva polja su obavezna!");
    }
  });

  //Back to top button with scroll function
   $("#btt").click(function(){
     $('html, body').animate({scrollTop: 0}, 800);  
   });

});

