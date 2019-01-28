<?php
if(!isset($_SESSION['user_email'])){

    header('location: login.php?not_admin=You are not Admin!');
}
?>
<div class="row">
    <div class="offset-md-2 col-md-8">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group row">
                <h2 class="offset-lg-3 offset-md-2 offset-1 "> Insert New Subject </h2>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-sm-4 col-lg-3 d-none d-sm-block" for="subject_id">Subject Id :</label>
                <div class="col-12 col-sm-8 col-lg-9">
                    <input class="form-control" type="text" id="subject_id" name="subject_id" placeholder="Enter Subject Id" required pattern="^0[1-9]$|^[1-9]$|^1[0-2]$">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-sm-4 col-lg-3 d-none d-sm-block" for="subject_title">Subject Title :</label>
                <div class="col-12 col-sm-8 col-lg-9">
                    <input class="form-control" type="text" id="subject_title" name="subject_title" placeholder="Enter Subject Title" required pattern="ENGLISH|english|URDU|urdu|MATHS|maths|SCIENCE|science|BIOLOGY|biology|COMPUTER|computer|ISLAMIAT|islamiat|CHEMISTRY|chemistry|PHYSICS|physics|PAKISTANSTUDIES|
pakistanstudies">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-sm-4 col-lg-3 d-none d-sm-block" for="subject_fee">Subject Fee :</label>
                <div class="col-12 col-sm-8 col-lg-9">
                    <input class="form-control" type="number" id="subject_fee" name="subject_fee" placeholder="Enter Subject Fee" required pattern="^5[0-9][0-9][0-9]$|^6[0-9][0-9][0-96]$|$7[0-9][0-9][0-9]$|^9[0-9][0-9][0-9]$|^10[0-9][0-9][0-9]$">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-sm-4 col-lg-3 d-none d-sm-block" for="subject_head">Subject Head :</label>
                <div class="col-12 col-sm-8 col-lg-9">
                    <input class="form-control" type="text" id="subject_head" name="subject_head" placeholder="Enter Subject Head"required pattern="^([a-zA-Z0-9]+\s?)+$">
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-sm-3 col-12 col-sm-6">
                    <input class="btn btn-block btn-primary btn-lg" type="submit" id="insert_cat" name="insert_cat"
                           value="Insert Subject">
                </div>
            </div>
        </form>
    </div>
</div>