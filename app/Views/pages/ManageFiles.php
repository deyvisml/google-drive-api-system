
<div class="header-content mb-3">
    <h3>Gestionar archivos</h3>
</div>

<input type="hidden" name="root_folder_id" value="<?php echo $root_folder_id ?>">
<input type="hidden" name="current_folder_id" value="<?php echo $current_folder_id ?>">
<input type="hidden" name="container_folder_id" value="<?php echo $container_folder_id ?>">

<div>
    <hr>
    <div class="folder-information">
        <h5>Folder: <?php echo $folder->name; ?> <span class="text-danger"=><?php echo $root_folder_id == $current_folder_id ? "(ROOT)" : ""; ?></span></h5>
        <div class="details">
            <p class="m-0 mb-1 "><span class="fw-semibold d-inline-block " style="width: 110px !important;">Fecha creación: </span><?php echo $folder->created_at; ?></p>
            <p class="m-0 mb-1 "><span class="fw-semibold d-inline-block " style="width: 110px !important;">Autor: </span><?php echo $folder->author; ?></p>
        </div>
    </div>
    <hr>

    <div class="folder-content">
        <div class="button-upload-files-container d-flex justify-content-between align-items-center  mb-3 ">
            <div class="btn-return-folder-container">
                <a href="#" class="text-decoration-none <?php echo $root_folder_id == $current_folder_id ? "d-none" : ""; ?>" onclick="handle_btn_return_folder_container()"><i class="ti-arrow-left fs-4 "></i></a>
            </div>

            <div class="btn-upload-file-and-create-folder-container d-flex justify-content-end gap-2 align-items-center">
                <!-- Button trigger modal (UPLOAD FILE) -->
                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#modalUpdateFile">
                    Subir archivo
                </button>

                <!-- Button trigger modal (CREATE FOLDER) -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCreateFolder">
                    Crear carpeta
                </button>

                <!-- Modal (UPLOAD FILE) -->
                <div class="modal fade" id="modalUpdateFile" tabindex="-1" aria-labelledby="modalUpdateFileLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <form method="post" id="form-upload-file" enctype="multipart/form-data">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalUpdateFileLabel">Subir archivo</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>

                                <div class="modal-body">
                                    <input type="file" id="file-input" class="form-control" name="file" required/>

                                    <input type="hidden" name="current_folder_id" value='<?php echo $current_folder_id; ?>'>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                                    <button type="submit" class="btn btn-primary">Subir</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Modal (CREATE FOLDER) -->
                <div class="modal fade" id="modalCreateFolder" tabindex="-1" aria-labelledby="modalCreateFolderLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <form id="form-create-folder">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalCreateFolderLabel">Crear carpeta</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>

                                <div class="modal-body">
                                    <div class="">
                                        <label for="folder_name" class="form-label">Nombre</label>
                                        <input type="text" class="form-control p-2" name="folder_name" required>
                                    </div>

                                    <input type="hidden" name="current_folder_id" value='<?php echo $current_folder_id; ?>'>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                                    <button type="submit" class="btn btn-primary">Crear</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


                <!-- Modal (CHANGE PERMISSION) -->
                <div class="modal fade" id="modalChangeFilePermission" tabindex="-1" aria-labelledby="modalChangeFilePermissionLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <form id="form-change-file-permission">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalChangeFilePermissionLabel">Cambiar permiso</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>

                                <div class="modal-body">
                                    <div class="">
                                        <label for="permission" class="form-label">Seleccionar un permiso:</label>
                                        <select class="form-select" aria-label="Default select example" name="permission" required>
                                            <option value="1">Private</option>
                                            <option value="2">Public</option>
                                        </select>
                                    </div>

                                    <input type="hidden" id='input_permission_file_id' name="file_id" value=''>
                                    <input type="hidden" name="current_folder_id" value='<?php echo $current_folder_id; ?>'>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                                    <button type="submit" class="btn btn-primary">Cambiar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- (Icono) nombre, propietario, creado, modificado, acciones: ABRIR (folders), DESCARGAR (files), eliminar (folders, files)  -->
        <div class="table-container">
            <table class="table" id="files_table">
                <thead>
                    <tr class="table-info">
                        <th>Nombre</th>
                        <th>Propietario</th>
                        <th>Creado</th>
                        <th>Modificado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($files as $file) : ?>
                        <tr>
                            <td class="d-flex align-items-center">
                                <div class="d-inline-block overflow-hidden me-2" style="width: 25px !important; height: 25px !important;">
                                    <img src="<?php echo base_url('assets/icons/' . 'folder'/*$file->kind*/ . '.png') ?>" alt="" style="object-fit: contain !important; width: 100% !important;">
                                </div> 
                                <span>
                                    <?php echo $file->name ?></td>
                                </span>
                            <td><?php echo $file->owner ?></td>
                            <td><?php echo $file->created_at ?></td>
                            <td><?php echo $file->modified_at ?></td>
                            <td class="m-0 p-1">
                                <ul class="list-unstyled d-flex align-items-center gap-2 m-0 p-0 ">
                                    <li class="m-0 p-0" title="Eliminar">
                                        <a href="#" onclick="handle_btn_delete_file(<?php echo $file->id; ?>)"
                                        class="text-decoration-none rounded-2 border border-2 text-white bg-danger d-inline-block d-flex justify-content-center  align-items-center  " style="width: 28px !important; height: 28px !important;">
                                            <i class="ti-trash"></i>
                                        </a>
                                    </li>
                                    <li class="m-0 p-0" title="Permisos">
                                        <a href="#" onclick="handle_btn_display_modal_change_file_permission(<?php echo $file->id; ?>)"
                                        class="text-decoration-none rounded-2 border border-2 text-white bg-info d-inline-block d-flex justify-content-center  align-items-center  " style="width: 28px !important; height: 28px !important;">
                                            <i class="ti-lock"></i>
                                        </a>
                                    </li>
                                    <li class="m-0 p-0" title="Abrir">
                                        <a href="#" onclick="handle_btn_open_folder(<?php echo $file->id; ?>)"
                                        class="<?php echo $file->kind != "folder" ? 'invisible' : '' ?>  text-decoration-none rounded-2 border border-2 text-white bg-secondary d-inline-block d-flex justify-content-center  align-items-center  " style="width: 28px !important; height: 28px !important;">
                                            <i class="ti-share"></i>
                                        </a>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    function handle_btn_display_modal_change_file_permission(file_id)
    {
        $('#modalChangeFilePermission').modal('show');

        var input_permission_file_id = document.querySelector('#input_permission_file_id');
        input_permission_file_id.value = file_id;
    }
