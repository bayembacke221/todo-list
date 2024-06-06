
<?php
include_once 'partials/_header.php';
?>

<div class="registration-form">
    <form method="post" action="todo.php?page=store">
        <div class="form-group">
            <input type="text" name="title" class="form-control item" id="title" placeholder="Title">
        </div>
        <div class="form-group">
            <input type="text" name="description" class="form-control item" id="description" placeholder="Description">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-block create-account btn-success">Create </button>
        </div>
    </form>

</div>





<?php
include_once 'partials/_footer.php';