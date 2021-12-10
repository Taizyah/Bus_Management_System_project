<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/styles/custormer-form.css">
    <title>Document</title>
</head>
<body>
    <nav class="nav-main">
        <div class="nav-main-hamburger">            
            <img src="./../assets/icons/bus-logo.png" class="hamburger"/>
        </div>
        <ul class="nav-list">
            <li><a href="#">About</a></li>
            <li><a href="#">Contacts</a></li>
            <li><a href="#">FAq</a></li>
        </ul>
    </nav>
    <div class="customer-formButtons">
       <a href="./signin.html"><button>Sign In</button></a> 
        <button href="./signup.html">Sign Up</button>
    </div>
    <div class="about">
        <h2>About</h2>
        <div class="about-text">
            <span>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum odio iste eos non repellat in ipsa animi officia, aliquid deleniti porro. Vel nisi, dolores voluptatum sed qui unde numquam quis. Quo natus harum magnam quia animi accusamus culpa esse debitis illum adipisci ipsam beatae fugiat voluptate tempora excepturi aperiam, deleniti quod, quas quidem ad asperiores nisi iste ullam! Eaque adipisci ipsa est nesciunt facilis minima sint doloremque ea harum suscipit? Voluptatem voluptas alias, nisi adipisci quisquam possimus quam libero dolor in impedit consectetur architecto dicta error ut quibusdam iusto numquam et. Accusantium ad nemo quod asperiores unde quas exercitationem libero nulla debitis voluptatem sed, at magni deserunt iusto? Hic debitis rerum nemo consequatur explicabo natus veritatis, magnam harum commodi, porro magni voluptatum aspernatur. Maiores molestiae deleniti unde fugit harum iste eos sed exercitationem laudantium eaque quia dicta veniam adipisci, nostrum error, commodi mollitia ratione ea saepe amet reiciendis sit laboriosam!
            </span>
        </div>
    </div>

    <form action="">
        <!-- <h2 class="booking-form-title">Booking Form</h2> -->
        <div class="form-body">
            <div class="form-left">
                <span>Your Name</span>
                <input type="text" placeholder="Name" name="name" id="name" />
                <span>Your Email</span>
                <input type="text" placeholder="Email" name="email" id="email"/>
                <span>Contact</span>
                <input type="text" placeholder="Contact" name="contact" id="contact"/>
                
                <span>Date Of Travel</span>
                <input type="text" placeholder="Date" name="date" id="date"/>
            </div>
            <div class="form-right">
                <span>From</span>
                <input type="text" placeholder="Current Location" name="current-location" id="current-location"/>
                <span>To</span>
                <input type="text" placeholder="Your Destination" name="destination" id="destination"/>
                
                <span>Tickets</span>
                <input type="text" placeholder="Enter Number of Tickets" name="tickets" id="tickets"/>
                <button id="submit-button">Submit</button>
            </div>
        </div>
        <div class="confirmation-text">
            <h3>Your form has been submitted successfully, do you wish to cancel?</h3>
       </div>
       <div class="appreciation-text">
            <h1>Thank you for choosing our services!</h1>
       </div>
    </form>
        <center>
            <div class="cancel-button">
                <span>Cancel</span>
            </div>
        </center>

    <footer>
        <ul>
            <h1>Customers</h1>
            <li><a href="">Contacts</a></li>
            <li><a href="">Email</a></li>
            <li><a href="">Developers</a></li>
            <li><a href="">Booking Information</a></li>
            <li><a href="">Faq</a></li>
            <li><a href="">Help</a></li>
        </ul>
        <ul>
            <h1>Customers</h1>
            <li><a href="">Contacts</a></li>
            <li><a href="">Email</a></li>
            <li><a href="">Developers</a></li>
            <li><a href="">Booking Information</a></li>
            <li><a href="">Faq</a></li>
            <li><a href="">Help</a></li>
        </ul>
        <ul>
            <h1>Customers</h1>
            <li><a href="">Contacts</a></li>
            <li><a href="">Email</a></li>
            <li><a href="">Developers</a></li>
            <li><a href="">Booking Information</a></li>
            <li><a href="">Faq</a></li>
            <li><a href="">Help</a></li>
        </ul>
    </footer>


    <script> 
       var submitButton = document.getElementById('submit-button') 
       var text = document.querySelector('.confirmation-text h3');
       var cancelButton = document.querySelector('.cancel-button');
       var formBody = document.querySelector('.form-body');
       var appText = document.querySelector('.appreciation-text');
       
       submitButton.addEventListener('click', displayText);
       cancelButton.addEventListener('click', clearScreen);

       function clearScreen () {
           formBody.style.display = "none";
           text.style.display = "none";
           appText.style.display = "unset";
           cancelButton.style.display = "none";
       }

       function displayText(e) {
            e.preventDefault();

            setTimeout(() => {
                text.style.visibility = "visible"
                cancelButton.style.visibility = "visible"
            }, 800)
         
        }
    </script>
</body>
</html>