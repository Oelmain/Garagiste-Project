@extends('layout')
@section('title', 'Home Page')
@section('content')
    <style>
        body {
            background-color: white; /* Change background color to white */
            color: black; /* Set text color of the page to black */
        }

        .btn-custom {
            background-color: skyblue; /* Change button background color to sky blue */
            color: white; /* Set button text color to white */
            border: 1px solid skyblue; /* Set button border color to sky blue */
        }

        .btn-custom:hover {
            background-color: deepskyblue; /* Change button background color to deep sky blue on hover */
            border-color: deepskyblue; /* Change button border color to deep sky blue on hover */
        }
    </style>

    <div class="container-fluid p-5">
        <div class="row container">
            <div class="col-md-6 d-flex justify-content-center align-items-center mb-5">
                <img src="{{ asset('mechanic.png') }}" alt="" class="img-fluid">
            </div>

            <div class="col-md-6">
                <div class="card card-custom shadow p-5">
                    <div class="card-body">
                        <h1 class="" style="color:skyblue;">YOUR CAR</h1>
                       
                        <p class="card-text">
                            Our car service platform offers comprehensive solutions to meet all your vehicle maintenance and repair needs. We prioritize customer satisfaction and are committed to providing top-quality service with every visit. With a dedicated team of experts and an approach focused on transparency and reliability, we're here to deliver an exceptional experience at every step. Whether it's routine maintenance or specialized repairs, you can trust our expertise to keep your vehicle running smoothly.
                        </p>
                        <a href="#" class="btn btn-custom">Explore More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-5 text-center">
        <h2 class="section-title d-inline-block">Our Services</h2>
    </div>

    <div class="container">
        <div class="row mt-5">
            <div class="col-md-4">
                <div class="card card-custom shadow p-3">
                    <img src="{{ asset('oil.png') }}" class="card-img-top" alt="Oil Change">
                    <div class="card-body">
                        <h5 class="card-title card-title-custom">Change Oil</h5>
                        <a href="#" class="btn btn-custom">More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-custom shadow p-3">
                    <img src="{{ asset('wash.png') }}" class="card-img-top" alt="Car Wash">
                    <div class="card-body">
                        <h5 class="card-title card-title-custom">Car Wash</h5>
                        <a href="#" class="btn btn-custom">More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-custom shadow p-3">
                    <img src="{{ asset('wheel.png') }}" class="card-img-top" alt="Car Wheels">
                    <div class="card-body">
                        <h5 class="card-title card-title-custom">Car Wheels</h5>
                        <a href="#" class="btn btn-custom">More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-custom shadow p-3">
                    <img src="{{ asset('client.png') }}" class="card-img-top" alt="Customer Service">
                    <div class="card-body">
                        <h5 class="card-title card-title-custom">Customer Service</h5>
                        <a href="#" class="btn btn-custom">More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-custom shadow p-3">
                    <img src="{{ asset('dia.png') }}" class="card-img-top" alt="Customer Service">
                    <div class="card-body">
                        <h5 class="card-title card-title-custom">Diagnoctic</h5>
                        <a href="#" class="btn btn-custom">More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-custom shadow p-3">
                    <img src="{{ asset('battery.png') }}" class="card-img-top" alt="Battery and Testing">
                    <div class="card-body">
                        <h5 class="card-title card-title-custom">Battery and Testing</h5>
                        <a href="#" class="btn btn-custom">More</a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
@endSection
