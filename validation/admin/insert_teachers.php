<?php
if(!isset($_SESSION['user_email'])){
    header('location: login.php?not_admin=You are not Admin!');
}
?>
<div class="row">
    <div class="offset-md-2 col-md-8">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group row">
                <h2 class="offset-lg-3 offset-md-2 offset-1 "> Insert New Teacher </h2>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-sm-4 col-lg-3 d-none d-sm-block" for="teacher_id">Teacher Id :</label>
                <div class="col-12 col-sm-8 col-lg-9">
                    <input class="form-control" type="text" id="teacher_id" name="teacher_id" placeholder="Enter Teacher Id" required pattern="0[1-9]$|^[1-9]$|^1[0-2]$">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-sm-4 col-lg-3 d-none d-sm-block" for="teacher_name">Teacher Name :</label>
                <div class="col-12 col-sm-8 col-lg-9">
                    <input class="form-control" type="text" id="teacher_name" name="teacher_name" placeholder="Enter Teacher Name"required pattern="^([a-zA-Z]+\s?)+$" >
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-sm-4 col-lg-3 d-none d-sm-block" for="teacher_qualification">Teacher Qualification :</label>
                <div class="col-12 col-sm-8 col-lg-9">
                    <input class="form-control" type="number" id="teacher_qualification" name="teacher_qualification" placeholder="Enter Teacher Qualification" required pattern="^([a-zA-Z]+\s?)+$">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-sm-4 col-lg-3 d-none d-sm-block" for="teacher_experience">Teacher Experience :</label>
                <div class="col-12 col-sm-8 col-lg-9">
                    <input class="form-control" type="text" id="teacher_experience" name="teacher_experience" placeholder="Enter Teacher Experience" required pattern="^([a-zA-Z0-9]+\s?)+$">
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-sm-3 col-12 col-sm-6">
                    <input class="btn btn-block btn-primary btn-lg" type="submit" id="insert_teachers" name="insert_teachers"
                           value="Insert Teacher">
                </div>
            </div>
        </form>
    </div>
</div>