<!DOCTYPE html>
<html>
<head> 
<title> Dashboard </title>
<style>
	html {
		overflow-y: hidden;
	}
	* {
		text-decoration: none;
	}
	body {
		margin: 0;
		padding: 0;
		background: #2D4354;
	}
	
	/*HHHHHHHHEEEEEEEEEEEEAAAAAAAAAAAAADDDDDDDDDEEEEEEEERRRRRRRRRRR*/
	
	#burger	{
		display: block;
		position: relative;
		top: 45px;
		left: 50px;
		z-index: 1;
		height: 100%;
	}
	#burger input {
		width: 40px;
		height: 32px;
		position: absolute;
		cursor: pointer;
		opacity: 0;
		z-index: 2;
	}
	#burger input:checked ~ ul {
		transform:none;
	}
	.burgLine {
		display: block;
		width: 33px;
		height: 4px;
		margin-bottom: 5px;
		position: relative;
		background: black;
		border-radius: 3px;
		z-index: 1;
	}
	#menu {
		position: absolute;
		width: 180px;
		margin: -100px 0 0 -50px;
		padding: 50px;
		padding-top: 125px;
		height: 100vh;	
		background: #a58030;
		list-style-type: none;
		transform: translate(-100%, 0);
		transition: transform 0.5s cubic-bezier(0.77,0.2,0.05,1.0);
	}
	#menu img {
		border-radius: 100%;
		vertical-align: middle;
		height: 90px;
		width: 90px;
		position: relative;
		top: 5px;
	}
	#menu li {
		margin-top:10px;
		transition: .3s;
		&:hover {
			color: black;
			transform: scale(1.1);
		}
	}
	#menu li span {
		font-size: 11px;
		font-weight: bold;
		font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
		transition: .2s;
	}
	#menu a {
		text-decoration: none;
		color: white;
		&:hover{
			color:grey;
		}
	}
	
	/*MMMMMMEEEEEEEEEEEEEEEEEEEENNNNNNNNNNNNUUUUUUUUUU*/
	nav {
		display: flex;
		background-color: white;
		height: 100px;
	}
	#settings {
		position: absolute;
		right: 40px;
		top: 35px;
	}
	#settings img{
		filter: invert(30%);
		transition-duration: .3s;
		&:hover {
			filter: invert(0%);
		}
	}
	
	/* For Logout */
	.dropdown-content {
        display: none;
        position: absolute;
		right: -20px;
        background-color: #f9f9f9;
		border-radius: 10%;
        width: 80px;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.8);
    	z-index: 1;
    }

    .dropdown-content a {
        display: block;
        padding: 10px;
        text-decoration: none;
		font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
		letter-spacing: 2px;
        color: #333;
		border-radius: 10%;
    }

    .dropdown-content a:hover {
        background-color: #aa780c;
		color:antiquewhite;
    }

    #settings:hover .dropdown-content {
        display: block;
    }
	/*MAAAAAAAAAAAAAAAAAAAIIIIIIIIIIIIINNNNNNNNNNNNNN*/
	/* Dashboard Style */
	.ld_Content {
		width:100%;
		background-color: #333;
		height:fit-content;
		padding:10px;
		border-radius: 3%;
		margin:20px;
		color:aliceblue;
	}
	/* Orders Style */
	.orders {
            width: 80%;
            margin: 50px auto;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
        }

        .filter-controls input[type="text"] {
            width: calc(25% - 15px);
            padding: 10px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        .filter-controls {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }

        .filter-controls button {
            background-color: #184911;
            color: white;
            padding: 10px 15px;
            border: none;
            cursor: pointer;
        }

        .filter-controls button:hover {
            background-color: #45a049;
        }

        .order-info {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #f9f9f9;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .order-info div {
            flex: 1;
            margin-right: 10px;
        }

        .order-info div:last-child {
            margin-right: 0;
        }

        #orderTable {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            border: 1px solid #ddd;
        }

        #orderTable th, #orderTable td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        #orderTable th {
            background-color: #f2f2f2;
        }

        .notification {
            color: red;
            margin-top: 10px;
        }
	/* Inventory Style */
	#pieChartContainer {
            width: 80%;
            max-width: 600px;
            margin: 20px auto;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        #inventoryTable {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
            background-color: rgba(255, 255, 255, 0.5);
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

		#inventoryTable th  {
			border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
			background-color: rgba(255, 255, 255, 0.8);
        }

		#inventoryTable td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        #addButton {
            background-color: #184911;
            color: white;
            padding: 10px;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-right: 10px;
        }

        #addButton:hover {
            background-color: #45a049;
        }

        .reset-button {
            background-color: #f44336;
            color: white;
            padding: 10px;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-right: 10px;
        }

        .reset-button:hover {
            background-color: #d32f2f;
        }

