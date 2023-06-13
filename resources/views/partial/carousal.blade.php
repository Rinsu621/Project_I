
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100 carousel image" src="{{asset('./carouselpic/forst.jpg')}}" alt="Iphone 14 Pro Max" height="800px" width="100%">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100 carousel image" src="{{asset('./carouselpic/second.png')}}"  alt="Samsung S23 Ultra" height="800px" width="100%">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100 carousel image" src="{{asset('./carouselpic/3.jpg')}}" alt="Oneplus" height="800px" width="100%">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<style>
.carousel-image {
    height: 400px; /* Set the desired height for the images */
    width: 100%; /* Set the width to 100% to ensure it fits within the container */
    object-position: center; /* Center the image within the container */
  }
</style>

