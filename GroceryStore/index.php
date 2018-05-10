<html>
    <head>
        <title>Grocery Store</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
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
                    heightStyle: "content"
                });
                $("#freshFood").accordion({
                    event: "mouseover",
                    heightStyle: "content"
                });
                $("#beverages").accordion({
                    event: "mouseover",
                    heightStyle: "content"
                });
                $("#homeHealth").accordion({
                    event: "mouseover",
                    heightStyle: "content"
                });
                $("#petFood").accordion({
                    event: "mouseover",
                    heightStyle: "content"
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
        </style>
    </head>
    <body>
        <div id="nav">
            <h3>Frozen Food</h3>
            <div id="frozenFood">
                <h3>Fish Fingers</h3>
                <div id="seaFood">
                    <h3>Fish Fingers (large)</h3>
                    <h3>Fish Fingers (small)</h3>
                </div>
                <h3>Milk Products</h3>
                <div id="milkProducts">
                    <h3>Tub Ice Cream (1 litre)</h3>
                    <h3>Tub Ice Cream (2 litre)</h3>
                </div>
                <h3>Shelled Prawns</h3>
                <div></div>
                <h3>Hamburger Patties</h3>
                <div></div>
            </div>
            <h3>Fresh Food</h3>
            <div id="freshFood">
                <h3>T'Bone Steak</h3>
                <div></div>
                <h3>Cheddar Cheese</h3>
                <div>
                    <h3>500 Gram</h3>
                    <h3>1000 Gram</h3>
                </div>
                <h3>Navel Oranges</h3>
                <div></div>
                <h3>Bananas</h3>
                <div></div>
                <h3>Grapes</h3>
                <div></div>
                <h3>Apples</h3>
                <div></div>
                <h3>Peaches</h3>
                <div></div>
            </div>
            <h3>Beverages</h3>
            <div id="beverages">
                <h3>Coffee</h3>
                <div>
                    <h3>200 Gram</h3>
                    <h3>500 Gram</h3>
                </div>
                <h3>Earl Grey Tea Bags</h3>
                <div>
                    <h3>Pack 25</h3>
                    <h3>Pack 100</h3>
                    <h3>Pack 200</h3>
                </div>
                <h3>Chocolate Bar</h3>
                <div></div>
            </div>
            <h3>Home Health</h3>
            <div id="homeHealth">
                <h3>Bath Soap</h3>
                <div></div>
                <h3>Panadol</h3>
                <div>
                    <h3>Pack 24</h3>
                    <h3>Bottle 50</h3>
                </div>
                <h3>Washing Powder</h3>
                <div></div>
                <h3>Garbage Bags</h3>
                <div>
                    <h3>Small (pack 10)</h3>
                    <h3>Large (pack 50)</h3>
                </div>
                <h3>Laundry Bleach</h3>
                <div></div>
            </div>
            <h3>Pet Food</h3>
            <div id="petFood">
                <h3>Bird Food</h3>
                <div></div>
                <h3>Cat Food</h3>
                <div></div>
                <h3>Dry Dog Food</h3>
                <div>
                    <h3>1 kg. Pack</h3>
                    <h3>5 kg. Pack</h3>
                </div>
                <h3>Fish Food</h3>
                <div></div>
            </div>
        </div>
        <div id="product">
            <h1>Online Grocery Shop</h1>
        </div>
        <div id="cart">
            
        </div>
    </body>    
</html>

