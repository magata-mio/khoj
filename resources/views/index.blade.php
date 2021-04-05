@extends('app')
@section('content')
<div class="container my-5 py-5 bg-white">
    <div class="row py-4">
        <div class="col-md-6 text-center mx-auto">
            <img class="img-fluid" src="{{ asset('img/logo.png') }}" style="height: 130px;" alt="">
            <form action="" method="">
                <div class="form-group d-flex align-items-center border border-3 rounded-pill px-3">
                    <input id="" class="form-control border-0 shadow-none" placeholder="Search Your Information" type="text" name="">
                    <a href="/home" type="submit" class="btn shadow-none"><i class="bi bi-search"></i></a>
                </div>
            </form>
        </div>
    </div>
    <div class="row pt-2">
        <div class="col-md-8 mx-auto">
            <div class="row text-center">
                <h4 class="text-danger text-uppercase mb-3 fw-bold">Latest Search</h4>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body text-center pb-1">
                            <img class="img-fluid" src="{{ asset('img/hospitals.jpg') }}" alt="Hospitals" title="Hospital">
                            <span class="fw-bold">Hospital</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body text-center pb-1">
                            <img class="img-fluid" src="{{ asset('img/Hotels.jpg') }}" alt="Hotels">
                            <span class="fw-bold">Hotels</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body text-center pb-1">
                            <img class="img-fluid" src="{{ asset('img/medical.jfif') }}" alt="Medicals">
                            <span class="fw-bold">Medicals</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body text-center pb-1">
                            <img class="img-fluid" src="{{ asset('img/university.jpg') }}" alt="University">
                            <span class="fw-bold">University</span>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection