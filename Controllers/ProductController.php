<?php

class ProductController extends BaseController
{
    public function index()
    {
        return $this->view("frontend.products.index", [
            'PageTitle' => "Trang danh sách sản phẩm"
        ]);
    }
    public function show()
    {
        echo __METHOD__;
    }
}
