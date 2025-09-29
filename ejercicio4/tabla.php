<h2>Tabla de pagos</h2>

<table class="pagos">
    <thead>
        <tr style='background-color: yellow;'>
            <th style='padding:5px;'>Deudor</th>
            <th style='padding:5px;'>Cuota</th>
            <th style='padding:5px;'>Monto</th>
            <th style='padding:5px;'>Fecha de pago</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <?php
            foreach ($pagos as $pago) {
                echo "<td>$pago->deudor</td>
                    <td>$pago->cuota</td>
                    <td>$pago->cuota_capital</td>
                    <td>$pago->fecha_pago</td>";
                echo '</tr>';
            }
            ?>
    </tbody>
</table>