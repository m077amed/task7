<?Php
//mysqli -pdf
session_start();
$con  =   new PDO('mysql:host=localhost;dbname=php', 'root', '');


//select *from users
if (isset($_GET['user_id']) && (!isset($_SESSION['user_id']) || $_SESSION['user_id'] != $_GET['user_id'])) {
    deleteUser($con, $_GET['user_id']);
    $_SESSION['user_id'] = $_GET['user_id'];
}
$users = getUsers($con);
require('./users.php');


function getUsers($con)
{
    $sql = $con->query('SELECT * FROM users');
    return  $sql->fetchAll(PDO::FETCH_ASSOC);
}
function deleteUser($con, $id)
{
    //delete from users where id=$id;

    $sql =  $con->prepare("DELETE FROM users where id = $id");
    return $sql->execute();
}
