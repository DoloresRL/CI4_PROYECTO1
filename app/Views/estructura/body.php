<?php
//echo view('estructura/header');
echo $cabecera;
?>
<body>
    <header>
        <h1>Usuarios</h1>
    </header>
    <div class="container">
        <div class="row">
            <div class="col-md-11 offset-md-11">
                <a href="<?php echo base_url(); ?>index.php/formulario" class="btn btn-primary" role="button">Nuevo</a>
            </div>
        </div>
        <div class="row">
            <table id="user-table" class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Deleted</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user): ?>
                        <tr>
                            <td>
                                <?= $user['id']; ?>
                            </td>
                            <td>
                                <?= $user['name']; ?>
                            </td>
                            <td>
                                <?= $user['email']; ?>
                            </td>
                            <td>
                                <?= $user['deleted_at']; ?>
                            </td>
                            <td>
                            <a href="<?php echo base_url(); ?>index.php/editarUsuario?id=<?= $user['id']; ?>" class="btn btn-warning" role="button"><i class="fa fa-pencil-square-o"></i></a>
                            <a href="<?php echo base_url(); ?>index.php/eliminarUsuario?id=<?= $user['id']; ?>" class="btn btn-danger" role="button"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script>
        // Inicializa DataTables en la tabla
        $(document).ready(function () {
            $('#user-table').DataTable();
        });
    </script>
</body>

</html>