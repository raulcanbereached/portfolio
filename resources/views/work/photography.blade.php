<div  id="photography" class="photography-container">
  <div id="overlay" onclick="off()">
    <div class="overlay-container">
      <img id="overlay-photo" src="#">
    </div>
  </div>
  <div class="photography-hud">
    <div class="photography-hud-title">
      <h1>Photography</h1>
    </div>
    <div class="photography-hud-narrative">
      <h3>Exploring Austin</h3>
      <p>One of my hobbies is seeing the world through the lens of a camera. Austin
        is one of the most photogenic places in Texas. Art and creativity can be found
        almost around every corner of the downtown area. Here are a few samples of my
        run around Town Lake:</p>
    </div>
  </div>
  <div id="img-carousel" class="carousel slide" data-ride="carousel" data-interval="6000">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="./media/photos/carousel-1.jpg" alt="First slide">
        <div class="grey-backdrop carousel-caption">
          <p>Skyline from Pfluger Pedestrian Bridge</p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="./media/photos/carousel-2.jpg" alt="Second slide">
        <div class="grey-backdrop carousel-caption">
          <p>City of Austin Power Plant</p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="./media/photos/carousel-3.jpg" alt="Third slide">
        <div class="grey-backdrop carousel-caption">
          <p>Bridge across W. Cesar Chavez St. - Downtown</p>
        </div>
      </div>
    </div>
  </div>

  <div class="flex-wrapper">
    <div class="flex-container">
      <div class="photo-colorization">
        <div class="photo-bucket" onclick="on('./media/photos/ATXLadyBirdLake-2c.jpg')">
          <img class="photo-bw" src="./media/photos/ATXLadyBirdLake-2.jpg">
          <img class="photo-color" src="./media/photos/ATXLadyBirdLake-2c.jpg">
        </div>
        <div class="photo-bucket" onclick="on('./media/photos/ATXLadyBirdLake-5c.jpg')">
          <img class="photo-bw" src="./media/photos/ATXLadyBirdLake-5.jpg">
          <img class="photo-color" src="./media/photos/ATXLadyBirdLake-5c.jpg">
        </div>
      </div>
    </div>
    <div class="flex-container">
      <div class="photo-colorization">
        <div class="photo-bucket" onclick="on('./media/photos/ATXLadyBirdLake-7c.jpg')">
          <img class="photo-bw" src="./media/photos/ATXLadyBirdLake-7.jpg">
          <img class="photo-color" src="./media/photos/ATXLadyBirdLake-7c.jpg">
        </div>
        <div class="photo-bucket" onclick="on('./media/photos/ATXLadyBirdLake-9c.jpg')">
          <img class="photo-bw" src="./media/photos/ATXLadyBirdLake-9.jpg">
          <img class="photo-color" src="./media/photos/ATXLadyBirdLake-9c.jpg">
        </div>
      </div>
    </div>
    <div class="flex-container">
      <div class="photo-colorization">
        <div class="photo-bucket" onclick="on('./media/photos/ATXLadyBirdLake-8c.jpg')">
          <img class="photo-bw" src="./media/photos/ATXLadyBirdLake-8.jpg">
          <img class="photo-color" src="./media/photos/ATXLadyBirdLake-8c.jpg">
        </div>
        <div class="photo-bucket" onclick="on('./media/photos/ATXLadyBirdLake-11c.jpg')">
          <img class="photo-bw" src="./media/photos/ATXLadyBirdLake-11.jpg">
          <img class="photo-color" src="./media/photos/ATXLadyBirdLake-11c.jpg">
        </div>
        <div class="photo-bucket" onclick="on('./media/photos/ATXLadyBirdLake-12c.jpg')">
          <img class="photo-bw" src="./media/photos/ATXLadyBirdLake-12.jpg">
          <img class="photo-color" src="./media/photos/ATXLadyBirdLake-12c.jpg">
        </div>
      </div>
    </div>
    <div class="flex-container">
      <div class="">
        <div class="photo-colorization">
          <div class="photo-bucket" onclick="on('./media/photos/ATXLadyBirdLake-13c.jpg')">
            <img class="photo-bw" src="./media/photos/ATXLadyBirdLake-13.jpg">
            <img class="photo-color" src="./media/photos/ATXLadyBirdLake-13c.jpg">
          </div>
          <div class="photo-bucket" onclick="on('./media/photos/ATXLadyBirdLake-14c.jpg')">
            <img class="photo-bw" src="./media/photos/ATXLadyBirdLake-14.jpg">
            <img class="photo-color" src="./media/photos/ATXLadyBirdLake-14c.jpg">
          </div>
          <div class="photo-bucket" onclick="on('./media/photos/ATXLadyBirdLake-6c.jpg')">
            <img class="photo-bw" src="./media/photos/ATXLadyBirdLake-6.jpg">
            <img class="photo-color" src="./media/photos/ATXLadyBirdLake-6c.jpg">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  function on(src){
    document.getElementById('overlay').style.display = "inline";
    $("#overlay-photo").attr("src", src);
  }
  function off(){
    document.getElementById('overlay').style.display = "none";
  }
</script>
