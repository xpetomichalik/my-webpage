<?php 
/*

Template name: HomePage

*/
     
get_header(); ?>


<section class="about-me" id="aboutme">
      
      <h1 class="section-title">About me</h1> 
      <p class="aboutmecont" >Hello everyone!<br>
         My name is <strong>Peter</strong>, 
         I am 24 years old and I am happy to welcome you here. <br>
        I started to learn programming during the spring 2022 and <br>
        I've been passionate about web development as well as web design since then. My main field of focus is HTML,CSS and JavaScript and a bit of React.JS. <br>
        The main resource of my learning is through <strong>udemy</strong> courses as well as <strong>skillmea.sk</strong> or <strong>itnetwork.cz</strong>. <br>
         I am learning each day something new and implementing that on my own so called "projects". As a tech enthusiast I am open to any new technology/programming language, <br>
         because as being said: <strong>" You are as many times human, as many languages you know." 😃  </strong></p>
         
         <div class="row">
          <div class="skills">
            <h2 class="section-title"><span class="bodka">.</span>skills</h2>
            <h2><i class="fa-brands fa-html5"></i></h2>
            <div class="progress-bar">
              <div class="html"><span>85%</span></div>
            </div>
            <h2><i class="fa-brands fa-css3-alt"></i></h2>
            <div class="progress-bar">
              <div class="css"><span>80%</span></div>
            </div>
              
            <h2><i class="fa-brands fa-square-js"></i></h2>
            <div class="progress-bar">
              <div class="javascript"><span>45%</span></div>
            </div>
            <h2><i class="fa-brands fa-react"></i></h2>
            <div class="progress-bar">
              <div class="react"><span>30%</span></div>
            </div>
                </div>
                <div class="card">
                    <div class="card-content">
                <div class="hobbies">
                  <h2 ><span class="bodka">.</span>hobbies</h2>
                    <ul class="fa-ul">
                      <li>movies</li>
                      <li>fitness</li>
                      <li>hiking</li>
                      <li>biking</li>
                      <li>fishing</li>
                      <li>reading</li>
                      <li>gaming</li>
                      
                    </ul>
                </div>
              </div>
              </div>
                    <div class="card">
                    <div class="card-content">
                <div class="education">
                    <h2><span class="bodka">.</span>education</h2>
                    <div class="year1">
                    <span class="year">2013-2018</span>
                    <p>EGJAK - english bilingual gymnasium </p>
                    <span class="year">2018-2020</span>
                    <p>Technical university in Kosice - informatics  </p>
                    <span class="year">2021-present</span>
                    <p>UPJS - geography and geoinformatics </p>
</div>
                    </div>
                    </div>
          
                </div>
            </div>
          
         
        </section>
        <section class="my-work" id="portf">
          
          <div class="wrapper">
          <h1 class="section-header">My portfolio</h1>
          <p class="hehe">All of my small projects/apps were done with ❤ in HTML,CSS,JavaScript.<br>
           </p>
           <div class="main-content">
           
            
              <div class="box-img">
                <img src="<?php echo get_template_directory_uri();?>/images/weatherapp.png">
                <div class="img-text">
                  <div class="popis">
                    <h2>Weather app</h2>
                    <p>Insert a city name, get weather!</p>
                  </div>
                </div>
              </div>
              <div class="box-img">
                <img src="<?php echo get_template_directory_uri();?>/images/oldportf.png">
                <div class="img-text">
                  <div class="popis">
                    <h2>Personal webpage</h2>
                    <p>First version of my personal webpage</p>
                  </div>
                </div>
              </div>
          
            <div class="box-img">
              <img src="<?php echo get_template_directory_uri();?>/images/Screenshot_6.png">
              <div class="img-text">
                <div class="popis">
                  <h2>Responsive web</h2>
                  <p>Recreated crave game website</p>
                </div>
              </div>
            </div>
            <div class="box-img">
              <img src="<?php echo get_template_directory_uri();?>/images/Screenshot_5.png">
              <div class="img-text">
                <div class="popis">
                  <h2>Guess game</h2>
                  <p>Simple guess game from udemy course</p>
                </div>
              </div>
            </div>
            
            <div class="box-img">
              <img src="<?php echo get_template_directory_uri();?>/images/login.png">
              <div class="img-text">
                <div class="popis">
                  <h2>Login form</h2>
                  <p>Login form template</p>
                </div>
              </div>
            </div>
            <div class="box-img">
              <img src="<?php echo get_template_directory_uri();?>/images/Screenshot_3.png">
              <div class="img-text">
                <div class="popis">
                  <h2>Calendar</h2>
                  <p>Calendar with an option to switch between dark and light mode</p>
                </div>
              </div>
            </div>
            <div class="box-img">
              <img src="<?php echo get_template_directory_uri();?>/images/Screenshot_7.png">
              <div class="img-text">
                <div class="popis">
                  <h2>Calculator</h2>
                  <p>Functional calculator in JavaScript</p>
                </div>
              </div>
            </div>
            <div class="box-img">
              <img src="<?php echo get_template_directory_uri();?>/images/Screenshot_1.png">
              <div class="img-text">
                <div class="popis">
                  <h2>To-do list</h2>
                  <p>To-do list with option to remove tasks. Tasks stay stored after refreshing a webpage</p>
                </div>
              </div>
            </div>
            <div class="box-img">
              <img src="<?php echo get_template_directory_uri();?>/images/Screenshot_4.png">
              <div class="img-text">
                <div class="popis">
                  <h2>Digital clock</h2>
                  <p>Simple digital clock with 12 hours format</p>
                </div>
              </div>
            </div>
          </div>
        </div>
       
        </section>
         

<?php get_footer(); ?>
