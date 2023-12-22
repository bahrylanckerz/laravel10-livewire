<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use App\Models\Category;
use Livewire\Attributes\Url;

class ShowBlog extends Component
{
    #[URL]
    public $category = null;

    public function render()
    {
        $paginate = 6;
        $categories = Category::where('status', '1')->orderBy('name', 'asc')->get();
        if($this->category){
            $category = Category::where('slug', $this->category)->first();
            if(empty($category)){
                abort(404);
            }
            $posts    = Post::where('status', '1')->where('id_category', $category->id)->orderBy('created_at', 'desc')->paginate($paginate);
        }else{
            $posts = Post::where('status', '1')->orderBy('created_at', 'desc')->paginate($paginate);
        }
        $latestPosts = Post::where('status', '1')->orderBy('created_at', 'desc')->get()->take(3);
        $data['posts']       = $posts;
        $data['categories']  = $categories;
        $data['latestPosts'] = $latestPosts;
        return view('livewire.show-blog', $data);
    }
}
