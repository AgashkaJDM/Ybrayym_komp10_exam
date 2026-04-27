@extends('layouts.head')

@section('main-content')
    <div class="container-lg">
        <div class="h3 mt-3">
            New Restaurants
        </div>
        <div class="row row-cols-4">
            <div class="col ">
                <div class="border bg-white border-1  border-blac shadow-sm p-">
                    <a href="/authors"><div><img src="{{ asset('img/BLKC.png')}}" class="w-100" height="220" alt=""></div></a>
                    
                    <div class="h5 p-3" style="line-height: 28px">BALYKCY
                    </div>
                </div>
            </div>
            <div class="col ">
                <div class="border bg-white border-1 rounded- border-blac shadow-sm p-">
                    <a href="/authors"><div><img src="{{ asset('img/HRMA.png')}}" class="w-100" height="220" alt=""></div></a>
                    
                    <div class="h5 p-3" style="line-height: 28px">HURMA KAFE
                    </div>
                </div>
            </div>
            <div class="col ">
                <div class="border bg-white border-1 rounded- border-blac shadow-sm p-">
                    <a href="/authors"><div><img src="{{ asset('img/HZZT.png')}}" class="w-100" height="220" alt=""></div></a>
                    
                    <div class="h5 p-3" style="line-height: 28px">HEZZET
                    </div>
                </div>
            </div>
            <div class="col ">
                <div class="border bg-white border-1 rounded- border-blac shadow-sm p-">
                    <a href="/authors"><div><img src="{{ asset('img/KBPC.png')}}" class="w-100" height="220" alt=""></div></a>
                    
                    <div class="h5 p-3" style="line-height: 28px">KEBAPCY
                    </div>
                </div>
            </div>
        </div>
        <div class="h3 mt-5 text-warning">
            VIP Restaurants
        </div>
        <div class="row row-cols-4 mb-3">
            <div class="col ">
                <div class="border bg-white border-1  border-blac shadow-sm p-">
                    <a href="/authors"><div><img src="{{ asset('img/KDKD.png')}}" class="w-100" height="220" alt=""></div></a>
                    
                    <div class="h5 p-3" style="line-height: 28px">KUKIRI KUUH
                    </div>
                </div>
            </div>
            <div class="col ">
                <div class="border bg-white border-1 rounded- border-blac shadow-sm p-">
                    <a href="/authors"><div><img src="{{ asset('img/KMPR.png')}}" class="w-100" height="220" alt=""></div></a>
                    
                    <div class="h5 p-3" style="line-height: 28px">KATMER PREMIUM
                    </div>
                </div>
            </div>
            <div class="col ">
                <div class="border bg-white border-1 rounded- border-blac shadow-sm p-">
                    <a href="/authors"><div><img src="{{ asset('img/SHAK.png')}}" class="w-100" height="220" alt=""></div></a>
                    
                    <div class="h5 p-3" style="line-height: 28px">SHA KOFE
                    </div>
                </div>
            </div>
            <div class="col ">
                <div class="border bg-white border-1 rounded- border-blac shadow-sm p-">
                    <a href="/authors"><div><img src="{{ asset('img/TORA.png')}}" class="w-100" height="220" alt=""></div></a>
                    
                    <div class="h5 p-3" style="line-height: 28px">TOR
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection