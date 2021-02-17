@extends('admin.layouts.master')

@section('content')

          <div class="section-header">
            <h1>Data User</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="{{ route('home') }}">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="{{ route('admin.users.index') }}">Data user</a></div>
              <div class="breadcrumb-item">Table</div>
            </div>
          </div>

          <div class="section-body">


            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>All User</h4>
                    <div class="card-header-form">
                      <form>
                        <div class="input-group">
                          <input type="text" class="form-control" placeholder="Search">
                          <div class="input-group-btn">
                            <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <tr>
                          <th>
                            #
                          </th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Roles</th>
                          <th>Actions</th>
                        </tr>
                        @foreach($users as $user)
                        <tr>
                          <td class="p-0 text-center">
                            <div class="custom-checkbox custom-control">
                              <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-1">
                              <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                            </div>
                          </td>
                          <td>{{ $user->name }}</td>
                          <td>{{ $user->email }}</td>
                          <td>{{ implode(',', $user->roles()->get()->pluck('name')->toArray() )}}</td>
                          <td>
                            <form action="{{ route('admin.users.destroy', $user) }}" method="post">
                                    @can('edit-users')
                                        <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-warning">Edit</a>
                                    @endcan
                                    @csrf
                                    {{ method_field('DELETE') }}
                                    @can('delete-users')
                                        <button class="btn btn-danger" type="submit">Delete</button>
                                    @endcan
                                </form>
                        </td>
                        </tr>
                        @endforeach

                      </table>
                      {{ $users->links() }}
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>

@endsection
