<template>
  <!--Web_Header-->
  <div class="web_header">
    <nav id="navbar" class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top_menu" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html"><img src="front/images/logo.png" alt=""></a>
        </div>
        <div id="top_menu" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="book-a-cleaning-jobs.html">Book a Cleaning Jobs</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">How it works</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#hire_register" class="trigger-btn" data-toggle="modal">Sign up</a></li>
            <li><a href="#hire_login" class="trigger-btn" data-toggle="modal">Log in</a></li>
            <li><a href="become-a-cleaner.html" class="head_btn">Become a Cleaner</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
  <!--Web_Header-->
</template>

<script>
export default {
  name: 'FrontHeader'
}
</script>
