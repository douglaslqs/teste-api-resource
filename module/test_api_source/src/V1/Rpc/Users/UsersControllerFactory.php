<?php
namespace test_api_source\V1\Rpc\Users;

class UsersControllerFactory
{
    public function __invoke($controllers)
    {
        return new UsersController();
    }
}
