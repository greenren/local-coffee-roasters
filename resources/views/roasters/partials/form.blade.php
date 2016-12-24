<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    {!! Form::label('name', 'Name of coffee roaster') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('name') }}</small>
</div>

<div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
    {!! Form::label('city', 'City') !!}
    {!! Form::text('city', null, ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('city') }}</small>
</div>

<div class="form-group{{ $errors->has('state') ? ' has-error' : '' }}">
    {!! Form::label('state', 'State (optional)') !!}
    {!! Form::select('state', Location::getStates(), null, ['class' => 'form-control']) !!}
    <small class="text-danger">{{ $errors->first('state') }}</small>
</div>

<div class="form-group{{ $errors->has('country') ? ' has-error' : '' }}">
    {!! Form::label('country', 'Country') !!}
    {!! Form::select('country', Location::getCountries(), 'United States', ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('country') }}</small>
</div>

<div class="form-group{{ $errors->has('established_year') ? ' has-error' : '' }}">
    {!! Form::label('established_year', 'Year established') !!}
    {!! Form::selectYear('established_year', date('Y'), date('Y') - 100, null, ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('established_year') }}</small>
</div>

<div class="form-group{{ $errors->has('website_url') ? ' has-error' : '' }}">
    {!! Form::label('website_url', 'Website URL') !!}
    {!! Form::text('website_url', null, ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('website_url') }}</small>
</div>

<div class="form-group{{ $errors->has('store_url') ? ' has-error' : '' }}">
    {!! Form::label('store_url', 'Store URL') !!}
    {!! Form::text('store_url', null, ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('store_url') }}</small>
</div>

<div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
    {!! Form::label('description', 'About') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('description') }}</small>
</div>

<div class="form-group{{ $errors->has('logo') ? ' has-error' : '' }}">
    {!! Form::label('logo', 'Logo (optional)') !!}
    {!! Form::file('logo', null) !!}
    <small class="text-danger">{{ $errors->first('logo') }}</small>
</div>

<div class="btn-group">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary']) !!}
    {!! Form::reset("Reset", ['class' => 'btn btn-danger']) !!}
</div>
