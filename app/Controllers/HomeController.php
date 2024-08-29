<?php

namespace App\Controllers;

use App\Models\PostModel;
use App\Models\UserModel;

class HomeController extends BaseController
{
    protected $postModel;
    protected $userModel;

    public function __construct()
    {
        $this->postModel = new PostModel();
        $this->userModel = new UserModel();
    }

    // Display homepage with posts and users
    public function index()
    {
        $data = [
            'posts' => $this->postModel->getPostsWithUsers(),
            'users' => $this->userModel->findAll(),
        ];

        return view('welcome_message', $data);
    }
}
