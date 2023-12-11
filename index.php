<?php
require("headandfooter/head.php");
?>



<div class="container mt-3">
  <h1>Responsive Columns</h1>
  <p>Resize the browser window to see the effect.</p>
  <p>The columns will automatically stack on top of each other when the screen is less than 576px wide.</p>
  <div class="row">
    <div class="col-sm-3 p-5 bg-primary text-white">.col</div>
    <div class="col-sm-3 p-5 bg-dark text-white">.col</div>
    <div class="col-sm-3 p-5 bg-primary text-white">.col</div>
    <div class="col-sm-3 p-5 bg-dark text-white">.col</div>
  </div>
</div>





<?php
require("headandfooter/footer.php");
?>