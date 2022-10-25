<?php
class ProductModel extends BaseModel
{
    const TABLE = 'products';
    public function getAll($select = ['*'], $orderBys = [], $limit = 15)
    {
        return $this->all(self::TABLE, $select, $orderBys, $limit);
    }
    public function findById($id)
    {
        return [
            'id' => 12,
            'name' => 'Iphone 12'
        ];
    }
    public function store($data)
    {
        $this->create(self::TABLE, $data);
    }
    public function updateData($id, $data)
    {
        $this->update(self::TABLE, $id, $data);
    }
    public function destroy($id)
    {
        return $this->delete(self::TABLE, $id);
    }
}
