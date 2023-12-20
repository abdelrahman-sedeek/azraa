<?php

namespace App\Livewire;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;
use Livewire\Component;
class Productfilter extends Component
{
    use WithPagination;
    public $subcategories;
    public $selectedSubcategory;
    protected $products;
    public $category;

    public function mount($category)
{

    
    
    $this->category = $category;
    $this->selectedSubcategory = null; // Initially, no subcategory selected
    $this->products = $this->loadProducts();
}

public function loadProducts()
{
    $query =  DB::table('products')
    ->join('product_branches', 'products.id', '=', 'product_branches.product_id')
    ->select('*')
    ->orderBy('products.date_added', 'desc')->where('products.status','=',1)->Where('products.category_id', $this->category);

    if ($this->selectedSubcategory) {
        $query->where('products.category_id', $this->selectedSubcategory->id);
    }

    return $query->paginate(8);
}

    public function selectSubcategory($id)
    {
        $this->selectedSubcategory = $this->subcategories->where('id', $id)->first();
        $this->loadProducts();
    }

    public function render()
    {
        // dd( $this->products->items());
     
        // dd($this->products);
        return view('livewire.productfilter', ['products' => $this->products]);
    }
}
