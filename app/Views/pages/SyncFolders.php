<nav class="navbar justify-content-between">
  <p class="navbar-brand">Sincronizar carpetas</p>

  <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCreatefolder">
    Sincronizar nueva carpeta Drive
  </button>

  <!-- Modal -->
  <div class="modal fade" id="modalCreatefolder" tabindex="-1" aria-labelledby="modalCreatefolderLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">

        <form id="form-create-folder" action="/file-upload" method="post" enctype="multipart/form-data">
          <div class="modal-header">
            <h5 class="modal-title" id="modalCreatefolderLabel">Nueva sincronización</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <div class="modal-body">
            <div class="mb-3">
              <label for="folder_name" class="form-label">Nombre</label>
              <input type="text" class="form-control p-2" name="folder_name">
            </div>
            <div class="mb-3">
              <label for="file" class="form-label d-block">Credencial .json</label>
              <input type="file" class="form-control" name="file" />
            </div>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Crear</button>
          </div>
        </form>
      
      </div>
    </div>
  </div>
</nav>

<ul class="d-flex gap-3 flex-wrap list-unstyled" id="folders-list">
  <?php foreach ($folders as $folder) : ?>
    <li class="card border-2 shadow col-12 col-md-4">
        <div class="card-body d-flex flex-column justify-content-between p-3">
          <div class="d-flex justify-content-between align-items-start gap-1">
            <h5 class="card-title d-block " style="min-height: 40px;"><?php echo strlen($folder->name) <= 70 ? $folder->name : (substr($folder->name, 0, 70) . "..."); ?></h5>
            
            <div class="btn-group">
              <i class="ti-angle-down p-2 rounded-circle" style="background-color: #eee; cursor: pointer;" data-bs-toggle="dropdown" aria-expanded="false"></i>
           
              <ul class="dropdown-menu dropdown-menu-end">
                <li><button class="dropdown-item" type="button" onClick='delete_folder(<?php echo $folder->id; ?>)'>Eliminar</button></li>
              </ul>
            </div>
          </div>

          <div class="">
            <div class="btn-group w-100 mb-2" role="group">
                <button type="button" class="btn btn-secondary"
                onClick='cargarFuncion("<?php echo "/folders/".$folder->id."/files"; ?>", "Carpetas", "Manejar archivos", "Administrar todos los archivos de la carpeta seleccionada")'>
                <i class="ti-view-list"></i> Abrir</button>
            </div>

            <p class="card-text text-end"><span class="fw-semibold  ">Sincronizado:</span> <?php echo $folder->created_at ?></p>
          </div>
        </div>
    </li>
  <?php endforeach; ?>
</ul>


<script>
  function delete_folder(folder_id)
  {
    Swal.fire({
      title: "¿Estas seguro?",
      text: "¡No sera posible revertir esta acción!",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Si, eliminarlo!",
      cancelButtonText: "Cancelar",
    }).then((result) => {
      if (result.isConfirmed) {

        $.post("<?php echo base_url("/forms/delete") ?>", {"folder_id": folder_id}, function(data){
          data=JSON.parse(data);

          if(!data.error_occurred)
          {
            Swal.fire({
              title: "Eliminado!",
              text: "El aspecto ha sido eliminado.",
              icon: "success"
            });

            $.post("<?php echo base_url("/formularios") ?>", {}, function(data){
              $("#bodyApp").html(data);
            });
          }
      });
      }
    });
  }
</script>
