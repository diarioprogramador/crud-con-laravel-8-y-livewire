<div class="form-group">
    <label>Nombre</label>
    <input type="text" class="form-control" wire:model='name'>
    @error('name') <span>{{ $message }}</span> @enderror
</div>

<div class="form-group">
    <label>Descripción</label>
    <textarea class="form-control" wire:model='description'></textarea>
    @error('description') <span>{{ $message }}</span> @enderror
</div>

<div class="form-group">
    <label>Cantidad</label>
    <input type="number" class="form-control" wire:model='quantity'>
    @error('quantity') <span>{{ $message }}</span> @enderror
</div>

<div class="form-group">
    <label>Precio</label>
    <input type="number" class="form-control" wire:model='price' step=".01">
    @error('price') <span>{{ $message }}</span> @enderror
</div>
