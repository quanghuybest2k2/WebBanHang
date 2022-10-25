<?php

class CategoryController extends BaseController
{
    private $categoryModel;
    function __construct()
    {
        $this->loadModel('CategoryModel');
        $this->categoryModel = new CategoryModel;
    }
    public function index()
    {
        $PageTitle = 'Danh sách sản phẩm theo danh mục: Laptop';
        $this->categoryModel = new CategoryModel;
        $categories =  $this->categoryModel->getAll();
        return $this->view("frontend.categories.index", [
            'categories' => $categories,
            'PageTitle' => $PageTitle,
        ]);
    }
    public function update()
    {
        $id = $_GET["id"];
        $data = [
            'name' => 'Printer'
        ];
        $this->categoryModel->updateData($id, $data);
    }
    public function show()
    {
        $id = $_GET["id"];
        $category =  $this->categoryModel->findById($id);
        echo '<pre>';
        print_r($category);
        echo '</pre>';
    }
    public function delete()
    {
        $id = $_GET["id"];
        $this->categoryModel->destroy($id);
    }
}
