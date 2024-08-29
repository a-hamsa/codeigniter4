<?php
namespace App\Models;

use CodeIgniter\Model;

class PostModel extends Model
{
    protected $table      = 'posts';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $allowedFields = ['user_id', 'title', 'body'];

    protected $useTimestamps = true;
    public function getPostsWithUsers()
    {
        $this->select('posts.*, users.name as user_name');
        $this->join('users', 'posts.user_id = users.id');
        return $this->findAll();
    }
}
