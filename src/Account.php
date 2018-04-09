<?php
namespace Parasut;

class Account extends Base
{
    public function create(array $data)
    {
        return $this->client->request(
            'contacts',
            $data,
            'POST'
        );
    }
}