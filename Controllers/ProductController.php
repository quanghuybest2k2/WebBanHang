<?php

class ProductController extends BaseController
{
    private $productModel;
    public function __construct()
    {
        $this->loadModel('ProductModel');
        $this->productModel = new ProductModel;
    }
    public function index()
    {
        $selectColumns = ['id', 'name', 'category_id']; // col muốn hiển thị, nếu rỗng thì hiển thị hết
        $orders = ['column' => 'id', 'order' => 'asc']; // sap xep
        $products = $this->productModel->getAll($selectColumns, $orders);
        return $this->view("frontend.products.index", [
            'PageTitle' => "Trang danh sách sản phẩm",
            'products' => $products,
        ]);
    }
    public function store()
    {
        $data = [
            'name' => 'Iphone 11',
            'price' => '25000000',
            'image' => null,
            'category_id' => 2
        ];
        $this->productModel->store($data);
    }
    public function update()
    {
        $id = $_GET["id"];
        $data = [
            'name' => 'Iphone 15',
            'price' => '25000000',
            'image' => null,
            'category_id' => 2
        ];
        $this->productModel->updateData($id, $data);
    }
    public function show()
    {
        $product = $this->productModel->findById(1);
        return $this->view('frontend.products.show', [
            'product' => $product,
        ]);
    }
    public function delete()
    {
        $id = $_GET["id"];
        $this->productModel->destroy($id);
    }
}
