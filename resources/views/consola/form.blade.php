<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="almacenamiento" class="form-label">{{ __('Almacenamiento') }}</label>
            <input type="text" name="almacenamiento" class="form-control @error('almacenamiento') is-invalid @enderror" value="{{ old('almacenamiento', $consola?->almacenamiento) }}" id="almacenamiento" placeholder="Almacenamiento">
            {!! $errors->first('almacenamiento', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="disponibilidad" class="form-label">{{ __('Disponibilidad') }}</label>
            <select type="text" name="disponibilidad" class="form-control @error('disponibilidad') is-invalid @enderror" value="{{ old('disponibilidad', $consola?->disponibilidad) }}" id="disponibilidad" placeholder="Disponibilidad">
                      <option value="0">Elija la disponibilidad</option>
                      <option value="Disponible">Disponible</option>
                      <option value="Ocupada">Ocupada</option>
                  </select>
            <!-- <input type="text" name="disponibilidad" class="form-control @error('disponibilidad') is-invalid @enderror" value="{{ old('disponibilidad', $consola?->disponibilidad) }}" id="disponibilidad" placeholder="Disponibilidad"> -->
            {!! $errors->first('disponibilidad', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="modelo" class="form-label">{{ __('Modelo') }}</label>
            <input type="text" name="modelo" class="form-control @error('modelo') is-invalid @enderror" value="{{ old('modelo', $consola?->modelo) }}" id="modelo" placeholder="Modelo">
            {!! $errors->first('modelo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="marca" class="form-label">{{ __('Marca') }}</label>
            <select type="text" name="marca" class="form-control @error('marca') is-invalid @enderror" value="{{ old('marca', $consola?->marca) }}" id="marca" placeholder="Marca">
                    <option>Elige una Marca</option>
                    <option value="Xbox">Xbox</option>
                    <option value="Nintendo">Nintendo</option>
                    <option value="PlayStation">PlayStation</option>
                    <option value="Arcade">Arcade</option>
                  </select>
            <!-- <input type="text" name="marca" class="form-control @error('marca') is-invalid @enderror" value="{{ old('marca', $consola?->marca) }}" id="marca" placeholder="Marca"> -->
            {!! $errors->first('marca', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Agregar') }}</button>
    </div>
</div>