<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class ShowBlogDetail extends Component
{
    public $post = null;

    public function mount($slug)
    {
        $this->post = Post::select('posts.*', 'categories.name as category_name', 'categories.slug as category_slug')
            ->leftJoin('categories', 'categories.id', 'posts.id_category')
            ->where('posts.slug', $slug)
            ->first();
    }

    public function render()
    {
        $data['post'] = $this->post;
        return view('livewire.show-blog-detail', $data);
    }
}
