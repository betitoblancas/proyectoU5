<div class="form-group">
    <label>Doctor</label>
    <input type="text" class="form-control" wire:model='doctor'>
    @error('name') <span>{{ $message }}</span> @enderror
</div>

<div class="form-group">
    <label>Descripción</label>
    <textarea type="text" class="form-control" wire:model='paciente'></textarea>
    @error('paciente') <span>{{ $message }}</span> @enderror
</div>

<div class="form-group">
    <label>Medicamento</label>
    <input type="text" class="form-control" wire:model='medicamento'>
    @error('medicamento') <span>{{ $message }}</span> @enderror
</div>

<div class="form-group">
    <label>Descripcion</label>
    <input type="text" class="form-control" wire:model='descripcion'>
    @error('descripcion') <span>{{ $message }}</span> @enderror
</div>
