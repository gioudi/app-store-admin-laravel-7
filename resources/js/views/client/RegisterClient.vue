<template>

    <!-- Main content -->
    <section class="content">
      <div class="row d-flex justify-content-center">
        <div class="col-md-6 col-sm-12" >
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Crear un nuevo usuario</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Nombre</label>
                <input type="text" id="inputName" class="form-control" value="Sergio">
              </div>
              <div class="form-group">
                <label for="inputCorreo">Correo</label>
                <input type="text" id="inputCorreo" class="form-control" value="Correo">
              </div>
              <div class="form-group">
                <label for="inputPhone">Nro Telefóno</label>
                <input type="text" id="inputPhone" class="form-control" value="333333">
              </div>
              <div class="form-group">
                <label for="inputAddress">Dirección</label>
                <input type="text" id="inputAddress" class="form-control" value="Cra 1 # 3">
              </div>
              <div class="form-group">
                <label for="inputDescription">Descripcion</label>
                <textarea id="inputDescription" class="form-control" rows="4">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.</textarea>
              </div>
              <div class="form-group">
                <label for="inputRol">Rol</label>
                <select class="form-control custom-select">
                  <option selected="" disabled="">Seleccione un rol</option>
                  <option>Administrador</option>
                  <option>Colaborador</option>
                  <option selected="">Vendedor</option>
                </select>
              </div>
                  <div class=" form-row">
                    <div class="form-group col-12">
                      <a href="#" class="btn btn-secondary">Cancel</a>
                      <input type="submit" value="Save Changes" class="btn btn-success float-right">
                    </div>
                  </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
  
    </section>

</template>

<script>
export default {

}
</script>

<style>

</style>
