<footer class="footer__area">

<div class="footer__btm-wrapper">
  <div class="container">
    <div class="">
      <div class="row baseline">
        <div class="col-md-2">
          <div class="footer__contact">
            <div class="footer__logo">
              <img src="assets/imgs/home/footer-logo.png" alt="Logo">
            </div>
          </div>
        </div>
        <div class="col-md-3 offset-md-7">
          <div class="footer__social-wrapper">
            <p class="work-sans footer-text">©2024–GRITHUB. All Rights Reserved.</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
</footer>
<!-- Footer section end -->

</div>
</div>

<script src="assets/js/jquery-3.6.1.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/swiper-bundle.min.js"></script>
<script src="assets/js/jquery.meanmenu.min.js"></script>
<script src="assets/js/counter.js"></script>
<script src="assets/js/gsap.min.js"></script>
<script src="assets/js/ScrollSmoother.min.js"></script>
<script src="assets/js/ScrollTrigger.min.js"></script>
<script src="assets/js/SplitText.min.js"></script>
<script src="assets/js/MotionPathPlugin.min.js"></script>
<script src="assets/js/DrawSVGPlugin.min.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/main.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/ScrollTrigger.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" defer></script>
</body>

</html>

<script>
function toggleMobileMenu() {
const mobileMenu = document.getElementById("mobileMenu");
mobileMenu.style.display = (mobileMenu.style.display === "block") ? "none" : "block";
}
</script>

<script>
document.addEventListener("DOMContentLoaded", function () {
const toggleButton = document.querySelector(".mobile-menu-toggle");
const menu = document.querySelector(".header__menu");

toggleButton.addEventListener("click", function () {
menu.classList.toggle("active");
});
});
</script>
