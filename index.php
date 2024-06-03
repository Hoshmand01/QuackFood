<?php

session_start();

if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "/database.php";
    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $mysqli->query($sql);
    $user = $result->fetch_assoc();
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QuackFood</title>

    <link rel="icon" type="image/png" href="img/hamburger.png">
    <link rel="stylesheet" href="Style.css">
    <script src="script.js"></script>



<!-- css -->

  <style>

        /*  some button */

  .bt {
    display: inline-block;
    padding: 10px 30px;
    color: rgb(255, 255, 255);
    background-color: black;
    font-size: 2rem;
    letter-spacing: 0.2rem;
    border-radius: 15px;
    margin-top: 20px;
    transition: 0.3s ease;
    transition-property: background-color, color;
  }
  .bt:hover {
    color: rgb(255, 255, 255);
    background-color: rgb(255, 153, 0);
      border: 1.5px solid rgb(0, 0, 0);
  }


  .footer {
        text-align: center;
        color: #888;
        margin-top: 10vh;
      }

  </style>

<!-- css end -->


</head>

<body>
  


  <!-- Header -->
    <section id="header">
      <div class="header container">
        <div class="nav-bar">

          <div class="brand">
            <a href="#">
              <bh> QuackFood </bh>
            </a>
          </div>

          <div class="nav-list">
            
              <div class="bar"></div>
        
            <ul>
              <li><a href="#" data-after="Home">Home</a></li>
              <li><a href="#Foodch" data-after="Foodch">FOOD CHOICES</a></li>
              <li><a href="about.html" data-after="About">About</a></li>
              <li><a href="contact.html" data-after="Contact">Contact</a></li>
              
              <li>

              
            <a href="Cart.html">
              <ch> Cart </ch>
            </a>
          
        </li>
              
      <!--  <li>  <img src="img/shopping-cart.png" /></li> -->

            </ul>
          </div>
        </div>
      </div>
    </section>
  <!-- End Header -->




  <!-- Hero Section  -->
    <section class="hero" id="home">
    <div class="hero container2">
      <div>
        <h1 class="responsive-heading"> Where </h1>
        <h1 class="responsive-heading">taste meets  </h1>
        <h1 class="responsive-heading">the myth </h1>
        <a href="#Foodch" type="button" class="cta">Order Now</a>
      </div>

      <figure class="hero-banner">
  
        <img src="img/cta-banner.png" width="100%" height="auto" loading="lazy" alt="Burger"
          class="w-100 hero-img">
      </figure>

    </div>
    </section>
  <!-- End Hero Section  -->



  <?php if (isset($user)): ?>
        
        
    


<!-- Food Choices Section -->


  <section id="Foodch" loading="lazy">
    
    <div class="Foodch container">

  
      <div class="Foodch-top">

        <h1 class="Foodch-title">Food Choices</h1>

        <p>Whether you're in the mood for a classic burger, a cheesy pizza,
          crispy chips, or flavorful fried chicken,
            our food choices provide a delightful variety to suit every taste bud!</p>
      </div>

      <div class="Foodch-bottom">


        <div class="Foodch-item" id="Burger">
          <div class="icon"><img src="img/hamburger.png" /></div>

          <button type="button" class="fb" onclick="hideObsBurger()">Burger</button>


          <p>Sink your teeth into our mouthwatering burgers, crafted with juicy,
            flame-grilled patties, topped with fresh lettuce, ripe tomatoes,
             and melted cheese, all served on a soft, toasted bun!</p>
        </div>



        <div class="Foodch-item" id="Pizza">
          <div class="icon"><img src="img/pizza.png" /></div>
          
          <button type="button" class="fb" onclick="hideObsPizza()">pizza</button>

          <p>Experience the perfect combination of flavors with our handcrafted pizzas,
             baked to perfection in our wood-fired oven,
              delivering a delightful balance of gooey cheese, savory meats, and fresh, vibrant veggies!</p>
        </div>

        <div class="Foodch-item" id="Chips">
          <div class="icon"><img src="img/french-fries.png" /></div>
          
          <button type="button" class="fb" onclick="hideObsChips()">french fries</button>

          <p>Indulge in the crispy perfection of our golden french fries,
             served hot and seasoned to perfection,
             making them the ideal companion to any meal or a satisfying snack on their own!</p>
        </div>

        <div class="Foodch-item" id="Chicken">
          <div class="icon"><img src="img/fried-chicken.png" /></div>
          
          <button type="button" class="fb" onclick="hideObsChicken()">Chicken</button>

          <p>Savor the succulence of our hand-breaded fried chicken,
             made with love and care, resulting in juicy,
              flavorful meat and a satisfyingly crunchy exterior</p>
        </div>


     </div>


     </div>

    
    </section>

<!-- End Food Choices Section -->





