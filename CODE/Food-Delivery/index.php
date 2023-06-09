<?php
	
	session_start();
	
	
?>
<html>
<head>
  <title>Food Delivery</title>
		<link rel="stylesheet" type="text/css" href="css/index.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-B4C+wIjvDzWffowb1evkStS9oZrsuy8zWtYBpFyMtr7zTcTj8V7EjLycs0XFl+ACs0GKPWjLGeIVp03bb7yTnA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<header>
    <nav>

	<div class="navbar"> 
  <div class="navbar-logo">
	<img src="assets/logoo.png">
  </div>

  
 <div class="dropdown" >
<!-- <div class="dropdown-btn">
 
</div> -->
  
 <!--  <div class="spacer"></div>
  <a href="login.php"><svg width="64px" height="64px" viewBox="-22.32 -22.32 68.64 68.64" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M12 24C11.7116 24 11.4373 23.8755 11.2474 23.6585L8.04623 20H4C2.34315 20 1 18.6569 1 17V3C1 1.34315 2.34315 0 4 0H20C21.6569 0 23 1.34315 23 3V17C23 18.6569 21.6569 20 20 20H15.9538L12.7526 23.6585C12.5627 23.8755 12.2884 24 12 24ZM12 21.4814L14.7474 18.3415C14.9373 18.1245 15.2116 18 15.5 18H20C20.5523 18 21 17.5523 21 17V3C21 2.44772 20.5523 2 20 2H4C3.44772 2 3 2.44772 3 3V17C3 17.5523 3.44772 18 4 18H8.5C8.78836 18 9.06269 18.1245 9.25258 18.3415L12 21.4814ZM12 12C9.76095 12 8.46711 13.169 8.10992 14.3009C7.94372 14.8276 7.38203 15.1198 6.85534 14.9536C6.32866 14.7874 6.03643 14.2257 6.20264 13.6991C6.61243 12.4005 7.59994 11.2939 8.99329 10.6382C8.37492 9.93402 8 9.0108 8 8C8 5.79086 9.79086 4 12 4C14.2091 4 16 5.79086 16 8C16 9.01079 15.6251 9.93401 15.0067 10.6382C16.4001 11.2939 17.3876 12.4005 17.7974 13.6991C17.9636 14.2257 17.6714 14.7874 17.1447 14.9536C16.618 15.1198 16.0563 14.8276 15.8901 14.3009C15.5329 13.169 14.2391 12 12 12ZM10 8C10 6.89543 10.8954 6 12 6C13.1046 6 14 6.89543 14 8C14 9.10457 13.1046 10 12 10C10.8954 10 10 9.10457 10 8Z" fill="#5EA3A6"></path> </g></svg> Join us </a>
 -->
 <div style="padding-right:70px">
   <a class="signup-login-btn" style="padding-right:20px" href="login.php">
        <svg  class="house-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="35" height="16"><path fill="currentColor" d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z" 
/></svg>
                    Join us 
</a>
    <a class="signup-login-btn" href="..\Food-Delivery\Customer\login.php" >
        <svg  class="house-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path fill="currentColor" d="M12 1L1 10h3v9h6v-6h4v6h6v-9h3L12 1zm2 17v-7h-4v7h-2v-7H8l4-4.67L16 11v7h-2z"/></svg>
                    Sign Up or Log In
</a>


    <a class="signup-login-btn" href="aboutus.php">
  <svg class="menu-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="16"><path fill="currentColor" d="M12 13c2.21 0 4-2.69 4-6s-1.79-6-4-6-4 2.69-4 6 1.79 6 4 6zm0 2c-2.67 0-8 1.34-8 4v3h16v-3c0-2.66-5.33-4-8-4z"/><path d="M0 0h24v24H0z" fill="none"/></svg> About us
