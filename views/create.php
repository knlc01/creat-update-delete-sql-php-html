<h2>create</h2>


<form action="controllers/ctrlCreate.php" method="POST">
    <div>
        <label for="id">Id:</label>
        <input type="text" name="id" id="id" autofocus>

        <label for="name">Name:</label>
        <input type="text" name="name" id="name">

        <label for="lastName">last Name:</label>
        <input type="text" name="lastName" id="lastName">

        <label for="age">Age:</label>
        <input type="number" min="0" max="400" name="age" id="age">

        <input type="submit" value="Insert">        
    </div>
    <?php
        include("viewTable.php");
    ?>

</form>
