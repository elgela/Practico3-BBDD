<!-- formulario de agregar materia -->
 <h1>Ingrese una materia</h1>
<form action="agregar" method="POST">
    <div class="mb-3">
        <label class="form-label">Materia</label>
        <input required name="nombre" type="text" class="form-control" id="" placeholder="Ingrese la materia">
    </div>
    <div class="mb-3">
        <label class="form-label">Profesor</label>
        <input required name="profesor" type="text" class="form-control" id="" placeholder="Nombre del profesor">
    </div>
    <button type="submit" class="btn btn-success">Añadir</button>
    <!-- <a href="agregar" type="button" class="btn btn-success">Añadir</a> -->

</form>