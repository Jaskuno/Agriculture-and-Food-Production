<?php
	$employee_ID = isset($_GET['employee_ID']) ? $_GET['employee_ID'] : '';

	session_start();
	$_SESSION['employee_ID'] = $employee_ID;
		function connect_to_mysql() { return mysqli_connect("localhost", "root", "", "agri"); }
		function fetch_user_info($employee_ID) {
    		$connection = connect_to_mysql();

    		$query = "SELECT employee_Name, employee_Address, employee_Birthdate, employee_Email, employee_Username, employee_PW FROM employee WHERE employee_ID = '$employee_ID'";
			
    		$result = mysqli_query($connection, $query);

    		if ($result && mysqli_num_rows($result) > 0) { $user_info = mysqli_fetch_assoc($result); } 
			else {$user_info = null;}

    		mysqli_close($connection);

    		return $user_info;
		}
	$user_info = fetch_user_info($employee_ID);
?>

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
		background-color: rgba(0, 0, 0, 0.452);
		height:fit-content;
		padding:20px;
		border-radius: 3%;
		margin:20px;
		color:aliceblue;
		text-align: center;
	}
	.ld_Content h1 {
		background-color: #f2f2f2;
		color:black;
	}
	/* Profile style */
	.profile_content {
		margin: 10px;
		background-image:linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.60)); 
		border: .2px solid wheat;
		border-radius: 10%;
	}
	.profile_content p {
		padding:10px 0;
		margin:0;
	}
	.employee_informations {
		padding:40px 80px;
		font-family: Georgia, 'Times New Roman', Times, serif;
		flex-wrap: wrap;
		display: flex;
		font-size: 20px;

	}
	.employee_informations label {
		padding-right: 20px;
	}
	.emp_in_cont {
		background-color: rgba(255,255,255,0.6);
		margin: 10px;
		padding: 20px 0;
		border-radius: 5%;
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
		/* Sales Style */
		#sales {
			padding:100px 30px 30px 30px;
			background-color: #184911;
			justify-content: center;
			max-height: 600px;
		}
		#sales .container {
			max-height: 600px;
			max-width: 70%;
            margin: 20px auto;
            padding: 10px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        #sales .container table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        #sales .container th, #sales .container td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        #sales .container th {
            background-color: #f2f2f2;
        }

        #sales .container tr:hover {
            background-color: #f5f5f5;
        }

        #sales .container h2 {
            color: #333;
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
					<a href="#sales"><li><img src="Pics/Dashboard-Pics/final-pic/sales.png"/><span>SALES</span></li></a>
					<a href="#inventory"><li><img src="Pics/Dashboard-Pics/final-pic/inventory.png"/><span>INVENTORY<span></li></a>
					<a href="#teams"><li><img src="Pics/Dashboard-Pics/final-pic/teams.png"/><span>TEAMS</span></li></a>
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
				<a href="#profile"><img width=40px height=40px src="Pics/Dashboard-Pics/settings.png"/></a>
				<div class="dropdown-content">
        			<a href="homeAFP.html">Logout</a>
   				</div>
			</div>
		</nav>
	</header>
	<!-- Header End -->

	<!-- Main Container -->

	<main class="main">
		<!-- For Profile -->
		<div id="profile" style="background-color: rgb(78, 53, 0); display:flex; padding: 110px 20px 50px 20px;">
			<div>
				<div class="profile_content">
					<img src="Pics/Dashboard-Pics/huh.jpeg" style="width:200px; border-radius:10%;"/>
				</div>
				<div class="profile_content" style="border-radius: 0%; padding: 10px; color:#ddd; text-align:center;">
					<p><?php echo $user_info['employee_Name']; ?></p><br>
					<p><?php echo $user_info['employee_Address']; ?></p><br>
					<p><?php echo $user_info['employee_Birthdate']; ?></p><br>
					<p><?php echo $user_info['employee_Email']; ?></p>
					<p><?php echo $user_info['employee_Username']; ?></p>
				</div>
			</div>
			<div class="profile_content" style="width: 100%; height:450px; background-color:rgba(9, 10, 49, 0.788); padding:20px; border-radius:5%;">
				<form action="http://localhost/AFP/pf_Update.php" method="post" style="display: flex;">
                <?php
                if ($user_info) {
                    ?>
					<div class="employee_informations_container" style="display: flex; flex-wrap:wrap; justify-content:center; ">
					<div style="display: flex; margin:10px; width:100%; flex-wrap:wrap; justify-content:center;">
						<div class="emp_in_cont">
						<div class="employee_informations">
							<label for="employee_Name">Name: </label>
							<input id="employee_Name" name="employee_Name" placeholder="name" type="text" value="<?php echo $user_info['employee_Name']; ?>"/>
						</div>
						<div class="employee_informations">
							<label for="employee_Address">Address: </label>                  		
							<input id="employee_Address" name="employee_Address" placeholder="Address" type="text" value="<?php echo $user_info['employee_Address']; ?>"/>
						</div>
						<div class="employee_informations">
							<label for="employee_Birthdate">Birthday: </label>                  		
							<input id="employee_Birthdate" name="employee_Birthdate" placeholder="Birthday" type="date" value="<?php echo $user_info['employee_Birthdate']; ?>"/>
						</div>
						</div>
						<div class="emp_in_cont">
						<div class="employee_informations">
							<label for="employee_Email">Email: </label>
							<input id="employee_Email" name="employee_Email" placeholder="Email" type="email" value="<?php echo $user_info['employee_Email']; ?>"/>
						</div>
                    	<div class="employee_informations">
							<label for="employee_Username">Username: </label>
							<input id="employee_Username" name="employee_Username" placeholder="Username" type="text" value="<?php echo $user_info['employee_Username']; ?> "/>      		
						</div>
						<div class="employee_informations">
							<label for="employee_Password">Password: </label>
							<input id="employee_Password" name="employee_Password" placeholder="Password" type="password" value="<?php echo $user_info['employee_PW']; ?>"/>
						</div>
						</div>
						<div>
							<button type="submit" style="padding:10px; cursor:pointer;">Update</button>
						</div>
					</div>
					</div>
                    <?php
                } else {
                    echo "User not found.";
                }
                ?>
            </form>
			</div>
        </div>
		<!-- Profile End -->
		
		<!-- For dashboard -->
		<div id="dashboard" style="padding: 100px 10px 10px 10px; background-color: aliceblue; display:block; height:100vh;">
			<div class="db_Container" style="display:block; padding: 10px; background-color: #184911;">
				<div class="db_upperDiv" style=" display: flex;">
					<div class="ud_Content" style="background-color:#a58030; padding:10px; width:100%; height:fit-content;">
						</div>
				</div>
				<div class="db_lowerDiv" style="display: flex;">
					<div class="ld_Content"><p><h1>SALES</h1>
