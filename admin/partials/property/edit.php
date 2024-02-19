<?php
    include_once($root_dir. '/controllers/properties/get_single.php') 
?>


<div class="row">
    <!-- left column -->
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Edit Property</h3>
            </div><!-- /.box-header -->
            <!-- form start -->
            <!-- Edit Property Form -->
            <form action="" method="post" enctype="multipart/form-data">
                <input type="hidden" name="property_id" value="<?php echo $property['id']; ?>">
                <div class="box-body">
                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" name="title" value="<?php echo $property['title']; ?>" class="form-control" required>
                    </div>
                </div><!-- /.box-body -->

                <div class="box-body">
                    <div class="form-group">
                        <label for="price">Price:</label>
                        <input type="number" name="price" value="<?php echo $property['price']; ?>" class="form-control" required>
                    </div>
                </div><!-- /.box-body -->

                <div class="box-body">
                    <div class="form-group">
                        <label for="price">Description:</label>
                        <textarea class="form-control" required name="description" id="" cols="30" rows="10"><?php echo $property['description']; ?></textarea>
                        <!-- <input type="text" name="description" value="<?php echo $property['description']; ?>" class="form-control" required> -->
                    </div>
                </div><!-- /.box-body -->

                <div class="box-body">
                    <div class="form-group">
                        <label for="title">Location:</label>
                        <input type="text" name="location" value="<?php echo $property['location']; ?>" class="form-control">
                    </div>
                </div><!-- /.box-body -->

                <div class="box-body">
                    <div class="form-group">
                        <label for="title">Amenities: Please list the amenites and separate them with commas</label>
                        <input type="text" name="amenities" value="<?php echo $property['amenities']; ?>" class="form-control">
                    </div>
                </div><!-- /.box-body -->

                <div class="box-body">
                    <div class="form-group">
                        <label for="price">Photo: You can select multiple images for this property</label>
                        <input type="file" name="photos[]" class="form-control" multiple>
                    </div>
                </div><!-- /.box-body -->

                <div class="box-body">
                    <div class="form-group">
                        <label for="price">Size:</label>
                        <input type="text" name="size" value="<?php echo $property['size']; ?>" class="form-control" required>
                    </div>
                </div><!-- /.box-body -->

                <div class="box-body">
                    <div class="form-group">
                        <label for="price">Number of Bedrooms:</label>
                        <input type="number" name="bedrooms" value="<?php echo $property['bedrooms']; ?>" class="form-control">
                    </div>
                </div><!-- /.box-body -->

                <div class="box-body">
                    <div class="form-group">
                        <label for="price">Number of Bathrooms:</label>
                        <input type="number" name="bathrooms" value="<?php echo $property['bathrooms']; ?>" class="form-control">
                    </div>
                </div><!-- /.box-body -->

                <div class="box-body">
                    <div class="form-group">
                        <label for="price">Number of Garages:</label>
                        <input type="number" name="garages" value="<?php echo $property['garages']; ?>" class="form-control">
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
                                    $selected = ($row['category_id'] == $property['category_id']) ? 'selected' : '';
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
                        <label for="category">Status:</label>
                        <select name="status" class="form-control">
                            <option value="sale" <?php echo ($property['status'] == 'sale') ? 'selected' : ''; ?>>sale</option>
                            <option value="sold" <?php echo ($property['status'] == 'sold') ? 'selected' : ''; ?>>sold</option>
                        </select>

                    </div>
                </div><!-- /.box-body -->

                <div class="box-body">
                    <div class="form-group">
                        <label for="type">Type:</label>
                        <select name="type_id" class="form-control">
                            <!-- Fetch and display types from your database -->
                            <?php
                            include_once('inc/root_dir.php');
                            include($root_dir . '/database/db_config.php');

                            $sql = "SELECT * FROM types";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    $selected = ($row['type_id'] == $property['type_id']) ? 'selected' : '';
                                    echo "<option value='{$row['id']}' $selected>{$row['name']}</option>";
                                }
                            }

                            $conn->close();
                            ?>
                        </select>
                    </div>
                </div><!-- /.box-body -->
                
                <input type="hidden" name="update">
                

                <!-- Add other form fields based on your property details -->

                <button type="submit" class="btn btn-primary">Update Property</button>
            </form>
        </div>
    </div>
</div>

<?php
    include_once($root_dir. '/controllers/properties/edit.php') 
?>