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