@extends('layouts.app')

@section('content')

<div class="col-md-12">

  <div class="card">
    <div class="card-header">
      <div class="float-left">
        <h2>{{ __('List') }}</h2>
      </div>

      <div class="float-right">
        <a href="{{ route('users.create') }}" class="btn btn-success" title="{{ __('Add') }}" data-toggle="tooltip">
          <i class="bi bi-plus-circle-fill"></i>
          {{ __('Add') }}</a>
      </div>
    </div>

    <div class="card-body">

      @if (session('success'))
      <div class="alert alert-success" role="alert">
        {{ __(session('success')) }}
      </div>
      @endif

      <div class="table-responsive">
        <table class="table table-striped table-hover table-bordered">
          <thead>
            <tr class="text-center">
              <th>#</th>
              <th>{{ __('Name') }}</th>
              <th>{{ __('E-Mail Address') }}</th>
              <th>{{ __('Is admin') }}</th>
              <th>{{ __('Is active') }}</th>
              <th>{{ __('Created at') }}</th>
              <th>{{ __('Updated at') }}</th>
              <th width="110px">{{ __('Action') }}</th>
            </tr>
          </thead>

          <tbody>
            @foreach ($users as $user)
            <tr>
              <td style="text-align: center;">{{ $user->id }}</td>
              <td>{{ $user->name }}</td>
              <td>{{ $user->email }}</td>
              <td>{{ __(($user->isAdmin()) ? 'Yes' : 'No') }}</td>
              <td>{{ __(($user->is_active) ? 'Yes' : 'No') }}</td>
              <td>{{ ($user->created_at)->format('d/m/Y H:i') }}</td>
              <td>{{ ($user->updated_at)->format('d/m/Y H:i') }}</td>
              <td style="text-align: center;">
                <form id="delete-form" action="{{ route('users.destroy',$user->id) }}" method="POST">
                  <a href="{{ route('users.show',$user->id) }}" title="{{ __('Detail') }}" data-toggle="tooltip">
                    <i class="bi bi-eye-fill text-info h4"></i></a>
                  <a href="{{ route('users.edit',$user->id) }}" title="{{ __('Edit') }}" data-toggle="tooltip">
                    <i class="bi bi-pencil-fill text-warning h4"></i></a>
                  <a href="#" title="{{ _('Delete') }}" data-toggle="tooltip"
                    onclick="this.parentNode.submit(); return false;">
                    <i class="bi bi-trash-fill text-danger h4"></i></a>
                  @csrf
                  @method('DELETE')
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        {{ $users->onEachSide(3)->links() }}
      </div>
    </div>

    <div class="card-footer"></div>
  </div>

</div>

@endsection
