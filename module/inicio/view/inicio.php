<div id="home">
<link rel="stylesheet" type="text/css" href="view/css/styles.css">
  
  <div class="main">
    <div class="slides">
      <img class="slide" src="view/fotos/bienvenidos.jpg" alt="">
      <img class="slide" src="view/fotos/Banner.jpg" alt="">
      <img class="slide" src="view/fotos/banners2.jpg" alt="">
      <img class="slide" src="view/fotos/banner4.jpg" alt="">
   </div>
 </div>

 <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
 <script src="view/js/main.js"></script>
 
 <script>
   $(function(){
    $(".slides").slidesjs({
      play: {
        active: true,
        // [boolean] Generate the play and stop buttons.
        // You cannot use your own buttons. Sorry.
        effect: "slide",
        // [string] Can be either "slide" or "fade".
        interval: 3000,
        // [number] Time spent on each slide in milliseconds.
        auto: true,
        // [boolean] Start playing the slideshow on load.
        swap: true,
        // [boolean] show/hide stop and play buttons
        pauseOnHover: false,
        // [boolean] pause a playing slideshow on hover
        restartDelay: 2500
        // [number] restart delay on inactive slideshow
      }
    });
  });
</script>
</div>
