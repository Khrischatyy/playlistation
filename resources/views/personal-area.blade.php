@extends('layouts.app')
@section('content')
<section class="main-personal">
    <div class="main-pic-switch">
        <div class="personal-pic">
            <div class="personal-pic-item">
                <img src="images/user.svg">
            </div>
            <div class="personal-pic-item">
                ACCOUNT NAME
            </div>
        </div>
        <div class="personal-switch">
            <div class="personal-switch-item">
                <a href="{{route('personal-area')}}">MY INFORMATION</a>
            </div>
            <div class="personal-switch-item">
                <a href="{{route('personal-area-orders')}}">MY ORDERS</a>
            </div>
        </div>
    </div>
    <div class="main-info">
        <div class="main-info-item">
            <h1>ACCOUNT</h1>
        </div>
        <div class="main-info-item">
            <div class="main-info-item-1">
            <div class="main-info-item-elem">
                <div class="main-info-item-elem-1">
                    NAME:
                </div>
                <div class="main-info-item-elem-2">
                    <input type="text" name="" placeholder="Enter your name:">
                </div>
            </div>
            <div class="main-info-item-elem">
                <div class="main-info-item-elem-1">
                    SURNANE:
                </div>
                <div class="main-info-item-elem-2">
                    <input type="text" name="" placeholder="Enter your surname:">
                </div>
            </div>
            </div>
            <div class="main-info-item-2">
            <div class="main-info-item-elem">
                <div class="main-info-item-elem-1">
                    EMAIL:
                </div>
                <div class="main-info-item-elem-2">
                    <input type="text" name="" placeholder="Enter your email:">
                </div>
            </div>
            <div class="main-info-item-elem">
                <div class="main-info-item-elem-1">
                    PASSWORD:
                </div>
                <div class="main-info-item-elem-2">
                    <input type="text" name="" placeholder="Enter your password:">
                </div>
            </div>
        </div>
        </div>
        <div class="main-info-item">
            <h1>ADRESS</h1>
        </div>
        <div class="main-info-item">
            <div class="main-info-adress">
                <input type="text" name="" placeholder=" Enter your street, house, apartment / office">
            </div>
            <div class="main-info-adress">
                <div class="main-info-adress-item">
                    <input type="text" name="" placeholder="Enter your city: ">
                    <input type="text" name="" placeholder="Enter your index: ">
                </div>
                <div class="main-info-adress-item">
                    <input type="text" name="" placeholder="Enter your country: ">
                    <input type="text" name="" placeholder="Enter your telephone number: ">
                </div>
                <div class="main-info-adress-item">
                    <button>SAVE</button>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection