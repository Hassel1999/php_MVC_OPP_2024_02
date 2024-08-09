<div class="container" style="margin-top: 80px">
    <div class="jumbotron">
        <h2>registro de Clientes</h2>
        
    </div>
    <div class="container">
        <table class="table table-striped ">
            <thead>
                <tr>
                    <th>id</th>
                    <th>FirstName</th>
                    <th>LastName</th>
                    <th>Email</th>
                    <th>Phone</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($query as $data): ?>
                    <tr>
                        <th><?php echo $data['Customerid']; ?></th>
                        <th><?php echo $data['Firstname']; ?></th>
                        <th><?php echo $data['LastName']; ?></th>
                        <th><?php echo $data['Email']; ?></th>
                        <th><?php echo $data['Phone']; ?></th>
                        <th>
                            <a href="index.php?m=vehiculo&id=<?php echo $data['id']?>" class="btn btn-primary">Editar</a>
                            <a href = "">
                            <a href="index.php?m=confirmarDelete&id=<?php echo $data['id']?>" class="btn btn-danger">Eliminar</a>
                        </th>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    
</div>