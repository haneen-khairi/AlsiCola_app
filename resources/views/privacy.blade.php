@extends('layouts.default')
@section('content')



<main role="main" class="site-main min-h-screen">
    <div class="wrapper ">

        <div class='lg:min-h-screen flex flex-wrap items-center relative privacy-bg' data-section='hero' id="headers">
            <div class='container mx-auto px-4 lg:text-left text-center pb-0 pt-8 lg:py-32 block relative z-10 lg:z-0'>
                <div class='lg:w-1/2 w-full lg:pr-20'>
                    <h1 class='h1 uppercase mb-4 lg:mb-10 font-alter'>{{Lang::get('main.footerprivacy')}}</h1>
                    <div class='h4 uppercase mb-8 lg:mb-10 font-alter' style=" text-align: justify;     font-size: 20px!important;">

                        {{Lang::get('main.privacy1')}}
              
                    </div>
                </div>
            </div>
        </div>
        <div class='w-full lg:w-5/12 lg:absolute lg:top-0 lg:right-0 lg:bottom-0 lg:mt-0 -mt-8 overflow-hidden'>
            <div class='pt-125p lg:pt-0 relative h-0 lg:h-full bgbgbbs'>
                <img src='{{ asset('img/alsi/alsi.png') }}' class='image-fill-privacy' alt='' loading='lazy'
                    width='646' height='896' data-index='' />
            </div>
            <div class='absolute bottom-250px -right-10px w-64 z-10 hidden lg:block'>
            </div>
        </div>
    </div>
</main>



@stop