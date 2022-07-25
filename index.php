<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="styles/style.css">

<title>Roadar Home</title>

</head>
<body>

    <div class="container">
        <div class="navbar">
        <img class="logo" src="resources/logos/roadar_logo_name.png" alt="logo">
        <nav>
            <ul id="menuList">     
                <li><a href="#">Download</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">About Us</a></li>
            </ul>
        </nav>

        <img src="resources/icons/icons8-menu-30.png" class="menu-icon" onclick="togglemenu()">
        </div>


        <div class="row">
            <div class="col-1">
                <h1>Road Safety</h1>
                <p>You may travel more easily and safely with the aid of Roadar. Start your engine now. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <button class="btnbody" type="button">Go to dashboard</button>
            </div>
            <div class="col-2">
                <img src="resources/images/home_car.png" alt="blue car" class="car">
                <!--<h4 class="h4">Road Accident Report Form</h4>
                    <p class="cardp">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>-->
            </div>
        </div>

    </div>

    <script>
        var menuList = document.getElementById("menuList");

        menuList.style.maxHeight = "0px";

        function togglemenu() {
            if(menuList.style.maxHeight == "0px") {
                menuList.style.maxHeight = "150px";
            }
            else {
                menuList.style.maxHeight = "0px";
            }
        }
    </script>

    
</body>
</html>