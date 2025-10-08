<h2>Tabla de materias</h2>

<table class="pagos">
    <thead>
        <tr style='background-color: yellow;'>
            <th style='padding:5px;'>Materia</th>
            <th style='padding:5px;'>Alumno</th>
            <th style='padding:5px;'>Profesor</th>
            <!-- <th style='padding:5px;'>Fecha de pago</th> -->
        </tr>
    </thead>
    <tbody>
        <tr>
            <?php
            foreach ($materias as $materia) {
            ?>
                <td><?php echo $materia->materia ?></td>
                <td><?php echo $materia->alumno ?></td>
                <td><?php echo $materia->profesor ?></td>
        </tr>
            <?php } ?>
    </tbody>
</table>

