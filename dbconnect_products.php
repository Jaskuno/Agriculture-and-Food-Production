<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "agri";

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $customerName = $_POST["customerName"];
    $customerAddress = $_POST["customerAddress"];
    $customerContact = $_POST["contactnumber"];

    // Insert customer data into the customers table
    $customerSql = "INSERT INTO customers (customer_Name, customer_Address, customer_Contact)
            VALUES ('$customerName', '$customerAddress', '$customerContact')";

    if ($conn->query($customerSql) === TRUE) {
        // Retrieve the last inserted customer ID
        $customerId = $conn->insert_id;

        // Insert product data into the products table
        $selectedItems = json_decode($_POST["selectedItems"], true);

        foreach ($selectedItems as $selectedItem) {
            $productName = $selectedItem["name"];
            $productPrice = $selectedItem["price"];

            $productSql = "INSERT INTO orders (product_ID, product_Name, product_Price)
                VALUES ('$customerId', '$productName', '$productPrice')";

            if ($conn->query($productSql) !== TRUE) {
                echo "Error inserting product: " . $conn->error;
            }
        }

        echo "<script>alert('Checkout successfully'); window.location.href = 'http://localhost/AFP/products.php';</script>";
    } else {
        echo "Error inserting customer: " . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>