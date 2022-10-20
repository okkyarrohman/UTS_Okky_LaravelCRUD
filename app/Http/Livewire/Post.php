<?php

namespace App\Http\Livewire;

use Livewire\Component;




class Post extends Component
{
    public function render()
    {
        return view('post');
    }

    public function delete($id)
    {
        $post = Post::find($id);
        $post->delete;
        session()->flash('message', 'Data dihapus');
    }

}
