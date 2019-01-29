<?php
include('view_teachers.php');

if(isset($_GET['edit']))
{
    $id = $_GET['edit'];
    $edit_state = true;
    $rec = mysqli_query($db, "SELECT * FROM teachers WHERE id=$id");
    $record = mysqli_fetch_array($rec);
    $teacher_id = $record['teacher_id'];
    $teacher_name = $record['teacher_name'];
    $teacher_qualification = $record['teacher_qualification'];
    $teacher_experience = $record['teacher_experience'];
    $id = $record['teacher_id'];
}

?>

<?php
if(!isset($_SESSION['user_email'])){
    header('location: login.php?not_admin=You are not Admin!');
}
?>
<div class="row">
    <div class="offset-md-2 col-md-8">
        <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div class="form-group row">
                <h2 class="offset-lg-3 offset-md-2 offset-1 "> Insert New Teacher </h2>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-sm-4 col-lg-3 d-none d-sm-block" for="teacher_id">Teacher Id :</label>
                <div class="col-12 col-sm-8 col-lg-9">
                    <input class="form-control" type="text" id="teacher_id" name="teacher_id" value="<?php echo $teacher_id ?>" placeholder="Enter Teacher Id">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-sm-4 col-lg-3 d-none d-sm-block" for="teacher_name">Teacher Name :</label>
                <div class="col-12 col-sm-8 col-lg-9">
                    <input class="form-control" type="text" id="teacher_name" name="teacher_name" value="<?php echo $teacher_name ?>" placeholder="Enter Teacher Name">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-sm-4 col-lg-3 d-none d-sm-block" for="teacher_qualification">Teacher Qualification :</label>
                <div class="col-12 col-sm-8 col-lg-9">
                    <input class="form-control" type="text" id="teacher_qualification" value="<?php echo $teacher_qualification ?>" name="teacher_qualification" value="<?php echo $teacher_name ?>" placeholder="Enter Teacher Qualification">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-sm-4 col-lg-3 d-none d-sm-block" for="teacher_experience">Teacher Experience :</label>
                <div class="col-12 col-sm-8 col-lg-9">
                    <input class="form-control" type="text" id="teacher_experience" value="<?php echo $teacher_experience ?>" name="teacher_experience" placeholder="Enter Teacher Experience">
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-sm-3 col-12 col-sm-6">
                    <?php if($edit_state == false): ?>
                        <input class="btn btn-block btn-primary btn-lg" type="submit" id="insert_teachers" name="insert_teachers"
                               value="Insert Teacher">
                    <?php else:  ?>
                        <input class="btn btn-block btn-primary btn-lg" type="submit" id="insert_teachers" name="update_teachers"
                               value="Update Teacher">
                    <?php  endif ?>


                </div>
            </div>
        </form>
    </div>
</div>