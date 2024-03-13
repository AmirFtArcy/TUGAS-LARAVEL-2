@extends('template.index')
@section('title','home')
@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>DATA USER</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Data User</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Data User</h3>
            </div>
            <form action="/users/{{ @$data->id }}" method="POST">
              {{-- @php
                  dd($data->id);
              @endphp --}}
              @if (@$data)
                  @method('PUT')
              @endif
              @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="name">Nama</label>
                  <input type="text" class="form-control" name="name" placeholder="Nama" value="{{@$data->name}}">
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="text" class="form-control" name="email" placeholder="Email" value="{{@$data->email}}">
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="text" class="form-control" name="password" placeholder="Password" value="{{@$data->password}}">
                </div>
               
              </div>
              <div class=" card-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>

              </div>
                
            </form>
          </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
</div
    
@endsection