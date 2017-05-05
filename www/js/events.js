$(function() { $('.banner').unslider({animation: 'fade', autoplay: true, arrows: false,
    speed: 500, delay: 3000,  dots:false, fluid: false }); })
$(document).ready(function(){
$('.intrest').click(function(){
     $(this).next().css("display","none");
     ($(this).next()).next().css("display","block");
    ($(this).next()).next().text("I'm  Interested!");
     $(this).css("display","none");

});
$('.attend').click(function(){
     $(this).prev().css("display","none");
      $(this).next().css("display","block");
    $(this).next().text("I'm  Going!");
    $(this).css("display","none");

});

$('.s').click(function(){
     $(this).prev().css("display","block");
    $(this).prev().prev().css("display","block");
    $(this).css("display","none");

});

$('.s,.intrest,.attend,.pre').hover(
    function(){$(this).css("opacity","0.7");},
    function(){$(this).css("opacity","1");});

$('.pre').click(function(){
    $('.modal').css("display" , "block");
});

$(".close").click(function(){
    $('.modal').css("display" , "none");
});

$(window).click(function(e){
    if(e.target==$('.modal'))
 $('.modal').css("display" , "none");
});
});

/*<div style="margin:0;width:100%;display:flex">
<div class="col-6 grid">
         <div class="col-4"><img  src="images/img3.jpg"></div>
        <div class="col-6">
        <p><b>Title:</b> Parashoot game... agiasbjadgjna</p>
        <br><br>
        <p><b>Date:</b> 23 oct </p>
        </div>
        <div class="col-2">
            <button src="like.png" onclick="changecolor();"></button>
            <button src="going.png"  onclick = "increment()"></button>
        </div>
    </div>
<div class="col-6 grid">
         <div class="col-4"><img  src="images/img2.jpg"></div>
        <div class="col-6">
        <p><b>Title:</b> Parashoot game... agiasbjadgjna</p>
        <br><br>
        <p><b>Date:</b> 23 oct </p>
        </div>
        <div class="col-2">
            <button src="like.png" onclick="changecolor();"></button>
            <button src="going.png"  onclick = "increment()"></button>
        </div>
    </div>
</div>
<div style="margin:0;width:100%;display:flex">
<div class="col-6 grid">
         <div class="col-4"><img  src="images/img3.jpg"></div>
        <div class="col-6">
        <p><b>Title:</b> Parashoot game... agiasbjadgjna</p>
        <br><br>
        <p><b>Date:</b> 23 oct </p>
        </div>
        <div class="col-2">
            <button src="like.png" onclick="changecolor();"></button>
            <button src="going.png"  onclick = "increment()"></button>
        </div>
    </div>
<div class="col-6 grid">
         <div class="col-4"><img  src="images/img2.jpg"></div>
        <div class="col-6">
        <p><b>Title:</b> Parashoot game... agiasbjadgjna</p>
        <br><br>
        <p><b>Date:</b> 23 oct </p>
        </div>
        <div class="col-2">
            <button src="like.png" onclick="changecolor();"></button>
            <button src="going.png"  onclick = "increment()"></button>
        </div>
    </div>
</div><div style="margin:0;width:100%;display:flex">
<div class="col-6 grid">
         <div class="col-4"><img  src="images/img3.jpg"></div>
        <div class="col-6">
        <p><b>Title:</b> Parashoot game... agiasbjadgjna</p>
        <br><br>
        <p><b>Date:</b> 23 oct </p>
        </div>
        <div class="col-2">
            <button src="like.png" onclick="changecolor();"></button>
            <button src="going.png"  onclick = "increment()"></button>
        </div>
    </div>
<div class="col-6 grid">
         <div class="col-4"><img  src="images/img2.jpg"></div>
        <div class="col-6">
        <p><b>Title:</b> Parashoot game... agiasbjadgjna</p>
        <br><br>
        <p><b>Date:</b> 23 oct </p>
        </div>
        <div class="col-2">
            <button src="like.png" onclick="changecolor();"></button>
            <button src="going.png"  onclick = "increment()"></button>
        </div>
    </div>
</div>
*/