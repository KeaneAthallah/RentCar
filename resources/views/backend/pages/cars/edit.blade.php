@extends('backend.partsials.main')
@section('content')
    <div class="container-fluid px-4 pt-4">
        <div class="row g-4">
            <div class="bg-light h-100 rounded p-4">
                <h6>Edit Data Mobil</h6>
                <small class="">Silahkan Masukan Data Mobil</small>
                <form method="POST" action="{{ route('cars.update', $car->id) }}" enctype="multipart/form-data">
                    @method('patch')
                    @csrf
                    <div class="row mb-3 mt-4">
                        <label for="name" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control @error('name') 'invalid-error' @enderror"
                                id="name" name="name" value="{{ old('name', $car->name) }}" autofocus>
                        </div>
                    </div>
                    <div class="row mb-3 mt-4">
                        <label for="image" class="col-sm-2 col-form-label">Gambar</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" id="image" name="image"
                                value="{{ $car->image }}">
                        </div>
                    </div>
                    <div class="row mb-3 mt-4">
                        <label for="image" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                            <img id="showImage" class="rounded" style="width: 250px"
                                src="{{ url('storage/' . $car->image) }}" />
                        </div>
                    </div>
                    <div class="row mb-3 mt-4">
                        <label for="capacity" class="col-sm-2 col-form-label">Kapasitas</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="capacity" name="capacity"
                                value="{{ old('capacity', $car->capacity) }}">
                        </div>
                    </div>
                    <div class="row mb-3 mt-4">
                        <label for="harga_sendiri" class="col-sm-2 col-form-label">Harga Lepas Kunci</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="harga_sendiri" name="harga_sendiri"
                                value="{{ old('harga_sendiri', $car->harga_sendiri) }}">
                        </div>
                    </div>
                    <div class="row mb-3 mt-4">
                        <label for="harga_supir" class="col-sm-2 col-form-label">Harga Supir</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="harga_supir" name="harga_supir"
                                value="{{ old('harga_supir', $car->harga_supir) }}">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection
