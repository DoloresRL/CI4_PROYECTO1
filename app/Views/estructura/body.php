<body>
    <header>
        <h1>Usuarios</h1>
    </header>
    <table id="user-table" class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Deleted</th>
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
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
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