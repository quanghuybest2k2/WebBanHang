<?php

class CategoryController extends BaseController
{
    public function index()
    {
        $PageTitle = 'Danh sách sản phẩm theo danh mục: Laptop';
        $categories = [
            [
                'id' => 1,
                'name' => 'Laptop'
            ],
            [
                'id' => 2,
                'name' => 'Mobile'
            ],
            [
                'id' => 3,
                'name' => 'Desktop'
            ],
            [
                'id' => 4,
                'name' => 'Tablet'
            ],
        ];
        return $this->view("frontend.categories.index", [
            'categories' => $categories,
            'PageTitle' => $PageTitle,
        ]);
    }
    public function show()
    {
        echo __METHOD__;
    }
    public function store()
    {
        echo __METHOD__;
    }
}
