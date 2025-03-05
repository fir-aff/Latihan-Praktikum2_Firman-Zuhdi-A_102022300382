var icon_mode = document.getElementById("icon-mode");

icon_mode.onclick = function(){
    document.body.classList.toggle("dark-theme")
    if(document.body.classList.contains("dark-theme")){
        icon_mode.src = "https://img.icons8.com/?size=100&id=nJvednUeM2dX&format=png&color=000000"
    }else{
        icon_mode.src = "https://img.icons8.com/?size=100&id=M3yCt1u9cL1E&format=png&color=000000"
    }
}