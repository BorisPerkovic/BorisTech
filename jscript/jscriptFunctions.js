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


  //Showing personal data and animate changeData and passChange
  $("#users_id").attr("disabled", "disabled");
  $("#personal_data").click(function(){
    $("#users_data").hide();
    $("#users_dataChange").show();

  });

  $("#personal_pass").click(function(){
    $("#users_data").hide();
    $("#users_passChange").show();
  });
  //Back button from changeData and changePass to showing personal data
  $("#data_back").click(function(){
    $("#users_dataChange").hide();
    $("#users_data").show();
  });
  $("#pass_back").click(function(){
    $("#users_passChange").hide();
    $("#users_data").show();
  });

  //Change personal data and password
    //Personal data
    $("#data_save").click(function(){
      var users_id=$("#users_id").val();
      var users_name=$("#users_name").val();
      var users_lastname=$("#users_lastname").val();
      var users_email=$("#users_email").val();
      var users_addres=$("#users_addres").val();
      var users_phone=$("#users_phone").val();
      var users_password=$("#users_password").val();
      if(users_password!="")
      {
          $.ajax({
          url:'../php/data_change.php',
          method:'POST',
          data:{users_id: users_id, users_name:users_name, users_lastname:users_lastname, users_email:users_email, users_addres:users_addres, users_phone:users_phone, users_password:users_password},
          success: function(data){
            if(data== "lozinka")
            {
              alert("Lozinka nije ispravna. Molimo Vas otkucajte ispravnu lozinku da biste mogli da promenite podatke!! ");
            }
            else
            {
              alert("Uspešno ste izmenili Vaše podatke. Uživajte u kupovini!!")
              location.reload();
            }
          }
        });
      }
      else{
        alert("Niste uneli lozinku. Polje za lozinku mora biti popunjeno!!");
      }
      
    });
    
    //Password
    $("#pass_save").click(function(){
      var users_id=$("#acc_number").text();
      var old_password=$("#old_password").val();
      var change_password=$("#change_password").val();
      var repeat_password=$("#repeat_password").val();
      if(old_password!="" && change_password!="" && repeat_password!="")
      {
          $.ajax({
          url:'../php/pass_change.php',
          method:'POST',
          data:{users_id: users_id, old_password:old_password, change_password:change_password, repeat_password:repeat_password},
          success: function(data){
            if(data== "lozinka")
            {
              alert("Stara lozinka nije ispravna. Molimo Vas otkucajte ispravnu lozinku da biste mogli da promenite podatke!! ");
            }
            else if(data== "novalozinka")
            {
              alert("Nova lozinka i ponovljena lozinka nisu ispravne. Molimo Vas otkucajte ispravnu lozinku da biste mogli da promenite podatke!! ");
            }
            else
            {
              alert("Uspešno ste izmenili Vaše podatke. Uživajte u kupovini!!")
              location.reload();
            }
          }
        });
      }
      else{
        alert("Sva polja moraju biti popunjena!!");
      }
      
    });

  //Back to top button with scroll function
   $("#btt").click(function(){
     $('html, body').animate({scrollTop: 0}, 800);  
   });

});

