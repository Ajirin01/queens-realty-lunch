<?php
    include_once($root_dir. '/controllers/types/get_all.php') 
?>
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title" style="float: left">Manage Types</h3>  
                
                <div style="float: right; margin: 10px; 20px 0px 0px">
                    <a href="add-type.php" class="btn btn-primary">Add type</a>
                </div>
            </div><!-- /.box-header -->
            <div class="box-body table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Type Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($types as $type): ?>
                            <tr>
                                <td><?php echo $type['id']; ?></td>
                                <td><?php echo $type['name']; ?></td>
                                <td>
                                    <a href="edit-type.php?id=<?php echo $type['id']; ?>" class="btn btn-info">Edit</a>
                                    <a href="#" class="btn btn-danger delete-type" data-id="<?php echo $type['id']; ?>" onclick="deleteRecord(<?php echo $type['id']; ?>)">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Type Name</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div>
</div>

<script>
    // JavaScript to handle type deletion
    function deleteRecord(id) {
        var typeId = id;
        if (confirm('Are you sure you want to delete this type?')) {
            // You can use AJAX to send the delete request to the server
            var formData = new FormData();
            formData.append('id', typeId);
            formData.append('delete', 'true');

            fetch('controllers/types/delete.php', {
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