</a>


	
<button class="switch" onclick="myFunction()" style="padding-top:15">
<div class="SwitchControl off dark">
    <div class="SwitchControl--slider">
      <div class="SwitchControl--knob"></div>
      <svg viewBox="0 0 307.2 307.2" class="SwitchControl--icon_left">
        <circle cx="153.6" cy="153.6" r="68.3"></circle>
      </svg>
      <svg x="0px" y="0px" viewBox="0 0 307.2 307.2" class="SwitchControl--icon_right">
        <circle cx="153.6" cy="153.6" r="68.267" style="fill:undefined"></circle>
        <path d="M153.6,0c-9.426,0-17.067,7.641-17.067,17.067v17.067c0,9.426,7.641,17.067,17.067,17.067s17.067-7.641,17.067-17.067    V17.067C170.667,7.641,163.026,0,153.6,0z" style="fill:undefined"></path>
        <path d="M153.6,256c-9.426,0-17.067,7.641-17.067,17.067v17.067c0,9.426,7.641,17.067,17.067,17.067s17.067-7.641,17.067-17.067    v-17.067C170.667,263.641,163.026,256,153.6,256z" style="fill:undefined"></path>
        <path d="M290.133,136.533h-17.067c-9.426,0-17.067,7.641-17.067,17.067s7.641,17.067,17.067,17.067h17.067    c9.426,0,17.067-7.641,17.067-17.067S299.559,136.533,290.133,136.533z" style="fill:undefined"></path>
        <path d="M34.133,136.533H17.067C7.641,136.533,0,144.174,0,153.6s7.641,17.067,17.067,17.067h17.067    c9.426,0,17.067-7.641,17.067-17.067S43.559,136.533,34.133,136.533z" style="fill:undefined"></path>
        <path d="M261.794,44.988c-6.614-6.388-17.1-6.388-23.714,0l-12.066,12.066c-6.664,6.666-6.662,17.472,0.004,24.136    c3.2,3.199,7.538,4.996,12.063,4.997c4.526-0.001,8.866-1.8,12.066-5.001l12.066-12.066    C268.761,62.34,268.573,51.536,261.794,44.988z" style="fill:undefined"></path>
        <path d="M81.606,226.014c-6.548-6.78-17.353-6.968-24.132-0.419c-0.142,0.137-0.282,0.277-0.419,0.419L44.988,238.08    c-6.78,6.548-6.968,17.352-0.419,24.132c6.548,6.78,17.353,6.968,24.132,0.419c0.142-0.137,0.282-0.277,0.419-0.419l12.066-12.066    C87.966,243.598,88.154,232.794,81.606,226.014z" style="fill:undefined"></path>
        <path d="M262.212,238.08l-12.066-12.066c-6.78-6.548-17.584-6.36-24.132,0.42c-6.387,6.614-6.387,17.099,0,23.712l12.066,12.066    c6.78,6.548,17.584,6.36,24.132-0.42C268.6,255.179,268.6,244.694,262.212,238.08z" style="fill:undefined"></path>
        <path d="M81.606,57.474c-0.138-0.142-0.278-0.282-0.42-0.42L69.12,44.988c-6.78-6.548-17.584-6.36-24.132,0.419    c-6.388,6.614-6.388,17.099,0,23.713l12.066,12.066c6.548,6.78,17.352,6.968,24.132,0.42    C87.966,75.058,88.154,64.254,81.606,57.474z" style="fill:undefined"></path>
      </svg>
    </div>
  </div>


</button>
</div>
<div>

<style>
.light {
  --switch-color: rgb(216, 216, 216);
  --background-color-alternate: rgb(30,30,30);
}
 
.dark {
  --switch-color: rgb(68, 68, 68);
  --background-color-alternate: rgb(94, 163, 166);
}
 
.SwitchControl {
  border-radius: 125px;
  background: var(--switch-color);
  width: 50px;
  height: 20px;
  overflow: hidden;
  cursor: pointer;
  position: relative;

}
.SwitchControl .SwitchControl--slider {
  width: 125px;
  height: 25%;
  position: absolute;
  top: 0;
  left: calc(50% - 25px * 2);
  transition: all 0.2s cubic-bezier(0.28, 0.0025, 0, 1) !important;
}
.SwitchControl .SwitchControl--slider .SwitchControl--knob {
  width: 25px;
  height: 20px;
  background: #707070;
  position: absolute;
  left: calc(18% - 2.5px * 2);
  top: 1px;
  border-radius: 125px;
}
.SwitchControl .SwitchControl--slider .SwitchControl--icon_left, .SwitchControl .SwitchControl--slider .SwitchControl--icon_right {
  width: 20px;
  height: 20px;
  position: absolute;
 
}
.SwitchControl .SwitchControl--slider .SwitchControl--icon_left *, .SwitchControl .SwitchControl--slider .SwitchControl--icon_right * {
  fill: var(--background-color-alternate) !important;
}
.SwitchControl .SwitchControl--slider .SwitchControl--icon_left {
  left: 20px;
}
.SwitchControl .SwitchControl--slider .SwitchControl--icon_right {
  right: 13px;
}
.SwitchControl.on .SwitchControl--slider {
  transform: translateX(32px);
}
.SwitchControl.off .SwitchControl--slider {
  transform: translateX(-64px);
}
 
</style>

<script>
function myFunction() {
    var element = document.body;
    element.classList.toggle("dark-mode" );
 }