The agriculture farming sector has witnessed a commendable 50% increase in revenue, showcasing the industry's ability to thrive in evolving market conditions. Strategic planning, product focus, and regional targeting will be key to sustaining and building upon this positive momentum.
Geographical Impact: The revenue increase was not uniform across all regions, with specific geographical areas showing higher growth rates. Understanding regional variations is essential for targeted marketing and sales strategies.
</p>
					</div>
					<div class="ld_Content"><p><h1>Inventory</h1>The agriculture farming sector has experienced a successful sales period, resulting in near-complete depletion of inventory. This presents an opportunity to learn from consumer preferences, optimize inventory management strategies, and capitalize on the momentum for sustained business success. Timely restocking and strategic planning are key components for maintaining positive sales trends.</p>
					</div>
					<div class="ld_Content">
					<p><h1>ORDERS</h1>The agriculture farming sector has experienced notable success in fulfilling orders, with a particular emphasis on crop items and rice. This achievement underscores the importance of aligning products with market trends and efficiently managing the supply chain. Proactive inventory planning and continued attention to consumer preferences will be crucial for sustaining this positive sales trajectory. However,  The agriculture farming sector witnessed an impressive surge in sales, with a notable emphasis on crop items and rice. These products have emerged as top-performers, contributing substantially to overall revenue and Seasonal factors have played a role in the success of crop items and rice sales. Recognizing and leveraging seasonal demand patterns can guide future production and marketing strategies.</p>
					</div>
				</div>
			</div>
		</div>
		<!-- dashboard End -->

		<!-- Orders -->
		<div id="orders" style="padding-top:100px; background-color:#184911; height:100vh;">
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
                					<th>Customer Name</th>
									<th>Product</th>
                					<th>Price</th>
                					<th>Contact</th>
                					<th>Address</th>
            					</tr>
        					</thead>
        					<tbody>
            					<tr>
                					<td>Joanvic Vargas</td>
                					<td>Wheat</td>
                					<td>100.00</td>
									<td>09128473829</td>
                					<td>Biñan City</td>
            					</tr>
           						<tr>
                					<td>Jaspher Baet</td>
                					<td>Rice</td>
									<td>100.00</td>
                					<td>09128473829</td>
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

		<!-- For Sales -->
		<div id="sales">
		<div class="container">
    <h2>Total Sales</h2>
    <table>
        <thead>
            <tr>
                <th>Date</th>
                <th>Total Amount</th>
            </tr>
        </thead>
        <tbody>
            <!-- Add your data dynamically here -->
            <tr>
                <h1>Current Date and Time</h1>
                 <td><p id="datetime"></p></td>
                <td>30,000</td>
            </tr>
            <!-- Add more rows as needed -->
        </tbody>
    </table>

    <h2>Product Purchase</h2>
    <table>
        <thead>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Total Sale</th>
            </tr>
        </thead>
        <tbody>
            <!-- Add your data dynamically here -->
            <tr>
                <td>Rice</td>
                <td>20000</td>
                <td>1000</td>
                <td>5000</td>
            
            </tr>

            <tr>
                <td>Seed</td>
                <td>10000</td>
                <td>100</td>
                <td>3000</td>
            
            </tr>

            <tr>
                <td>Banana</td>
                <td>10000</td>
                <td>180</td>
                <td>2000</td>
            
            </tr>

            <!-- Add more rows as needed -->
        </tbody>
    </table>
