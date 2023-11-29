<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Personal Portfolio</title>
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
    integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"/>
</head>

<body>
    <header class="header">
        <a class="logo"><span>My</span> Portfolio</a>
        <nav class="navbar">
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#contact">Contact</a>
            <a href="#hobbies">Hobbies</a>
        </nav>
    </header>

    <section class="home" id="home">
        <div class="home-content">
            <h3>Hello, It's me</h3>
            <h1>John Andrei S. Francisco</h1>
            <h3>And I'm a future <span>Frontend Developer</span></h3>
            <p>Hi! Yes, I've always been fascinated by how websites work and I want to be able to create my own.
                <br /> It's really fascinating, exciting and creative field to be in.</p>
            <div class="social-media">
                <a href="https://www.facebook.com/Cixsohandsome?mibextid=ZbWKwL"><i class="bx bxl-facebook"></i></a>
                <a href="https://www.instagram.com/reeeiii26"><i class="bx bxl-instagram-alt"></i></a>
            </div>
            <a class="btn" href="#about">Read More</a>
        </div>

        <div class="home-img">
            <img src="img/dreiyi.png" alt="photo" />
        </div>
    </section>

    <section class="about" id="about">
        <div class="about-img">
            <img src="img/dreiyi.png" alt="photo" />
        </div>
        <div class="about-content">
            <h2 class="heading">About <span> Me</span></h2>
            <h3>Frontend Developer</h3>
            <p>I'm 3rd Year College taking course <span>BSIT</span> at <span><b>B</b></span>ulacan <span><b>S</b></span>tate <span><b>A</b></span>gricultural
                <span><b>U</b></span>niversity and I'm 20 years old. My journey into <span>Web</span> Development began
                with a curiosity about how websites come to life. I started by learning the fundamentals of HTML, CSS,and Javascript. Since i've developed into framework, 
                such as react to build dynamic and interactive user interface, 
                I'm continuously exploring new technologies to stay at the forefront of the ever-evolving web
                landscape.</p>
            <a href="#contact" class="btn">Please, Hire me :(</a>
        </div>
    </section>

    <section class="contact" id="contact">
        <div class="container">
            <div class="card">
                <div class="card-img">
                    <img src="img/dreiyi.png" alt="" />
                </div>
                <h2>John Andrei S. 
                    Francisco <br /><span>Future Web Developer</span></h2>
            </div>
            <ul>
                <li>
                    <a href="https://www.facebook.com/Cixsohandsome?mibextid=ZbWKwL"><i class="fa fa-facebook" aria-hidden="true"></i>Facebook</a>
                </li>
                <li>
                    <a href="https://www.instagram.com/reeeiii26"><i class="fa fa-instagram" aria-hidden="true"></i>Instagram</a>
                </li>
                <li>
                    <a ><i class="fa fa-phone" aria-hidden="true"></i>0965 - 324 - 8200</a>
                </li>
                <li>
                    <a href="mailto:andreifrancisco.basc@gmail.com"><i class="fa fa-envelope" aria-hidden="true"></i> andreifrancisco.basc@gmail.com</a>
                </li>
            </ul>
            <div class="toggle">
                <i class="fa fa-chevron-down" aria-hidden="true"></i>
            </div>
        </div>
    </section>

    <section class="hobbies" id="hobbies">
        <center><h1><b>PLAY <span>ONLINE</span> GAMES</b></h1></center><br><br><br><br><br><br><br><br><br><br>
        <div class="card-container">
            <div class="card1">
                <div class="imgBx">
                    <img src="img/mlbb.png" />
                </div>
                <div class="details">
                    <h3>Mobile Legends<br /></h3><br><br>
                    <p>
                        I started playing this game in 2020 with my high school classmates, our group was formed and we became happy because of this game.
                        I was addicted to this game when there was a pandemic, grind at any time with my classmates.
                    </p>
                </div>
            </div>

            <div class="card1">
                <div class="imgBx">
                    <img src="img/codm.jpg" />
                </div>
                <div class="details">
                    <h3>CALL OF DUTY MOBILE<br /></h3><br><br>
                    <p>
                        I played it in the year 2021, 2 years ago from now, I also played with my classmates then but I was in college. 
                        They became my friends because of this game, those times were happy even though there was a pandemic I had friends because of it.
                    </p>
                </div>
            </div>

            <div class="card1">
                <div class="imgBx">
                    <img src="img/coc.jpg" />
                </div>
                <div class="details">
                    <h3>Clash of Clans<br /></h3><br><br>
                    <p>
                        I played it when I was in grade 8 high school, just like in mobile legend I also played this game with my classmates, 
                        it was fun to play it with them in the same clan.
                    </p>
                </div>
            </div>
        </div>
    </section>
    

    <script src="https://unpkg.com/scrollreveal"></script>

    <script src="js/script.js"></script>
    <script>
        const container = document.querySelector(".container");
        const toggle = document.querySelector(".toggle");

        toggle.addEventListener("click", () => {
            container.classList.toggle("active");
        });
    </script>
</body>

</html>