document
  .querySelectorAll(".SwitchControl")
  .forEach((switchControl) =>
    switchControl.addEventListener("click", () => toggleSwitch(switchControl))
  );
 
const toggleSwitch = (control) => {
  if (control.classList.contains("off")) {
    enableSwitch(control);
  } else if (control.classList.contains("on")) {
    disableSwitch(control);
  }
};
 
const enableSwitch = (control) => {
  control.classList.remove("off");
  control.classList.add("on");
};
 
const disableSwitch = (control) => {
  control.classList.remove("on");
  control.classList.add("off");
};
 
</script>

</nav>
</header>
    <body style="overflow-x: hidden">

  <section class="hero">
    <div class="container">
      <h1>Order your favorite food online</h1>
      <p>Get ready to enjoy delicious meals delivered right to your doorstep</p>
      <a href="../Online/menu.php"><button class="menu-button">View our menus</button></a>
      
    </div>

  </section>
  
  
  <div class="row row1">
    <div class="item1"><img src="https://cafedelites.com/wp-content/uploads/2017/08/Crispy-Buffalo-Chicken-WIngs-IMAGE-5.jpg"></div> 
    <div class="item2"><img src="assets/logos/logo1.jpeg"></div>
    <div class="item3"><img src="https://www.eatthis.com/wp-content/uploads/sites/4/2019/06/deep-dish-pizza-chicago.jpg"></div>
    <div class="item4"><img src="assets/logos/logo2.jpeg"></div>
    <div class="item5"><img src="https://images.squarespace-cdn.com/content/v1/57dd4abff7e0ab74192f4799/1474389173757-PB1F7YSVOJ5I68UGYN80/15633+Chorizo_prawn_Paella.jpg"></div>
    <div class="item6"><img src="assets/logos/logo3.jpeg"></div>
    <div class="item7"><img src="https://media.cmsmax.com/fjliwncknaoc0txjp1m4f/sub-fries.jpg"></div>
    <div class="item8"><img src="assets/logos/logo4.jpeg"></div>
    <div class="item9"><img src="https://www.foodiesfeed.com/wp-content/uploads/2022/07/pizza-with-pineapple-and-thin-crust.jpg"></div> 
  </div>
  <div class="row row2">
    <div class="item10"><img src="assets/logos/logo5.jpeg"></div>
    <div class="item11"><img src="https://i0.wp.com/outoftownblog.com/wp-content/uploads/2020/09/Sushi.jpg?fit=1200%2C750&ssl=1"></div>
    <div class="item12"><img src="assets/logos/logo6.jpeg"></div>
    <div class="item13"><img src="https://realfood.tesco.com/media/images/1400x919-tomato-pasta-6a5a3c8e-f111-490d-805c-9b62fbec8691-0-1400x919.jpg"></div>
    <div class="item14"><img src="assets/logos/logo7.jpeg"></div>
    <div class="item15"><img src="https://www.refrigeratedfrozenfood.com/ext/resources/NEW_RD_Website/DefaultImages/default-pasta.jpg?1430942591"></div>
    <div class="item16"><img src="assets/logos/logo8.jpeg"></div>
    <div class="item17"><img src="https://true-north-kitchen.com/wp-content/uploads/2023/03/norwegian-waffles-featured-image-2.jpg"></div>
    <div class="item18"><img src="assets/logos/logo9.jpeg"></div>
  </div>

  
  <section id="why-us" >
   
  <h2>Why GoFastico?</h2>
  <ul>
    <li>
      <i class="fas fa-utensils"></i>
      <img src="assets/food.png" class="icons">
      <h3>Delicious Meals</h3>
      <p>We partner with the best local restaurants to bring you the most delicious meals.</p>

    </li>
   
    <li>
      <i class="fas fa-truck"></i>
      <img src="assets/food-delivery.png" class="icons">
      <h3>Fast Delivery</h3>
      <p>Our delivery team works efficiently to ensure your food arrives hot and fresh.</p>
    </li>
    <li>
      <i class="fas fa-money-bill-wave"></i>
      <img src="assets/affordable.png" class="icons">
      <h3>Affordable Prices</h3>
      <p>We offer competitive pricing so you can enjoy restaurant-quality meals without breaking the bank.</p>
    </li>
  </ul>
  
</div>

  <br>

  <section>
  <div class="map">
  <div class="text-container">
    <h2>Track orders to your door</h2>
    <p>Get your favourite food delivered in a flash. You’ll see when your rider’s picked up your order, and be able to follow them along the way. You’ll get a notification when they’re nearby, too.</p>
  </div>
  <div class="image-container"> 
  <img src="assets/map.jpg" alt="Map">  
  </div>
