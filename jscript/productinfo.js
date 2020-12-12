
//animate imgChangeOne of product in main picture on click

$(document).ready(function(){
    $(".imgChange_One").click(function(){
        var a=this;
        $(".info_Img").animate({opacity:"0"}, "slow", function(){
            $(".info_Img").attr("src", $(a).attr("src"))
            .animate({opacity:"1"}, 100);
        });
    });
});
//animate imgChangeTwo of product in main picture on click
$(document).ready(function(){
    $(".imgChange_Two").click(function(){
        var a=this;
        $(".info_Img").animate({opacity:"0"}, "slow", function(){
            $(".info_Img").attr("src", $(a).attr("src"))
            .animate({opacity:"1"}, 100);
        });
    });
});
//end of product IMG animation

//animation of specification and comments
$(document).ready(function(){
    $(".spec").click(function(){
        $(".commentsInfo").hide();
        $(".comment").css({"background-color":"#fff", "transition": "background-color 0.7s ease-in-out"});
        $(".spec").css({"background-color":"#fac50f", "transition": "background-color 0.7s ease-in-out"});
        $(".specInfo").show();
      
    });
    $(".comment").click(function(){
        $(".specInfo").hide();
        $(".spec").css({"background-color":"#fff", "transition": "background-color 0.7s ease-in-out"});
        $(".comment").css({"background-color":"#fac50f", "transition": "background-color 0.7s ease-in-out"});
      $(".commentsInfo").show();
    });
  });
// end of animation of specification and comments
