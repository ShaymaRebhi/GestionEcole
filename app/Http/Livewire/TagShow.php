<?php

namespace App\Http\Livewire;

use App\Models\Tag;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithPagination;

class TagShow extends Component
{

    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $name, $slug='',$tag_id;
    public $search = '';

    protected function rules()
    {
        return [
            'name' => 'required|string'
        ];
    }

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function saveTag()
    {
        $validatedData = $this->validate();

        Tag::create(['name'=>$validatedData['name'], 'slug'  => Str::slug($validatedData['name'])]);
        session()->flash('message','Tag Added Successfully');
        //$this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
    }

    public function editTag(int $tag_id)
    {
        $tag = Tag::find($tag_id);
        if($tag){

            $this->tag_id = $tag->id;
            $this->name = $tag->name;
        }else{
            return redirect()->to('/tags');
        }
    }

    public function updateTag()
    {
        $validatedData = $this->validate();
        Tag::where('id',$this->tag_id)->update([
            'name' => $validatedData['name'],
        ]);
        session()->flash('message','Tag Updated Successfully');
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
    }

    public function deleteTag(int $tag_id)
    {
        $this->tag_id = $tag_id;
    }

    public function destroyTag()
    {
        Tag::find($this->tag_id)->delete();
        session()->flash('message','Tag Deleted Successfully');
        $this->dispatchBrowserEvent('close-modal');
    }

    public function closeModal()
    {
        $this->resetInput();
    }

    public function resetInput()
    {
        $this->name = '';

    }

    public function render()
    {
        $tags = Tag::where('name', 'like', '%'.$this->search.'%')->paginate(6);
        return view('livewire.tag.tag-show', ['tags' => $tags]);
    }
}
