@extends('layouts.app')

@section('content')

<div class="col-md-12">

  <div class="card">
    <div class="card-header">
      <div class="float-left">
        <h2>{{ __('Detail User') }}</h2>
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

      <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
            <strong>{{ __('Name') }}:</strong> {{ $user->name }}
          </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
            <strong>{{ __('E-Mail Address') }}:</strong> {{ $user->email }}
          </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
            <strong>{{ __('Is admin') }}:</strong> {{ __(($user->isAdmin()) ? 'Yes' : 'No') }}
          </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
            <strong>{{ __('Is active') }}:</strong> {{ __(($user->is_active) ? 'Yes' : 'No') }}
          </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
            <strong>{{ __('Created at') }}:</strong> {{ ($user->created_at)->format('d/m/Y H:i') }}
          </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
            <strong>{{ __('Updated at') }}:</strong> {{ ($user->updated_at)->format('d/m/Y H:i') }}
          </div>
        </div>

      </div>

    </div>

    <div class="card-footer"></div>
  </div>

</div>
@endsection
