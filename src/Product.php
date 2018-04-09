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
}