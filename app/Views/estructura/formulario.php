<div class="container">
    <?php
    echo form_open(base_url('/index.php/guardarUsuario'));
    if(isset($user)){
        $name = $user['name'];
        $email = $user['email'];
    } else {
        $name = "";
        $email = "";
    }
    ?>
    <div class="form-group">
        <?php
        echo form_label('Nombre', 'name');
        echo form_input(array('name' => 'name', 'placeholder' => 'Nombre','class'=>'form-control', 'value' => $name));
        echo "<br><br>";
        echo form_label('Email', 'email');
        echo form_input(array('name' => 'email', 'placeholder' => 'Email','class'=>'form-control', 'value' => $email));
        echo "<br>";
        echo form_submit('guarda', 'Guardar','class="btn btn-primary"');
        if(isset($user)){
            echo form_hidden('id',$user['id']);
        }
        ?>
    </div>
    <?php
    echo form_close();
    ?>
</div>