</style>
</head>
<body>
	<!-- Header -->
	<header style="position:fixed; width:100%;">
		<nav>
			<div id="burger">
				<input type="checkbox" style="margin: -5px 0 0 -3px; "/>
				<li class="burgLine"></li>
				<li class="burgLine"></li>
				<li class="burgLine"></li>
				<ul id="menu">
				<hr>
					<a href="#dashboard"><li><img src="Pics/Dashboard-Pics/final-pic/dashboard.png"/><span>DASHBOARD</span></li></a>
					<a href="#orders"><li><img src="Pics/Dashboard-Pics/final-pic/order.png"/><span>ORDERS</span></li></a>
					<hr>
					<a href="#"><li><img src="Pics/Dashboard-Pics/final-pic/sales.png"/><span>SALES</span></li></a>
					<a href="#inventory"><li><img src="Pics/Dashboard-Pics/final-pic/inventory.png"/><span>INVENTORY<span></li></a>
					<a href="#"><li><img src="Pics/Dashboard-Pics/final-pic/teams.png"/><span>TEAMS</span></li></a>
				</ul>
			</div>
			<div style="width:100%; overflow:hidden; padding:10px; position: relative; align-items: center; justify-content: center; text-align:center;">
				<h1 style="font-size: 40px; font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">
					<img style="position: relative; top: -20px; width: 70px; border-radius: 100%;" src="Pics/Logo-Pics/logo.png"/>
					<span style="position: relative; bottom: 40px;">
						<span style="color:rgb(105, 68, 0)"> Agriculture</span> & 
						<span style="color: rgb(0, 80, 0);">Food Production</span>
					</span>
				</h1>
			</div>
			<div id="settings">
				<a href="#"><img width=40px height=40px src="Pics/Dashboard-Pics/settings.png"/></a>
				<div class="dropdown-content">
        			<a href="homeAFP.html">Logout</a>
   				</div>
			</div>
		</nav>
	</header>
	<!-- Header End -->

	<!-- Main Container -->

	<main class="main">
		<!-- For dashboard -->
		<div id="dashboard" style="padding: 100px 10px 10px 10px; background-color: aliceblue; display:block;">
		<div style="text-align: center; background-image: linear-gradient(black,black)">
			<h1 style="font-size:50px; color: wheat; letter-spacing: 3px; width: 100%; font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">Welcome To the System</h1>
		</div>
			<div class="db_Container" style="display:block; padding: 10px; background-color: #184911;">
				<div class="db_upperDiv" style=" display: flex;">
					<div class="ud_Content" style="background-color:#a58030; padding:10px; width:100%; height:fit-content;">
						<p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
						 totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae 
						 dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
						  sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro 
						  quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non 
						  numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. 
						  Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, 
						  nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea 
						  voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo 
						  voluptas nulla pariatur?"
						</p>
					</div>
					<div></div>
				</div>
				<div class="db_lowerDiv" style="display: flex;">
					<div class="ld_Content"><p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 
						exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor 
						in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
						Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim
						 id est laborum."</p>
					</div>
					<div class="ld_Content"><p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 
						exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
						reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint 
						occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
					</div>
					<div class="ld_Content">
						<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut 
							labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco 
							laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in 
							voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat 
							cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
					</div>
				</div>
			</div>
		</div>
		<!-- dashboard End -->

		<!-- Orders -->
		<div id="orders" style="padding-top:100px; background-color:#184911;">
			<div style="text-align: center; background-image: linear-gradient(black,black)">
				<h1 style="font-size:50px; color: wheat; letter-spacing: 3px; width: 100%; font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">Welcome To the System</h1>
			</div>
			<div style="padding:20px;">
				<div class="orders">
    					<div class="filter-controls">
        					<input type="text" id="customerFilter" placeholder="Filter by customer name">
        					<input type="text" id="productFilter" placeholder="Filter by product">
        					<button onclick="applyFilters()">Apply Filters</button>
        					<button onclick="clearFilters()">Clear Filters</button>
    					</div>

    					<table id="orderTable">
        					<thead>
            					<tr>
                					<th>Order ID</th>
                					<th>Customer Name</th>
                					<th>Item</th>
                					<th>Product</th>
                					<th>Address</th>
            					</tr>
        					</thead>
        					<tbody>
            					<!-- Sample data, replace this with your actual data -->
            					<tr>
                					<td>1</td>
                					<td>Joanvic Vargas</td>
                					<td>Wheat</td>
                					<td>Organic Wheat</td>
                					<td>Biñan City</td>
            					</tr>
           						<tr>
                					<td>2</td>
                					<td>Jaspher Baet</td>
                					<td>Rice</td>
                					<td>Basmati Rice</td>
                					<td>Biñan City</td>
            					</tr>
            					<!-- Add more rows as needed -->
        					</tbody>
    					</table>

    					<div id="notification" class="notification"></div>
				</div>
			</div>
		</div>
		<!-- Orders End -->


		<!-- For inventory -->
		<div id="inventory" style="padding-top:100px; background-color: #a58030;">
			<div style="text-align: center; background-image: linear-gradient(black,black)">
				<h1 style="font-size:50px; color: wheat; letter-spacing: 3px; width: 100%; font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">Welcome To the System</h1>
			</div>
			<div class="inventory" style="padding:10px;">
				<div style="background-color: brown; padding:20px;">
    			<!-- Product Input Form -->
    				<form id="productForm">
        				<label for="productName">Product:</label>
        				<input type="text" id="productName" required>

        				<label for="quantity">Quantity:</label>
        				<input type="number" id="quantity" required>

        				<button id="addButton" type="button" onclick="addProduct()">Submit</button>
    				</form>

   			 		<!-- Table to Display Results -->
    				<table id="inventoryTable">
        				<thead>
            				<tr>
                				<th>Product</th>
                				<th>Quantity</th>
            				</tr>
        				</thead>
        				<tbody>
            			<!-- Product results will be displayed here dynamically -->
        				</tbody>
    				</table>

    				<!-- Pie Chart -->
    				<div id="pieChartContainer">
        				<canvas id="pieChart"></canvas>
        				<button class="reset-button" onclick="resetChart()">Reset Chart</button>
    				</div>
				</div>
			</div>
		</div>
		<!-- Inventory End -->
	</main>

	<!-- orders script -->
	<script>
    function applyFilters() {
        var customerFilter = document.getElementById("customerFilter").value.toLowerCase();
        var productFilter = document.getElementById("productFilter").value.toLowerCase();

        var table = document.getElementById("orderTable");
        var rows = table.getElementsByTagName("tbody")[0].getElementsByTagName("tr");
        var notification = document.getElementById("notification");

        var notFound = true;

        for (var i = 0; i < rows.length; i++) {
            var customerName = rows[i].getElementsByTagName("td")[1].innerText.toLowerCase();
            var product = rows[i].getElementsByTagName("td")[3].innerText.toLowerCase();

            if (customerName.includes(customerFilter) && product.includes(productFilter)) {
                rows[i].style.display = "";
                notFound = false;
            } else {
                rows[i].style.display = "none";
            }
        }

        if (notFound) {
            notification.innerText = "No matching orders found.";
        } else {
            notification.innerText = "";
        }
    }

    function clearFilters() {
        document.getElementById("customerFilter").value = "";
        document.getElementById("productFilter").value = "";

        var table = document.getElementById("orderTable");
        var rows = table.getElementsByTagName("tbody")[0].getElementsByTagName("tr");
        var notification = document.getElementById("notification");

        for (var i = 0; i < rows.length; i++) {
            rows[i].style.display = "";
        }

        notification.innerText = "";
    }
</script>
</body>
</html>