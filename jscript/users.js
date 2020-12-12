$(document).ready(function(){
    /* */
     prikazi();
     $("#clean").click(function(){
             ocistiSve();
     });
     $("#record").click(function(){
         if($("#users_id").val()!="")
         {
           $.post("../php/_users.php?funkcija=update", {users_id: $("#users_id").val(), users_name: $("#users_name").val(), users_lastname: $("#users_lastname").val(), users_email: $("#users_email").val(), users_password: $("#users_password").val(), confirm_password: $("#confirm_password").val(), users_status: $("#users_status").val(), users_addres: $("#users_addres").val(), users_phone: $("#users_phone").val()}, function(response){
             $("#answer").html(response);
             prikazi();
             ocistiSve();
         })  
         }
         else
         $.post("../php/_users.php?funkcija=insert", {users_name: $("#users_name").val(), users_lastname: $("#users_lastname").val(), users_email: $("#users_email").val(), users_password: $("#users_password").val()  , confirm_password: $("#confirm_password").val(), users_status: $("#users_status").val(), users_addres: $("#users_addres").val(), users_phone: $("#users_phone").val()}, function(response){
             $("#answer").html(response);
             prikazi();
             ocistiSve();
         })
         
     })
     $("#delete").click(function(){
        let users_id=$("#users_id").val();
        if(users_id==""){
            $("#answer").html("Niste izabrali korisnika za brisanje!!");
            return false;
        }
        if(!confirm("Da li ste sigruni da zelite izbrisete korisnika")) return false;
        $.post("../php/_users.php?funkcija=delete", {users_id:users_id}, function(response){
            $("#answer").html(response);
            prikazi();
            ocistiSve();
        })
    })
 });
 function prikazi(){
     $("#korisnici").load("../php/fill_users.php", function(response){
         //document.write(response);
         let odgovor=JSON.parse(response);
         $("#korisnici").html("");
         for(let i in odgovor)
             $("#korisnici").append("<div class='korisnik' data-id='"+odgovor[i].users_id+"' data-ime='"+odgovor[i].users_name+"' data-prezime='"+odgovor[i].users_lastname+"' data-email='"+odgovor[i].users_email+"' data-password='"+odgovor[i].users_password+"' data-confirm-password='"+odgovor[i].confirm_password+"' data-status='"+odgovor[i].users_status+"' data-adresa='"+odgovor[i].users_addres+"' data-telefon='"+odgovor[i].users_phone+"'>" + odgovor[i].users_id + ": " + odgovor[i].users_name +" "+ odgovor[i].users_lastname +"</div>");
             $(".korisnik").click(function(){
             $("#users_id").val($(this).data("id"));
             $("#users_name").val($(this).data("ime"));
             $("#users_lastname").val($(this).data("prezime"));
             $("#users_email").val($(this).data("email"));
             $("#users_password").val($(this).data("password"));
             $("#confirm_password").val($(this).data("confirm-password"));
             $("#users_status").val($(this).data("status"));
             $("#users_addres").val($(this).data("adresa"));
             $("#users_phone").val($(this).data("telefon"));
         /*    $("#users_email").attr("disabled", "disabled");
             $("#users_password").attr("disabled", "disabled"); */
         });
         
     });
 }
 function ocistiSve(){
     $("input").val("");
     $("select").val("0");
     $("#users_email").removeAttr("disabled");
     $("#users_password").removeAttr("disabled");
 }
 