<?php if(isset($Oferta)) { ?>
    <form method="post" action="index.php?ruta=publicar/Poferta/poferta.editar">
        <input type="hidden" name="oferta_id" value="<?php echo $Oferta['oferta_id']; ?>">
        <div class="form-group">
            <label for="inputNombreEmpresa">Nombre Empresa:</label>
            <input type="text" id="inputNombreEmpresa" class="form-control" name="editInputNombreEmpresa" value="<?php echo $Oferta['nombre_empresa']; ?>" required>
        </div>
        <div class="form-group">
            <label for="inputCorreo">Correo:</label>
            <input type="email" id="inputCorreo" class="form-control" name="editInputCorreo" value="<?php echo $Oferta['correo']; ?>">
        </div>
        <div class="form-group">
            <label for="inputSector">Sector:</label>
            <input type="text" id="inputSector" class="form-control" name="editInputSector" value="<?php echo $Oferta['sector']; ?>" required>
        </div>
        <div class="form-group">
            <label for="inputTelefono">Teléfono:</label>
            <input type="text" id="inputTelefono" class="form-control" name="editInputTelefono" value="<?php echo $Oferta['telefono']; ?>" required>
        </div>
        <div class="form-group">
            <label for="inputDescripcion">Descripción:</label>
            <textarea id="inputDescripcion" class="form-control" name="editInputDescripcion" required><?php echo $Oferta['descripcion']; ?></textarea>
        </div>
        <div class="form-group">
            <label for="inputDirigida">Dirigida a:</label>
            <select id="inputDirigida" class="form-control" name="editInputDirigida">
                <option value="Estudiantes" <?php if($Oferta['dirigido'] == 'Estudiantes') echo 'selected'; ?>>Estudiantes</option>
                <option value="Prácticas" <?php if($Oferta['dirigido'] == 'Prácticas') echo 'selected'; ?>>Prácticas</option>
                <option value="Profesionales" <?php if($Oferta['dirigido'] == 'Profesionales') echo 'selected'; ?>>Profesionales</option>
                <option value="Con Postgrados" <?php if($Oferta['dirigido'] == 'Con Postgrados') echo 'selected'; ?>>Con Postgrados</option>
            </select>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Guardar cambios</button>
            <a href="index.php?ruta=publicar/Poferta/Poferta" class="btn btn-warning">Cancelar</a>
        </div>
    </form>
<?php } else { ?>
    <p>No se encontró información de la oferta.</p>
<?php } ?>
