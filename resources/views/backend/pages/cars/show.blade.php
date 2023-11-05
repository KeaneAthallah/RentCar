@extends('backend.partsials.main')
@section('content')
    <div class="container-fluid px-4 pt-4">
        <div class="row g-4">
            <div class="bg-light h-100 rounded p-4">
                <div class="card" style="width: 20rem; margin:auto">
                    <img src="{{ url('storage/' . $car->image) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $car->name }}</h5>
                        <div class="card" style="width: auto;">
                            <div class="text-bold p-3">
                                <div class="row">
                                    <div class="col">
                                        <div class="text-left">Kapasitas</div>
                                    </div>
                                    <div class="col">
                                        <div class="text-right"><span style=" color: #f7c17b">{{ $car->capacity }}</span>
                                            <span style=" color: #325662">Orang</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="text-left">Lepas Kunci / Setir Sendiri</div>
                                    </div>
                                    <div class="col">
                                        <div class="text-right">Rp. <span
                                                style=" color: #f7c17b">{{ $car->harga_sendiri }}</span> <span
                                                style=" color: #325662">/
                                                Hari</span></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="text-left">Sopir + BBM</div>
                                    </div>
                                    <div class="col">
                                        <div class="text-right">Rp. <span
                                                style=" color: #f7c17b">{{ $car->harga_supir }}</span> <span
                                                style=" color: #325662">/
                                                10 Jam</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('cars.index') }}" class="btn btn-primary mt-2">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
