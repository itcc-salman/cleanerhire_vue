<template>
  <!--Web_Footer-->
  <div class="web_footer">
    <div class="container">
      <div class="row">
        <div class="footer_tabs">
          <div class="footer_tab">
            <h3>Discover</h3>
            <ul>
              <li><a href="#">How it works</a></li>
              <li><a href="#">Airtasker for business</a></li>
              <li><a href="#">Earn money</a></li>
              <li><a href="#">New users FAQ</a></li>
              <li><a href="#">Find work</a></li>
            </ul>
          </div>
          <div class="footer_tab">
            <h3>Company</h3>
            <ul>
              <li><a href="#">About us</a></li>
              <li><a href="#">Careers</a></li>
              <li><a href="#">Community guidelines</a></li>
              <li><a href="#">Terms & conditions</a></li>
              <li><a href="#">Blog</a></li>
              <li><a href="#">Contact us</a></li>
              <li><a href="#">Privacy policy</a></li>
            </ul>
          </div>
          <div class="footer_tab">
            <h3>Existing Members</h3>
            <ul>
              <li><a href="#">Post a task</a></li>
              <li><a href="#">Browse tasks</a></li>
              <li><a href="#">Login</a></li>
              <li><a href="#">Support centre</a></li>
              <li><a href="#">Merchandise</a></li>
            </ul>
          </div>
          <div class="footer_tab">
            <h3>Popular Categories</h3>
            <ul>
              <li><a href="#">Handyman Services</a></li>
              <li><a href="#">Cleaning Services</a></li>
              <li><a href="#">Delivery Services</a></li>
              <li><a href="#">Removalists</a></li>
              <li><a href="#">Gardening Services</a></li>
              <li><a href="#">Automotive</a></li>
              <li><a href="#">Assembly Services</a></li>
              <li><a href="#">All Services</a></li>
            </ul>
          </div>
          <div class="footer_tab">
            <h3>Partners</h3>
            <ul>
              <li><a href="#">7Plus</a></li>
              <li><a href="#">New Idea</a></li>
              <li><a href="#">The West Australian</a></li>
              <li><a href="#">Marie Claire</a></li>
              <li><a href="#">PerthNow</a></li>
              <li><a href="#">Better Homes and Gardens</a></li>
              <li><a href="#">Seven West Media</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="copy_so">
          <div class="socials">
            <a href="#" target="_blank"><img src="front/images/fb.png" alt=""></a>
            <a href="#" target="_blank"><img src="front/images/in.png" alt=""></a>
            <a href="#" target="_blank"><img src="front/images/yt.png" alt=""></a>
            <a href="#" target="_blank"><img src="front/images/tw.png" alt=""></a>
          </div>
          <div class="copyright">
            <p>Copyright &copy; 2019 CleanerHire. All Right Reserved</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--Web_Footer-->
</template>

<script>
export default {
  name: 'FrontFooter',
  mounted: function () {
    this.initAOS()
    this.initCarousel()
    this.initOwlCarousel()
  },
  methods: {
    initAOS: function () {
      AOS.init({
        easing: 'ease-in-out-sine'
      })
    },
    initOwlCarousel: function () {
      $('#testimonial-slider').owlCarousel({
        items: 2,
        itemsDesktop: [1000, 2],
        itemsDesktopSmall: [979, 2],
        itemsTablet: [768, 1],
        pagination: true,
        autoPlay: false
      })
    },
    initCarousel: function () {
      $('.carousel').carousel({
        interval: 5000
      })
    }
  }
}
</script>
