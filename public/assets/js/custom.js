// responsive chat page <event>

let resTap = document.querySelectorAll(".responsive-chats .buttons a");
let resTaps = document.querySelectorAll(".responsive-chats .buttons ");
let resTapArr = Array.from(resTap);
let resCont = document.querySelector(".responsive-chats .res-chat");
let resBack = document.querySelector(".responsive-chats .res-chat .back");
let resNav = document.querySelector(".responsive-chats .chat-nav span");


resTapArr.forEach(function (ele){
    ele.addEventListener("click", function() {
        resCont.style.right ="0";
        document.body.style.overflow = "hidden";
    });
});

resBack.addEventListener("click", function(){
    resCont.style.right ="-100%";
    document.body.style.overflow = "auto";
});

resNav.addEventListener("click", function(){
    resCont.style.right ="-100%";
    document.body.style.overflow = "auto";
});
