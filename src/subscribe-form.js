$(".btn-subscribe").click(function(e){
    
    e.preventDefault();

    var $fullname = $(".fullname");
    if($fullname.val() == 0)
    {
        $fullname.focus();
        return false;
    }else{
        $.ajax({
            url: "subscribeForm.php",
            method: "POST",
            data:{subscribeusr:$fullname.val()},
            success:function(data)
            {
                
                $(".mssg").html(data);
                
            }
        });
    }
})