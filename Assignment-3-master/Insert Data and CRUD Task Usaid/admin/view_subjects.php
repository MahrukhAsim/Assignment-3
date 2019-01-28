<?php
if(!isset($_SESSION['user_email'])){
    header('location: login.php?not_admin=You are not Admin!');
}
?>

<?php

    $subject_title = '';
    $subject_id = '';
    $subject_fee = '';
    $subject_head = '';

    $db = mysqli_connect('localhost', 'root', '', 'students_db');

    if(isset($_POST['insert_cat']))
    {
        $subject_title = $_POST['subject_title'];
        $subject_id = $_POST['subject_id'];
        $subject_fee = $_POST['subject_fee'];
        $subject_head = $_POST['subject_head'];

        $query = "INSERT INTO subjects (subject_id, subject_title, subject_fee, subject_head) VALUES ('$subject_id','$subject_title', '$subject_fee','$subject_head')";
        mysqli_query($db, $query);
        header('location: insert_subjects.php');
    }

?>

<div class="row">
    <div class="col-sm-12">
        <h1>Subjects</h1>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Id#</th>
                <th scope="col">Title</th>
                <th scope="col">Fee</th>
                <th scope="col">Head</th>
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