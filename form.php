<h3>Form</h3>

<form action="form.php" , method="post">
    <input type="text" name="name" placeholder="name">
    <input type="Submit" value="Submit">
</form>

<?php
    if(isset($_POST['name'])){
    echo $_POST["name"];
}
?>