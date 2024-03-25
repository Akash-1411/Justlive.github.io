<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>JustLive</title>
  <link rel="icon" href="/images/favicon-enhanced.png">
  <link rel="stylesheet" href="css/style.css" />
  <link rel="manifest" href="manifest.json">
  <link rel="apple-touch-icon" href="/images/favicon-enhanced.png" />
  <meta name="theme-color" content="#000000" />
  <link rel="stylesheet" text="text/CSS"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" text="text/CSS"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<style>
  html {
    scroll-behavior: smooth;

  }

  .hidden {
    visibility: hidden;
  }

  .back-top-wrap {
    position: fixed;
    bottom: 5rem;
    right: 1rem;
    background-color: #80F7D1;
    padding: 1rem 1.2rem;
    border-radius: 50%;
    cursor: pointer;
    transition: .3s ease-in-out;
    z-index: 100;
  }

  .back-top-wrap:hover {
    background-color: #00a2ff;
    color: #80F7D1;
  }

  .back-top-wrap:hover .fas.fa-arrow-up {
    color: white;
  }

  .fas.fa-arrow-up {
    color: #00488F;
    transition: 0.3s ease-in-out;
  }
</style>

<body onload="myFunction()">
  <div class="loading-wrapper">
    <img src="./logo.png" id="loading" />
  </div>

  <!-- Back to top button -->
  <div id="back-top-div" class="back-top-wrap">
    <i class="fas fa-arrow-up"></i>
  </div>
  <header>
    <nav class="nav" id="nav">
      <div>
        <a class="navbar-brand" href="#!"> <img src="./images/logo12.png" alt="Logo" class="logo" /></a>
      </div>
      <div class="nav-links" id="navLinks">
        <ul class="links" id="navmenu">
          <li><a href="#">HOME</a></li>
          <li><a href="#about">ABOUT</a></li>
          <li><a href="#services">SERVICES </a></li>
          <li><a href="html/contact.html">CONTACT US </a></li>
        </ul>
      </div>
      <button class="login-button"><a href="../html/login.html">SignUp / Login</a></button>
      <div class="hamburger" id="ham">
        <i class="cancel fa-solid fa-xmark"></i>

        <svg class="burger" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" height="1em" width="1em"
          xmlns="http://www.w3.org/2000/svg">
          <path
            d="M904 160H120c-4.4 0-8 3.6-8 8v64c0 4.4 3.6 8 8 8h784c4.4 0 8-3.6 8-8v-64c0-4.4-3.6-8-8-8zm0 624H120c-4.4 0-8 3.6-8 8v64c0 4.4 3.6 8 8 8h784c4.4 0 8-3.6 8-8v-64c0-4.4-3.6-8-8-8zm0-312H120c-4.4 0-8 3.6-8 8v64c0 4.4 3.6 8 8 8h784c4.4 0 8-3.6 8-8v-64c0-4.4-3.6-8-8-8z">
          </path>
        </svg>
      </div>
    </nav>
    <div class="menu" id="menu">
      <ul class="menu-link">
        <li><a href="#">HOME</a></li>
        <li><a href="#about">ABOUT</a></li>
        <li><a href="#services">SERVICES </a></li>
        <li><a href="html/contact.html">CONTACT US </a></li>
      </ul>
    </div>
    <div class="content">
      <h1>Welcome to JustLive</h1>
      <div class="container">
        <h3><span class="auto-type" style="font-size: 40px;font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;"></a></span></h3>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
      <script>
        var typed = new Typed(".auto-type", {
          strings: ["The one-step solution to get relief from your stress. Live a stress-free life!"],
          typeSpeed: 50,
          backspeed: 50,
          loop: true
        })
      </script>
      <a href="#services" class="rainbow-button" alt="Explore"></a>
    </div>

  </header>

  <!-- About Section -->
  <section id="about" class="about">
    <h1 data-aos="flip-right">About Us</h1>
    <div class="max-width">
      <div data-aos="zoom-in" class="photo"><img src="./images/about.jpg" alt="" height="300px" width="330px"></div>
      <div class="about-content">
        <p data-aos="fade-left" class="text-1"> We are a team of open source contributors who have created this website
          JustLive with the aim to provide a <span>one step solution</span> to get relief from stress. </p>
        <p data-aos="fade-left" class="text-3">We hope that everyone can live a <span>stress free life </span>with the
          help of<span> JustLive.</span></p>
      </div>
    </div>
    <h3><span style="color: rgb(0, 0, 0);">MEET OUR MEMBERS</span></h3>

    <div class="box">

        <div class="card" data-aos="fade-up" ddata-aos-duration="800">
          <img src="./images/dhanush.jpg" alt="shayan" loading="lazy">
          <h5>DHANUSH </h5>
          <div class="pra" >
            <p>Member</p>
            <a href="#"><button>Let's Connect</button></a>
          </div>
        </div>
      <div data-aos="fade-up" ddata-aos-duration="800" class="card">
        <img src="./images/akash.jpg" alt="soumyadeep" loading="lazy">
        <h5>AKASH </h5>
        <div class="pra">
          <p>Member</p>
          <a href="#"><button>Let's Connect</button></a>
        </div>
      </div>
      <div data-aos="fade-up" data-aos-duration="800" class="card">
        <img src="./images/karthik.jpg" alt="" loading="lazy">
        <h5>KARTHIK ATHREYA</h5>
        <div class="pra">
          <p>Head of The Team</p>
          <a href="#"><button>Let's Connect</button></a>
        </div>
      </div>
      <div data-aos="fade-up" data-aos-duration="800" class="card">
        <img src="./images/jeevika.jpg" alt="chaitri" loading="lazy">
        <h5>JEEVIKA</h5>
        <div class="pra"><br>
          <p class="p">Member</p>
          <a href="#"><button>Let's Connect</button></a>
        </div>

      </div>


      <div data-aos="fade-up" data-aos-duration="800" class="card">
        <img src="./images/iniya.jpg" alt="sasanka" loading="lazy">
        <h5>INIYA SHAKSHY</h5>
        <div class="pra">
          <p>Member</p>
          <a href="#"><button>Let's Connect</button></a>
        </div>
      </div>

    </div>
  </section>

  <!-- SERVICES SECTION -->
  <section id="services">
    <h1>Our Services</h1>
    <div data-aos="zoom-in" data-aos-duration="800" class="container">
      <div class="responsive audio">
        <div class="round-image">
          <img src="./images/audio.png" alt="audio" loading="lazy" />
        </div>
        <div class="description">
          <h2>Mood Tracking</h2>
          <p>
            Mood tracking with questions makes the mood normal.
          </p>
          <a href="Question1.php">
            Let's Explore
          </a>
        </div>
      </div>
      <!-- <div data-aos="zoom-in" data-aos-duration="800" class="responsive reading">
        <div class="round-image">
          <img src="./images/reading.png" alt="read" loading="lazy" />
        </div>
        <div class="description">
          <h2>Reading Therapy</h2>
          <p>
            Motivational quotes and books can help us to divert and change our mood.
          </p>
          <a href="html/readingTherapy.html">
            Let's Explore
          </a>
        </div>
      </div> -->
      <div data-aos="zoom-in" data-aos-duration="800" class="responsive yoga">
        <div class="round-image">
          <img src="./images/yoga.png" alt="yoga" loading="lazy" />
        </div>
        <div class="description">
          <h2>Self Care</h2>
          <p>
            Routine Self care therapy which makes healthier.
          </p>
          <a href="self_care.php">
            Let's Explore
          </a>
        </div>
      </div>
      <div data-aos="zoom-in" data-aos-duration="800" class="responsive doctor">
        <div class="round-image">
          <img src="./images/doctor.png" alt="doctor" loading="lazy" />
        </div>
        <div class="description">
          <h2>Consult A Doctor</h2>
          <p>
            If you're facing too many problems, you should consult a doctor.
          </p>
          <a href="consult.html" target="_blank">
            Let's Explore
          </a>
        </div>
      </div>
      <div data-aos="zoom-in" data-aos-duration="800" class="responsive talk">
        <div class="round-image">
          <img src="./images/talking.png" loading="lazy" alt="talking" />
        </div>
        <div class="description">
          <h2>Emotional Chatbot</h2>
          <p>
            A quick short conversation can often bring smile to our face.
          </p>
          <a href="#">
            Let's Explore
          </a>
        </div>
      </div>
      <div data-aos="zoom-in" data-aos-duration="800" class="responsive laugh">
        <div class="round-image">
          <img src="./images/taskplanner.jpg" alt="laughing" />
        </div>
        <div class="description">
          <h2>Remainder</h2>
          <p>
            Effectively managing tasks can contribute to a stress-free experience.
          </p>
          <a href="remainder.html">
            Let's Explore
          </a>
        </div>
      </div>
      
      
      <!-- <div class="responsive child">
        <div class="round-image">
          <img src="./images/child.jpg" alt="child" loading="lazy" />
        </div>
        <div class="description">
          <h2>Child Therapy</h2>
          <p>
            Children make us forget about worries with their innocence.
          </p>
          <a href="./html/childTherapy.html">
            Let's Explore
          </a>
        </div>
      </div> -->
      <!-- <div class="responsive spiritual">
        <div class="round-image">
          <img src="./images/spiritualtherapy.jpg" alt="spiritual" loading="lazy" />
        </div>
        <div class="description">
          <h2>Spiritual Therapy</h2>
          <p>
            Helps you to become more mindful in your thinking.
          </p>
          <a href="./html/spirituality.html" target="_blank">
            Let's Explore
          </a>
        </div>
      </div> -->
      <div class="responsive special">
        <div class="round-image">
          <img src="./images/specialtherapy.jpg" alt="special" loading="lazy" />
        </div>
        <div class="description">
          <h2>Mindful Techniques</h2>
          <p>
            Question to determine the mentor stability.
          </p>
          <a href="html/audioTherapy.html" target="_blank">
            Let's Explore
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonials Section -->
  <!-- Testimonials Section -->
  <section id="testimonial" class="section-100">
    <div class="testimonials_heading">
      <h1>Testimonials</h1>
    </div>
    <div class="testimonial-view">
      <div class="owl-carousel">
        <div class="testimonial-box">

          <figure class="testimonal-Card">
            <blockquote> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eius autem placeat sapiente nemo facere earum consequatur assumenda, quos dolorum. Molestias magni quaerat eum non consequuntur alias at facere perferendis eaque!
              <div class="arrow"></div>
            </blockquote>
            <img src="./images/stress_free.jpg" alt="sample3" />
            <div class="author">
              <h5>ABC</h5>
            </div>
        </div>
        <div class="testimonial-box">
          <!-- <i class="fa fa-quote-left quote-icon"></i> -->
          <figure class="testimonal-Card hover">
            <blockquote> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas sit dolores vero odit dolorem accusantium, quidem aut ex, ad natus minus perferendis delectus exercitationem earum excepturi incidunt asperiores magni molestiae! <div class="arrow"></div>
            </blockquote>
            <img src="./images/stress_free.jpg" alt="sample47" />
            <div class="author">
              <h5>ABC</h5>
            </div>
          </figure>
        </div>
        <div class="testimonial-box">
          <!-- <i class="fa fa-quote-left quote-icon"></i> -->
          <figure class="testimonal-Card">
            <blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt illum sunt eius accusamus nemo obcaecati temporibus, non, repellat fuga nulla laborum ea! Vel maxime atque fugiat ad iure ullam at.
              <div class="arrow"></div>
            </blockquote>
            <img src="./images/stress_free.jpg" alt="sample17" />
            <div class="author">
              <h5>ABC</h5>
            </div>
          </figure>

        </div>
        <div class="testimonial-box">
          <!-- <i class="fa fa-quote-left quote-icon"></i> -->
          <figure class="testimonal-Card">
            <blockquote>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt facere nulla reprehenderit adipisci doloribus ipsum, minus fuga totam fugit consectetur, veniam ad facilis repellendus architecto dolores quisquam aut praesentium amet.
              <div class="arrow"></div>
            </blockquote>
            <img src="./images/stress_free.jpg" alt="sample17" />
            <div class="author">
              <h5>ABC</h5>
            </div>
          </figure>

        </div>
      </div>
    </div>
    </div>
  </section>
  <!-- Faq section -->
  <!-- <section class="faq">
    <div class="faq_heading">
      <h1>Frequently Asked Questions</h1>
    </div>
    <div class="accordion">
      <div class="accordion__item">
        <button class="accordion__btn">

          <span class="accordion__caption"><i class="far fa-lightbulb"></i>Who are we and what do we do?</span>
          <span class="accordion__icon"><i class="fa fa-plus"></i></span>
        </button>

        <div class="accordion__content">
          <p>We are a team of open source contributors who have created this website "JustLive"
            with the aim
            to provide a one step solution to get relief from stress. We hope that everyone can live a
            stress free life with the help of JustLive.</p>
        </div>
      </div>

      <div class="accordion__item">
        <button class="accordion__btn">

          <span class="accordion__caption"><i class="far fa-lightbulb"></i>What are the services we offer?</span>
          <span class="accordion__icon"><i class="fa fa-plus"></i></span>
        </button>

        <div class="accordion__content">
          <p>We offer multiple services like:
            <br>
            1. Audio Therapy
            <br>
            2. Reading Therapy
            <br>
            3. Yoga Therapy
            <br>
            4. Laughing Therapy
            <br>
            5. Talking Therapy
            <br>
            6. Doctor Consultation
            <br>
            7. Child Therapy
            <br>
            8. Spiritual Therapy
          </p>
        </div>
      </div>

      <div class="accordion__item">
        <button class="accordion__btn">

          <span class="accordion__caption"><i class="far fa-lightbulb"></i>How can you Contact Us?</span>
          <span class="accordion__icon"><i class="fa fa-plus"></i></span>
        </button>

        <div class="accordion__content">
          <p> You can contact us via <a class="email" href="mailto:sukoon665@gmail.com">sukoon665@gmail.com</a>
          </p>
        </div>
      </div>

      <div class="accordion__item">
        <button class="accordion__btn">

          <span class="accordion__caption"><i class="far fa-lightbulb"></i>What is Reading Therapy?</span>
          <span class="accordion__icon"><i class="fa fa-plus"></i></span>
        </button>

        <div class="accordion__content">
          <p>Reading therapy is a creative art therapy that uses literature to support good
            mental health and is a versatile and cost-effective treatment. It includes storytelling or the reading of
            specific texts.</p>
        </div>
      </div>

      <div class="accordion__item">
        <button class="accordion__btn">

          <span class="accordion__caption"><i class="far fa-lightbulb"></i>What is Audio Therapy?</span>
          <span class="accordion__icon"><i class="fa fa-plus"></i></span>
        </button>

        <div class="accordion__content">
          <p>Audio Therapy includes auditory and vibratory inputs which are used to influence a person's psychological
            state, includes sound healing, vibroacoustic sound therapy, music, and music therapy.</p>
        </div>
      </div>

      <div class="accordion__item">
        <button class="accordion__btn">

          <span class="accordion__caption"><i class="far fa-lightbulb"></i>What is Yoga Therapy?</span>
          <span class="accordion__icon"><i class="fa fa-plus"></i></span>
        </button>

        <div class="accordion__content">
          <p>Yoga therapy uses yoga postures, breathing exercises, meditation, and guided imagery to improve mental and
            physical health.</p>
        </div>
      </div>

      <div class="accordion__item">
        <button class="accordion__btn">

          <span class="accordion__caption"><i class="far fa-lightbulb"></i>What is Laughing Therapy?</span>
          <span class="accordion__icon"><i class="fa fa-plus"></i></span>
        </button>

        <div class="accordion__content">
          <p>Laughing therapy uses humor to help relieve pain and stress and improve a person's sense of well-being
            through jokes and playful exercises that encourage hearty, continuous, and lively laughter.</p>
        </div>
      </div>

      <div class="accordion__item">
        <button class="accordion__btn">

          <span class="accordion__caption"><i class="far fa-lightbulb"></i>What is Talking Therapy?</span>
          <span class="accordion__icon"><i class="fa fa-plus"></i></span>
        </button>

        <div class="accordion__content">
          <p>Talking therapy involves talking to someone to help deal with negative feelings or other mental health
            problems. It helps shy individuals open up their problems to others so that they can help them overcome
            them.</p>
        </div>
      </div>

      <div class="accordion__item">
        <button class="accordion__btn">

          <span class="accordion__caption"><i class="far fa-lightbulb"></i>What is Child Therapy?</span>
          <span class="accordion__icon"><i class="fa fa-plus"></i></span>
        </button>

        <div class="accordion__content">
          <p>Child therapy includes the watching of cute videos and images of children, as children make us
            forget about our problems with their innocence and cuteness.</p>
        </div>
      </div>

      <div class="accordion__item">
        <button class="accordion__btn">

          <span class="accordion__caption"><i class="far fa-lightbulb"></i>What is Spritual Therapy?</span>
          <span class="accordion__icon"><i class="fa fa-plus"></i></span>
        </button>

        <div class="accordion__content">
          <p>Spiritual therapy is a form of counseling that attempts to treat a person's soul as well as mind and body
            by accessing individual belief systems and using
            that faith in a higher power to explore areas of conflict in life.</p>
        </div>
      </div>
    </div>
    </div>
  </section> -->

  <!-- footer start -->
  <footer>
    <div class="footer-container">
      <!--logo and info column-->
      <div class="col">
        <!--logo insert-->
        <img src="./images/logo12.png" alt="logo" class="footlogo"/>
        <div class="footercontent">
          <!-- <h2 class="footerheading">JUSTLIVE</h2> -->
          <p class="footerpara">go stress free</p>
        </div>
      </div>

      <!--ADDRESS COLUMN-->

      <div class="footer-side-col">
        <div class="col">
          <h3>
            ADDRESS
            <div class="underline"><span></span></div>
          </h3>
          <p>Tamil Nadu, India</p>
          <p class="email-id"><a href="mailto:JustLive123@gmail.com">JustLive123@gmail.com</a></p>
        </div>
        <!--HOME COLUMN-->
        <div class="col">
          <h3>HOME</h3>
          <ul>
            <li><a href="#about">About Us</a></li>
            <li>
              <a href="#">Code Of Conduct</a>
            </li>
            <li>
              <a href="#">Contribute</a>
            </li>
            <li>
              <a href="#">Donate</a>
            </li>
          </ul>
        </div>
        <!--OUR SERVICES COLUMN-->
        <div class="col">
          <h3>
            SERVICES
            <div class="underline"><span></span></div>
          </h3>
            <ul>
            <li>
              <a href="https://sukoon-stress-free.netlify.app/html/audiotherapy">Audio Therapy</a>
            </li>
            <!-- <li>
              <a href="https://sukoon-stress-free.netlify.app/html/readingtherapy">Reading Therapy</a>
            </li> -->
            <li>
              <a href="https://sukoon-stress-free.netlify.app/html/yogatherapy.html">Yoga Therapy</a>
            </li>
            <li>
              <a href="https://sukoon-stress-free.netlify.app/html/laughTherapy.html">Laughing Therapy</a>
            </li>
            <li>
              <a href="https://sukoon-stress-free.netlify.app/html/talkingtherapy">Talking Therapy</a>
            </li>
           <li>
            <a href="https://www.practo.com/counselling-psychology">Consult A theapist</a>
           </li>
            <li>
              <a href="https://sukoon-stress-free.netlify.app/html/childTherapy">Child Therapy</a>
            </li>
            <li>
              <a href="https://sukoon-stress-free.netlify.app/html/spirituality">Spiritual Therapy</a>
            </li>
            <li>
              <a href="https://sukoon-stress-free.netlify.app/html/specialTherapy">Special Therapy</a>
            </li>
          </ul>
        </div>
        <!--CONTACTS COLUMN-->
        <div class="col">
          <h3>
            CONTACTS
            <div class="underline"><span></span></div>
          </h3>
          <div class="social-menu">
            <ul>
              <a href="#" target="_blank">
                <li id="social-twitter"><i class="fab fa-2x fa-twitter"></i></li>
              </a>
              <a href="#" target="_blank">
                <li id="social-github"><i class="fab fa-2x fa-github"></i></li>
              </a>
              <a href="#" target="_blank">
                <li id="social-linkedin"><i class="fab fa-2x fa-linkedin-in"></i></li>
              </a>
            </ul>
          </div>
        </div>
      </div>
    </div>
    </div>
  </footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script>

    let preloader = document.querySelector(".loading-wrapper");
    function myFunction() {
      preloader.style.display = 'none';
      document.body.style.overflow = 'auto';
    }
    let navbar = document.querySelector("#nav");
    let navmenu = document.querySelector("#navmenu");

    window.onscroll = function () {
      if (window.pageYOffset >= navmenu.offsetTop) {
        navbar.classList.add("sticky");
      } else {
        navbar.classList.remove("sticky");
      }
    };

    window.onscroll = () => {
      if (window.scrollY > 100) {
        navbar.classList.add('nav-active');
      } else {
        navbar.classList.remove('nav-active');
      }
    };
  </script>
  <script>
    if ('serviceWorker' in navigator) {
      window.addEventListener('load', () => {
        navigator.serviceWorker.register('./serviceworker.js')
          .then((reg) => console.log('Success', reg.scope))
          .catch((err) => console.log('Error', err))
      })
    }
  </script>
  <script src="js/index.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script src="js/script.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>

</html>
