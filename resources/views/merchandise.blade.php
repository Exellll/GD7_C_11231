@extends('dashboard')

@section('content')
<style>
    
    ::-webkit-scrollbar{
        width: 10px;
        height: 10px;
        border-radius: 25px;
    }

    ::-webkit-scrollbar-thumb{
        background-color: #D6B56E;
        border-radius: 25px;
    }

    ::-webkit-scrollbar-track{
        background-color: #23141E;
        border-radius: 25px;
    }

    .table-container {
        background-color: #23141E;
        width: 100%;
        height: 100%;
        object-fit: cover;
        position: absolute;
        top: 0;
        padding-top: 20px;
        padding-left: 20px;
        padding-right: 20px;
        left: 0;
        z-index: -1;
        overflow-x: hidden;
        border: 1px solid black;
    }

    .table-container::-webkit-scrollbar {
        width: 0px;
    }

    .table-container .content-index {
        margin-top: 20px;
        margin-left: 20px;
    }

    hr {
        border: 1px solid #D6B56E;
    }

    h2, h4 {
        font-family: goldenbook, serif;
        font-style: normal;
        text-align: center;
    }

    h2, h4, h5, p {
        font-family: goldenbook, serif;
        color: #FFFFFF;
    }

    h5{
        margin-top: 25px;
    }

    .title p {
        color: #FFFFFF;
        margin-bottom: 2px;
        margin-right: 10px;
    }
    
</style>

<div class="container-details">
    <div class="table-container">
        <div class="content-index">
            <div class="title">
                <h2 class="mt-3">2022 IU CONCERT〈The Golden Hour: Under The Orange Sun〉</h2>
                <br><br>
                <h4 class="mb-5">Our Official Merchandise</h4>
            </div>
            <div class="container overflow-x-auto scroll" style="white-space: nowrap;">
                <div >
                    @foreach ($merchandise as $item)
                    <div class="col-3 mb-1 mt-3 d-inline-block">
                        <div class="p-3 rounded" style="background: none;">
                            <img class="gambar border border-dark p-3 rounded shadow-lg" src="{{ asset('images/merch.png') }}" alt="merch1" style="width: 300px; height: 300px;">
                            <div>
                                <h5>{{ $item->name }}</h5>
                                <p>IDR {{ number_format($item->price, 0, ',') }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
