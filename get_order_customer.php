<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "agri";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT customers.customer_Name, orders.product_Name, orders.product_Price, customers.customer_Contact, customers.customer_Address
            FROM orders
            JOIN customers ON orders.product_ID = customers.customer_ID";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $data = array();
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        echo json_encode($data);
    } else {
        echo "0 results";
    }
    $conn->close();