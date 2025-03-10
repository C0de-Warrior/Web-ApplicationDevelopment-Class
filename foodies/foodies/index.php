<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="theme-color" content="#ffffff">
  <title>Foodies</title>
  <link href="style.css" rel="stylesheet" type="text/css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
  <link rel="shortcut icon" type="image/png" href="./assets/logotop.png"/>
  <link rel="manifest" href="manifest.json">
  <script defer src="index.js"></script>
</head>
<body>
  <header>
    <nav class="navbar">
      <div class="navbar__brand">
        <img src="./assets/logotop.png" alt="logo" class="brand__logo"/>
      </div>
      <div class="navbar__nav__items">
        <div class="nav__item">
          <button class="primary__button" type="button" id="orderBtn">Order Food</button>
        </div>
      </div>
    </nav>
  </header>
  <main class="container">
    <section class="hero__container">
        <div class="hero__image__container">
          <img src="./assets/hero.jpg" alt="hero image" class="hero__image"/>
          <img src="./assets/svg/heroShape.svg" alt="hero image shpae" class="hero__image__shape">
          <img src="./assets/svg/herobgpattren.svg" alt="hero image pattern" class="hero__image__pattern">
        </div>
        <div class="hero__description">
          <h1 class="text__heading">Order food from favourite restaurants near you.</h1>
       <button class="primary__button" id="orderBtn1" type="button">Order Now</button>
        </div>
      </section>
      <section class="video__footage__container">
        <div class="video__footage__text">
          <p>Your food will be prepared safely with an experienced chef, without compromising on the quality and hygiene.</p>
        </div>
      </section>
      <section class="food__list__container">
      <h1 class="text__heading" style="text-align:center;">Explore Our Menu</h1>
      <div class="food__list__container__diahonal"></div>
      <div class="food__menu__card__list">
        <!--card1-->
        <div class="food__menu__card">
      <img src="./assets/burger.jpg" alt="burger image" class="food__menu__card__image">
      <div class="food__menu__description">
        <h4 class="food__menu__card__title">Burgers</h4>
      <p class="food__menu__card__resturant">Roco Mamas, Sides, Foodies Place <span style="color:red;">+3</span></p>
      </div>
      
        </div>
        <!--card2-->
        <div class="food__menu__card">
      <img src="./assets/pizza.jpg" alt="pizza image" class="food__menu__card__image">
      <div class="food__menu__description">
        <h4 class="food__menu__card__title">Pizza</h4>
      <p class="food__menu__card__resturant">Pizza Hut, PizzaInn <span style="color:red;">+3</span></p>
      </div>
      
        </div>
        <!--card3-->
        <div class="food__menu__card">
      <img src="./assets/iceCream.jpg" alt="ice cream image" class="food__menu__card__image">
      <div class="food__menu__description">
        <h4 class="food__menu__card__title">Ice Cream</h4>
      <p class="food__menu__card__resturant">CreamyInn, Ibaco <span style="color:red;">+3</span></p>
      </div>
      
        </div>
      </div>
      <div class="food__list__view__more">View More</div>
      </section>
      <section class="restaurant__list__container">
        <div class="restaurant__list__text">
          <h1 class="text__heading">Order From 100s of restaurants</h1>
        </div>
        <div class="restaurant__list__image__container">
          <div class="restaurant__list__row__1">
            <img src="./assets/restaurant1.jpg" alt="restaurant1" class="restaurant1">
             <img src="./assets/restaurant2.jpg" alt="restaurant2" class="restaurant2">
          </div>
          <div class="restaurant__list__row__2">
            <img src="./assets/restaurant3.jpg" alt="restaurant3" class="restaurant3">
             <img src="./assets/restaurant4.jpg" alt="restaurant4" class="restaurant4">
          </div>
        </div>
      </section>
      <section class="email__suscribe__conatiner">
        <div>
          <h1 class="text__heading">Stay Updated</h1>
          <div class="email__suscribe__input__filed">
            <div>
              <input type="email" placeholder="email@gmail.com" class="email__input"/>
            </div>
            <button class="primary__button">Get Updates</button>
          </div>
        </div>
      </section>
      <section class="quote__container">
        <div class="quote__image__overlay"></div>
        <h3 class="quote_image_text">
                When a man's stomach is full, he is happier for it.
              </h3>
      </section>
    
  </main>
  <footer>
    <img src="./assets/logotop20.png" alt="logo">
    <ul>
      <li>Pricing</li>
      <li>Terms and condition</li>
      <li>Partners</li>
      <li>Career</li>
      <li>Contact</li>
    </ul>
  </footer>
  <script>
     document.getElementById('orderBtn').addEventListener('click', function() {
    // Redirect to the order.php page
    window.location.href = 'order.php';
  });
  document.getElementById('orderBtn1').addEventListener('click', function() {
    // Redirect to the order.php page
    window.location.href = 'order.php';
  });
  </script>
</body>
</html>
