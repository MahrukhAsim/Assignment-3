

<?php
if(!isset($_SESSION['user_email'])){
    header('location: login.php?not_admin=You are not Admin!');
}
?>


<?php

    $teacher_id = '';
    $teacher_name = '';
    $teacher_qualification = '';
    $teacher_experience = '';
    $edit_state = false;
    $id = 0;

    $db = mysqli_connect('localhost', 'root', '', 'students_db');

    if(isset($_POST['insert_teachers']))
    {
        $teacher_id = $_POST['teacher_id'];
        $teacher_name = $_POST['teacher_name'];
        $teacher_qualification = $_POST['teacher_qualification'];
        $teacher_experience = $_POST['teacher_experience'];

        $query = "INSERT INTO teachers (teacher_id, teacher_name, teacher_qualification, teacher_experience) VALUES ('$teacher_id','$teacher_name', '$teacher_qualification','$teacher_experience')";
        mysqli_query($db, $query);
        header('location: insert_teachers.php');
    }


    if(isset($_POST['update_teacher']))
    {
        $teacher_id = mysql_real_escape_string($_POST['teacher_id']);
        $teacher_name = mysql_real_escape_string($_POST['teacher_name']);
        $teacher_qualification = mysql_real_escape_string($_POST['teacher_qualification']);
        $teacher_experience = mysql_real_escape_string($_POST['teacher_experience']);
        $id = mysql_real_escape_string($_POST['teacher_id']);

        mysqli_query($db, "UPDATE teachers SET teacher_id='$teacher_id', teacher_name='$teacher_name', teacher_qualification='$teacher_qualification', teacher_experience='$teacher_experience' WHERE id = $id");
        header('location: view_teachers.php');

    }


    if(isset($_GET['del']))
    {
        $id = $_GET['del'];
        mysqli_query($db, "DELETE FROM teachers WHERE teacher_id=$id");
        header('location: insert_teachers.php');
    }


    $teacher_result = mysqli_query($db, "SELECT * FROM teachers");

?>


<div class="row">
    <div class="col-sm-12">
        <h1>Teachers</h1>
        <table class="table table-striped">
            <thead>
            <tr>

                <th scope="col">Id#</th>
                <th scope="col">Name</th>
                <th scope="col">Qualification</th>
                <th scope="col">Experience</th>
            </tr>
            <tbody>
                <?php while($row = mysqli_fetch_array($teacher_result)) { ?>

                    <tr>
                        <td><?php echo $row['teacher_id'] ?> </td>>
                        <td><?php echo $row['teacher_name'] ?> </td>>
                        <td><?php echo $row['teacher_qualification'] ?> </td>>
                        <td><?php echo $row['teacher_experience'] ?> </td>>
                        <td class="btn btn-primary">
                            <i class="fa fa-edit"></i> <a class="btn" href="view_teachers.php?edit=<?php echo $row['teacher_id']; ?>"> Edit </a>
                        </td>
                        <td class="btn btn-primary">
                            <i class="fa fa-trash-alt"></i> <a class="btn" href="view_teachers.php?del=<?php echo $row['teacher_id']; ?>"> Delete </a>
                        </td>
                    </tr>


                <?php } ?>
            </tbody>
            </thead>
        </table>
    </div>
</div>