<?php
use App\Services\Page;

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
        <h1>New User</h1>
        <table class="table">
            <form action="/user/add" method="post">
            <tbody>
            <tr>
                <th>Name</th>
                <td><input type="text" name="name" class="form-control" id="name" required></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" required></td>
            </tr>
            <tr>
                <th>Date of birth</th>
                <td><input type="date" name="dateOfBirth" class="form-control" id="dateOfBirth" required></td>
            </tr>
            <tr>
                <th>Password</th>
                <td><input type="password" name="password" class="form-control" id="password" required></td>
            </tr>
            <td><button type="submit" class="btn btn-info">Add</button></td>
            </tbody>
            </form>
        </table>
    </div>
</div>

</body>
</html>