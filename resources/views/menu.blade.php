@extends('main.main')

@section('title','Menu')

@section('style')
<style>
    .nav-pills .nav-link{
        border-radius: 50px !important; 
        padding: 2px 5px;
    }
    .nav-pills a{
        color: black;
        font-size: 15px;
        transition: 0.3s;
        margin: 10px;
        background-color: #16C79A;
        padding: 10px
    }
    
    .nav-pills .nav-link.active, .nav-pills .show>.nav-link{
        color: white;
        background-color: red;
    }
    .nav-kategori{
        width: 400px;
        margin: auto;
        justify-content: center;
    }
    .button{
        text-align: center;
        width: 150px;
        border-radius: 12px;
    }

    .button span {
    cursor: pointer;
    display: inline-block;
    position: relative;
    transition: 0.5s;
    }

    .button span:after {
    content: '\00bb';
    position: absolute;
    opacity: 0;
    top: 0;
    right: -20px;
    transition: 0.5s;
    }

    .button:hover span {
    padding-right: 25px;
    }

    .button:hover span:after {
    opacity: 1;
    right: 0;
    }
</style>
@endsection

@section('content')
    <div class="container align-items-center justify-content-center">
        <div style="text-align: center; background-color: #EE99A0; padding: 70px; margin: 20px">
            <h1 style="color: #D3E0EA">OUR MENU</h1>
        </div>
        <nav class="nav nav-pills nav-kategori  nav-justified mb-5">
            <a class="button" data-aos-delay="200" data-aos="fade-down" class="flex-sm-fill text-sm-center nav-link {{request()->is('menu/appetizer') ? 'active ' : '' }}" href="/menu/appetizer" ><span>Appetizer</span></a>
            <a class="button" data-aos-delay="400" data-aos="fade-up" class="flex-sm-fill text-sm-center nav-link {{request()->is('menu/main course') ? 'active ' : '' }}" href="/menu/main course"><span>Main Course</span></a>
            <a class="button" data-aos-delay="600" data-aos="fade-down" class="flex-sm-fill text-sm-center nav-link {{request()->is('menu/dessert') ? 'active ' : '' }}" href="/menu/dessert"><span>Dessert</span></a>
            <a class="button" data-aos-delay="800" data-aos="fade-up" class="flex-sm-fill text-sm-center nav-link {{request()->is('menu/drink') ? 'active ' : '' }}" href="/menu/drink" type="button"></i><span>Drink</span></a>
        </nav>
        <div class="row align-items-center justify-content-center">
            @foreach ($menus as $item) 
                @include('components.card',['item' => $item])
            @endforeach
        </div>
    </div>
    <script>
        $(document).ready(function(){
            $('[data-toggle="popover"]').popover();   
            $('[data-toggle="popover"]').on('click', function(e) {e.preventDefault(); return true;});
        });
    </script>
@endsection