</div>

</section>

</section>
	<div class="container">
		<div class="card">
			<img src="https://upload-cdn.careem.com/restaurant_partner_0ee4a82a41.jpg">
			<div class="content">
				<h2>Partner with us</h2>
				<p>Join our food delivery network and start earning money. Partner with us as a restaurant owner and reach more customers in your area.</p>
        <a href="../Online/contact.php">
          <button class="btn">
              Get started
              &nbsp;
              <svg class="right-arrow-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16">
                  <path fill="currentColor" d="M16.59 11H4c-.55 0-1 .45-1 1s.45 1 1 1h12.59l-3.3 3.29c-.39.39-.39 1.02 0 1.41.39.39 1.02.39 1.41 0l4.59-4.59c.39-.39.39-1.02 0-1.41l-4.59-4.59c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41L16.59 11z"/>
              </svg>
          </button>
        </a>
			</div>
		</div>
		<div class="card">
			<img src="https://www.jotform.com/blog/wp-content/uploads/2020/05/How-to-start-a-food-delivery-business.png">
			<div class="content">
				<h2>Deliver with us</h2>
				<p>Join our team of drivers and start earning money by delivering food to our customers. Set your own schedule and work when you want.</p>
        <a href="../Online/contact.php">
          <button class="btn">
            Get started
            &nbsp;
            <svg class="right-arrow-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16">
                <path fill="currentColor" d="M16.59 11H4c-.55 0-1 .45-1 1s.45 1 1 1h12.59l-3.3 3.29c-.39.39-.39 1.02 0 1.41.39.39 1.02.39 1.41 0l4.59-4.59c.39-.39.39-1.02 0-1.41l-4.59-4.59c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41L16.59 11z"/>
            </svg>
          </button>
        </a>
			</div>
		</div>
		<div class="card">
			<img src="https://villagewayrestaurant.com/wp-content/uploads/2019/07/c.jpg" >
			<div class="content">
				<h2>Deliver for work</h2>
				<p>Looking for a full-time or part-time job in the food delivery industry? Join our team and start delivering food to hungry customers in your area.</p>
        <a href="../Online/contact.php">
          <button class="btn">
              Get started
              &nbsp;
              <svg class="right-arrow-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16">
                  <path fill="currentColor" d="M16.59 11H4c-.55 0-1 .45-1 1s.45 1 1 1h12.59l-3.3 3.29c-.39.39-.39 1.02 0 1.41.39.39 1.02.39 1.41 0l4.59-4.59c.39-.39.39-1.02 0-1.41l-4.59-4.59c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41L16.59 11z"/>
              </svg>
          </button>
        </a>
			</div>
		</div>
		<div class="card">
			<img src="https://149922190.v2.pressablecdn.com/wp-content/uploads/2019/12/nutritionist-job-description-4.jpg" >
			<div class="content">
				<h2>Dietitians</h2>
				<p>Do you have a background in nutrition or dietetics? Join our team of dietitians and help us provide healthy and delicious meal options to our customers.</p>
        <a href="../Online/contact.php">
          <button class="btn">
            Get started
            &nbsp;
            <svg class="right-arrow-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16">
                <path fill="currentColor" d="M16.59 11H4c-.55 0-1 .45-1 1s.45 1 1 1h12.59l-3.3 3.29c-.39.39-.39 1.02 0 1.41.39.39 1.02.39 1.41 0l4.59-4.59c.39-.39.39-1.02 0-1.41l-4.59-4.59c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41L16.59 11z"/>
            </svg>
          </button>
        </a>
    </button>
        
			</div>
		</div>
	</div>

  <footer>
  <div class="containerr">
    <div class="roww">
      <div class="col-md-4">
        <h4>Thank You</h4>
        <p>Thank you for choosing our food delivery service. We appreciate your business and hope to serve you again soon.</p>
      </div>
      <div class="col-md-4">
        <h4>Contact Us</h4>
        <p>Email: info@gofastico.com<br>Phone: 555-555-5555</p>
      </div>
      <div class="connect-with-us">
  <h3>Connect With Us</h3>
  <br>
  <ul>
    <li><a href="#"><img src="assets/facebook.png" alt="Facebook"></a></li>
    <li><a href="#"><img src="assets/instagram.png" alt="Instagram"></a></li>
    <li><a href="#"><img src="assets/twitter.png" alt="Twitter"></a></li>
  </ul>
<br> <br>
  <p class="copy">&copy; 2023 GoFastico</p>

    </div>
    </div>  
    </div>
  </div>
  
</footer>

  
</body>
</html>
