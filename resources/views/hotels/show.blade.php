@extends('user_layouts.app')

@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="path_to_image.jpg" class="img-fluid rounded-start" alt="{{ $hotel->name }}">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">{{ $hotel->name }}</h5>
                            <p class="card-text">
                                {{ $hotel->description }}
                            </p>
                            {{-- <a href="#" class="btn btn-primary">More Information</a> --}}
                            <div class="mt-3">
                                <form action="{{ url('/rate') }}" method="POST" class="d-inline">
                                    @csrf
                                    <input type="hidden" name="hotel_id" value="{{ $hotel->id }}">
                                    <div class="rating mt-1">
                                        <input type="radio" name="rating" id="5" value="5"><label for="5">☆</label>
                                        <input type="radio" name="rating" id="4" value="4"><label for="4">☆</label>
                                        <input type="radio" name="rating" id="3" value="3"><label for="3">☆</label>
                                        <input type="radio" name="rating" id="2" value="2"><label for="2">☆</label>
                                        <input type="radio" name="rating" id="1" value="1"><label for="1">☆</label>
                                    </div>
                                    <div>

                                        <button type="submit" class="sub_btn px-4 py-2 mt-2">Rate</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<style>
    .rating {
        direction: rtl;
        display: inline-flex;
    }

    .rating > input {
        display: none;
    }

    .rating > label {
        font-size: 2.5em;
        color: #ccc;
        cursor: pointer;
    }

    /* Change color when the star is checked */
    .rating > input:checked ~ label {
        color: #ff0909; /* Change this color as needed */
    }

    /* Change color when hovering over the stars */
    .rating > input:not(:checked) ~ label:hover,
    .rating > input:not(:checked) ~ label:hover ~ label {
        color: #ff0909; /* Change this color as needed */
    }

    /* Ensure the checked star stays highlighted after click */
    .rating > input:checked ~ label:hover,
    .rating > input:checked ~ label:hover ~ label {
        color: #ff0909;
    }

    /* Keep the selected color if it's already checked */
    .rating > input:checked ~ label:hover,
    .rating > input:checked:hover ~ label:hover {
        color: #ff0909;
    }
</style>