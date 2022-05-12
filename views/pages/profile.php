<?php
use App\Services\Page;

session_start();

if(!$_SESSION["user"]){ // уязвимость подмены куки user
    \App\Services\Router::redirect('/login');
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
    <div class="mt-5">
        <h1>Hello <?= $_SESSION["user"]["name"] ?></h1>
    </div>
</div>

</body>
</html>
