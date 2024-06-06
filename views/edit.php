
<?php
include_once 'partials/_header.php';
?>

<div class="registration-form">
    <form method="post" action="todo.php?page=update">
        <div class="form-group">
            <input type="text" name="title" class="form-control item" id="title" placeholder="Title" value="<?=$todo['title']?>">
        </div>
        <div class="form-group">
            <input type="text" name="description" class="form-control item" id="description" value="<?=$todo['description']?>" placeholder="Description">
        </div>
        <div class="form-group">
            <label class="form-label" for="todo_status"><b>Todo Status *</b></label>
            <select class="form-select" aria-label="Todo Status" id="status" name="status">
                <option <?php echo $todo["status"]==1?"selected":""; ?> value="1">Pending</option>
                <option <?php echo $todo["status"]==2?"selected":""; ?> value="2">Completed</option>
            </select>
            <input type="hidden" name="id" value="<?php echo $todo["id"]; ?>" hidden>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-block create-account btn-success">Update </button>
        </div>
    </form>

</div>





<?php
include_once 'partials/_footer.php';