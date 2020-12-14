<?php
namespace Parasut;

class Product extends Base
{

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
