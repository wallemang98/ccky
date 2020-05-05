@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-6">
      <center>
        <h2>Catering Menu</h2>
        <p>We strive to use local, fresh ingredients to insure
          the highest quality of food for your event. If you
          have special requests or food allergies we are more
          than happy to accommodate.</p>
      </center>

      <button class="accordion">Appetizers</button>
        <div class="panel">

          <dl>
              <dt>Crab Cakes</dt>
              <dd>Crab, panko-crumb, trinity blend roasted to perfection, roasted red pepper aioli</dd>

              <dt>Beef Tenderloin Crostini</dt>
              <dd>Herbed cream cheese, medium rare sliced beef tenderloin topped with a balsamic shallot reduction</dd>

              <dt>Hot Brown Bites</dt>
              <dd>Classic Mornay, roasted turkey, bacon and tomato</dd>
          </dl>
        </div>

        <button class="accordion">Salads</button>
        <div class="panel">
          <dl>
              <dt>Simple Salad</dt>
              <dd>Mixed greens, grape, tomato, cucumber and red onion</dd>

              <dt>Kale Salad</dt>
              <dd> Kale, candied walnuts, cabbage and dried cranberries in a strawberry vinaigrette</dd>

              <dt>Pasta Salad</dt>
              <dd>Tricolor rotini, grape tomato, red pepper, red onion and ripe olive in a red wine vinaigrette</dd>

              <dt>Tuna Salad</dt>
              <dd>Cucumber, red onion, celery, pickle relish and stone ground dijonaise</dd>

              <dt>Egg Salad</dt>
              <dd>Celery, red onion and arugula</dd>

              <dt>Tomato and Cucumber Salad</dt>
              <dd>Red onion, dill and red wine vinaigrette</dd>
          </dl>
        </div>

        <button class="accordion">Entrees</button>
        <div class="panel">
            <dl>
                <dt>Beef options</dt>
                <dd><em>All steaks are pan seared and topped with Demi glac&eacute; </em></dd>
                <dd>Filet Mignon</dd>
                <dd>NY Strip</dd>
                <dd>Ribeye</dd>
                <dd>Flat Iron Steak</dd>

                <dt>Chicken options</dt>
                <dd>Airline Chicken breast</dd>
                <dd>Stuffed Chicken breast</dd>
                <dd>- Feta and spinach</dd>
                <dd>- County Ham and Goat cheese</dd>

                <dt>Pork Options</dt>
                <dd>Bone-in center cut chop</dd>
                <dd>Stuffed boneless Pork loin</dd>
                <dd>- Cornbread stuffing with red eye gravy</dd>
            </dl>
        </div>

        <button class="accordion">Sides</button>
        <div class="panel">
              <dl>
                  <dt>Roasted vegetables</dt>
                  <dd>- Brussels Sprout</dd>
                  <dd>- Asparagus</dd>
                  <dd>- Broccoli</dd>
                  <dd>- Carrots</dd>
                  <dd>- Cauliflower</dd>

                  <dt>Wild Rice Pilaf</dt>
                  <dd></dd>

                  <dt>Parmesan Risotto</dt>
                  <dd></dd>

                  <dt>Yukon Gold Mashed Potatoes</dt>
                  <dd></dd>

                  <dt>Broccoli Casserole</dt>
                  <dd></dd>

                  <dt>Haricot Vert</dt>
                  <dd></dd>

                  <dt>Jasmine Rice</dt>
                  <dd></dd>

                  <dt>Roasted Fingerling Potatoes</dt>
                  <dd></dd>
              </dl>
        </div>

        <button class="accordion">Desserts</button>
        <div class="panel">
              <dl>
                  <dt>Seasonal Bread Pudding</dt>
                  <dd></dd>

                  <dt>Key Lime Pie</dt>
                  <dd></dd>

                  <dt>Cheesecake</dt>
                  <dd></dd>

                  <dt>Flourless Chocolate Torte</dt>
                  <dd></dd>

                  <dt>Cookies</dt>
                  <dd></dd>
              </dl>
        </div>
    </div> <!-- closing left col -->

    <div class="col-xs-12 col-sm-6">
      <center>
        <h2><a name="kosherlink"></a>Kosher Menu</h2>
        <p>We follow all rules of Kosher food preparation and are under
          the supervision of Rabbi Slosberg at the Adath Jeshurun Temple.</p>
      </center>

      <button class="accordion">Kiddush</button>
        <div class="panel">
         <dl>
             <dt>Lox and Bagels</dt>
             <dd>Whipped cream cheese, capers, red oinion, diced egg</dd>

              <dt>Kugel</dt>
              <dd>Egg noodle or potato</dd>

              <dt>Tuna Salad</dt>
              <dd></dd>

              <dt>Eggs Frittata</dt>
              <dd>spinach, red onion and goat cheese</dd>

              <dt>Hard Boiled Eggs</dt>
              <dd></dd>

              <dt>Challah</dt>
              <dd></dd>

              <dt>Fresh Fruit Platter</dt>
              <dd></dd>

              <dt>Roasted Vegetable Platter</dt>
              <dd></dd>
         </dl>
        </div>

        <button class="accordion">Appetizers</button>
        <div class="panel">
              <dl>
                  <dt>Roasted Vegetable Platter</dt>
                  <dd>Fresh roasted asparagus, brussels sprout, cauliflower, broccoli, carrot, eggplant, tomato</dd>

                  <dt>Caprese Lollipops</dt>
                  <dd>Fresh mozzarella, basil, grape tomato skewer</dd>

                  <dt>Heirloom bruschetta (seasonal)</dt>
                  <dd>Locally sourced premium tomato relish, toasted garlic pita chips</dd>

                  <dt>Goat cheese Stuffed Mushrooms</dt>
                  <dd>Oven roasted olive tapenade   stuffed button mushrooms.</dd>

                  <dt>Hummus with Pita</dt>
                  <dd>Roasted red pepper, chickpea and garlic blend. Garlic pita chips</dd>

                  <dt>Tortilla Pinwheels</dt>
                  <dd>Hummus and herbed cream cheese bites</dd>

                  <dt>Lox and Bagels</dt>
                  <dd>Caper, diced red onion, diced egg and cream cheese</dd>

              </dl>
        </div>

        <button class="accordion">Salads</button>
        <div class="panel">
          <dl>
              <dt>Simple Salad</dt>
              <dd>Mixed greens, grape tomato, cucumber</dd>

              <dt>Kale Salad</dt>
              <dd>Kale, candied walnuts, cabbage, dried cranberries in a strawberry vinaigrette</dd>

              <dt>Pasta Salad</dt>
              <dd>Tricolor rotini, grape tomato, red pepper, red onion and ripe olive in a red wine vinaigrette</dd>

              <dt>Tuna Salad</dt>
              <dd>Cucumber, red onion, celery, pickle relish and stone ground dijonaise</dd>

              <dt>Egg Salad</dt>
              <dd>Celery, red onion and arugula</dd>

              <dt>Tomato and Cucumber Salad</dt>
              <dd>Red onion, dill, and red wine vinaigrette</dd>
          </dl>
        </div>


        <button class="accordion">Entrees</button>
        <div class="panel">
          <dl>
              <dt>Lasagna Florentine</dt>
              <dd>Ricotta, spinach and tomato baked with a classic marinara sauce</dd>

              <dt>Gnocchi Primavera Alfredo</dt>
              <dd>Sautéed zucchini, squash, spinach, red onion and grape tomato in a rich cream sauce</dd>

              <dt>Fish Options</dt>
              <dd>Pan seared or blackened</dd>
              <dd>- Ahi Tuna</dd>
              <dd>- Salmon</dd>
              <dd>- Swordfish</dd>
          </dl>
        </div>

        <button class="accordion">Sides</button>
        <div class="panel">
              <dl>
                  <dt>Roasted vegetables</dt>
                  <dd>- Brussels Sprout</dd>
                  <dd>- Asparagus</dd>
                  <dd>- Broccoli</dd>
                  <dd>- Carrots</dd>
                  <dd>- Cauliflower</dd>

                  <dt>Wild Rice Pilaf</dt>
                  <dd></dd>

                  <dt>Parmesan Risotto</dt>
                  <dd></dd>

                  <dt>Yukon Gold Mashed Potatoes</dt>
                  <dd></dd>

                  <dt>Broccoli Casserole</dt>
                  <dd></dd>

                  <dt>Haricot Vert</dt>
                  <dd></dd>

                  <dt>Jasmine Rice</dt>
                  <dd></dd>

                  <dt>Roasted Fingerling Potatoes</dt>
                  <dd></dd>
              </dl>

        </div>

        <button class="accordion">Desserts</button>
        <div class="panel">
              <dl>
                  <dt>Seasonal Bread Pudding</dt>
                  <dd></dd>

                  <dt>Key Lime Pie</dt>
                  <dd></dd>

                  <dt>Cheesecake</dt>
                  <dd></dd>

                  <dt>Flourless Chocolate Torte</dt>
                  <dd></dd>

                  <dt>Cookies</dt>
                  <dd></dd>
              </dl>
        </div>
    </div><!-- closing right col -->
  </div> <!-- closing row -->

  <div class="row">
      <div class="col-xs-12 mx-auto d-block">
        <br>
        <br>
        <img class="menuImage rounded mx-auto d-block" src="{{ asset('assets/img/menu.jpg') }}" />
      </div>
  </div>
</div>
@endsection
