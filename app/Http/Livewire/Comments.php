<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Comments extends Component
{
    public $comments = [];

    public $newComment;

    public function addComment()
    {
        if ($this->newComment == '') {
            return;
        }
        
        array_unshift($this->comments, [
            'creator' => 'Bitfumes',
            'body' => $this->newComment,
            'created_at' => '1 min ago',
        ]);
        
        $this->newComment = '';
        
    }

    
    public function render()
    {
        return view('livewire.comments');
    }
}