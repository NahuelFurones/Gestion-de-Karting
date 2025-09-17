@php $isEdit = isset($karting); @endphp

@if($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ $isEdit ? route('kartings.update', $karting) : route('kartings.store') }}">
    @csrf
    @if($isEdit)
        @method('PUT')
    @endif

    <div class="mb-3">
        <label class="form-label">Nombre</label>
        <input name="name" value="{{ old('name', $karting->name ?? '') }}" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Ubicación</label>
        <input name="location" value="{{ old('location', $karting->location ?? '') }}" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Capacidad</label>
        <input type="number" name="capacity" value="{{ old('capacity', $karting->capacity ?? 10) }}" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Precio/h</label>
        <input name="price_per_hour" value="{{ old('price_per_hour', $karting->price_per_hour ?? '0.00') }}" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Activo</label>
        <input type="checkbox" name="is_active" {{ old('is_active', $karting->is_active ?? true) ? 'checked' : '' }}>
    </div>
    <div class="mb-3">
        <label class="form-label">Hora apertura</label>
        <input name="open_time" value="{{ old('open_time', $karting->open_time ?? '') }}" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Hora cierre</label>
        <input name="close_time" value="{{ old('close_time', $karting->close_time ?? '') }}" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Descripción</label>
        <textarea name="description" class="form-control">{{ old('description', $karting->description ?? '') }}</textarea>
    </div>
    <button class="btn btn-primary">{{ $isEdit ? 'Actualizar' : 'Crear' }}</button>
    <a href="{{ route('kartings.index') }}" class="btn btn-secondary">Cancelar</a>
</form>