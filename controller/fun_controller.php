<?php
class FunController {
    public function index() {
        // we store all the posts in a variable
        $jokes = Fun::all();
        require_once('view/fun/index.php');
    }

    public function show() {

        // we use the given id to get the right post
        $joke = Fun::find();
        require_once('view/fun/chuck.php');
    }
}