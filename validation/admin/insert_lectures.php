<?php
if(!isset($_SESSION['user_email'])){
    header('location: login.php?not_admin=You are not Admin!');
}
?>
<div class="row">
    <div class="offset-md-2 col-md-8">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group row">
                <h2 class="offset-lg-3 offset-md-2 offset-1 "> Insert New Lecture </h2>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-sm-4 col-lg-3 d-none d-sm-block" for="lecture_number">Lecture Number :</label>
                <div class="col-12 col-sm-8 col-lg-9">
                    <input class="form-control" type="text" id="lecture_number" name="lecture_number" placeholder="Enter Lecture Number" required pattern="^0[1-9]$|^[1-9]$|^1[0-9]$|^2[0-9]$|^3[0-9]$|^4[0-9]$|^5[0-5]$">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-sm-4 col-lg-3 d-none d-sm-block" for="class_id">Class Id :</label>
                <div class="col-12 col-sm-8 col-lg-9">
                    <input class="form-control" type="text" id="class_id" name="class_id" placeholder="Enter Class Id"required pattern="^[0|1]0[0-9]$">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-sm-4 col-lg-3 d-none d-sm-block" for="teacher_id">Teacher Id :</label>
                <div class="col-12 col-sm-8 col-lg-9">
                    <input class="form-control" type="text" id="teacher_id" name="teacher_id" placeholder="Enter Teacher Id" required pattern="0[1-9]$|^[1-9]$|^1[0-2]$">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-sm-4 col-lg-3 d-none d-sm-block" for="lecture_topic">Lecture Topic :</label>
                <div class="col-12 col-sm-8 col-lg-9">
                    <input class="form-control" type="text" id="lecture_topic" name="lecture_topic" placeholder="Enter Lecture Topic"required pattern="^([a-zA-Z0-9]+\s?)+$">
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-sm-3 col-12 col-sm-6">
                    <input class="btn btn-block btn-primary btn-lg" type="submit" id="insert_lecture" name="insert_lecture"
                           value="Insert Lecture">
                </div>
            </div>
        </form>
    </div>
</div>
