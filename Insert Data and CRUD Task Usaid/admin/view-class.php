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
            <td class="btn btn-primary">
                <i class="fa fa-edit"></i> Edit
            </td>
            <td class="btn btn-primary">
                <i class="fa fa-trash-alt"></i> Delete
            </td>
            </tbody>
        </table>
    </div>
</div>