<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/home">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <?php
        if($_SESSION["user"] && $_SESSION["user"]["group"] == 2) {
        ?>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="/admin">Admin Page</a>
                <a class="nav-link" href="/admin/users/1">All Users</a>
            </div>
        </div>
            <?php
        }
        ?>
    </div>
    <?php
    if(!$_SESSION["user"]) {
        ?>
        <a class="nav-link" href="/login/">Login</a>
        <a class="nav-link" href="/register/">Register</a>
        <?php
    }else {
        ?>
        <a class="nav-link btn btn-info" href="/profile">Profile</a>
        <div class="mt-3 m-2">
        <form action="/auth/logout" method="post">
            <button type="submit" class="btn btn-danger">Logout</button>
        </form>
        </div>
        <?php
    }
    ?>
</nav>