<?php include 'form.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="mediaqueries.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>
<body>
    <nav id ="nav"> 
        <div class ="logo">.RABIN</div>
        <div> 
            <ul class="nav-links">
              <li><a href="./index.html">Home</a></li>
                <li><a href="#about">About</a></li>
                <!-- <li><a href="#experience">Experience</a></li> -->
                <li><a href="#projects">Projects</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </nav>
    <nav id="hamburger-nav">
        <div class="logo">.RABIN</div>
        <div class="hamburger-menu">
          <div class="hamburger-icon" onclick="toggleMenu()">
            <span></span>
            <span></span>
            <span></span>
          </div>
          <div class="menu-links">
            <li><a href="./index.html" onclick="toggleMenu()">Home</a></li>
            <li><a href="#about" onclick="toggleMenu()">About</a></li>
            <li><a href="#projects" onclick="toggleMenu()">Projects</a></li>
            <li><a href="#contact" onclick="toggleMenu()">Contact</a></li>
          </div>
        </div>
      </nav>
      <section id="profile">
        <div class="profilepic">
            <img src="./Images/pp.jpg" alt="rabinpp" />
          </div>
        <div class="section__text">
          <p class="section__text1">Hello, I'm</p>
          <h1 class="title">Rabin</h1>
          <p class="section__text2">CS Student</p>
          <div class="btn-container">
            <button class="btn btn-color-2"onclick="">Download CV</button>
            <button class="btn btn-color-2" onclick="location.href='./#contact'">Contact Info</button>
          </div>
          <div id="socials-container">
            <a href="https://www.linkedin.com" target="_blank">
                <img src="./assets/linkedin.png"  alt="My LinkedIn profile"  class="icon"  />  </a>
            <a href="https://github.com" target="_blank">
                <img src="./assets/github.png"  alt="My Github profile"  class="icon" /></a>
          </div>
        </div>
      </section>
      <section id="about">
        <p class="section__text1">Get To Know More</p>
        <h1 class="title">About Me</h1>
        <div class="section-container">
          <div class="profilepic">
            <img src="./Images/pp3.jpg" alt="Profile picture" class="about-pic" />
          </div>
          <div class="about-details-container">
            <div class="about-containers">
              <div class="details-container">
                <img src="./assets/experience.png" alt="Experience icon"class="icon"/>
                <h3>Skills</h3>
                <p>HTML <br />CSS<br>Javascript</p>
              </div>
              <div class="details-container">
                <img src="./assets/education.png"alt="Education icon"class="icon" />
                <h3>Education</h3>
                <p>+2 [Science]<br />BSc.CSIT [5th sem]</p>
              </div>
            </div>
            <div class="text-container">
              <p>
              Hello! I’m Rabin, a passionate student eager to learn and explore various programming languages such as HTML, CSS , javascript and Git. I enjoy solving problems and gradually building my skills by working on projects that help me understand both front-end and back-end development. With a strong curiosity and dedication, I’m committed to turning ideas into practical applications while continuously growing my knowledge. When I’m not coding, I love spending time with my friends.
                <br>Let’s create something amazing together!</br>
              </p>
            </div>
          </div>
        </div>
        <img src="./assets/arrow.png"alt="Arrow icon"class="icon arrow"onclick="location.href='./#projects'"/>
      </section>
      
      <section id="projects">
        <p class="section__text1">Browse My Recent</p>
        <h1 class="title">Projects</h1>
        <div class="project-details-container">
          <div class="about-containers">
            <!-- First Project-->
            <div class="details-container color-container">
              <div class="article-container">
                <img src="./Images/project1.png" alt="Project 1"class="project-img"/>
              </div>
              <h2 class="project-sub-title project-title">My Portfolio</h2>
              <div class="btn-container">
                <button class="btn btn-color-2 project-btn" onclick="location.href=''">Github</button>
                <button class="btn btn-color-2 project-btn"onclick="location.href=''">Live Demo</button>
              </div>
            </div>
           <!-- Second Project-->
            <div class="details-container color-container">
              <div class="article-container">
                <img src="./Images/project2.png" alt="Project 2" class="project-img"/>
              </div>
              <h2 class="project-sub-title project-title">Online Clothing Site</h2>
              <div class="btn-container">
                <button class="btn btn-color-2 project-btn"onclick="location.href=''"> Github</button>
                <button class="btn btn-color-2 project-btn"  onclick="location.href=''" >Live Demo </button>
              </div>
            </div>
            <!-- Third Project-->
            <div class="details-container color-container">
              <div class="article-container">
                <img
                  src="./Images/project3.png"
                  alt="Project 3"
                  class="project-img"
                />
              </div>
              <h2 class="project-sub-title project-title">Memory Matching game</h2>
              <div class="btn-container">
                <button class="btn btn-color-2 project-btn"onclick="location.href=''" >Github</button>
                <button class="btn btn-color-2 project-btn" onclick="location.href=''">Live Demo</button>
              </div>
            </div>

          </div>
        </div>
      
        <img src="./assets/arrow.png" alt="Arrow icon" class="icon arrow" onclick="location.href='./#contact'" />
      </section>
      
      <section id="contact">
        <h1 class="title">Get in Touch</h1>
        <div class="form-container">
         
            <?php if ($formSuccess): ?>
              <div class="alert alert-success">
                Thank you for your message! We'll get back to you soon.
              </div> 
            <?php endif; ?>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>#contact" method="post" >
              <!-- onsubmit="return validateForm()" -->
              <h2>Contact Me</h2>
              <label for="name">Name *</label>
              <input type="text" id="name" name="name" value="<?php echo $name; ?>" required>
              <span class="error"><?php echo $nameErr; ?></span>
    
              <label for="email">Email *</label>
              <input type="email" id="email" name="email" value="<?php echo $email; ?>" required>
              <span class="error"><?php echo $emailErr; ?></span>
    
               <label for="subject">Subject</label>
              <input type="text" id="subject" name="subject" value="<?php echo $subject; ?>">
     
              <label for="message">Message *</label>
              <textarea id="message" name="message" rows="5" required><?php echo $message; ?></textarea>
              <span class="error"><?php echo $messageErr; ?></span>
    
              <button class="btn btn-color-2 contact-btn" type="submit">Send Message</button>
            </form>
          </div>
        
    </section>
      <footer>
        <div class="social-container">

          <a href="https://www.facebook.com/rabinghimrie" target="_blank" alt="Facebook"><i class="fab fa-facebook-f"></i></a>
          <a href="https://www.instagram.com" target="_blank" alt="Instagram"><i class="fab fa-instagram"></i></a>
          <a href="https://github.com/githubrabin1" target="_blank" alt="GitHub"> <i class="fab fa-github"></i></a>
          <a href="https://mail.google.com/mail/u/0/?tab=rm&ogbl#inbox?compose=new" target="_blank" alt="Gmail"><i class="fas fa-envelope"></i></i></a>
          <a href="https://x.com/darwinnneeez" target="_blank" alt="Twitter"> <i class="fab fa-twitter"></i></a>
    
      </div>
        <nav>
          <div class="nav-links-container">
            <ul class="nav-links">
              <li><a href="./index.html">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#projects">Projects</a></li>
              <li><a href="#contact">Contact</a></li>
              

              
            </ul>
          </div>
        </nav>

       
        <p>Copyright &#169; 2025 @Rabin Ghimire. All Rights Reserved.</p> 
      </footer>
    <script src="script.js"></script>
</body>
</html>