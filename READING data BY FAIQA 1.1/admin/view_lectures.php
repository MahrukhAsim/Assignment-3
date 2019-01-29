<?php
if(!isset($_SESSION['user_email'])){
    header('location: login.php?not_admin=You are not Admin!');
}
?>

<?php

    $title = '';
    $id = '';
    $teacher_id = '';
    $lecture_topic = '';

    $db = mysqli_connect('localhost', 'root', '', 'students_db');

    if(isset($_POST['insert_lecture']))
    {
        $lecture_number = $_POST['lecture_number'];
        $id = $_POST['class_id'];
        $teacher_id = $_POST['teacher_id'];
        $lecture_topic = $_POST['lecture_topic'];

        $query = "INSERT INTO lectures (lecture_number, class_id, teacher_id, lecture_topic) VALUES ('$lecture_number','$id', '$teacher_id','$lecture_topic')";
        mysqli_query($db, $query);
        header('location: insert_lectures.php');
    }

    if(isset($_GET['del']))
    {
        $id = $_GET['del'];
        mysqli_query($db, "DELETE FROM lectures WHERE lecture_number=$id");
        header('location: view_lectures.php');
    }

    $lecture_result = mysqli_query($db, "SELECT * FROM lectures");
?>

<div class="row">
    <div class="col-sm-12">
        <h1>Lectures</h1>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Lecture Number</th>
                <th scope="col">Class Id</th>
                <th scope="col">Teacher Id</th>
                <th scope="col">Lecture Topic</th>
            </tr>
            </thead>
            <tbody>
            <?php while($row = mysqli_fetch_array($lecture_result)) { ?>

                <tr>
                    <td><?php echo $row['lecture_number'] ?> </td>>
                    <td><?php echo $row['class_id'] ?> </td>>
                    <td><?php echo $row['teacher_id'] ?> </td>>
                    <td><?php echo $row['lecture_topic'] ?> </td>>
                    <td class="btn btn-primary">
                        <i class="fa fa-edit"></i> <a class="btn" href="view_lectures.php?edit=<?php echo $row['lecture_number']; ?>"> Edit </a>
                    </td>
                    <td class="btn btn-primary">
                        <i class="fa fa-trash-alt"></i> <a class="btn" href="view_lectures.php?del=<?php echo $row['lecture_number']; ?>"> Delete </a>
                    </td>
                </tr>


            <?php } ?>

            </tbody>
        </table>
    </div>
</div>