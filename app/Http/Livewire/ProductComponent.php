<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Product;

class ProductComponent extends Component
{
    use WithPagination;

    public $view = 'create';

    public $product_id, $doctor, $paciente, $medicamento, $descripcion;

    public function destroy($id){
        Product::destroy($id);
    }

    public function save(){
        $this->validate([
            'doctor' => 'required',
            'paciente' => 'required',
            'medicamento' => 'required',
            'descripcion' => 'required'
        ]);

        Product::create([
            'doctor'        => $this->doctor,
            'paciente' => $this->paciente,
            'medicamento'    => $this->medicamento,
            'descripcion'       => $this->descripcion
        ]);
        $this->reset();
    }

    public function edit($id){
        $product = Product::find($id);

        $this->product_id = $product->id;
        $this->doctor = $product->doctor;
        $this->paciente = $product->paciente;
        $this->medicamento = $product->medicamento;
        $this->descripcion = $product->descripcion;

        $this->view = 'edit';
    }

    public function update(){
        $this->validate([
            'doctor' => 'required',
            'paciente' => 'required',
            'medicamento' => 'required',
            'descripcion' => 'required'
        ]);
        $product = Product::find($this->product_id);
        $product->update([
            'doctor'        => $this->doctor,
            'paciente' => $this->paciente,
            'medicamento'    => $this->medicamento,
            'descripcion'       => $this->descripcion
        ]);

        $this->reset();
    }

    public function render()
    {
        $products = Product::orderBy('id', 'desc')->paginate(10);
        return view('livewire.product-component', compact('products'));
    }
}
