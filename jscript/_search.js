$(document).ready(function(){
    $("#searchText").keyup(function(){
        var query= $(this).val();
        if(query!="")
        {
            $.ajax({
                url: "../php/_search.php",
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
});