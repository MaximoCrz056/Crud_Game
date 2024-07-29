<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="categoria" class="form-label">{{ __('Categoria') }}</label>
            <select type="text" name="categoria" class="form-control @error('categoria') is-invalid @enderror" value="{{ old('categoria', $juego?->categoria) }}" id="categoria" placeholder="Categoria">

                  <option>Elige una categoria </option>
                  <option value="Accion">Accion</option>
                  <option value="Terror">Terror</option>
                  <option value="Aventura">Aventura</option>
                  <option value="Carreras">Carreras</option>
                  <option value="Peleas">Peleas</option>
                  <option value="Suspenso">Suspenso</option>
                  <option value="Estrategias">Estrategias</option>
                  <option value="Rol">Rol</option>
                  <option value="Simulador">Simulador</option>
                </select>
            {!! $errors->first('categoria', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="titulo" class="form-label">{{ __('Titulo') }}</label>
            <input type="text" name="titulo" class="form-control @error('titulo') is-invalid @enderror" value="{{ old('titulo', $juego?->titulo) }}" id="titulo" placeholder="Titulo">
            {!! $errors->first('titulo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="plataforma" class="form-label">{{ __('Plataforma') }}</label>
            <select type="text" name="plataforma" class="form-control @error('plataforma') is-invalid @enderror" value="{{ old('plataforma', $juego?->plataforma) }}" id="plataforma" placeholder="Plataforma">
            <option>Elige una Plataforma</option>
                    <option value="Xbox">Xbox</option>
                    <option value="Nintendo">Nintendo</option>
                    <option value="PlayStation">PlayStation</option>
                    <option value="Arcade">Arcade</option>
                  </select>
            {!! $errors->first('plataforma', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Agregar') }}</button>
    </div>
</div>