</div>
</div>
		<!-- Sales End -->

		<!-- For inventory -->
		<div id="inventory" style="padding-top:100px; background-color: #a58030; height:100vh;">
			<div class="inventory" style="padding:10px;">
				<div style="background-color: rgba(0, 65, 0, 0.774); padding:20px; color:white;">
    			<!-- Product Input Form -->
    				<form id="productForm">
        				<label for="productName">Product:</label>
        				<input type="text" id="productName" required>

        				<label for="quantity">Quantity:</label>
        				<input type="number" id="quantity" required>

        				<button id="addButton" type="button" onclick="addProduct()">Submit</button>
    				</form>

   			 		<!-- Table to Display Results -->
    				<table id="inventoryTable" style="color:black">
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
				<div style="Padding:20px; text-align:center; background-color: rgba(255,255,255,0.5); font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-weight:bold;">
				The agriculture farming sector has experienced a successful sales period, resulting in near-complete depletion of inventory. This presents an opportunity to learn from consumer preferences, optimize inventory management strategies, and capitalize on the momentum for sustained business success. Timely restocking and strategic planning are key components for maintaining positive sales trends.


Demand Analysis: Conduct a thorough analysis of sales data to identify patterns and understand which products contributed most to the inventory depletion. Use this information to refine future inventory management strategies.

Replenishment Planning: Initiate a timely restocking plan for popular items to ensure continuity in meeting consumer demand. Implement efficient supply chain practices to minimize restocking delays.
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
            var customerName = rows[i].getElementsByTagName("td")[0].innerText.toLowerCase();
            var product = rows[i].getElementsByTagName("td")[1].innerText.toLowerCase();

            if (customerName.includes(customerFilter) && product.includes(productFilter)) {
                rows[i].style.display = "auto";
                notFound = false;
            } else {
                rows[i].style.display = "none";
            }
        }

        	if (notFound) {
            	notification.innerText = "No matching orders found.";
        	} 	else {
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
 <!-- To get the data in both orders and customers table from the database -->
	<script>
    	document.addEventListener('DOMContentLoaded', function () {
        	fetchOrdersData();
    	});

    	function fetchOrdersData() {
        	// Using AJAX to fetch data from the server
        	var xhr = new XMLHttpRequest();
        	xhr.open('GET', 'http://localhost/AFP/get_order_customer.php', true);

        	xhr.onreadystatechange = function () {
            	if (xhr.readyState == 4 && xhr.status == 200) {
                	var data = JSON.parse(xhr.responseText);
                	populateOrdersTable(data);
            	}
        	};

        	xhr.send();
    	}

    	function populateOrdersTable(data) {
        	var orderTableBody = document.querySelector('#orderTable tbody');

        	orderTableBody.innerHTML = '';

        	data.forEach(function (order) {
            	var row = document.createElement('tr');
            	row.innerHTML = `<td>${order.customer_Name}</td>
                            	<td>${order.product_Name}</td>
                             	<td>${order.product_Price}</td>
                             	<td>${order.customer_Contact}</td>
                            	<td>${order.customer_Address}</td>`;
            	orderTableBody.appendChild(row);
        	});
    	}
</script>
</body>
</html>