<style>
    .venue-item {

        border-radius: 8px;
        padding: 10px;
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

<div class="venue-item rowrounded shadow-sm">
    <div class="col-2">
        <img class="rounded" src="{{$image}}" alt="{{$title}}">
    </div>
    <div class="venue-info col-auto d-flex flex-column justify-content-between">
            <h5>{{$title}}</h5>
            <p class="text-muted">{{$description}}</p>
            <p class="fw-bold">Mulai dari {{$price}}</p>
    </div>
    <div class="col-3 d-flex flex-column justify-content-end">
        <div class="mt-auto d-flex gap-2">
          <a href="#" class="btn btn-outline-dark btn-sm">View options</a>
          <a href="/select-activity" class="btn btn-dark btn-sm">Booking Now</a>
        </div>
      </div>
</div>
