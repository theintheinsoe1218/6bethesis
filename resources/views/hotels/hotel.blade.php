@extends('user_layouts.app')

@section('content')
    
<div  class="our_room">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <div class="titlepage">
                <h2>Hotels</h2>
             </div>
          </div>
       </div>
       <div class="row">
         @foreach($hotels as $hotel)
         <div class="col-md-4 col-sm-6">
            <div id="serv_hover"  class="room">
               <div class="room_img">
                  <figure><img src="user/images/room1.jpg" alt="#"/></figure>
               </div>
               <div class="bed_room">
                  <h3 style="font-size: 19px">{{ $hotel->name }}</h3>
                  <div class="text-right mt-1">

                     @if (Auth::check())
                        <a href="{{ route('hotels.show', $hotel->id) }}" class="sub_btn px-4 py-2">More...</a>
                     @else
                        <a href="{{ route('login') }}" class="sub_btn px-4 py-2">Login to View More</a>
                        <form action="{{ route('login') }}" method="GET" style="display: none;">
                           @csrf
                           <input type="hidden" name="redirect_to" value="{{ route('hotels.show', $hotel->id) }}">
                        </form>
                     @endif
                  </div>

               </div>
            </div>
         </div>
         @endforeach
          
         
       </div>
    </div>
</div>
@endsection
