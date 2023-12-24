<div class="box-collapse">
    <div class="title-box-d">
      <h3 class="title-d">Search Property</h3>
    </div>
    <span class="close-box-collapse right-boxed ion-ios-close"></span>
    <div class="box-collapse-wrap form">
      <form action="search-result.php" method="POST" class="form-a">
        <div class="row">
          <div class="col-md-12 mb-2">
            <div class="form-group">
              <label for="Type">Keyword</label>
              <input type="text" name="keyword" class="form-control form-control-lg form-control-a" placeholder="Keyword">
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="Type">Type</label>
              <select name="type" class="form-control form-control-lg form-control-a" id="Type">
                <option value="All Type">All Type</option>
                <option value="rent">For Rent</option>
                <option value="sale">For Sale</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="city">City</label>
              <select name="city" class="form-control form-control-lg form-control-a" id="city">
                <option value="All City">All City</option>
                <option value="Ilorin">Ilorin</option>
                <option value="Abuja">Abuja</option>
                <option value="Oshogbo">Oshogbo</option>
                <option value="Ile-Ife">Ile-Ife</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="bedrooms">Bedrooms</label>
              <select name="bedrooms" class="form-control form-control-lg form-control-a" id="bedrooms">
                <option value="Any">Any</option>
                <option value="1">01</option>
                <option value="2">02</option>
                <option value="3">03</option>
                <option value="4">04</option>
                <option value="5">05</option>
                <option value="6">06</option>
                <option value="7">07</option>
                <option value="8">08</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="garages">Garages</label>
              <select name="garages" class="form-control form-control-lg form-control-a" id="garages">
                <option value="Any">Any</option>
                <option value="1">01</option>
                <option value="2">02</option>
                <option value="3">03</option>
                <option value="4">04</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="bathrooms">Bathrooms</label>
              <select name="bathrooms" class="form-control form-control-lg form-control-a" id="bathrooms">
                <option value="Any">Any</option>
                <option value="1">01</option>
                <option value="2">02</option>
                <option value="3">03</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="price">Min Price</label>
              <select name="min_price" class="form-control form-control-lg form-control-a" id="price">
                <option value="Unlimite">Unlimite</option>
                <option value="50000">&#x20A6; 50,000</option>
                <option value="100000">&#x20A6; 100,000</option>
                <option value="150000">&#x20A6; 150,000</option>
                <option value="400000">&#x20A6; 400,000</option>
                <option value="600000">&#x20A6; 600,000</option>
                <option value="800000">&#x20A6; 800,000</option>
              </select>
            </div>
          </div>
          <input type="hidden" name="search" value="true">
          <div class="col-md-12">
            <button type="submit" class="btn btn-b">Search Property</button>
          </div>
        </div>
      </form>
    </div>
  </div>