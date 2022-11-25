function SunMoon(argument) {
    body.classList.toggle("dark");

    if(body.classList.contains("dark")){
        document.querySelector(".mobile-sun-i").style.display = "block";
        document.querySelector(".mobile-moon-i").style.display = "none";
        modeText.innerText = "Light mode";
        localStorage.setItem("Background color", "Dark mode");
    }else{
        document.querySelector(".mobile-sun-i").style.display = "none";
        document.querySelector(".mobile-moon-i").style.display = "block";
        modeText.innerText = "Dark mode";
        localStorage.setItem("Background color", "Light mode");
    }
}
const body = document.querySelector('body'),
      sidebar = body.querySelector('nav'),
      toggle = body.querySelector(".toggle"),
      modeSwitch = body.querySelector(".toggle-switch"),
      modeText = body.querySelector(".mode-text"),
      SunMoonBtn = document.querySelector(".SunMoon");


toggle.addEventListener("click" , () =>{
    sidebar.classList.toggle("close");
})

modeSwitch.addEventListener("click" , SunMoon);
SunMoonBtn.addEventListener("click" , SunMoon);

window.onload = function() {
    let Background = localStorage.getItem("Background color");
    body.classList.remove("dark");
    document.querySelector(".mobile-sun-i").style.display = "none";
    document.querySelector(".mobile-moon-i").style.display = "block";

    if(Background == "Dark mode") {
        document.querySelector(".mobile-sun-i").style.display = "block";
        document.querySelector(".mobile-moon-i").style.display = "none";
        body.classList.add("dark");
    }
    modeText.innerText = Background;
};

