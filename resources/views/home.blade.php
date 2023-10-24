@extends('layouts.app')

@section('content')

    <link rel="stylesheet" href="style.css">

    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Google+Sans" />
      <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
          rel="stylesheet" />
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1"
          crossorigin="anonymous" />
      <link rel="shortcut icon" href="./favicon.ico">

    <div class="background gradient">
    </div>
    <div class="page">
        <header>
            <nav>
                <a href="#about" class="selected" id='getAbout'>
                    <span class="fas fa-user"></span>
                    <span class="link">About</span>
                </a>
                <a href="#resume" id='getResume'>
                    <span class="fas fa-file"></span>
                    <span class="link">Resume</span>
                </a>
                <a href="#contact" id='getContact'>
                    <span class="fas fa-at"></span>
                    <span class="link">Contact</span>
                </a>
            </nav>
        </header>
        <main>
            <section id="presentation" class="profile">
                <div class="profile-background"></div>
                <div>
                    <div class="profile-image">
                        <img src="https://i.ibb.co/JHjYgmv/profile.png" alt="Ilham Rafi Mahameru">
                    </div>
                    <h1 class="profile-name" id="nombre">Ilham Rafi Mahameru</h1>
                    <h2 class="profile-profession">Software Engineer</h2>
                    <div class="profile-social" id="profile-social">
                        <a href="www.dribbble.com" class="fab fa-dribbble"></a>
                        <a href="www.twitter.com" class="fab fa-twitter"></a>
                        <a href="www.github.com" class="fab fa-github"></a>
                        <a href="www.spotify.com" class="fab fa-spotify"></a>
                        <a href="www.stackoverflow.com" class="fab fa-stack-overflow"></a>
                    </div>
                </div>
                <div class="profile-buttons">
                    <a href="/myCV.txt" download>DOWNLOAD CV <i class="fas fa-download"></i></a>
                    <a href="#contact">CONTACT ME <i class="fas fa-arrow-right"></i></a>
                </div>
            </section>
            <section id="about" class="about view">
                <article class="about-aboutMe">
                    <h3 class="title">About Me</h3>
                    <div class="line-left">
                        <p>I am Ilham Rafi Mahameru, software engineer from Indonesia, Yogyakarta. I was  someone who interested in web developement, game developement
                            and android developement. I love to talk with you about our unique.</p>
                        </p>
                        <div>
                            <div>
                                <span>AGE . . . . </span>20
                            </div>
                            <div>
                                <span>RESIDENCE . . . . </span>Indonesia
                            </div>
                            <div>
                                <span>ADDRESS . . . . </span>Yogyakarta, Indonesia
                            </div>
                        </div>
                    </div>
                </article>
                <article class="about-services">
                    <h3 class="title">My Hobbies</h3>
                    <div class="line-left">
                        <article class="line-down">
                            <div class="fas fa-code"></div>
                            <h4>Coding</h4>
                            <p>Coding is not just a hobby; it's a passion that ignites my creativity and problem-solving skills. When I sit down with my computer, lines of code become the paint on my canvas, and the possibilities are limitless.</p>
                        </article>
                        <article class="line-down">
                            <div class="fas fa-music"></div>
                            <h4>MUSIC</h4>
                            <p> It's a vital part of my daily life and an art form that profoundly influences my emotions and experiences. listening to music is like nourishing my soul. It's a source of comfort, inspiration, and joy that weaves its way through the tapestry of my life.</p>
                        </article>
                        <article>
                            <div class="fas fa-bullhorn"></div>
                            <h4>Organization</h4>
                            <p>it's a way of life that brings purpose and meaning to my days. Being actively engaged in an organization is about more than just volunteering time; it's about making a difference, personal growth, and creating a sense of belonging. It's a hobby that enriches my life, provides a sense of fulfillment, and allows me to play an active role in shaping the world around me. </p>
                        </article>
                        <article>
                            <div class="fas fa-gamepad"></div>
                            <h4>GAMING</h4>
                            <p>it's a dynamic and engaging hobby that offers a world of excitement and opportunities. It's not merely about staring at a screen and pushing buttons; it's an all-encompassing hobby that challenges me, entertains me, and connects me with a vibrant global community. It's an opportunity to explore, compete, and achieve while indulging in a form of entertainment that is as diverse as it is immersive.</p>
                        </article>
                    </div>
                </article>
            </section>
            <section id="resume" class="resume">
                <h3 class="title">Resume</h3>
                <article class="resume-lines">
                    <section class="resume-line line-left">
                        <h4 class="line-down"> <i class="fas fa-briefcase"></i> Experience</h4>
                        <article class="line-down">
                            <div class="date active">2022 - PRESENT</div>
                            <h5 class="name">Lorem, ipsum.</h5>
                            <h6 class="company">Lorem, ipsum.</h6>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, ex.</p>
                        </article>
                        <article class="line-down">
                            <div class="date">2022 - PRESENT</div>
                            <h5 class="name">Lorem, ipsum.</h5>
                            <h6 class="company">Lorem, ipsum.</h6>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, ex.</p>
                        </article>
                        <article>
                            <div class="date">2022 - PRESENT</div>
                            <h5 class="name">Lorem, ipsum.</h5>
                            <h6 class="company">Lorem, ipsum.</h6>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, ex.</p>
                        </article>
                    </section>
                    <section class="resume-line line-left">
                        <h4 class="line-down"> <i class="fas fa-university"></i> Education</h4>
                        <article class="line-down">
                            <div class="date">2019 - 2022</div>
                            <h5 class="name">VOCATIONAL HIGHSCHOOL</h5>
                            <h6 class="company">YOGYAKARTA</h6>
                            <p>Major in Computer & Network Engineering</p>
                        </article>
                        <article class="line-down">
                            <div class="date">2022 - PRESENT</div>
                            <h5 class="name">GADJAH MADA UNIVERSITY</h5>
                            <h6 class="company">YOGYAKARTA</h6>
                            <p>Bachelor's Degree in Software Engineering, Vocational Faculty</p>
                        </article>
                        <article>
                            <div class="date">2022 - PRESENT</div>
                            <h5 class="name">Lorem, ipsum.</h5>
                            <h6 class="company">Lorem.</h6>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, ex.</p>
                        </article>
                    </section>
                </article>
                <article class="resume-skills">
                    <h3 class="title">My Skills</h3>
                    <div>
                        <section class="line-left">
                            <h4 class="line-down"> <i class="fas fa-tv"></i> DESIGN</h4>
                            <div class="line-down">
                                <div>Web Design</div>
                                <div>
                                    <div style="width: 70%"></div>
                                </div>
                            </div>
                            <div class="line-down">
                                <div>Game Design</div>
                                <div>
                                    <div style="width: 64%"></div>
                                </div>
                            </div>
                            <div class="line-down">
                                <div>Photoshop</div>
                                <div>
                                    <div style="width: 66%"></div>
                                </div>
                            </div>
                            <div>
                                <div>Graphic Design</div>
                                <div>
                                    <div style="width: 78%"></div>
                                </div>
                            </div>
                        </section>
                        <section class="line-left">
                            <h4 class="line-down"><i class="fas fa-code"></i> CODING</h4>
                            <div class="line-down">
                                <div>Kotlin/Java</div>
                                <div>
                                    <div style="width: 60%"></div>
                                </div>
                            </div>
                            <div class="line-down">
                                <div>PHP/MYSQL</div>
                                <div>
                                    <div style="width: 40%"></div>
                                </div>
                            </div>
                            <div class="line-down">
                                <div>Angular/JavaScript</div>
                                <div>
                                    <div style="width: 78%"></div>
                                </div>
                            </div>
                            <div>
                                <div>HTML/CSS</div>
                                <div>
                                    <div style="width: 80%"></div>
                                </div>
                            </div>
                        </section>
                    </div>
                </article>
            </section>
            <section id="contact" class="contact">
              <h3 class="title">Get in Touch</h3>
              <div class="contact-information line-left">
                <div>
                  <span>ADDRESS . . . . </span> Yogyakarta, Indonesia
                </div>
                <div>
                  <span>EMAIL . . . . </span> ilhamrafi73@gmail.com
                </div>
                <div>
                  <span>PHONE . . . . </span> +62 822 4210 2470
                </div>
                <div>
                    <span>WEBSITE . . . . </span> https://github.com/IlhamRafi73
                </div>
              </div>
            </section>
        </main>
    </div>

<!-- partial -->
  <script  src="./script.js"></script>



@endsection
