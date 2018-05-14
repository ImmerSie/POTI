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
            
            th {
                white-space: nowrap;
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
                            <table id="infoTable">
                                <tbody>
                                    <tr>
                                        <td><h3 id="productId"></h3></td>
                                        <td><h3 id="productTitle"></h3></td>
                                    </tr>
                                    <tr>
                                        <td><h3>Price:</h3></td>
                                        <td><h3 id="productPrice"></h3></td>
                                    </tr>
                                    <tr>
                                        <td><h3>Unit Quantity:</h3></td>
                                        <td><h3 id="unitQuantity"></h3></td>
                                    </tr>
                                    <tr>
                                        <td><h3>Current Stock:</h3></td>
                                        <td><h3 id="stock"></h3></td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align: middle"><h3 id="quantity">Quantity:</h3></td>
                                        <td style="vertical-align: middle"><input id="quantityInput" type="number" name="amount" value="1" ></td>
                                    </tr>
                                     <tr>
                                        <td></td>
                                        <td><button onclick="addProduct()">Add to Cart</button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div id="cart">
                        <h1>Shopping Cart</h1>
                        <table>
                            <thead id="cartHead" style="visibility: hidden">
                                <tr>
                                    <th>Product ID</th>
                                    <th>Product Title</th>
                                    <th>Product Quantity</th>
                                    <th>Number of Items</th>
                                    <th>Product Price</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody id="cartBody"></tbody>
                        </table>
                        <button class="btn" onclick="checkout()" href="purchaseForm.php">Checkout</button>
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
                        document.getElementById("productTitle").innerHTML = detailsArray[1];
                        document.getElementById("productPrice").innerHTML = "$" + detailsArray[2];
                        document.getElementById("unitQuantity").innerHTML = detailsArray[3];
                        document.getElementById("stock").innerHTML = detailsArray[4];
                    }
                };
                
                xhttp.open("GET", "databaseAccessor.php?id="+name, true);
                xhttp.send();
            }
            
            function getProductInfo(id) {
                //document.getElementById("productTitle").style.visibility = "visible";
                //var name = document.getElementById(id).textContent;
                //document.getElementById("productTitle").innerHTML = name;
                getProduct(id);
            }
            
            function addProduct(){
                $("#cartHead").css("visibility", "visible");
                var id = $("#productId").text();
                var found = 0;
                $("#cartBody tr").each(function(i, row){
                    if($(this).html().indexOf(id) != -1){
                        found = 1;
                        var quantityElement = $(this).children("#cartPNo");
                        $(quantityElement).html(parseInt(quantityElement.html()) + parseInt($("#quantityInput").val()));
                        
                        var price = parseFloat($(this).children("#cartPPrice").html().substring(1));
                        console.log("Price " + price);
                        var quantity = parseInt($(this).children("#cartPNo").html());
                        console.log("quantity " + quantity);
                        var currentPrice = parseFloat($(this).children("#productTotal").html().substring(1));
                        var total = price * quantity;
                        $(this).children("#productTotal").html(total.toFixed(2));
                    }
                });
                
                if(found == 0){
                    var product = $("#cartBody").html();
                    product = product + "<tr id=\"cartP" + $("#productId").text() + "\">";
                    product = product + "<td id=\"cartPId\">" + $("#productId").text() + "</td>";
                    product = product + "<td id=\"cartPTitle\">" + $("#productTitle").text() + "</td>";
                    product = product + "<td id=\"cartPQuanity\">" + $("#unitQuantity").text() + "</td>";
                    product = product + "<td id=\"cartPNo\">" + $("#quantityInput").val() + "</td>";
                    product = product + "<td id=\"cartPPrice\">" + $("#productPrice").text() + "</td>";
                    var total =  parseFloat($("#productPrice").text().substring(1)) * parseInt($("#quantityInput").val());
                    product = product + "<td id=\"productTotal\">$" + total.toFixed(2) + "</td>";
                    product = product + "</tr>";

                    $("#cartBody").html(product);
                }
            }
            
            /*function addProduct() {
                var btn = document.getElementById("addBtn").textContent;
                if (btn === "Add to Cart") {
                    document.getElementById("quantity").style.visibility = "visible";
                    document.getElementById("input").style.visibility = "visible";
                    document.getElementById("addBtn").innerHTML = "Remove from Cart";
                }
                else {
                    document.getElementById("quantity").style.visibility = "hidden";
                    document.getElementById("input").style.visibility = "hidden";
                    document.getElementById("addBtn").innerHTML = "Add to Cart";
                }
            }*/
            
            window.onload = getProductInfo("1000");
        </script>
    </body>    
</html>

