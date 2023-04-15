<?php

  namespace App\Repository;

  interface iProductRepository {

    public function getAllProducts();

    public function createProduct(array $data);

    public function getSingleProduct($id);

    public function editProduct($id);

    public function updateProduct($id, array $data);

  }


?>
