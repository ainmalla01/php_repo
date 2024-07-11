
<form class="searchbar" action="./searching.php" method="post">
        <div class="inputsearch">
          <input type="text" placeholder="location" class="search-input" name="location" />
          <select name="service" id="rooms">
            <option value="" >select room</option>
            <option value="1 room">
                        1 room
                    </option>
                    <option value="2 room">
                        2 room
                    </option>
                    <option value="1 flat">
                        1 flat
                    </option>
          </select>
          <select name="type" id="">
            <option value="">Select type</option>
            <option value=" home type">acumadation</option>
            <option value="office type">office</option>
          </select>
        <div class="price">
          <label for="PRICE_IN">PRICE </label>
          <input type="number" placeholder="min" name="min" class="price_in" id="min_PRICE_IN"name="MinPrice" />
          <input type="number" placeholder="max"  name="max" class="price_in" id="max_PRICE_IN" name="MaxPrice"/>
        </div>
          <button type="submit" class="s_btn">search</button>
        </div>
</form>

