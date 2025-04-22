<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<link rel="stylesheet" href="../css/search.css">

<form class="searchbar" action="./searching.php" method="post">
  <div class="search">
    <div class="location">
      <label for="location">location</label>
      <div class="locationtext">
        <ion-icon name="location"></ion-icon>
        <input type="text" name="location" id="location" placeholder="Lalitpur" />
      </div>
    </div>
    <div class="price">
      <label for="location">price</label>
      <div class="locationtext">
        <img src="./componets/price.png" alt="" srcset="" class="rs"/>
        <input type="text" name="location" id="location" placeholder="Min-price" />
        <img src="./componets/price.png" alt="" srcset="" class="rs"/>
        <input type="text" name="location" id="location" class="min" placeholder="Max-price" />
      </div>
    </div>
    <div class="searchbtn">
      <button>
        search
      </button>
    </div>
  </div>
      
</form>

