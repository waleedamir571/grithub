<?php include 'header.php';?>
      
      <!-- Header section end -->


      <!-- Mobile Menu start -->
     
      <!-- Mobile Menu end -->


      <!-- Hero section start -->
      <section class="hero__area-4">
        <div class="cxu--hero-slider style-1">
          <div class="swiper hero__slider">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="slide">
                  <div class="container">
                    <div class="row align-items-center">
                      <div class="col-md-5" data-aos="fade-right" data-aos-duration="1000">
                        <p class="para gotham">Reshaping the creative landscape.</p>
                        <h1 class="text manrope"> Crafting powerful, insightful & extraordinary campaigns.</h1>
                        <div class="info">
                          <div class="shape">

                          </div>

                        </div>
                      </div>

                      <div class="col-md-5 offset-md-2" data-aos="fade-left" data-aos-duration="1000">
                        <div class="bg">
                          <!-- <p class="growth"><span class="red">G</span>ROWTH</p>
                          <p class="growth"><span class="red1">R</span>ESILIENCE</p>
                          <p class="growth"><span class="red1">I</span>NNOVATE</p>
                          <p class="growth"><span class="red">T</span>ENACITY</p> -->
                        </div>

                      </div>
                    </div>
                  </div>

                </div>
              </div>

            </div>

          </div>
        </div>
      </section>
      <!-- Hero section end -->

      <section class="service__area-4 pt-140  pb-140">
        <div class="container">

          <div class="row baseline">
            <div class="col-md-2" data-aos="fade-right" data-aos-duration="1000">
              <p class="about">About us</p>
            </div>

            <div class="col-md-8 offset-md-2" data-aos="fade-left" data-aos-duration="1000">
              <p class="para gotham">We're dedicated to elevating brands by crafting, powerful, inspiring, and effective
                marketing strategies. Backed by years of expertise, our unique blend of innovative thinking, streamlined
                tactics, and time-tested techniques allows us to amplify your brand's potential and deliver measurable
                results.
                <br>
                <br>

                Cultivating a culture of creativity that transcends the conventional norms. Creativity & teamwork – our
                company’s greatest assets. We don’t just simplify the complex—we make it extraordinary.

              </p>

              <div class="info">
                <div class="shape">

                </div>

              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Logo slider section start -->
      <section class="service__area-2 pt-140 pb-140" id="services">
        <div class="container">

          <div class="row">
            <div class="col-md-4" data-aos="fade-right" data-aos-duration="1000">
              <p class="mission">Mission</p>
              <div class="cxu__service style-2">

                <div class="service-item cxu-fade" data-ease="back">
                  <h3 class="title">Show <br>
                    the world</h3>
                  <p class="titletext">We aim to show the world the transformative potential of creative innovation.
                    Every
                    challenge is an opportunity to captivate and inspire our audience.</p>

                </div>
              </div>
            </div>

            <div class="col-md-4" data-aos="fade-up" data-aos-duration="1000">
              <div class="top-10">
                <p class="mission">Vision</p>
                <div class="cxu__service style-2">

                  <div class="service-item cxu-fade" data-ease="back">
                    <h3 class="title">Think Far <br>
                      Think Large</h3>
                    <p class="titletext">To ensure that our messages reach people in the most impactful and efficient
                      ways
                      possible. </p>

                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4" data-aos="fade-left" data-aos-duration="1000">
              <p class="mission">Values</p>
              <div class="cxu__service style-2">

                <div class="service-item cxu-fade" data-ease="back">
                  <h3 class="title">GRIT</h3>
                  <p class="titletext"><span class="class1">G</span>rowth - continuous learning and development.
                    <br>
                    <span class="class1">R</span>esilience - adapting to changes and overcoming obstacles.
                    <br>
                    <span class="class1">I</span>nnovate - strive to think outside the box!
                    <br>
                    <span class="class1">T</span>enacity - approaching everything with relentless commitment. 
                  </p>

                </div>
              </div>
            </div>
          </div>


        </div>
      </section>
      <!-- Logo slider section end -->


      <!-- About section start -->
      <section class="service__area-4 pt-140 pb-140">
        <div class="container-fluid1">

          <p class="agency work-sans">AGENCY</p>

        </div>
      </section>
      <!-- About section end -->


      <!-- Service section start -->

      <!-- Logo slider section end -->

      <?php include 'footer.php';?>
      <!-- Footer section start -->
    
<script>
  document.addEventListener('DOMContentLoaded', function() {
    // Initialize AOS
    AOS.init({
      duration: 1200, // Animation duration
      once: true, // Trigger animation only once
      disable: 'mobile' // Disable on mobile (optional if you want)
    });
  });
</script>
<script>
  // Ensure GSAP is ready
gsap.registerPlugin(ScrollTrigger);

// Function to create scroll-dependent animation for text
function createScrollAnimation(selector) {
  // Define the start and end points based on the screen width
  const isMobile = window.innerWidth <= 768;
  let startValue = isMobile ? "top 95%" : "top 80%";
  let endValue = isMobile ? "top 50%" : "top 30%";

  // Set up the animation with ScrollTrigger options for better responsiveness
  gsap.to(selector, {
    scale: 0.5, // Scale down to 50%
    scrollTrigger: {
      trigger: selector, 
      start: startValue,
      end: endValue,
      scrub: 0.5,
      markers: false, 
      invalidateOnRefresh: true, // Re-evaluate on resize or orientation change
      onUpdate: (self) => {
        // Ensure scaling applies smoothly during scroll
        gsap.set(selector, { scale: self.progress * 0.5 + 0.5 });
      }
    },
    ease: "none"
  });
}

// Apply the scroll animation function
createScrollAnimation('.agency');

// Add a listener to recreate animations on resize for full responsiveness
window.addEventListener("resize", () => {
  ScrollTrigger.refresh(); // Recalculates trigger positions
});

</script>