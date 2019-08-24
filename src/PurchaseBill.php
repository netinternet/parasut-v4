<?php
namespace Parasut;

class PurchaseBill extends Base
{

    public function create($data)
    {
        return $this->client->request(
            'purchase_bills#detailed',
            $data
        );
    }

    public function show($id , $data = [])
    {
        return $this->client->request(
            'purchase_bills/' . $id,
            $data,
            'GET'
        );
    }

    public function edit($id , $data = [])
    {
        return $this->client->request(
            'products/' . $id,
            $data,
            'PUT'
        );
    }

    public function pay($id , $data = [])
    {
        return $this->client->request(
            'products/' . $id . '/payments',
            $data
        );
    }
}