<!-------- Type Choices Section -------->



  <section id="typech">
  <div class="typech container">


  <!-- burger -->

        <div class="hidden-burger">

          <div class="typech-top">
            <h1 class="typech-title">Add to cart</h1>
          </div>


          <div class="typech-bottom">

          

            <div class="typech-item" id="chicken-Burger">

              <script>
                  function changeBackground() {
                    var element = document.getElementById("chicken-Burger");
                    element.style.backgroundImage = "url('img/chicken-burger.png')";
                  }

                  changeBackground();
                
              </script>

                <div class="icon"><img src="img/hamburger.png" /></div>

              <button type="button" class="fb" onclick="addToCart('Burger', 5)()">Chicken Burger</button>


                <p>Indulge in the delectable delight of our signature chicken burger.
                  Made with a succulent and seasoned chicken patty,
                  our burger offers a mouthwatering experience that will leave you craving for more.
                  Served on a fluffy bun and paired with fresh lettuce, juicy tomatoes,
                  and a tangy sauce, every bite is a burst of flavor and juiciness.
                  Whether you prefer it grilled to perfection or crispy and golden,
                  our chicken burger is a must-try for fast food enthusiasts looking
                  for a satisfying and wholesome meal!</p>
            </div>



            <div class="typech-item" id="cow-Burger">

              <script>
                function changeBackground() {
                  var element = document.getElementById("cow-Burger");
                  element.style.backgroundImage = "url('img/cta-banner.png')";
                }

                changeBackground();
            </script>


              <div class="icon"><img src="img/hamburger.png" /></div>

            <button type="button" class="fb" onclick="AddBurger()">Cow Burger</button>


              <p>Indulge in the ultimate beef burger experience.
                Our cow burger features premium beef,
                expertly grilled for a juicy and flavorful patty.
                Topped with perfection and nestled in a soft bun,
                it's a mouthwatering delight you won't want to miss!</p>
          </div>




          <div class="typech-item" id="vigeterean-Burger">

            <script>
              function changeBackground() {
                var element = document.getElementById("vigeterean-Burger");
                element.style.backgroundImage = "url('img/fresh-hamburger-with-salad-onion.jpg')";
              }

              changeBackground();
          </script>

            <div class="icon"><img src="img/hamburger.png" /></div>

          <button type="button" class="fb" onclick="AddBurger()">Vigeterean Burger</button>


            <p>Sink your teeth into our mouthwatering burgers, crafted with juicy,
            flame-grilled patties, topped with fresh lettuce, ripe tomatoes,
            and melted cheese, all served on a soft, toasted bun!</p>
          </div>

          
          </div>

          <button type="button" class="fb" onclick="Back()">Back</button>
          
        </div>

  <!-- burger end -->


  <!-- pizza  -->

      <!-- we have to create spicific add pizza foe each pizza type -->

        <div class="hidden-pizza">

          <div class="typech-top">
            <h1 class="typech-title">Add to cart</h1>
          </div>


          <div class="typech-bottom">



            <div class="typech-item" id="Chicken-Pizza">

            <script>
              function changeBackground() {
                var element = document.getElementById("Chicken-Pizza");
                element.style.backgroundImage = "url('img/chad-montano-MqT0asuoIcU-unsplash.jpg')";
              }

              changeBackground();
          </script>

          
                <div class="icon"><img src="img/pizza.png" /></div>

              <button type="button" class="fb" onclick="AddPizza()">Chicken Pizza</button>


                <p>Indulge in the savory delight of our Chicken Pizza.
                  Succulent pieces of grilled chicken are generously layered on a bed of gooey mozzarella cheese,
                    perfectly complemented by a tangy tomato sauce.
                    Topped with a medley of fresh vegetables and a sprinkle of herbs,
                      every bite is a burst of flavors that will leave you craving for more!</p>
            </div>



            <div class="typech-item" id="Cow-Pizza">


            <script>
              function changeBackground() {
                var element = document.getElementById("Cow-Pizza");
                element.style.backgroundImage = "url('img/pexels-evgeni-lazarev-8971795.jpg')";
              }

              changeBackground();
          </script>



              <div class="icon"><img src="img/pizza.png" /></div>

            <button type="button" class="fb" onclick="AddPizza()">Cow Pizza</button>


              <p>Our Cow Pizza is a carnivore's dream come true.
                Sink your teeth into the juiciest cuts of tender beef,
                  lovingly cooked and paired with a rich blend of cheeses.
                  The combination of flavors is simply irresistible.
                    With each bite, you'll experience the smoky aroma, the melt-in-your-mouth texture,
                      and the perfect harmony of meat and cheese that make this pizza a true delight!</p>
          </div>




            <div class="typech-item" id="Vigeterean-Pizza">

            <script>
              function changeBackground() {
                var element = document.getElementById("Vigeterean-Pizza");
                element.style.backgroundImage = "url('img/pexels-rene-strgar-10836977.jpg')";
              }

              changeBackground();
          </script>


            <div class="icon"><img src="img/pizza.png" /></div>

          <button type="button" class="fb" onclick="AddPizza()">Vigeterean Pizza</button>


            <p>Delight in the vibrant flavors of our Vegetarian Pizza.
              Loaded with an array of fresh vegetables, including crispy bell peppers,
                juicy tomatoes, earthy mushrooms, and more, this pizza is a celebration of nature's bounty.
                Topped with a generous layer of melted cheese and a drizzle of zesty sauce,
                  it offers a wholesome and satisfying experience that will leave both your taste buds and conscience content!</p>

          </div>

          
            </div>

            <button type="button" class="fb" onclick="Back()">Back</button>


          </div>


  <!-- pizza end -->



  <!-- chicken  -->


            <!-- we have to create spicific add chicken foe each chicken type -->


          <div class="hidden-chicken">

            <div class="typech-top">
              <h1 class="typech-title">Add to cart</h1>
            </div>


            <div class="typech-bottom">
    
    
              <div class="typech-item" id="Fried-chicken">

              <script>
              function changeBackground() {
                var element = document.getElementById("Fried-chicken");
                element.style.backgroundImage = "url('img/shardar-tarikul-islam-VN8XVqc7ZSE-unsplash.jpg')";
              }

              changeBackground();
            </script>


                  <div class="icon"><img src="img/fried-chicken.png" /></div>
    
                <button type="button" class="fb" onclick="Addchicken()">Fried chicken</button>
    
    
                  <p>Sink your teeth into our mouthwatering burgers, crafted with juicy,
                  flame-grilled patties, topped with fresh lettuce, ripe tomatoes,
                  and melted cheese, all served on a soft, toasted bun!</p>
              </div>
    
    
    
              <div class="typech-item" id="Grilled-Chicken">

              <script>
              function changeBackground() {
                var element = document.getElementById("Grilled-Chicken");
                element.style.backgroundImage = "url('img/rickie-tom-schunemann-CT3BGFLHzIM-unsplash.jpg')";
              }

              changeBackground();
            </script>


                <div class="icon"><img src="img/fried-chicken.png" /></div>
    
              <button type="button" class="fb" onclick="Addchicken()">Grilled Chicken</button>
    
    
                <p>Sink your teeth into our mouthwatering burgers, crafted with juicy,
                flame-grilled patties, topped with fresh lettuce, ripe tomatoes,
                and melted cheese, all served on a soft, toasted bun!</p>
            </div>
    
    
    
    
            <div class="typech-item" id="Roast-chicken">

            <script>
              function changeBackground() {
                var element = document.getElementById("Roast-chicken");
                element.style.backgroundImage = "url('img/anshu-a-BhnZwPW_tIc-unsplash.jpg')";
              }

              changeBackground();
            </script>


              <div class="icon"><img src="img/fried-chicken.png" /></div>
    
            <button type="button" class="fb" onclick="Addchicken()">Roast chicken</button>
    
    
              <p>Sink your teeth into our mouthwatering burgers, crafted with juicy,
              flame-grilled patties, topped with fresh lettuce, ripe tomatoes,
              and melted cheese, all served on a soft, toasted bun!</p>
          </div>
    
            
            </div>

            <button type="button" class="fb" onclick="Back()">Back</button>

            </div>
    
    
  <!-- chicken end -->




  <!-- chips  -->


            <!-- we have to create spicific add chips foe each chips type -->

          <div class="hidden-chips">

            <div class="typech-top">
              <h1 class="typech-title">Add to cart</h1>
            </div>


            <div class="typech-bottom">
    
    
              <div class="typech-item" id="Hot-chips">

              <script>
              function changeBackground() {
                var element = document.getElementById("Hot-chips");
                element.style.backgroundImage = "url('img/side-view-tasty-potato-chips-spices-with-ketchup-gray-table.jpg')";
              }

              changeBackground();
            </script>


                  <div class="icon"><img src="img/french-fries.png" /></div>
    
                <button type="button" class="fb" onclick="Addchips()">Hot chips</button>
    
    
                  <p>Prepare your taste buds for a fiery sensation with our Hot Chips.
                    These crispy golden delights are seasoned to perfection with a tantalizing blend of spices that will ignite your palate.
                      Each bite is an explosion of flavor, as the heat intensifies and leaves a lingering zest.
                      Get ready for a culinary adventure that will satisfy your craving for spice and crunch in every mouthwatering chip!</p>
              </div>
    
    



    
              <div class="typech-item" id="Normal-chips">

              <script>
              function changeBackground() {
                var element = document.getElementById("Normal-chips");
                element.style.backgroundImage = "url('img/chips and.png')";
              }

              changeBackground();
            </script>

                <div class="icon"><img src="img/french-fries.png" /></div>
    
              <button type="button" class="fb" onclick="Addchips()">Classic chips</button>
    
    
                <p>Enjoy the classic simplicity of our Normal Chips. Crispy and golden on the outside,
                  fluffy on the inside, these chips are the epitome of comfort food.
                    Seasoned with a hint of salt to enhance their natural potato goodness,
                    they deliver a satisfying crunch with every bite.
                      Whether enjoyed on their own or as a perfect side to your favorite dishes,
                      our Normal Chips will transport you to potato chip heaven!</p>
            </div>
    
    
    
    
            <div class="typech-item" id="Vigeterean-chips">

            <script>
              function changeBackground() {
                var element = document.getElementById("Vigeterean-chips");
                element.style.backgroundImage = "url('img/vigg.jpg')";
              }

              changeBackground();
            </script>

              <div class="icon"><img src="img/french-fries.png" /></div>
    
            <button type="button" class="fb" onclick="Addchips()">Vigeterean chips</button>
    
    
              <p>Indulge in guilt-free snacking with our Vegetarian Chips.
                Made from a variety of colorful and wholesome vegetables,
                  these chips are a veggie lover's dream.
                  Each chip is carefully sliced and lightly seasoned to highlight the natural flavors of the vegetables.
                    From the earthy sweetness of beetroot to the delightful crunch of zucchini,
                    every bite offers a medley of flavors that will leave you craving more.
                      Treat yourself to a healthy and delicious snack that is both satisfying and nutritious!</p>
          </div>
    
            
            </div>

            <button type="button" class="fb" onclick="Back()">Back</button>

          </div>
    
    
  <!-- chips end -->


    
  </div>
  </section>

