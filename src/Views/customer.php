<div class="container">
    <div class="jumbotron">
        <h2>formulario registro</h2>

    </div>
    <div class="col-md-6 col-md-offset-3">
        <div class="form-horizontal" style="">
            <?php if(isset($data['id']) && ($data['id']=="" || $data['id'] === null)){ ?>
            <form action="index.php?m=get_datosE" method="post">
            <?php } ?>
            <?php if(isset($data['id']) && ($data['id']=="" || $data['id'] === null)){ ?>
            <form action="index.php?m=get_datosE&id=<?php echo $data['id'];?>" method="post">
            <?php } ?>

                <div class="form-group">
                    <label class=" col-sm-2 control-label" for="txt_id">ID:</label>
                    <div class="col-sm-10">
                <input type="text" class="form-control" name="txt_id" value="<?php echo $data['id']; ?>">
                    </div>
                    
                </div>
                <div class="form-group">
                    <label class=" col-sm-2 control-label" for="txt_firstname">FirstName:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="txt_firstname" value="<?php echo $data['firstname']; ?>">
                    </div>
                    
                </div>
                <div class="form-group">
                    <label class=" col-sm-2 control-label" for="txt_modelo">LastName:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="txt_lastname" value="<?php echo $data['LastName']; ?>">
                    </div>
                    
                </div>
                <div class="form-group">
                    <label class=" col-sm-2 control-label" for="txt_email">Email:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="txt_email" value="<?php echo $data['Email']; ?>">
                    </div>
                    
                </div>
                <div class="form-group">
                    <label class=" col-sm-2 control-label" for="txt_Phone">Phone:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="txt_phone" value="<?php echo $data['Phone']; ?>">
                    </div>
                    
                </div>
               
                <div class="form-group">
                    <div class="col-md-12 col-md-off-set-3">
                    <?php if($data['id']==""){ ?>
                        <input type="submit" class="btn btn-primary form-control" name="" value="registrar">
                    <?php }  ?>
                    <?php if($data['id']!=""){ ?>
                    <input type="submit" class="btn btn-primary form-control" name="" value="Actualizar">
                    <?php }  ?>
                    </div>
                </div>
            </form>
            
        </div>
    </div>
    
</div>