<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class FolderController extends BaseController
{
    public function index()
    {
        $folders = array(
                (object)
                array(
                    'id' => 1,
                    'name' => "Folder 01 sincronizado",
                    'created_at' => date("Y-m-d H:i:s"),
                ),
        );


        $data = array(
            "folders" => $folders,
        );

        return view('pages/SyncFolders.php', $data);
    }

    public function create()
    {
        $folder_id = $this->request->getPost('current_folder_id');
        $folder_name = $this->request->getPost('folder_name');

        $response = $this->create_folder($folder_id, $folder_name);

        return json_encode($response);
    }

    public function files($folder_id)
    {
        $root_folder_id = $folder_id;

        $current_folder_id = $folder_id;

        $container_folder_id = null;

        $folder = $this->get_folder_information_by_folder_id($folder_id);

        $files = $this->get_files_by_folder_id($folder_id);

        $data = array(
            "root_folder_id" => $root_folder_id,
            "current_folder_id" => $current_folder_id,
            "container_folder_id" => $container_folder_id,
            "folder" => $folder,
            "files" => $files,
        );
        
        return view("pages/ManageFiles.php", $data);
    }

    public function show_files()
    {
        $root_folder_id = $this->request->getPost('root_folder_id');
        $current_folder_id = $this->request->getPost('current_folder_id');

        $container_folder_id = null;

        if ($root_folder_id != $current_folder_id) 
        {
            $container_folder_id = $this->get_container_folder_id_by_folder_id($current_folder_id);
        }

        $folder = $this->get_folder_information_by_folder_id($current_folder_id);

        $files = $this->get_files_by_folder_id($current_folder_id);

        $data = array(
            "root_folder_id" => $root_folder_id,
            "current_folder_id" => $current_folder_id,
            "container_folder_id" => $container_folder_id,
            "folder" => $folder,
            "files" => $files,
        );
        
        return view("pages/ManageFiles.php", $data);
    }

    public function delete_file()
    {
        $folder_id = $this->request->getPost('current_folder_id');
        $file_id = $this->request->getPost('file_id');

        $response = $this->delete_file_api($folder_id, $file_id);

        return json_encode($response);
    }

    public function upload_file()
    {   
        $current_folder_id = $this->request->getPost('current_folder_id');
        $file = $this->request->getFile('file');

        $error_occurred = null;
        $message = null;

        if ($file->isValid()) 
        {
            // Obtener el file
            $file = $this->request->getFile('file');

            // Puedes obtener el nombre del file subido
            $real_file_name = $file->getName();

            // Generar un nombre único para el file
            $new_file_name = md5(uniqid(rand(), true)) . '_' . $real_file_name;

            $folder_url = ROOTPATH . 'uploads/files/';

            // Mover el file a la carpeta deseada
            $file->move($folder_url, $new_file_name);
            
            // Upload file through Google Drive API
            $response = $this->upload_file_api($folder_url, $new_file_name, $real_file_name, $current_folder_id);

            $error_occurred = $response['error_occurred'];
            $message = $response['message'];
        } 
        else 
        {
            $error_occurred = true;
            $message = 'Error al subir el archivo :(';
        }

        $response = array(
            "error_occurred" => $error_occurred,
            "message" => $message,
        );

        return json_encode($response);
    }

    public function change_file_permission()
    {
        $current_folder_id = $this->request->getPost('current_folder_id');
        $file_id = $this->request->getPost('file_id');
        $permission = $this->request->getPost('permission');

        $response = $this->change_file_permission_api($current_folder_id, $file_id, $permission);

        return json_encode($response);
    }


    
    public function delete_file_api($folder_id, $file_id) // API
    {
        $response = array(
            "error_occurred" => false,
            "message" => 'El file fue eliminado exitosamente.'
        );

        return $response;
    }


    public function create_folder($folder_id, $folder_name) // API
    {
        $response = array(
            "error_occurred" => false,
            "message" => 'La carpeta fue creada exitosamente.'
        );

        return $response;
    }

    public function get_folder_information_by_folder_id($folder_id) // API
    {
        $folder = (object) array(
            "id" => "1",
            "name" => "Name sample",
            "author" => "Author sample",
            "created_at" => "Created at sample",
        );

        return $folder;
    }

    public function get_files_by_folder_id($folder_id) // API
    {
        $files = array(
            (object) array(
                "id" => "1",
                "name" => "Name sample 1",
                "kind" => "Tipo 1",
                "owner" => "Owner sample 1",
                "created_at" => "Created at sample 1",
                "modified_at" => "Modified at sample 1",
            ),
            (object) array(
                "id" => "2",
                "name" => "Name sample 2",
                "kind" => "folder",
                "owner" => "Owner sample 2",
                "created_at" => "Created at sample 2",
                "modified_at" => "Modified at sample 2",
            ),
        );

        return $files;
    }

    public function get_container_folder_id_by_folder_id($folder_id) // API
    {
        $container_folder_id = 1;

        return $container_folder_id;
    }

    public function upload_file_api($folder_url, $new_file_name, $real_file_name, $folder_id) // API
    {
        $response = array(
            "error_occurred" => false,
            "message" => 'El archivo fue subido exitosamente!',
        );

        return $response;
    }

    public function change_file_permission_api($folder_id, $file_id, $permission) // API
    {
        $response = array(
            "error_occurred" => false,
            "message" => 'El permiso fue cambiado exitosamente!',
        );

        return $response;
    }
}
