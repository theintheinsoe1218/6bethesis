@extends('user_layouts.app')

@section('content')
@include('user_layouts.header')
<div  class="gallery">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <div class="titlepage">
                <h2>Hotel Gallery</h2>
             </div>
          </div>
       </div>
       <div class="row">
        @php
            $images = [
                'gallery1.jpg',
                'gallery2.jpg',
                'gallery3.jpg',
                'gallery4.jpg',
                'gallery5.jpg',
                'gallery6.jpg',
                'gallery7.jpg',
                'gallery8.jpg',
                'gallery10.webp',
                'gallery12.webp',
                'gallery9.webp',
                'gallery11.webp',
            ];
        @endphp

        @foreach($images as $image)
            <div class="col-md-3 col-sm-6">
            <div class="gallery_img">
                <figure><img src="{{ asset('user/images/' . $image) }}" alt="#"/></figure>
            </div>
            </div>
        @endforeach
       </div>
    </div>
 </div>
@endsection

{{-- https://www.booking.com/city/mm/mandalay.en-gb.html?label=gen173nr-1BCAMolQFCCG1hbmRhbGF5SDNYBGiVAYgBAZgBCbgBF8gBDNgBAegBAYgCAagCA7gCg5-ZtAbAAgHSAiQ3MWE0ZGY0My00OTEyLTRiNzEtYmQ3Mi1jN2U2NzY2NDc1N2bYAgXgAgE&sid=77031211a190e66a9be443436fcc8cf0&inac=0&keep_landing=1& --}}