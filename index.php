  <?php include "header.php"; ?>
  <main role="main" class="container">

  <div class="starter-template">
    <h1>GET DEV PROJECT API FOR FRANCE</h1>
    <p class="lead">You can type in any city in <b>France</b> to get the latitude and longitude of that city</p>
  </div>

   <form method="GET" action="API/suggestion.php">
    <fieldset>
        <div class="form-group">
          <label for="location">Insert Location</label>
          <input type="text" class="form-control" name="g" id="location" placeholder="Enter Location">
        </div>
       
      <button type="submit" class="btn btn-primary">Search Location...</button>
    </fieldset>
  </form>

</main>

</html>
