<?php
use App\Services\Page;
use App\Services\Router;
use App\Controllers\Admin;

$obj = new Admin;
$user = $obj->getUser($param);

?>
<html>
<?php
Page::part("head");
?>
<body>
<?php
Page::part("navbar");
?>

<div class="container">
    <div class="mt-5">
        <h1>User information</h1>
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Date of birth</th>
                <th scope="col">Role</th>
                <th scope="col">Password</th>
            </tr>
            </thead>
            <tbody>
            <tr>
            <form name="update" action="/user/update" method="post">
                    <input type="hidden" id="ID" name="ID" value=<?php echo $user["id"]; ?>>
                    <td><input type="text" class="form-control" id="name" name="name" value=<?php echo $user["name"]; ?> required></td>
                    <td><input type="text" class="form-control" id="email" name="email" value=<?php echo $user["email"]; ?> required></td>
                    <td><input type="date" class="form-control" id="date_of_birth" name="date_of_birth" value=<?php echo $user["date_of_birth"]; ?> required></td>
                    <td><input type="number" class="form-control" id="group" name="group" value=<?php echo $user["_group"]; ?> required></td>
                    <td><input type="text" class="form-control" id="password" name="password" placeholder="Enter new password" required></td>
                    <td><button type="submit" class="btn btn-warning">Update</button></td>
            </form>

                <form name="delete" action="/user/delete" method="post">
                    <input type="hidden" id="ID" name="ID" value=<?php echo $user["id"]; ?>>
                    <td><button type="submit" class="btn btn-danger">Delete</button></td>
                </form>
            </tr>
            </tbody>
        </table>
    </div>
</div>

</body>
</html>