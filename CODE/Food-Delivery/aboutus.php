<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" type="text/css" href="css/login.css" />
	<link rel="stylesheet" type="text/css" href="./css/index.css">
    <style>
        body {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            background: rgb(45,68,69);
background: linear-gradient(243deg, rgba(45,68,69,1) 13%, rgba(38,57,57,1) 56%, rgba(40,54,53,1) 100%);
            color: #000000;
            margin: 0;
            padding: 0;
        }

        h1 {
            font-size: 36px;
            color: #5EA3A6;
        }

        p {
            font-size: 18px;
            line-height: 1.5;
            margin-bottom: 20px;
            text-align: center;
        }
        .card {
            max-width: 800px;
            margin: 100px auto;
            padding: 40px;
            text-align: center;
            height: 70%;
            background: rgb(40,40,55);
            background: linear-gradient(344deg, rgba(40,40,55,1) 0%, rgba(16,16,18,1) 50%);
            box-shadow: 4px 6px 14px #00000036;
            border-radius: 3px;
            color: #F9F9F9;
            padding: 16px;
            
        }

         button {
            display: flex;
            height: 30px;
            width: 80px;
            align-items: center;
            justify-content: center;
            background-color: #5EA3A6;
            border-radius: 3px;
            letter-spacing: 1px;
            transition: all 0.2s linear;
            cursor: pointer;
            border: none;
            background: #5EA3A6;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            }

            button > svg {
            margin-right: 5px;
            margin-left: 5px;
            font-size: 20px;
            transition: all 0.4s ease-in;
            }

            button:hover > svg {
            font-size: 1.2em;
            transform: translateX(-5px);
            }

            button:hover {
            box-shadow: 9px 9px 33px #5EA3A6, -9px -9px 33px #5EA3A6;
            transform: translateY(-2px);
            }

    </style>
</head>
<body>
<header>
			<div class="navbar"> 
				<div class="navbar-logo">
					<a href=".\index.php"><img src="./assets/logoo.png"></a>
				</div>
			</div>
		</header>
    <div class="card">
        <a href="index.php">
    <button>
  <svg height="16" width="16" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 1024 1024"><path d="M874.690416 495.52477c0 11.2973-9.168824 20.466124-20.466124 20.466124l-604.773963 0 188.083679 188.083679c7.992021 7.992021 7.992021 20.947078 0 28.939099-4.001127 3.990894-9.240455 5.996574-14.46955 5.996574-5.239328 0-10.478655-1.995447-14.479783-5.996574l-223.00912-223.00912c-3.837398-3.837398-5.996574-9.046027-5.996574-14.46955 0-5.433756 2.159176-10.632151 5.996574-14.46955l223.019353-223.029586c7.992021-7.992021 20.957311-7.992021 28.949332 0 7.992021 8.002254 7.992021 20.957311 0 28.949332l-188.073446 188.073446 604.753497 0C865.521592 475.058646 874.690416 484.217237 874.690416 495.52477z"></path></svg>
  <span>Back</span>
</button> </a>
    <h1>About Us</h1>
    <div class="about-us">
        <p>
            Welcome to our online food delivery system! We are passionate about bringing delicious meals right to your doorstep, making it convenient and hassle-free for you to enjoy restaurant-quality food in the comfort of your own home. With a wide range of cuisines and top-notch delivery service, we strive to provide the best dining experience for our customers.
        </p>
        <p>
            Our team of talented chefs and dedicated delivery personnel work together to ensure that every order is prepared with care and delivered on time. We partner with the finest local restaurants to offer a diverse menu that caters to all tastes and dietary preferences.
        <p>
            Ordering is simple and straightforward. Just browse our menu, select your favorite dishes, and proceed to checkout. We guarantee secure online transactions and quick delivery, so you can sit back, relax, and let us take care of your cravings. Customer satisfaction is our top priority, and we're always here to assist you with any inquiries or feedback you may have.
        </p>
        <p>
            Join us on this culinary journey and discover the joy of great food delivered to your door. Start exploring our menu now and experience the convenience and flavors we have to offer!
        </p>

        <div class="contact-icons">
        <svg width="32px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="Communication / Phone"> <path id="Vector" d="M9.50246 4.25722C9.19873 3.4979 8.46332 3 7.64551 3H4.89474C3.8483 3 3 3.8481 3 4.89453C3 13.7892 10.2108 21 19.1055 21C20.1519 21 21 20.1516 21 19.1052L21.0005 16.354C21.0005 15.5361 20.5027 14.8009 19.7434 14.4971L17.1069 13.4429C16.4249 13.1701 15.6483 13.2929 15.0839 13.7632L14.4035 14.3307C13.6089 14.9929 12.4396 14.9402 11.7082 14.2088L9.79222 12.2911C9.06079 11.5596 9.00673 10.3913 9.66895 9.59668L10.2363 8.9163C10.7066 8.35195 10.8305 7.57516 10.5577 6.89309L9.50246 4.25722Z" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g> </g></svg>
            <span>  123-456-7890</span>
        </div>
        <div class="contact-icons">
        <svg width="32px" height="20px" viewBox="0 0 24.00 24.00" xmlns="http://www.w3.org/2000/svg" fill="#ffffff" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title></title> <g id="Complete"> <g id="mail"> <g> <polyline fill="none" points="4 8.2 12 14.1 20 8.2" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></polyline> <rect fill="none" height="14" rx="2" ry="2" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" width="18" x="3" y="6.5"></rect> </g> </g> </g> </g></svg>
            <span>  info@example.com</span>
        </div>

</div>
</body>
</html>
