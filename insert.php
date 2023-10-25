  <?php

    // Include the database configuration file 
    include_once 'dbConfig.php'; 


    // Prepare sql statement
    $sql = "INSERT INTO visitor_info (firstname, lastname, email) VALUES (?,?,?)";

    // prepare variables and execute query
    $stmt = $db->prepare($sql); 
    $stmt->bind_param("sss", $_POST["first_name"], $_POST["last_name"], $_POST["email"]); 
    $insert = $stmt->execute(); 

    // redirect to page.
    header("Location: index.php");
?>