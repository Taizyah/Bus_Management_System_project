<?php
    require_once("./../autoload.php");
    
    use includes\Sessions;

    // $sessionClass = Sessions::getInstance($_GET['userid']);
    // $session = $sessionClass->getSessionVariable();

    // if($session == null){
    //     header('location: signin.html');
    // }

    // else{
?>
        <html>
            <head>
                <title>Bus Management System</title>
                <link rel="stylesheet" href="./../assets/styles/styles.css" />
            </head>
            <body>
                <!-- <nav class="nav-main">
                    <div class="nav-main-hamburger">
                        <img src="./../assets/icons/menu.png" class="hamburger"/>
                        <h2>BUS MANAGEMENT SYSTEM</h2>
                    </div>
                    <ul class="nav-list">
                        <li><a href="#">About</a></li>
                        <li><a href="#">Contacts</a></li>
                        <li><a href="#">FAq</a></li>
                    </ul>
                </nav> -->
                <div class="website-header">
                        <div class="header-text">
                            <h1>Welcome</h1>
                            <h3><?php echo "User"; ?></h3>
                        </div>
                    <div class="header-row1">
                        <div class="card customers">
                            <img src="./../assets/icons/user-svgrepo-com.svg" />
                        <div class="card-bottom bottom-customers">
                            <h3>Customers</h3>
                        </div>
                        </div>
                        <div class="card bookings">
                            <img src="./../assets/icons/ticket-svgrepo-com.svg" />
                            <div class="card-bottom bottom-bookings">
                                <h3>Bookings</h3>
                            </div>
                        </div>
                        <div class="card date">
                            <img src="./../assets/icons/date-svgrepo-com.svg" />
                            <div class="card-bottom bottom-date">
                                <h3>Dates</h3>
                            </div>
                        </div>
                        <div class="card account">
                            <img src="./../assets/icons/user-svgrepo-com.svg" />
                            <div class="card-bottom bottom-account">
                                <h3>Account</h3>
                            </div>
                        </div>
                    </div>
                    <div class="header-row2">
                        <div class="card customers">
                            <img src="./../assets/icons/bus-svgrepo-com.svg" />
                            <div class="card-bottom bottom-buses">
                                <h3>Buses</h3>
                            </div>
                        </div>
                        <div class="card bookings">
                            <img src="./../assets/icons/seat-svgrepo-com.svg" />
                            <div class="card-bottom bottom-seats">
                                <h3>Seats</h3>
                            </div>
                        </div>
                        <div class="card date">
                            <img src="./../assets/icons/checked-svgrepo-com.svg" />
                            <div class="card-bottom bottom-availability">
                                <h3>Availability</h3>
                            </div>
                        </div>
                        <div class="card account">
                            <img src="./../assets/icons/route-svgrepo-com.svg"/>
                            <div class="card-bottom bottom-routes">
                                <h3>Routes</h3>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="side-bar">
                    <div class="sidebar-top">
                        <img src="./../assets/icons/cancel.png" class="cancel"/>
                        <h3 class="sideBarTitle">BUS MANAGEMENT SYSTEM</h3>
                    </div>
                        <ul class="sidebar-navlists">
                            <li>
                                <img src="./../assets/icons/customer.png" alt="customer" />
                            <a href="#">Customers</a></li>
                            <li>
                                <img src="./../assets/icons/ticket.png" class="t" />
                                <a href="#">Bookings</a></li>
                            <li>
                                <img src="./../assets/icons/date-svgrepo-com.svg" />
                                    <a href="#">Date</a></li>
                            <li>
                                <img src="./../assets/icons/user.png" />
                                <a href="#">Account</a></li>
                            <li>
                                <img src="./../assets/icons/bus-svgrepo-com.svg" />
                                <a href="#">Buses</a></li>
                            <li>
                                <img src="./../assets/icons/seat-svgrepo-com.svg" />
                                <a href="#">Seats</a></li>
                            <li>
                                <img src="./../assets/icons/check.png" />
                                <a href="#">Availability</a></li>
                            <!-- <li>
                                <img src="./../assets/icons/route-svgrepo-com.svg" /> 
                                <a href="#">Routes</a>
                            </li> -->
                        </ul>
                </div>
                <script src="./../assets/javascript/index.js"></script>
            </body>
        </html>

<?php
    // }
?>
