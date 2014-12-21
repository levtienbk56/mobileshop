<div class="col-md-8">
    <!-- Primary box -->
    <div class="box box-solid box-primary">
        <div class="box-header">
            <h3 class="box-title"><?php echo $message->name; ?></h3>
            <div class="box-tools pull-right">
                <button class="btn btn-primary btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-primary btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">            
            <p>
                <?php echo $message->content; ?>
            </p>
        </div><!-- /.box-body -->
    </div><!-- /.box -->
</div><!-- /.col -->
