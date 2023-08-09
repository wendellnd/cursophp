<form action="form.php" method="get">
  <input type="text" name="name" />
  <input type="date" name="birthdate" />
  <input type="submit" />
</form>

<?php 
    if(isset($_GET)) {
        foreach ($_GET as $key => $value) {
            echo "Field name: " . $key . "<br>";

            echo "Field value: " . $value;

            echo "<hr>";
        }
    } else {
        echo "Not set";
    }
?>