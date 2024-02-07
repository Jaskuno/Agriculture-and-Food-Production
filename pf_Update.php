<?php
include __DIR__ . '/mysqlConn.php';
session_start();
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve updated values from the form
    $employee_Name = $_POST['employee_Name'];
    $employee_Address = $_POST['employee_Address'];
    $employee_Birthdate = $_POST['employee_Birthdate'];
    $employee_Email = $_POST['employee_Email'];
    $employee_Username = $_POST['employee_Username'];
    $employee_PW = $_POST['employee_Password'];


    if (isset($_SESSION['employee_ID'])) {
        $employee_ID = $_SESSION['employee_ID']; 
        // Update data in the database
        $connection = connect_to_mysql();

        $query = "UPDATE employee
            SET employee_Name = ?, employee_Address = ?, employee_Birthdate = ?, employee_Email = ?, employee_Username = ?, employee_PW = ?
            WHERE employee_ID = ?";
        $stmt = mysqli_prepare($connection, $query);
        mysqli_stmt_bind_param($stmt, 'ssssssi', $employee_Name, $employee_Address, $employee_Birthdate, $employee_Email, $employee_Username, $employee_PW, $employee_ID);

        $result = mysqli_stmt_execute($stmt);

        mysqli_stmt_close($stmt);
        mysqli_close($connection);

        if ($result) {
            echo "<script>
                    alert('Profile updated successfully!');
                    window.location.href = 'dashboardAFP.php?employee_ID=$employee_ID';
                  </script>";
        } else {
            echo "Error updating profile: " . mysqli_error($connection);
        }
    } else {
        echo "Error: employee_ID not set in the session.";
    }
} else {

    header("Location: dashboardAFP.php");
    exit();
}
?>