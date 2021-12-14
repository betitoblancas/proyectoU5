<div class="row">
    <div class="col-md-8">
        <div class="mt-2 table-responsive-md">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">Folio</th>
                    <th scope="col">Doctor</th>
                    <th scope="col">Paciente</th>
                    <th scope="col">Medicamentos</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Acción</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->doctor }}</td>
                            <td>{{ $product->paciente }}</td>
                            <td>{{ $product->medicamento }}</td>
                            <td>{{ $product->descripcion }}</td>
                            <td>
                                <button type="button" class="btn btn-success" wire:click='edit({{ $product->id }})'>Editar</button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-danger" wire:click='destroy({{ $product->id }})'>Borrar</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $products->links('pagination::Bootstrap-4') }}
        </div>
    </div>
    <div class="col-md-4">
        <div class="container">
            @include("livewire.$view")
        </div>

    </div>
</div>
