  <?php include "header.php"; ?>
  <main role="main" class="container">

  <div class="starter-template">
    <h1>API FOR A COURIER SERVICE</h1>
    <p class="lead">Type in parcel info</p>
  </div>

   <form method="POST" action="API/get_info.php">
    <fieldset>
        <div class="form-group">
          <label for="parcel">Customer Name</label>
          <input type="text" class="form-control" name="customer_name" id="customer_name" placeholder="Enter Parcel Name">
        </div> 
        <div class="form-group">
          <label for="parcel">Parcel Name</label>
          <input type="text" class="form-control" name="parcel_name" id="parcel_name" placeholder="Enter Parcel Name">
        </div>  
        <div class="form-group">
          <label for="parcel_weight">Parcel weight</label>
          <input type="text" class="form-control" name="parcel_weight" id="parcel_weight" placeholder="Enter the weight of parcel">
        </div>  
        <div class="form-group">
          <label for="distance">Distance</label>
          <input type="text" class="form-control" name="distance" id="distance" placeholder="Distance">
        </div>  
        <div class="form-group">
          <label for="city_from">From</label>
          <select class="form-control" name="city_from" id="city_from">
            <option>Badagry</option>
            <option>Ikeja</option>
            <option>Epe</option>
            <option>Ikorodu</option>
            <option>Mushin</option>
            <option>Shomolu</option>
          </select>
        </div>
        <div class="form-group">
          <label for="city_to">To</label>
          <select class="form-control" name="city_to" id="city_from">
            <option>Badagry</option>
            <option>Ikeja</option>
            <option>Epe</option>
            <option>Ikorodu</option>
            <option>Mushin</option>
            <option>Shomolu</option>
          </select>
        </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </fieldset>
  </form>

</main>

</html>
