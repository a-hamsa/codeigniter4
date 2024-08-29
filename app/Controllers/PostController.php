<?php

namespace App\Controllers;

use App\Models\PostModel;
use App\Models\UserModel;
use CodeIgniter\Controller;

class PostController extends Controller
{
    public function index()
    {
        $model = new PostModel();
        $data['posts'] = $model->select('posts.*, users.name as user_name')
            ->join('users', 'users.id = posts.user_id')
            ->findAll();

        return view('posts/index', $data);
    }

    public function create()
    {
        $userModel = new UserModel();
        $data['users'] = $userModel->findAll();

        return view('posts/create', $data);
    }

    public function store()
    {
        $model = new PostModel();
        $model->save([
            'user_id' => $this->request->getPost('user_id'),
            'title' => $this->request->getPost('title'),
            'body' => $this->request->getPost('body'),
        ]);

        return redirect()->to('/posts');
    }

    public function edit($id)
    {
        $model = new PostModel();
        $data['post'] = $model->find($id);

        $userModel = new UserModel();
        $data['users'] = $userModel->findAll();

        return view('posts/edit', $data);
    }

    public function update($id)
    {
        $model = new PostModel();
        $model->update($id, [
            'user_id' => $this->request->getPost('user_id'),
            'title' => $this->request->getPost('title'),
            'body' => $this->request->getPost('body'),
        ]);

        return redirect()->to('/posts');
    }

    public function delete($id)
    {
        $model = new PostModel();
        $model->delete($id);

        return redirect()->to('/posts');
    }
}
