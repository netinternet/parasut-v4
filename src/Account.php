<?php
namespace Parasut;

class Account extends Base
{
    public function index($pagenumber=1,$size=15,$data = [])
    {
        $data['page[number]'] = $pagenumber;
        $data['page[size]'] = $size;
        return $this->client->request(
            'contacts',
            $data,
            'GET'
        );
    }
    
    public function create($data)
    {
        return $this->client->request(
            'contacts',
            $data,
            'POST'
        );
    }

    public function show($id , $data = [])
    {
        return $this->client->request(
            'contacts/' . $id,
            $data,
            'GET'
        );
    }

    public function update($id , $data = [])
    {
        return $this->client->request(
            'contacts/' . $id,
            $data,
            'PUT'
        );
    }
}
