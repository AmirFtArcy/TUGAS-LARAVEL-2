@extends('template.index')

@section('title', 'home')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Data Customer</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Data Customer</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="card card-dark">
                    <div class="card-header">
                        <h3 class="card-title">Data Customer</h3>
                    </div>
                    <form action="/stuffs/{{ @$data->id }}" method="POST">
                        {{-- @php
                    dd($data->id);
                @endphp --}}
                        @if (@$data)
                            @method('PUT')
                        @endif
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="id">Kode</label>
                                <input type="text" class="form-control" name="id" placeholder="Kode"
                                    value="{{ @$data->id }}">
                            </div>
                            <div class="form-group">
                                <label for="name">Nama</label>
                                <input type="text" class="form-control" name="name" placeholder="Nama"
                                    value="{{ @$data->name }}">
                            </div>
                            <div class="form-group">
                                <label for="price">Harga</label>
                                <input type="text" class="form-control" name="price" placeholder="Harga"
                                    value="{{ @$data->price }}">
                            </div>
                            {{-- <div class="form-group">
                                <label for="status">status</label>
                                <input type="text" class="form-control" name="status" placeholder="status"
                                    value="{{ @$data->status }}">
                            </div> --}}
                            <div class="form-group">
                                <label for="id_category">Id Categori</label>
                                <select name="id_category" class="custom-select rounded-0">
                                    @foreach ($categories as $item)
                                        <option value="{{ $item->id }}"
                                            {{ @$data->id_category == $item->id ? 'selected' : ' ' }}>
                                            {{ $item->name }} </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleSelectRounded0">Status</label>
                                <select name="status" class="custom-select rounded-0">
                                    <option value="1" {{ @$data->status == 1 ? 'selected' : '' }}>Ada</option>
                                    <option value="2" {{ @$data->status == 1 ? 'selected' : '' }}>Tidak </option>
                                </select>
                            </div>
                        </div>
                        <div class=" card-footer">
                            <button type="submit" class="btn btn-dark">Simpan</button>

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
    </div>
@endsection
