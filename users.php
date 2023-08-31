<link rel="stylesheet" href="users.css">
<table>
    <thead>
        <th>ID</th>
        <th>name</th>
        <th>email</th>
        <th>password</th>
        <th>gender</th>
        <th>salary</th>
        <th>Actions</th>
    <tbody>
        <?php foreach ($users as $user) : ?>
            <Tr>
                <td><?= $user['id']; ?></td>
                <td><?= $user['user_name']; ?></td>
                <td><?= $user['email']; ?></td>
                <td><?= $user['password']; ?></td>
                <td><?= $user['gender']; ?></td>
                <td><?= $user['salary']; ?></td>
                <td>
                    <form action="<?= $_SERVER['PHP_SELF']; ?>">
                        <input type="hidden" name="user_id" value="<?= $user['id'] ?>">
                        <center><button>Delete</button></center>
                    </form>

                </td>
            </Tr>
        <?php endforeach; ?>
    </tbody>
    </thead>

</table>