<h3>Editar receta</h3>

    @include('livewire.form')

<button class="btn btn-primary" wire:click="update">Guardar cambios</button>

<div class="container mt-4">
    <div class="row">
        <div class="col-md-8">
            <h2>Receta</h2>
        </div>
        <div class="col-md-4">
            <div class="mb-4 d-flex justify-content-end">
                <a href="{{ route('livewire.pdf') }}" class="btn btn-primary"
                {{__('PDF')}} >Convertir a PDF</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">Folio</th>
                    <th scope="col">Doctor</th>
                    <th scope="col">Paciente</th>
                    <th scope="col">Medicamentos</th>
                    <th scope="col">Descripcion</th>
                  </tr>
                </thead>
                <tbody>
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->doctor }}</td>
                            <td>{{ $product->paciente }}</td>
                            <td>{{ $product->medicamento }}</td>
                            <td>{{ $product->descripcion }}</td>
                        </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>