</script>

<script>
    $('#form-change-file-permission').submit(function(e){
        e.preventDefault();
        openCargar();

        $.post("<?php echo base_url("/folders/change-file-permission") ?>", $(this).serialize(), function(data){
            data = JSON.parse(data);

            console.log( data );

            if(!data.error_occurred)
            {
                $('#modalChangeFilePermission').modal('hide');
                closeCargar();

                Swal.fire({
                    title: "Cambiado!",
                    text: data.message,
                    icon: "success"
                });

                var data_send = {
                    'root_folder_id': '<?php echo $root_folder_id ?>',
                    'current_folder_id': '<?php echo $current_folder_id ?>',
                };   
                
                $.post("<?php echo base_url("/folders/show-files") ?>", data_send, function(data){
                    $("#bodyApp").html(data);
                });
            }
            else
            {
                Swal.fire({
                    title: "Error!",
                    text: data.message,
                    icon: "error"
                });
            }

            closeCargar();
        });
    });
</script>

<script>
    function handle_btn_delete_file(file_id){
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

                    openCargar();

                    var data = {
                        "current_folder_id": '<?php echo $current_folder_id ?>',
                        "file_id": file_id,
                    };

                    $.post("<?php echo base_url("/folders/delete-file") ?>", data, function(data){
                        data = JSON.parse(data);

                        console.log( data );

                        if(!data.error_occurred)
                        {
                            $('#modalCreateFolder').modal('hide');
                            closeCargar();

                            Swal.fire({
                                title: "Eliminado!",
                                text: data.message,
                                icon: "success"
                            });

                            var data_send = {
                                'root_folder_id': '<?php echo $root_folder_id ?>',
                                'current_folder_id': '<?php echo $current_folder_id ?>',
                            };   
                            
                            $.post("<?php echo base_url("/folders/show-files") ?>", data_send, function(data){
                                $("#bodyApp").html(data);
                            });
                        }
                        else
                        {
                            Swal.fire({
                                title: "Error!",
                                text: data.message,
                                icon: "error"
                            });
                        }

                        closeCargar();
                    });
                }
            });
    }
