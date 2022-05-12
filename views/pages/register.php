<?php
use App\Services\Page;

if($_SESSION["user"]){
    \App\Services\Router::redirect('/profile');
}

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
    <h2 class="mt-4">Sign Up</h2>
    <form class="mt-4" action="/auth/register" method="post">
        <div class="mb-3">
            <label for="email" class="form-label">Login</label>
            <input type="email" name ="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter your email" required>
        </div>
        <div class="mb-3">
            <label for="Name" class="form-label">Name</label>
            <input type="text" name ="Name" class="form-control" id="Name" required>
        </div>
        <div class="mb-3">
            <label for="dateOfBirth" class="form-label">Date of Birth</label>
            <input type="date" name ="dateOfBirth" class="form-control" id="dateOfBirth" required>
        </div>
        <div class="mb-3">
            <label for="inputPassword" class="form-label">Password</label>
            <input type="password" name ="inputPassword" class="form-control" id="inputPassword" required>
        </div>
        <div class="mb-3">
            <label for="confirmPassword" class="form-label">Confirm password</label>
            <input type="password" name ="confirmPassword" class="form-control" id="confirmPassword" required>
        </div>
        <?php if($param === "501"){ ?>
            <p class="text-start" style="color:red"><?php echo "Passwords doesn't match"?></p>
        <?php }?>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

</body>
</html>
