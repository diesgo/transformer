<?php

include('./templates/header.php');

?>

<div class="w3-container w3-content" style="min-height: 380px;">
  <h1>Blog</h1>

  <style>
    .slider-container {
      display: flex;
      width: 100%;
      height: 100vh;
      overflow-x: scroll;
      scroll-snap-type: x mandatory;
    }

    .slider-container img {
      flex: 0 0 100%;
      width: 100%;
      object-fit: cover;
      scroll-snap-align: center;
    }
  </style>
  <div class="slider-container">
    <img class="slider-item" src="https://images.unsplash.com/photo-1580501170961-bb0dbf63a6df?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2970&q=80" />
    <img class="slider-item" src="https://images.unsplash.com/photo-1580501170888-80668882ca0c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2940&q=80" />
    <img class="slider-item" src="https://images.unsplash.com/photo-1572508589584-94d778209dd9?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2940&q=80" />
  </div>
</div>

<?php

include('./templates/footer.php');

?>