<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="tiempo" class="form-label">{{ __('Tiempo') }}</label>
            <select type="text" name="tiempo" class="form-control @error('tiempo') is-invalid @enderror" value="{{ old('tiempo', $renta?->tiempo) }}" id="tiempo" placeholder="Tiempo" required onchange="updateTimesAndCost()">
                      <option value="0">Elije el tiempo</option>
                      <option value="1 hora">1 hora</option>
                      <option value="1 hora y 30 minutos">1 hora y 30 minutos</option>
                      <option value="2 horas">2 horas</option>
                      <option value="2 horas y 30 minutos">2 horas y 30 minutos</option>
                      <option value="3 horas">3 horas</option>
                      <option value="3 horas y 30 minutos">3 horas y 30 minutos</option>
                      <option value="4 horas">4 horas</option>
                  </select>
            <!-- <input type="text" name="tiempo" class="form-control @error('tiempo') is-invalid @enderror" value="{{ old('tiempo', $renta?->tiempo) }}" id="tiempo" placeholder="Tiempo"> -->
            {!! $errors->first('tiempo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="pago_total" class="form-label">{{ __('Pagototal') }}</label>
            <input type="text" name="pagoTotal" class="form-control @error('pagoTotal') is-invalid @enderror" value="{{ old('pagoTotal', $renta?->pagoTotal) }}" id="pago_total" placeholder="Pagototal">
            {!! $errors->first('pagoTotal', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="hora_inicio" class="form-label">{{ __('Horainicio') }}</label>
            <input type="time" name="horaInicio" class="form-control @error('horaInicio') is-invalid @enderror" value="{{ old('horaInicio', $renta?->horaInicio) }}" id="hora_inicio" placeholder="Horainicio">
            {!! $errors->first('horaInicio', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="hora_termino" class="form-label">{{ __('Horatermino') }}</label>
            <input type="time" name="horaTermino" class="form-control @error('horaTermino') is-invalid @enderror" value="{{ old('horaTermino', $renta?->horaTermino) }}" id="hora_termino" placeholder="Horatermino">
            {!! $errors->first('horaTermino', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Agregar') }}</button>
    </div>
</div>
