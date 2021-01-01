<?php
namespace Parasut;

class Product extends Base
{
    public function index($pagenumber=1,$size=15)
    {
        return $this->client->request(
            'products?page%5Bnumber%5D='.$pagenumber.'&page%5Bsize%5D='.$size,
            'NULL',
            'GET'
        );
    }

    public function create($data)
    {
        return $this->client->request(
            'products',
            $data
        );
    }

    public function show($id , $data = [])
    {
        return $this->client->request(
            'products/' . $id,
            $data,
            'GET'
        );
    }

    public function update($id , $data = [])
    {
        return $this->client->request(
            'products/' . $id,
            $data,
            'PUT'
        );
    }
    
    public function delete($id , $data = [])
    {
        return $this->client->request(
            'products/' . $id,
            $data,
            'DELETE'
        );
    }
}
