<?php


class Router {

    private BlogController $bc;
    private PostController $pc;

    public function __construct() {
        $this->pc = new PostController();
        $this->bc = new BlogController();
    }

    public function handleRequest(array $get) {
 

        if (isset($get["route"]) && $get["route"] === "post") {
            $this->pc->findAllPosts();
        } else {
            $this->bc->findAllCategory();
        }
    }
}