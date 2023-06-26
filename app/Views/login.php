<body>


    <div class="container d-flex justify-content-center">
        <div class="card border-success mb-3" style="max-width: 28rem;">
            <div class="card-header bg-transparent border-success">
                <h5 class="card-title">Login</h5>
            </div>
            <div class="card-body text-success">
                <form action="<?php echo base_url('/index.php//login')?>" method="POST">
                    <div class="row">
                        <div class="col-md-12 ">
                            <label for="inputUser" class="form-label">Usuario</label>
                            <input type="text" class="form-control" id="inputUser" name="inputUser" required="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="inputPassword" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="inputPassword" name="inputPassword" required="">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">Sign in</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card-footer bg-transparent border-success"></div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
        integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS"
        crossorigin="anonymous"></script>
</body>

</html>