<?php

function product_remove_by_cate_id($cate_id)
{
    $query = "delete from products where category_id = ?";
    dd($query, $cate_id);
    pdo_execute($query, $cate_id);
}

function getFullProducts()
{
    $sql = "select * from products";
    return pdo_query_all($sql);
}

function getProductById($id)
{
    $sql = "select * from products where id = $id";
    return pdo_query_one($sql);
}
