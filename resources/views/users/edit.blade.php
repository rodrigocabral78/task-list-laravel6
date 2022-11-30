@extends('layouts.app')

@section('content')

<div class="col-md-12">

  <div class="card">
    <div class="card-header">
      <div class="float-left">
        <h2>{{ __('Edit User') }}</h2>
      </div>

      <div class="float-right">
        <a class="btn btn-primary" href="{{ route('users.index') }}">{{ __('Back') }}</a>
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
        <strong>{{ __('Whoops!') }}</strong> {{ __('There were some problems with your input.') }}<br><br>
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif

      <form action="{{ route('users.update',$user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">

          <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
              <strong>Name:</strong>
              <input type="text" name="name" value="{{ $user->name }}" class="form-control" placeholder="Name">
            </div>
          </div>

          <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
              <strong>Detail:</strong>
              <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail">
                {{ $user->detail }}</textarea>
            </div>
          </div>

          <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>
      </form>

    </div>

    <div class="card-footer"></div>
  </div>

</div>
@endsection
