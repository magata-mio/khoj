@extends('app')
@include('nav.nav')
@section('content')
<div class="container py-5">
    <div class="row py-2">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <span class="fs-4">Beauti Parlour</span>
                </div>
                <div class="card-body d-flex">
                    <div>
                        <img src="{{ asset('img/beauti.jpg') }}" width="200" class="img-fluid" alt="Beauti">
                    </div>
                    <div class="ps-3">
                        <h3>Sarita Famous Beauti Parlour</h3>
                        <p>Address: Dharan-15</p>
                        <p>Contact: 980000000</p>
                        <button type="submit" class="btn btn-outline-danger">View More</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row py-2">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <span class="fs-4">Hospitals</span>
                </div>
                <div class="card-body d-flex">
                    <div>
                        <img src="{{ asset('img/hospitals.jpg') }}" width="200" class="img-fluid" alt="Hospitals">
                    </div>
                    <div class="ps-3">
                        <h3>Bijaypur Hospitals</h3>
                        <p>Address: Dharan-9</p>
                        <p>Contact: 980000000</p>
                        <button type="submit" class="btn btn-outline-danger">View More</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row py-2">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <span class="fs-4">Hotels</span>
                </div>
                <div class="card-body d-flex">
                    <div>
                        <img src="{{ asset('img/Hotels.jpg') }}" width="200" class="img-fluid" alt="Hotels">
                    </div>
                    <div class="ps-3">
                        <h3>Dharan Kitchen</h3>
                        <p>Address: Dharan-12</p>
                        <p>Contact: 980000000</p>
                        <button type="submit" class="btn btn-outline-danger">View More</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row py-2">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <span class="fs-4">Montesori</span>
                </div>
                <div class="card-body d-flex">
                    <div>
                        <img src="{{ asset('img/Montesori.jpg') }}" width="200" class="img-fluid" alt="Montesori">
                    </div>
                    <div class="ps-3">
                        <h3>Dharan Montesori </h3>
                        <p>Address: Dharan-5</p>
                        <p>Contact: 980000000</p>
                        <button type="submit" class="btn btn-outline-danger">View More</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row py-2">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <span class="fs-4">Medicals</span>
                </div>
                <div class="card-body d-flex">
                    <div>
                        <img src="{{ asset('img/medical.jfif') }}" width="200" class="img-fluid" alt="Medicals">
                    </div>
                    <div class="ps-3">
                        <h3>Dawa Medicals</h3>
                        <p>Address: Dharan-9</p>
                        <p>Contact: 980000000</p>
                        <button type="submit" class="btn btn-outline-danger">View More</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row py-2">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <span class="fs-4">University</span>
                </div>
                <div class="card-body d-flex">
                    <div>
                        <img src="{{ asset('img/university.jpg') }}" width="200" class="img-fluid" alt="University">
                    </div>
                    <div class="ps-3">
                        <h3>Purwanchal University</h3>
                        <p>Address: Dharan-9</p>
                        <p>Contact: 980000000</p>
                        <button type="submit" class="btn btn-outline-danger">View More</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection