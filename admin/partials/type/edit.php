<?php
    include_once($root_dir. '/controllers/types/get_single.php') 
?>

<div class="row">
    <!-- left column -->
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Edit Type</h3>
            </div><!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post">
                <div class="box-body">
                    <div class="form-group">
                        <label for="type">Type Title</label>
                        <input type="text" class="form-control" id="type" name="name" placeholder="Enter Type Title" value="<?php echo $type['name']; ?>">
                        <input type="hidden" name="id" value="<?php echo $type['id']; ?>">
                        <input type="hidden" name="update">
                    </div>
                </div><!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div><!-- /.box -->
    </div><!--/.col (left) -->
</div>   <!-- /.row -->

<?php
    include_once($root_dir. '/controllers/types/edit.php') 
?>