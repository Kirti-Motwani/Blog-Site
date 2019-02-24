<div class="row">
    <div class="col-md-12">
        <a class="btn btn-primary" href="users.php?source=add_user">Add User</a>
    </div>
    <div class="mb-5"></div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>First_name</th>
                    <th>Last_name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                <?php
                include_once ("../includes/functions.php");
                $resultset = getAllUsers();
                while($row = mysqli_fetch_assoc($resultset)){
                    $user_id = $row['user_id'];
                    $username = $row['username'];
                    $password = $row['password'];
                    $first_name = $row['first_name'];
                    $last_name =  $row['last_name'];
                    $email = $row['email'];
                    $image = $row['image'];
                    $role =  $row['role'];

                    echo<<<USER
<tr>
<td>$user_id</td>
<td><img src="images/users/$image" class="rounded-circle" width="115px"></td>
<td>$username</td>
<td>$password</td>
<td>$first_name</td>
<td>$last_name</td>
<td>$email</td>
<td>$role</td>
<td><a href="posts.php?source=edit_post&post_id=post_id" class="btn btn-info"> <span class="fa fa-edit"></span></a></td>
<td><a href="users.php?source=delete_user&user_id={$user_id}" class="btn btn-danger"> <span class="fa fa-trash"></span></a></td>
</tr>
USER;

                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>