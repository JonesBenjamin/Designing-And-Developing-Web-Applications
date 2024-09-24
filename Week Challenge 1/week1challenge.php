<!DOCTYPE html>
<html>
        <head>
                <title>Week 1 Challenge</title>
                <link rel="stylesheet" type="text/css" href="styles.css">
        </head>
        <body>
        <h1>Products</h1>
        <?php
                include 'sql.php';
                $stmt = $conn->prepare("SELECT name,description,price,imageurl FROM products");
                $stmt->execute();
                $stmt->store_result();
                $stmt->bind_result($name,$description,$price,$imageurl); //things to retrieve

                $row_count = $stmt->num_rows; //get the number of rows

                echo '<div class="flex-container">
                        <div>Product Name</div>
                        <div>Description</div>
                        <div>Price</div>
                        <div>Image</div>
                </div>';

                echo '<div class="grid-container">';

                while ($stmt->fetch()) {
                                echo '<div class="grid-item">'.$name.'</div>';
                                echo '<div class="grid-item">'.$description.'</div>';
                                echo '<div class="grid-item">'.$price.'</div>';
                                echo '<div class="grid-item"><img src="images/'.$imageurl.'" alt="'.$name.'" width="200px"> </div>';
                };

                                echo '</div>';

                                $stmt->close(); //close the sql
                $conn->close(); //close the connection
        ?>
        <br><br>
		 </body>
</html>

