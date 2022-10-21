<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithPagination;

class CategoryShow extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $name, $slug='',$category_id;
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

    public function saveCategory()
    {
        $validatedData = $this->validate();

        Category::create(['name'=>$validatedData['name'], 'slug'  => Str::slug($validatedData['name'])]);
        session()->flash('message','Category Added Successfully');
        //$this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
    }

    public function editCategory(int $category_id)
    {
        $category = Category::find($category_id);
        if($category){

            $this->category_id = $category->id;
            $this->name = $category->name;
        }else{
            return redirect()->to('/categories');
        }
    }

    public function updateCategory()
    {
        $validatedData = $this->validate();

        Category::where('id',$this->category_id)->update([
            'name' => $validatedData['name'],

        ]);
        session()->flash('message','Category Updated Successfully');
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
    }

    public function deleteCategory(int $category_id)
    {
        $this->category_id = $category_id;
    }

    public function destroyCategory()
    {
        Category::find($this->category_id)->delete();
        session()->flash('message','Category Deleted Successfully');
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
        $categories = Category::where('name', 'like', '%'.$this->search.'%')->paginate(3);
        return view('livewire.category.category-show', ['categories' => $categories]);
    }
}
