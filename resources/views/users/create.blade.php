@extends('layouts.app')

@section('content')

<div class="col-md-12">

  <div class="card">
    <div class="card-header">
      <div class="float-left">
        <h2>{{ __('Add New User') }}</h2>
      </div>

      <div class="float-right">
        <a href="{{ route('users.index') }}" class="btn btn-secondary"><i class="bi bi-arrow-left-circle-fill"></i>
          {{ __('Back') }}</a>
      </div>
    </div>

    <div class="card-body">
      @if (session('status'))
      <div class="alert alert-success" role="alert">
        {{ session('status') }}
      </div>
      @endif

      @if ($errors->any())
      <div class="alert alert-danger">
        <strong>{{ __('Whoops! There were some problems with your input.') }}</strong>
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif

      <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <div class="row">

          <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
              <strong>{{ __('Name') }}</strong>
              <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror"
                value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="{{ __('Name') }}">

              @error('name')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          </div>

          <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
              <label for="email"><strong>{{ __('E-Mail Address') }}</strong></label>
              <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror"
                value="{{ old('email') }}" required autocomplete="email" autofocus>

              @error('email')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          </div>

          <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group float-left">
              <label for="is_active"><strong>{{ __('Is active') }}</strong></label>
              <input type="checkbox" name="is_active" id="is_active"
                class="form-control @error('is_active') is-invalid @enderror" value="{{ old('is_active') }}" required
                autocomplete="is_active" autofocus>

              @error('is_active')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          </div>

          <div class="col-xs-12 col-sm-12 col-md-12 text-right">
            <a href="{{ route('users.index') }}" class="btn btn-dark"><i class="bi bi-x-circle-fill text-danger"></i>
              {{ __('Cancel') }}</a>
            <button type="submit" class="btn btn-success"><i class="bi bi-plus-circle-fill"></i>
              {{ __('Save') }}</button>
          </div>

        </div>
      </form>

    </div>

    <div class="card-footer"></div>
  </div>

</div>
@endsection
