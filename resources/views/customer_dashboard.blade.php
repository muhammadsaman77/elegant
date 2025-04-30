@extends('layouts.main')

@section('content')
<style>
    html {
        background-color: #f8f9fa;
        margin: 0;
        padding: 0;
    }
    .sidebar {
        background: #ffffff;
        padding: 20px 20px;
        border-right: 1px solid #dee2e6;
        padding-left: 40px;
    }
    .venue-list {
        padding: 20px;
    }


    .venue-info {
        padding: 15px;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }
    .venue-item img {
        width: 150px;
        height: 150px;
        object-fit: cover;
    }
</style>


<div class="">
    <x-navbar-customer />
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-3 sidebar" style="   ">
            <h5>Refine your search</h5>
            <div class="mb-3">
                <label class="form-label">Venue location</label>
                <input type="text" class="form-control" placeholder="City, Country">
            </div>
            <div class="mb-3">
                <label class="form-label">Event date</label>
                <input type="date" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Guest count</label>
                <input type="number" class="form-control" placeholder="e.g. 50 guests">
            </div>
            <div class="mb-3">
                <label class="form-label">Event type</label>
                <input type="text" class="form-control" placeholder="Wedding, Party">
            </div>
            <button class="btn btn-dark w-100">Explore</button>
            <div class="mt-5">
                <div class="mb-3">
                    <h5>Refined Filters</h5>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="checkDefault">
                        <label class="form-check-label" for="checkDefault">
                        Upscale venue
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="checkDefault">
                        <label class="form-check-label" for="checkDefault">
                        Culinary services
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="checkDefault">
                        <label class="form-check-label" for="checkDefault">
                        Professional Event
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="checkDefault">
                        <label class="form-check-label" for="checkDefault">
                        Luxury Venue
                        </label>
                    </div>
                </div>
                <div class="mb-3">
                    <h5>Rental fee per event</h5>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="checkDefault">
                        <label class="form-check-label" for="checkDefault">
                        Under $500
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="checkDefault">
                        <label class="form-check-label" for="checkDefault">
                        $500 - $1,000
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="checkDefault">
                        <label class="form-check-label" for="checkDefault">
                        $1,000 - $1,500
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="checkDefault">
                        <label class="form-check-label" for="checkDefault">
                        $1,500 and above
                        </label>
                    </div>
                </div>
                <div class="mb-3">
                    <h5>Client Satisfaction</h5>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="checkDefault">
                        <label class="form-check-label" for="checkDefault">
                        All ratings
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="checkDefault">
                        <label class="form-check-label" for="checkDefault">
                        Exquisite
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="checkDefault">
                        <label class="form-check-label" for="checkDefault">
                        Outstanding
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="checkDefault">
                        <label class="form-check-label" for="checkDefault">
                        Great
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="col-md-9 venue-list">
            <p>30 elegant venues found for: Paris, 10 Dec, 50 guests, Wedding </p>
            <x-card-catalog title="Gor Bulutangkis" description="No description available" price="Rp 500.000" image="https://i.pinimg.com/736x/ed/d1/ee/edd1ee458d069d67f5866b7002a83e17.jpg" />
            <x-card-catalog title="Gor Bulutangkis" description="No description available" price="Rp 500.000" image="https://i.pinimg.com/736x/ed/d1/ee/edd1ee458d069d67f5866b7002a83e17.jpg" />
            <x-card-catalog title="Gor Bulutangkis" description="No description available" price="Rp 500.000" image="https://i.pinimg.com/736x/ed/d1/ee/edd1ee458d069d67f5866b7002a83e17.jpg" />
            <x-card-catalog title="Gor Bulutangkis" description="No description available" price="Rp 500.000" image="https://i.pinimg.com/736x/ed/d1/ee/edd1ee458d069d67f5866b7002a83e17.jpg" />

        </div>
    </div>
</div>

@endsection