<!--------  Type Choices Section End -------->




<!--------  user out  -------->

  <center>

    <a href="logout.php" type="button" class="bt"> Log out </a>

  </center>
    
  <?php else: ?>

<!--------  user out end  -------->


<!--------  Choices Section  -------->
        
  <section id="Foodch" loading="lazy">
      <div class="Foodch container">

   
      <div class="Foodch-top">

        <h1 class="Foodch-title">Food Choices</h1>

        <p>Whether you're in the mood for a classic burger, a cheesy pizza,
           crispy chips, or flavorful fried chicken,
            our food choices provide a delightful variety to suit every taste bud!</p>
      </div>

      <div class="Foodch-bottom">


        <div class="Foodch-item" id="Burger">
          <div class="icon"><img src="img/hamburger.png" /></div>

          <a href="#user" type="button" class="fb">Burger</a>

          <p>Sink your teeth into our mouthwatering burgers, crafted with juicy,
            flame-grilled patties, topped with fresh lettuce, ripe tomatoes,
             and melted cheese, all served on a soft, toasted bun!</p>
        </div>



        <div class="Foodch-item" id="Pizza">
          <div class="icon"><img src="img/pizza.png" /></div>
          
          <a href="#user" type="button" class="fb">pizza</a>

          <p>Experience the perfect combination of flavors with our handcrafted pizzas,
             baked to perfection in our wood-fired oven,
              delivering a delightful balance of gooey cheese, savory meats, and fresh, vibrant veggies!</p>
        </div>

        <div class="Foodch-item" id="Chips">
          <div class="icon"><img src="img/french-fries.png" /></div>
          
          <a href="#user" type="button" class="fb">French fries</a>

          <p>Indulge in the crispy perfection of our golden french fries,
             served hot and seasoned to perfection,
             making them the ideal companion to any meal or a satisfying snack on their own!</p>
        </div>

        <div class="Foodch-item" id="Chicken">
          <div class="icon"><img src="img/fried-chicken.png" /></div>

          <a href="#user" type="button" class="fb">Chicken</a>

          <p>Savor the succulence of our hand-breaded fried chicken,
             made with love and care, resulting in juicy,
              flavorful meat and a satisfyingly crunchy exterior</p>
        </div>

     </div>
     </div>
    </section>

<!--------  Choices Section end  -------->


<!--------  user in  -------->

    <br><br><br>

    <center>

    <section id="user" loading="lazy">

      <h3>Already user?</h3>

      <a href="login.php" type="button" class="bt"> Login </a>


      <br><br><br>

      <h3>New? Sign Up now</h3>

      <a href="signup.html" type="button" class="bt"> Sign Up </a>

    </section>

    </center>


    <?php endif; ?>

  
    <br><br><br><br><br>

<!--------  user in end -------->


<!--- Footer --->

  <footer class="footer">

    &copy; 2023 QuackFood. All rights reserved.

  </footer>
  <br>
<!--- End Footer --->



</body>
</html>