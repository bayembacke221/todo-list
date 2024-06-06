<?php
include_once 'partials/_header.php';
?>

    <section class="vh-100" style="background-color: #eee;">
        <div class="container py-5 h-50">
            <div class="row d-flex justify-content-center align-items-center h-200">
                <div class="col col-lg-9 col-xl-7">
                    <div class="card rounded-3">
                        <div class="card-body p-4">

                            <h4 class="text-center my-3 pb-3">To Do App</h4>

                            <form class="row row-cols-lg-auto g-3 justify-content-center align-items-center mb-4 pb-2">
                                <div class="col-12">
                                    <div data-mdb-input-init class="form-outline">
                                        <input type="text" id="form1" class="form-control" />
                                        <label class="form-label" for="form1">Enter a task here</label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-warning">Get tasks</button>
                                </div>
                            </form>

                            <table class="table mb-4">
                                <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Todo item</th>
                                    <th scope="col">Todo description</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                    foreach ($todos as $todo) {
                                ?>
                                <tr>
                                    <th scope="row"><?=$todo['id']?></th>
                                    <td><?=$todo['title']?></td>
                                    <td><?=$todo['description']?></td>
                                    <?php
                                        if ($todo['status'] == 0) {
                                            ?>
                                    <td>
                                        <div class="alert alert-warning" role="alert">
                                            Pending
                                        </div>
                                    </td>

                                    <?php
                                        } else {
                                            ?>
                                    <td>
                                        <div class="alert alert-success" role="alert">
                                            Finished
                                        </div>
                                    </td>
                                            <?php
                                        }
                                    ?>
                                    <td>
                                        <a type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-danger" href="index.php?page=delete&_id=<?=$todo['id']?>"><i class="fa-solid fa-trash"></i> </a>
                                        <a type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-success ms-1" href="index.php?page=edit&_id=<?=$todo['id']?>"><i class="fa-solid fa-pen-to-square"></i></a>
                                    </td>
                                </tr>
                                <?php
                                    }
                                ?>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
include_once 'partials/_footer.php';
