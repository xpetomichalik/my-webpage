<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */
 
?>


<section class="contactxd">
          <div class="contact-me" id="kontakt">
            
            <div class="box">
              <div class="contact form">

                <h3>Send me a message!</h3>
                <form action="#" class="form-contact">
                  <div class="form-box">
                    <div class="row50">
                      <div class="input-box">
                        <span>First name</span>
                        <input id="fname" type="text" placeholder="Your  first name">
                      </div>
                      <div class="input-box">
                        <span>Last name</span>
                        <input id="lname" type="text" placeholder="Your last name">
                      </div>
                    </div>
                      <div class="row50">
                        <div class="input-box">
                          <span>Email</span>
                          <input id="email" type="email" placeholder="Your email">
                        </div>
                        <div class="input-box">
                          <span>Mobile</span>
                          <input id="phone" type="text" placeholder="Your phone number">
                        </div>
                        </div>
                        <div class="row100">
                          <div class="input-box">
                            <span>Message</span>
                            <textarea id="message" placeholder="Write your message"></textarea>
                          </div>
                        </div>
                        <div class="row100">
                          <div class="input-box">
                           
                           <input id="submit" type="submit" value="Send">
                         </div> 
                    </div>
                  </div>
                </form>
                
              </div>
              

              <div class="contact info">
                <h3>Contact info</h3>
                <div class="info-box">
                  <div>
                  <span><i class="fa-solid fa-location-dot"></i></span>
                  <p>Košice,Slovakia,
                  040 18</p>
                </div>
                <div>
                  <span><i class="fa-solid fa-envelope"></i></span>
                  <a href="mailto:michalik.peter99@gmail.com">michalik.peter99@gmail.com</a>
                </div>
                <div>
                  <span><i class="fa-sharp fa-solid fa-phone"></i></span>
                  <a href="tel:+421 944 445 869">+421 944 445 869</a>
                </div>
              
                <ul class="sci">
                  <li><a href="https://www.linkedin.com/in/peter-michal%C3%ADk-0182a0102/"><i class="fa-brands fa-linkedin"></i></a></li>
                  <li><a href="https://www.facebook.com/peto.mio/"><i class="fa-brands fa-facebook"></i></a></li>
                  <li><a href="https://github.com/xpetomichalik"><i class="fa-brands fa-github"></i></a></li>
                  <li><a href="https://instagram.com/petomichalik"><i class="fa-brands fa-instagram"></i></a></li>
                  
                </ul>
              </div>
            </div>


              <div class="contact map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d141785.44652840437!2d21.276679093851005!3d48.675741342544725!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ssk!2ssk!4v1680626625197!5m2!1ssk!2ssk" 
                 style="border:0;" 
                allowfullscreen="" loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            
          </div>

        </section>

       

          <div class="copyright">
            <p></i>Copyright <i class="fa-solid fa-copyright"></i> Made by <b> PETER MICHALIK</b></p>
          </div>
          <a href="#" class="to-top">
            <i class="fas fa-chevron-up"></i>
          </a>
          <!-- <script>
            $(window).on("load",function(){
     $(".loader-wrapper").fadeOut("slow");
});
          </script>  -->
           <script>
            ScrollReveal({
              reset: true,
              distance:"5px",
              duration:2500,
              delay:100});
              ScrollReveal().reveal(".aboutxd, .section-header, .info-title, .section-title",{delay:500, origin:"left"});
              ScrollReveal().reveal(".main-title",{delay:400, origin:"top", duration:3000});
              ScrollReveal().reveal(".main-info", {delay:1200, origin:"right", duration:4000});
              ScrollReveal().reveal(".aboutmecont, .btnn, .progress-bar, .fa-ul, .year1, .hehe, .fa-brands, .box-img, .viewmore-btn", {delay:600, origin:"bottom", duration:2000});
            
          </script> 
    <script>
      var navLinks = document.getElementById("navLinks");
      function showMenu(){
        navLinks.style.right = "0";
      }
      function hideMenu(){
        navLinks.style.right = "-200px";
      }
    </script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script> -->
    <!-- <script>
   const swiper = new Swiper(".swiper", {
  loop: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev"
  },
  pagination: {
    el: ".swiper-pagination",
    type: "bullets",
    clickable: true
  },
  keyboard: true,
  mousewheel: true


});
    </script> -->
    <script>const toTop = document.querySelector(".to-top");

    window.addEventListener("scroll", () => {
      if (window.pageYOffset > 100) {
        toTop.classList.add("active");
      } else {
        toTop.classList.remove("active");
      }
    })
  </script>
  <script>
    const fname = document.getElementById('fname');
    const lname = document.getElementById('lname');
    const email = document.getElementById('email');
    const phone = document.getElementById('phone');
    const message = document.getElementById('message');
    const submit = document.getElementsByClassName("form-contact")[0];
 
   submit.addEventListener('submit',(e)=>{
     e.preventDefault();
     let ebody = `
     <b>Name: </b>${fname.value}&nbsp;${lname.value}
     <br>
     <b>Email: </b>${email.value}
     <br>
     <b>Phone: </b>${phone.value}
     <br>
     <b>Message: </b>${message.value}
     <br>
     `;
 
     Email.send({
         SecureToken : "c2394e33-74ba-4188-9c48-e8fa851a2ce8", //add your token here
         To : 'michalik.peter99@gmail.com', 
         From : "michalik.peter99@gmail.com",
         Subject : "New Email from   " + email.value,
         Body: ebody
     }).then(
       message => alert(message)
     );
 });
   </script>
   <script>
   const cookieContainer = document.querySelector(".cookie-container");
    const cookieButton = document.querySelector(".cookie-btn");
    
    cookieButton.addEventListener("click", () => {
      cookieContainer.classList.remove("active");
      localStorage.setItem("cookieBannerDisplayed", "true");
    });
    
    setTimeout(() => {
      if (!localStorage.getItem("cookieBannerDisplayed")) {
        cookieContainer.classList.add("active");
      }
    }, 2000);
    </script>
<?php wp_footer(); ?>

  </body>
</html>