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
                
                $("#cheddarCheese").accordion({
                    event: "mouseover",
                    heightStyle: "content",
                    active: false,
                    collapsible: true,
                });
                
                $("#cheddarCheese").on("accordionbeforeactivate", function(event, ui){
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
                
                $("#coffee").accordion({
                    event: "mouseover",
                    heightStyle: "content",
                    active: false,
                    collapsible: true,
                });
                
                $("#coffee").on("accordionbeforeactivate", function(event, ui){
                    if(ui.newHeader.attr("class").indexOf("leaf") >= 0){
                        event.preventDefault();
                    }
                });
                
                $("#earlGreyTea").accordion({
                    event: "mouseover",
                    heightStyle: "content",
                    active: false,
                    collapsible: true,
                });
                
                $("#earlGreyTea").on("accordionbeforeactivate", function(event, ui){
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
                
                $("#panadol").accordion({
                    event: "mouseover",
                    heightStyle: "content",
                    active: false,
                    collapsible: true,
                });
                
                $("#panadol").on("accordionbeforeactivate", function(event, ui){
                    if(ui.newHeader.attr("class").indexOf("leaf") >= 0){
                        event.preventDefault();
                    }
                });
                
                $("#garbageBags").accordion({
                    event: "mouseover",
                    heightStyle: "content",
                    active: false,
                    collapsible: true,
                });
                
                $("#garbageBags").on("accordionbeforeactivate", function(event, ui){
                    if(ui.newHeader.attr("class").indexOf("leaf") >= 0){
                        event.preventDefault();
                    }
                });
                
                $("#dogFood").accordion({
                    event: "mouseover",
                    heightStyle: "content",
                    active: false,
                    collapsible: true,
                });
                
                $("#dogFood").on("accordionbeforeactivate", function(event, ui){
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
                width: 100%
            }
            #product {
                float: clear;
                margin: 2em
            }
            
            #tdNav{
                width:25%;
                vertical-align: top;
            }
            
            table td:last-child {
                width: 100%;
                padding-top: 0%;
                vertical-align: top;
            }
            td {
                white-space: nowrap;
                margin-right: 20px
            }
        </style>
    </head>
    <body>
        <table style="width: 100%">
            <tr>
                <td id="tdNav">
                    <div id="nav">
                        <h3>Frozen Food</h3>
                        <div id="frozenFood">
                            <h3>Fish Fingers</h3>
                            <div id="fishFingers">
                                <h3 class="leaf" id="1000" onclick="getProductInfo(this.id)">Fish Fingers (large)</h3>
                                <div></div>
                                <h3 class="leaf" id="1001" onclick="getProductInfo(this.id)">Fish Fingers (small)</h3>
                                <div></div>
                            </div>
                            <h3>Milk Products</h3>
                            <div id="milkProducts">
                                <h3 class="leaf" id="1004" onclick="getProductInfo(this.id)">Tub Ice Cream (1 litre)</h3>
                                <div></div>
                                <h3 class="leaf" id="1005" onclick="getProductInfo(this.id)">Tub Ice Cream (2 litre)</h3>
                                <div></div>
                            </div>
                            <h3 class="leaf" id="1006" onclick="getProductInfo(this.id)">Shelled Prawns</h3>
                            <div></div>
                            <h3 class="leaf" id="1003" onclick="getProductInfo(this.id)">Hamburger Patties</h3>
                            <div></div>
                        </div>
                        <h3>Fresh Food</h3>
                        <div id="freshFood">
                            <h3>Cheddar Cheese</h3>
                            <div id="cheddarCheese">
                                <h3 class="leaf" id="3000" onclick="getProductInfo(this.id)">500 Gram</h3>
                                <div></div>
                                <h3 class="leaf" id="3001" onclick="getProductInfo(this.id)">1000 Gram</h3>
                                <div></div>
                            </div>
                            <h3 class="leaf" id="3002" onclick="getProductInfo(this.id)">T'Bone Steak</h3>
                            <div></div>
                            <h3 class="leaf" id="3003" onclick="getProductInfo(this.id)">Navel Oranges</h3>
                            <div></div>
                            <h3 class="leaf" id="3004" onclick="getProductInfo(this.id)">Bananas</h3>
                            <div></div>
                            <h3 class="leaf" id="3005" onclick="getProductInfo(this.id)">Grapes</h3>
                            <div></div>
                            <h3 class="leaf" id="3006" onclick="getProductInfo(this.id)">Apples</h3>
                            <div></div>
                            <h3 class="leaf" id="3007" onclick="getProductInfo(this.id)">Peaches</h3>
                            <div></div>
                        </div>
                        <h3>Beverages</h3>
                        <div id="beverages">
                            <h3>Coffee</h3>
                            <div id="coffee">
                                <h3 class="leaf" id="4003" onclick="getProductInfo(this.id)">200 Gram</h3>
                                <div></div>
                                <h3 class="leaf" id="4004" onclick="getProductInfo(this.id)">500 Gram</h3>
                                <div></div>
                            </div>
                            <h3>Earl Grey Tea Bags</h3>
                            <div id="earlGreyTea">
                                <h3 class="leaf" id="4000" onclick="getProductInfo(this.id)">Pack 25</h3>
                                <div></div>
                                <h3 class="leaf" id="4001" onclick="getProductInfo(this.id)">Pack 100</h3>
                                <div></div>
                                <h3 class="leaf" id="4002" onclick="getProductInfo(this.id)">Pack 200</h3>
                                <div></div>
                            </div>
                            <h3 class="leaf" id="4005" onclick="getProductInfo(this.id)">Chocolate Bar</h3>
                            <div></div>
                        </div>
                        <h3>Home Health</h3>
                        <div id="homeHealth">
                            <h3>Panadol</h3>
                            <div id="panadol">
                                <h3 class="leaf" id="2000" onclick="getProductInfo(this.id)">Pack 24</h3>
                                <div></div>
                                <h3 class="leaf" id="2001" onclick="getProductInfo(this.id)">Bottle 50</h3>
                                <div></div>
                            </div>
                            <h3>Garbage Bags</h3>
                            <div id="garbageBags">
                                <h3 class="leaf" id="2003" onclick="getProductInfo(this.id)">Small (pack 10)</h3>
                                <div></div>
                                <h3 class="leaf" id="2004" onclick="getProductInfo(this.id)">Large (pack 50)</h3>
                                <div></div>
                            </div>
                            <h3 class="leaf" id="2002" onclick="getProductInfo(this.id)">Bath Soap</h3>
                            <div></div>
                            <h3 class="leaf" id="2005" onclick="getProductInfo(this.id)">Washing Powder</h3>
                            <div></div>
                            <h3 class="leaf" id="2006" onclick="getProductInfo(this.id)">Laundry Bleach</h3>
                            <div></div>
                        </div>
                        <h3>Pet Food</h3>
                        <div id="petFood">
                            <h3>Dry Dog Food</h3>
                            <div id="dogFood">
                                <h3 class="leaf" id="5000" onclick="getProductInfo(this.id)">1 kg. Pack</h3>
                                <div></div>
                                <h3 class="leaf" id="5001" onclick="getProductInfo(this.id)">5 kg. Pack</h3>
                                <div></div>
                            </div>
                            <h3 class="leaf" id="5002" onclick="getProductInfo(this.id)">Bird Food</h3>
                            <div></div>
                            <h3 class="leaf" id="5003" onclick="getProductInfo(this.id)">Cat Food</h3>
                            <div></div>
                            <h3 class="leaf" id="5004" onclick="getProductInfo(this.id)">Fish Food</h3>
                            <div></div>
                        </div>
                    </div>
                
                </td>
                <td style="padding-top:0px">
                    <h1 class="title" id="title">Online Grocery Shop</h1>
                    <div id="product" style="width:100%">
                        <h2>Product Information</h1>
                        <div>
                            <table id="infoTable" style="visibility: hidden">
                                <tbody>
                                    <tr>
                                        <td><h2 id="productId"></h3></td>
                                        <td><h2 id="productTitle"></h1></td>
                                    </tr>
                                    <tr>
                                        <td><h2>Price</h2></td>
                                        <td><h2 id="productPrice"></h2></td>
                                    </tr>
                                    <tr>
                                        <td><h2>Unit Quantity</h2></td>
                                        <td><h2 id="unitQuantity"></h2></td>
                                    </tr>
                                    <tr>
                                        <td><h2>Current Stock</h2></td>
                                        <td><h2 id="stock"></h2></td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align: middle"><h2 id="quantity">Quantity:</h2></td>
                                        <td style="vertical-align: middle"><input id="input" type="number" name="amount" value="1" ></td>
                                    </tr>
                                     <tr id="addBtn">
                                        <td></td>
                                        <td><button class="btn" type="submit" onclick="addProduct()">Add to Cart</button></td>
                                    </tr>
                                </tbody>
                            </table>

                            <!--<table style="text-align: left; width:100%">
                                <tbody>
                                    
                                   
                                    <tr id="remBtn" style="display: none">
                                        <td><button class="btn" type="submit" onclick="removeProduct()" style="float: left">Remove</button></td>
                                    </tr>
                                </tbody>
                            </table>-->
                        </div>
                    </div>

                    <div id="cart">
                        <h1>Shopping Cart</h1>
                        <button class="btn" onclick="checkout()">Checkout</button>
                    </div>
                </td>
            </tr>
        </table>
                
        <script>
            function getProduct(name){
                var xhttp;
                
                xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function(){
                    if(xhttp.readyState == 4 && xhttp.status == 200){
                        var product = xhttp.responseText;
                        var detailsArray = product.split(",");
                        document.getElementById("infoTable").style.visibility = "visible";
                        document.getElementById("productId").innerHTML = "#" + detailsArray[0];
                        document.getElementById("productTitle").innerHTML = " - " + detailsArray[1];
                        document.getElementById("productPrice").innerHTML = "$" + detailsArray[2];
                        document.getElementById("unitQuantity").innerHTML = detailsArray[3];
                        document.getElementById("stock").innerHTML = detailsArray[4];
                    }
                };
                
                xhttp.open("GET", "databaseAccessor.php?id="+name, true);
                xhttp.send();
            }
            
            function getProductInfo(name) {
                document.getElementById("productTitle").style.visibility = "visible";
                document.getElementById("productTitle").innerHTML = name;
                getProduct(name);
            }
            
            function addProduct() {
                document.getElementById("quantity").style.display = "block";
                document.getElementById("input").style.display = "block";
                document.getElementById("addBtn").style.display = "none";
                document.getElementById("remBtn").style.display = "block";
            }
            
            function removeProduct() {
                document.getElementById("quantity").style.display = "none";
                document.getElementById("input").style.display = "none";
                document.getElementById("addBtn").style.display = "block";
                document.getElementById("remBtn").style.display = "none";
            }
            
        </script>
    </body>    
</html>

