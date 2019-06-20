(function($){

    AOS.init();

    $('.modal').modal();

    // slider 
    $('.slider').slider({
        indicators: false,
        duration: 1000
    });

    // back - to - top - button
    $(".back-to-top").fadeOut("slow");
    $(window).scroll(function(e){
        if($(this).scrollTop() > 700)
        {
            $(".back-to-top").fadeIn("slow");
        }else{
            $(".back-to-top").fadeOut("slow")
        }
    });
    $(".back-to-top").click(scrollTopEffect);
    $(".fill-btn").click(scrollEffect);



    function scrollEffect()
    {
        scrollTopEffect();
        setTimeout(function(){
            $(".side-btn").parent().parent().addClass("fill-side-form-active");
        },1000)

    }
    function scrollTopEffect()
    {
        
            $("html, body").animate({scrollTop : 0},1500);
            return false;
        
    }

    $(".lfs-bg").css('minHeight','600px');



    // side fill form
    $(".side-btn").click(showsideform)

    function showsideform()
    {
        
            $this = $(this);
            $this.css("background","#ff19b0");
            $this.parent().parent().toggleClass("fill-side-form-active");
            if(!$this.parent().parent().hasClass("fill-side-form-active"))
            {
                $this.css("background","");
            }
        
    }

    
})(jQuery)






 




    



