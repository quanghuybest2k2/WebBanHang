<?php
class BaseController
{
    const VIEW_FOLDER_NAME = "Views";
    const MODEL_FOLDER_NAME = "Models";
    // $path = folderName.fileName
    // lấy từ sau thư mục view
    protected function view($viewpath, array $data = [])
    {
        // echo "<pre>";
        // echo print_r($data);
        // echo "</pre>";
        // die;
        foreach ($data as $key => $value) {
            $$key = $value;
        }
        require(self::VIEW_FOLDER_NAME . '/' . str_replace('.', '/', $viewpath) . '.php');
    }
    protected function loadModel($modelPath)
    {
        require(self::MODEL_FOLDER_NAME . '/' . $modelPath . '.php');
    }
}
