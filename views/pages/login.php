<?php
use App\Services\Page;
use App\Services\Router;

if($_SESSION["user"]){
    Router::redirect('/profile');
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
    <h2 class="mt-4">Sign In</h2>
    <form class="mt-4" action="/auth/login" method="post">
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <?php if($param === "error"){ ?>
        <p class="text-start" style="color:red"><?php echo "Invalid login or password"?></p>
        <?php }?>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

</body>
</html>
