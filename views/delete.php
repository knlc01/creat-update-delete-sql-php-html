<h2>delete</h2>
<form action="controllers/ctrlDelete.php" method="POST">
    <div>
        <label for="id">Id:</label>
        <input type="text" name="id" id="id" autofocus>

        <input type="submit" value="Delete">        
    </div>
    <?php
        include("viewTable.php");
    ?>

</form>
