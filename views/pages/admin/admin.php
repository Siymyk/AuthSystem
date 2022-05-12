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
        <h1>Welcome to AdminPage</h1>
    </div>
    <div class="container mt-5">
    <a href="admin/users/1" class="btn btn-info">All System Users</a>
    </div>
</div>

</body>
</html>
