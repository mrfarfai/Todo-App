<!-- Coding by CodingLab | www.codinglabweb.com -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "icon" href = "/logo.png" type = "image/x-icon">

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="/style.css">
    
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    
    <?= $link ?>

    <title>IRSIYAT <?= $title ?></title> 
</head>
<body>
    <div class="mobile_header">
        <span class="image">
            <img src="/logo.png" alt="">
        </span>
        <span class="name">IRSIYAT</span>
    </div>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img class="bx bx-moon" src="/logo.png" alt="">
                </span>

                <div class="text logo-text">
                    <span class="name">IRSIYAT</span>
                    <span class="profession">Web developer</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="/">
                            <i class='bx bx-home-alt icon'></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="/todo-list">
                            <i class='bx bx-list-ul icon'></i>
                            <span class="text nav-text">Todo App</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-info-circle icon'></i>
                            <span class="text nav-text">Information</span>
                        </a>
                    </li>

                </ul>
            </div>

            <div class="bottom-content">

                <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text">Dark mode</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>
                
            </div>
        </div>

    </nav>

    <div class="navbar">
        <ul>
            <li class="active">
                <a href="#">
                    <i class='bx bx-home icon'></i>
                    <i class='bx bxs-home activeIcon'></i>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-user icon'></i>
                    <i class='bx bxs-user activeIcon'></i>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-heart icon'></i>
                    <i class='bx bxs-heart activeIcon'></i>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-folder icon'></i>
                    <i class='bx bxs-folder activeIcon'></i>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-cog icon'></i>
                    <i class='bx bxs-cog activeIcon'></i>
                </a>
            </li>
            <div class="indicator"></div>
        </ul>
    </div>


    <section class="home">
        <?= $content ?>
    </section>

    <script src="/script.js"></script>

    <script>

        window.location.href = "/todo-list";

        const navBar = document.querySelector(".navbar")
            allLi = document.querySelectorAll(".navbar ul li");

        allLi.forEach((li, index) => {
            li.addEventListener("click" , e =>{
                e.preventDefault(); //preventing from submitting
                navBar.querySelector(".active").classList.remove("active");
                li.classList.add("active");

                const indicator = document.querySelector(".indicator");
                console.log(index);
                indicator.style.transform = `translateX(calc(${index * 90}px))`;
            });
        });

  </script>
    
    <?= $script ?>

</body>
</html>