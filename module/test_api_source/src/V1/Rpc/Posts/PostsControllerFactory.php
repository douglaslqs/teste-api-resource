<?php
namespace test_api_source\V1\Rpc\Posts;

class PostsControllerFactory
{
    public function __invoke($controllers)
    {
        return new PostsController();
    }
}
