<?php
if(!isset($_SESSION['user_email'])){
    header('location: login.php?not_admin=You are not Admin!');
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