</script>

<script>
    function handle_btn_open_folder(folder_id)
    {
        openCargar();

        var data = {
            'root_folder_id': '<?php echo $root_folder_id ?>',
            'current_folder_id': folder_id,
        };
        
        $.post("<?php echo base_url("/folders/show-files") ?>", data, function(data){
            $("#bodyApp").html(data);

            closeCargar();
        });
    }
</script>

<script>
    function handle_btn_return_folder_container()
    {
        openCargar();

        var data = {
            'root_folder_id': '<?php echo $root_folder_id ?>',
            'current_folder_id': '<?php echo $container_folder_id ?>',
        };
        
        $.post("<?php echo base_url("/folders/show-files") ?>", data, function(data){
            $("#bodyApp").html(data);

            closeCargar();
        });
    }
</script>

<script>
    $('#form-create-folder').submit(function(e){
        e.preventDefault();
        openCargar();

        $.post("<?php echo base_url("/folders/create") ?>", $(this).serialize(), function(data){
            data = JSON.parse(data);

            console.log( data );

            if(!data.error_occurred)
            {
                $('#modalCreateFolder').modal('hide');
                closeCargar();

                Swal.fire({
                    title: "Creado!",
                    text: data.message,
                    icon: "success"
                });

                var data_send = {
                    'root_folder_id': '<?php echo $root_folder_id ?>',
                    'current_folder_id': '<?php echo $current_folder_id ?>',
                };   
                
                $.post("<?php echo base_url("/folders/show-files") ?>", data_send, function(data){
                    $("#bodyApp").html(data);
                });
            }
            else
            {
                Swal.fire({
                    title: "Error!",
                    text: data.message,
                    icon: "error"
                });
            }

            closeCargar();
        });
    });
</script>

<script>
    $('#form-upload-file').submit(function(e){
    e.preventDefault();
    openCargar();

    var formData = new FormData($(this)[0]); // Crear objeto FormData con el formulario

    $.ajax({
        url: "<?php echo base_url("/folders/upload-file") ?>",
        type: 'POST',
        data: formData,
        async: false,
        cache: false,
        contentType: false,
        processData: false,
        success: function(data){
            data = JSON.parse(data);

            console.log( data );

            if(!data.error_occurred)
            {
                $('#modalUpdateFile').modal('hide');
                closeCargar();

                Swal.fire({
                    title: "Subido!",
                    text: data.message,
                    icon: "success"
                });

                var data_send = {
                    'root_folder_id': '<?php echo $root_folder_id ?>',
                    'current_folder_id': '<?php echo $current_folder_id ?>',
                };   
                
                $.post("<?php echo base_url("/folders/show-files") ?>", data_send, function(data){
                    $("#bodyApp").html(data);
                });
            }
            else
            {
                Swal.fire({
                    title: "Error!",
                    text: data.message,
                    icon: "error"
                });
            }

            closeCargar();
        }
    });
});

</script>

<script>
  function table_to_datatable(id_table)
  {
    var table = document.querySelector(`#${id_table}`);
  
    var data_table = new DataTable(table, {
        paging: false,
    });

  }

  $(document).ready( () => {
    table_to_datatable("files_table");
  } );
</script>