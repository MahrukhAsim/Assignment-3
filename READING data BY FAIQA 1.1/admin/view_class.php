<?php
if(!isset($_SESSION['user_email'])){
    header('location: login.php?not_admin=You are not Admin!');
}
?>
<?php

$title = '';
$id = '';

$db = mysqli_connect('localhost', 'root', '', 'students_db');

if(isset($_POST['insert_post']))
{
    $title = $_POST['class_title'];
    $id = $_POST['class_id'];

    $query = "INSERT INTO classes (class_id, class_title) VALUES ('$id', '$title')";
    mysqli_query($db, $query);
    header('location: insert_class.php');
}

if(isset($_GET['del']))
{
    $id = $_GET['del'];
    mysqli_query($db, "DELETE FROM classes WHERE class_id=$id");
    header('location: view_class.php');
}

$class_result = mysqli_query($db, "SELECT * FROM classes");
?>

<div class="row">
    <div class="col-sm-12">
        <h1>Classes</h1>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Id#</th>
                <th scope="col">Title</th>
            </tr>
            </thead>
            <tbody>
            <?php while($row = mysqli_fetch_array($class_result)) { ?>

                <tr>
                    <td><?php echo $row['class_title'] ?> </td>>
                    <td><?php echo $row['class_id'] ?> </td>>

                    <td class="btn btn-primary">
                        <i class="fa fa-edit"></i> <a class="btn" href="view_class.php?edit=<?php echo $row['class_id']; ?>"> Edit </a>
                    </td>
                    <td class="btn btn-primary">
                        <i class="fa fa-trash-alt"></i> <a class="btn" href="view_class.php?del=<?php echo $row['class_id']; ?>"> Delete </a>
                    </td>
                </tr>


            <?php } ?>
            </tbody>
        </table>
    </div>
</div>