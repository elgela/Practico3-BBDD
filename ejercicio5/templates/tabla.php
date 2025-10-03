<h2>Materias</h2>

<table class="pagos">
    <thead>
        <tr>
            <th><button type="submit">Buscar</button><input type="text" name="search" id=""></th>
            <th><button type="submit">Añadir</button><input type="text" name="add" id=""></th>
        </tr>
        <tr style='background-color: yellow;'>
            <th style='padding:5px;'>ID</th>
            <th style='padding:5px;'>Materia</th>
            <th style='padding:5px;'>Profesor</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <?php
            foreach ($materias as $materia) {
            ?>
                <td><?php echo $materia->id ?></td>
                <td><?php echo $materia->nombre ?></td>
                <td><?php echo $materia->profesor ?></td>
                <td><a href="alta/<?php ?>" type="button" class="btn btn-success">Alta</a></td>
                <td><a href="baja/" type="button" class="btn btn-danger">Baja</a></td>
                <td><a href="modificar/" type="button" class="btn btn-warning">Modificación</a></td>
        </tr>
        <?php } ?>
    </tbody>
</table>