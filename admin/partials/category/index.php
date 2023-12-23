<?php
    include_once($root_dir. '/controllers/categories/get_all.php') 
?>
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title" style="float: left">Manage Categories</h3>  
                
                <div style="float: right; margin: 10px; 20px 0px 0px">
                    <a href="add-category.php" class="btn btn-primary">Add category</a>
                </div>
            </div><!-- /.box-header -->
            <div class="box-body table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Category Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($categories as $category): ?>
                            <tr>
                                <td><?php echo $category['id']; ?></td>
                                <td><?php echo $category['name']; ?></td>
                                <td>
                                    <a href="edit-category.php?id=<?php echo $category['id']; ?>" class="btn btn-info">Edit</a>
                                    <a href="#" class="btn btn-danger delete-category" data-id="<?php echo $category['id']; ?>" onclick="deleteRecord(<?php echo $category['id']; ?>)">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Category Name</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div>
</div>

<script>
    // JavaScript to handle category deletion
    function deleteRecord(id) {
        var categoryId = id;
        if (confirm('Are you sure you want to delete this category?')) {
            // You can use AJAX to send the delete request to the server
            var formData = new FormData();
            formData.append('id', categoryId);
            formData.append('delete', 'true');

            fetch('controllers/categories/delete.php', {
                method: 'POST',
                body: formData,
            })
            .then(response => response.text())
            .then(data => {
                console.log(data)
                alert(data)
                window.location.reload()
            })
            .catch(error => console.error('Error:', error));
            // Reload the page or update the table after deletion
        }
    }
</script>
