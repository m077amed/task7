<?php
require('./connection.php');

$user = getUserDetails($con, $id);
function getUserDetails($con, $id)
{
    return  $sql = $con->query("SELECT * FROM users WHERE id='$id'")->fetch(PDO::FETCH_ASSOC);
}

function getUsers($con)
{
    $sql = $con->query('SELECT * FROM users');
    return  $sql->fetchAll(PDO::FETCH_ASSOC);
}
var_dump($user);
?>
<form action="">
    <input type="text" name="name" value="<?= $user['name']; ?>">
    <input type="text" name="email" value="<?= $user['email']; ?>">
    <input type="text" name="gender" value="<?= $user['gender']; ?>">
    <input type="text" name="salary" value="<?= $user['salary']; ?>">
    <button>save</button>
</form>