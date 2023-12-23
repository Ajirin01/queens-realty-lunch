<?php
    include_once($root_dir. '/controllers/properties/get_all.php') 
?>
<div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
        <div class="box-header">
                <h3 class="box-title" style="float: left">Manage Properties</h3>  
                
                <div style="float: right; margin: 10px; 20px 0px 0px">
                    <a href="add-property.php" class="btn btn-primary">Add Property</a>
                </div>
            </div><!-- /.box-header -->
            <div class="box-body table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Price</th>
                            <th>Category</th>
                            <th>Type</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($properties as $property): ?>
                            <tr>
                                <td><?php echo $property['id']; ?></td>
                                <td><?php echo $property['title']; ?></td>
                                <td><?php echo $property['price']; ?></td>
                                <td><?php echo $property['category']; ?></td>
                                <td><?php echo $property['type']; ?></td>
                                <td>
                                    <a href="edit-property.php?id=<?php echo $property['id']; ?>" class="btn btn-info">Edit</a>
                                    <a href="#" class="btn btn-danger delete-property" data-id="<?php echo $property['id']; ?>" onclick="deleteRecord(<?php echo $property['id']; ?>)">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Price</th>
                            <th>Category</th>
                            <th>type</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
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

            fetch('controllers/properties/delete.php', {
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