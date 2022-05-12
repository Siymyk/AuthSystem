<?php
use App\Services\Page;
use App\Controllers\Admin;

$obj = new Admin;
$db_users = $obj->getUsers();

// converting from assoc. to array to use on pagination
$users = array();
foreach($db_users as $row){
    $users[] = $row;
}
$count = 5; // how many posts contains one page

$page_count = floor(count($users)/$count); // amount of pages with posts

if($param == NULL){
    $param = 1;
}
$page = $param-1; // current page

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
        <a href="/admin/user/add" class="btn btn-info">+Add User</a>
        <h1>All Users</h1>
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            <?php for($k = $page*$count; $k < ($page+1)*$count; $k++):
                if($users[$k]["ID"] != NULL):?>
            <tr>
                <td><?php echo $users[$k]["name"]; ?></td>
                <td><?php echo $users[$k]["email"]; ?></td>
                <td><a href="/admin/user/<?php echo $users[$k]["ID"]; ?>">Details</a></td>
            </tr>
            <?php endif; endfor; ?>
            </tbody>
        </table>
        <?php for($i=1; $i<=$page_count+1; $i++): ?>
            <a href="<?php echo "/admin/users/".$i; ?>" class="btn btn-info"><?php echo $i;?></a>
        <?php endfor; ?>
    </div>
</div>

</body>
</html>