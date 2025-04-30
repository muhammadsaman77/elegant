<style>
    .venue-item {
        background: #D3D3D3;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0,0,0,0.05);
        margin-bottom: 20px;
        display: flex;
        overflow: hidden;
    }
    .venue-item img {
        width: 150px;
        height: 150px;
        object-fit: cover;
    }
</style>
<div class="container">
<div class="venue-item row">
    <div class="col-3">

        <img class="rounded" src={{$image}} alt="GOR Bulutangkis">
    </div>
    <div class="venue-info col-6 d-flex flex-column justify-content-between">
        <div>
            <h5>{{$title}}</h5>
            <p class="text-muted mb-1">{{$address}}</p>
            <p class="mb-2">Kapasitas : {{$capacity}}</p>

        </div>
        <div>
            <h6>{{$type}}</h6>
            <p>{{$description}}</p>
        </div>
        <div>
            @foreach ($tags as $tag )
            <p class="bg-dark text-white d-inline-block rounded p-1" style="margin-right: 5px">
                #{{$tag}}
            </p>
            @endforeach
        </div>
    </div>
    <div class="col-3">
        <div class="d-flex">
            <div>
                <h6>{{$rankingCategory}}</h6>
                <p class="text-muted">{{$guestsAmount}} guests</p>
            </div>
            <p class="bg-dark text-white rounded text-center" style="width: 50px; height: 30px;">{{$rating}}</p>
        </div>
        <p>{{$price}} per event</p>
        <p>{{$eventDuration}} hours, {{$guestCapacity}} guests</p>
        <a href="#" class="btn btn-outline-dark btn-sm">View options</a>
    </div>
</div>
</div>
