<div class="row">
    <!-- left column -->
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Add Property</h3>
            </div><!-- /.box-header -->
            <!-- form start -->
            <!-- Edit Property Form -->
            <form action="" method="post" enctype="multipart/form-data">
                <div class="box-body">
                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" name="title" class="form-control" required>
                    </div>
                </div><!-- /.box-body -->

                <div class="box-body">
                    <div class="form-group">
                        <label for="price">Price:</label>
                        <input type="text" name="price" class="form-control" required>
                    </div>
                </div><!-- /.box-body -->

                <div class="box-body">
                    <div class="form-group">
                        <label for="price">Description:</label>
                        <textarea class="form-control" required name="description" id="" cols="30" rows="10"></textarea>
                        <!-- <input type="text" name="description" value="<?php echo $property['description']; ?>" class="form-control" required> -->
                    </div>
                </div><!-- /.box-body -->

                <div class="box-body">
                    <div class="form-group">
                        <label for="price">Description:</label>
                        <input type="file" name="photos[]" class="form-control" multiple>
                    </div>
                </div><!-- /.box-body -->

                <div class="box-body">
                    <div class="form-group">
                        <label for="price">Size:</label>
                        <input type="text" name="size" class="form-control" required>
                    </div>
                </div><!-- /.box-body -->

                <div class="box-body">
                    <div class="form-group">
                        <label for="price">Number of Bedrooms:</label>
                        <input type="number" name="bedrooms" class="form-control">
                    </div>
                </div><!-- /.box-body -->

                <div class="box-body">
                    <div class="form-group">
                        <label for="price">Number of Bathrooms:</label>
                        <input type="number" name="bathrooms" class="form-control">
                    </div>
                </div><!-- /.box-body -->

                <div class="box-body">
                    <div class="form-group">
                        <label for="price">Number of Garages:</label>
                        <input type="number" name="garages" class="form-control">
                    </div>
                </div><!-- /.box-body -->
                
                <div class="box-body">
                    <div class="form-group">
                        <label for="category">Category:</label>
                        <select name="category_id" class="form-control" required>
                            <!-- Fetch and display categories from your database -->
                            <?php
                            include_once('inc/root_dir.php');
                            include($root_dir . '/database/db_config.php');

                            $sql = "SELECT * FROM categories";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo "<option value='{$row['id']}' $selected>{$row['name']}</option>";
                                }
                            }

                            $conn->close();
                            ?>
                        </select>
                    </div>
                </div><!-- /.box-body -->

                <div class="box-body">
                    <div class="form-group">
                        <label for="type">Type:</label>
                        <select name="type_id" class="form-control" required>
                            <!-- Fetch and display types from your database -->
                            <?php
                            include_once('inc/root_dir.php');
                            include($root_dir . '/database/db_config.php');

                            $sql = "SELECT * FROM types";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo "<option value='{$row['id']}' $selected>{$row['name']}</option>";
                                }
                            }

                            $conn->close();
                            ?>
                        </select>
                    </div>
                </div><!-- /.box-body -->
                
                <input type="hidden" name="create">
                

                <!-- Add other form fields based on your property details -->

                <button type="submit" class="btn btn-primary">Update Property</button>
            </form>
        </div>
    </div>
</div>

<?php
    include_once($root_dir. '/controllers/properties/add.php') 
?>