<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class SearchComponent extends Component
{
    use WithPagination;
    public $search;

    protected $queryString = [ // عشان اللي بكتبه يظهر في ال url ولازم اعملها عشان لو عاوز ابعت اللينك لحد
        'search'  => ['except'=> '', 'as' => 's'],
    ];

    public function updatingSearch(){
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.search-component',[
            'posts' => Post::where('name','like', '%'.$this->search.'%')->paginate(5),
            // ال like دي بستخدمها في البحث و هي تبع لارافيل
            // % بستخدمها عشان لو الحرف او الكلمه موجود في اول الكلام او اخره
        ]);
    }
}
