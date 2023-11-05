@extends('backend.partsials.main')
@section('content')
    <div class="container-fluid px-4 pt-4">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title mb-4">All Rental Cars</h6>
                        <a href="{{ route('cars.create') }}" class="btn btn-primary m-2"><i class="fa fa-plus me-2"></i>Add
                            Rental Car</a>
                        <div class="table-responsive mt-2">
                            <table id="dataTableExample" class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Mobil</th>
                                        <th>Kapasitas</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cars as $car)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $car->name }} </td>
                                            <td>{{ $car->capacity }} Orang</td>
                                            <td>
                                                <div class="gap-1 overflow-x-auto"
                                                    style="display: flex; justify-content: center">
                                                    <a href="{{ route('cars.show', $car->id) }}" class="btn btn-info"
                                                        id="info">Show</a>
                                                    <a href="{{ route('cars.edit', $car->id) }}" class="btn btn-warning"
                                                        id="edit">Edit</a>
                                                    <form action="{{ route('cars.destroy', $car->id) }}" method="POST">
                                                        <button class="btn btn-danger" id="delete"
                                                            onclick='return confirm("Konfirmasi Pengahapusan")'>Delete</button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
