<html>
    <head>
        <title>Grocery Store</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="shop.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script>
            $(function(){
                $("#nav").accordion({
                    event: "mouseover",
                    heightStyle: "content"
                });
                
                $("#frozenFood").accordion({
                    event: "mouseover",
                    heightStyle: "content",
                });
                
                $("#frozenFood").on("accordionbeforeactivate", function(event, ui){
                    if(ui.newHeader.attr("class").indexOf("leaf") >= 0){
                        event.preventDefault();
                    }
                }); 
                
                $("#fishFingers").accordion({
                    event: "mouseover",
                    heightStyle: "content",
                    active: false,
                    collapsible: true,
                });
                
                $("#fishFingers").on("accordionbeforeactivate", function(event, ui){
                    if(ui.newHeader.attr("class").indexOf("leaf") >= 0){
                        event.preventDefault();
                    }
                });
                
                $("#milkProducts").accordion({
                    event: "mouseover",
                    heightStyle: "content",
                    active: false,
                    collapsible: true,
                });
                
                $("#milkProducts").on("accordionbeforeactivate", function(event, ui){
                    if(ui.newHeader.attr("class").indexOf("leaf") >= 0){
                        event.preventDefault();
                    }
                });
                
                $("#freshFood").accordion({
                    event: "mouseover",
                    heightStyle: "content"
                });
                
                $("#freshFood").on("accordionbeforeactivate", function(event, ui){
                    if(ui.newHeader.attr("class").indexOf("leaf") >= 0){
                        event.preventDefault();
                    }
                });
                
                $("#beverages").accordion({
                    event: "mouseover",
                    heightStyle: "content"
                });
                
                $("#beverages").on("accordionbeforeactivate", function(event, ui){
                    if(ui.newHeader.attr("class").indexOf("leaf") >= 0){
                        event.preventDefault();
                    }
                });
                
                $("#homeHealth").accordion({
                    event: "mouseover",
                    heightStyle: "content"
                });
                
                $("#homeHealth").on("accordionbeforeactivate", function(event, ui){
                    if(ui.newHeader.attr("class").indexOf("leaf") >= 0){
                        event.preventDefault();
                    }
                });
                
                $("#petFood").accordion({
                    event: "mouseover",
                    heightStyle: "content"
                });
                
                $("#petFood").on("accordionbeforeactivate", function(event, ui){
                    if(ui.newHeader.attr("class").indexOf("leaf") >= 0){
                        event.preventDefault();
                    }
                });
                
                $(".leaf").each(function(){
                    this.style.background = "blue";
                    this.style.color = "white";
                });                 
            });        
        </script>
        <style>
            #nav {
                float: left;
                width: 20%;
            }
            #product {
                float: clear;
                margin: 2em;
                text-align: center;
            }
            #currentProduct{
                float:right;
            }
        </style>
    </head>
    <body>
        <h1 class="title" id="title">Online Grocery Shop</h1>
        <div id="nav">
            <h3>Frozen Food</h3>
            <div id="frozenFood">
                <h3>Fish Fingers</h3>
                <div id="fishFingers">
                    <h3 class="leaf">Fish Fingers (large)</h3>
                    <div></div>
                    <h3 class="leaf">Fish Fingers (small)</h3>
                    <div></div>
                </div>
                <h3>Milk Products</h3>
                <div id="milkProducts">
                    <h3 class="leaf">Tub Ice Cream (1 litre)</h3>
                    <div></div>
                    <h3 class="leaf">Tub Ice Cream (2 litre)</h3>
                    <div></div>
                </div>
                <h3 class="leaf">Shelled Prawns</h3>
                <div></div>
                <h3 class="leaf">Hamburger Patties</h3>
                <div></div>
            </div>
            <h3>Fresh Food</h3>
            <div id="freshFood">
                <h3>Cheddar Cheese</h3>
                <div>
                    <h3 class="leaf">500 Gram</h3>
                    <h3 class="leaf">1000 Gram</h3>
                </div>
                <h3 class="leaf">T'Bone Steak</h3>
                <div></div>
                <h3 class="leaf">Navel Oranges</h3>
                <div></div>
                <h3 class="leaf">Bananas</h3>
                <div></div>
                <h3 class="leaf">Grapes</h3>
                <div></div>
                <h3 class="leaf">Apples</h3>
                <div></div>
                <h3 class="leaf">Peaches</h3>
                <div></div>
            </div>
            <h3>Beverages</h3>
            <div id="beverages">
                <h3>Coffee</h3>
                <div>
                    <h3 class="leaf">200 Gram</h3>
                    <h3 class="leaf">500 Gram</h3>
                </div>
                <h3>Earl Grey Tea Bags</h3>
                <div>
                    <h3 class="leaf">Pack 25</h3>
                    <h3 class="leaf">Pack 100</h3>
                    <h3 class="leaf">Pack 200</h3>
                </div>
                <h3 class="leaf">Chocolate Bar</h3>
                <div></div>
            </div>
            <h3>Home Health</h3>
            <div id="homeHealth">
                <h3>Panadol</h3>
                <div>
                    <h3 class="leaf">Pack 24</h3>
                    <h3 class="leaf">Bottle 50</h3>
                </div>
                <h3>Garbage Bags</h3>
                <div>
                    <h3 class="leaf">Small (pack 10)</h3>
                    <h3 class="leaf">Large (pack 50)</h3>
                </div>
                <h3 class="leaf">Bath Soap</h3>
                <div></div>
                <h3 class="leaf">Washing Powder</h3>
                <div></div>
                <h3 class="leaf">Laundry Bleach</h3>
                <div></div>
            </div>
            <h3>Pet Food</h3>
            <div id="petFood">
                <h3>Dry Dog Food</h3>
                <div>
                    <h3 class="leaf">1 kg. Pack</h3>
                    <h3 class="leaf">5 kg. Pack</h3>
                </div>
                <h3 class="leaf">Bird Food</h3>
                <div></div>
                <h3 class="leaf">Cat Food</h3>
                <div></div>
                <h3 class="leaf">Fish Food</h3>
                <div></div>
            </div>
        </div>
        <div class="window" id="product">
            <h1>Product Information</h1>
            <div class="s12">
                <button class="btn" onclick="getProduct()">Get Product</button>
            </div>
            <div class="s12">
                <div class="s6">
                    <div class="s2 offsetS2">
                        <img src="test.jpg" alt="Image of Product" height="50%" style="float: left">
                    </div>
                    <div class="s2" style="float: left">
                        <h1 class="productInfo" style="float: left; margin-bottom: 0px">Quantity:</h1>
                        <button class="btn" type="submit" onclick="addProduct()" style="float: left">Add to Card</button>
                    </div>
                    <div class="s1 offsetS7">
                        <input class="inputField" type="number" name="amount" value="1" style="float: left">
                    </div>
                </div>
            </div>
            <div id="currentProduct">
                
            </div>
        </div>
        <div class="window" id="cart">
            <h1>Shopping Cart</h1>
            <button class="btn" onclick="checkout()">Checkout</button>
        </div>
        
        <script>
            function getProduct(){
                var xhttp;
                
                xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function(){
                    if(xhttp.readyState == 4 && xhttp.status == 200){
                        document.getElementById("currentProduct").innerHTML = xhttp.responseText;
                    }
                };
                
                xhttp.open("GET", "databaseAccessor.php", true);
                xhttp.send();
            }
            
        </script>
    </body>    
</html>

