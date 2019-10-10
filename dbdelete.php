<?php
    if (isset($_POST['delete']))    {
    try {
        $conn = new PDO("mysql:host=localhost;dbname=healthone", "root","ww");
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // sql to delete a record
        $sql = "DELETE FROM recepten WHERE id=" . $_POST['btdelete'];

        // use exec() because no results are returned
        $conn->exec($sql);
        echo "Record deleted successfully";
    }
    catch(PDOException $e)
    {
        echo $sql . "<br>" . $e->getMessage();
    }
}
?>

<!--<button  type=\"button\" class=\"btn btn-warning\"><a href=\"http://localhost/ProjectHealthOne/recepten.php?id=".$data["id"]."\">Delete</a></button>-->
