@extends('layouts.default')
@section('content')
{{-- /*-------------------------------------------------------------*/
//////////////////////        Content       //////////////////////
/*-------------------------------------------------------------*/ --}}
<main role="main" class="site-main min-h-screen">
   <div class="wrapper ">
   <div class='lg:min-h-screen flex flex-wrap items-center relative div-1' data-section='hero' id="headers">
      <div class='container mx-auto px-4 lg:text-left text-center pb-0 pt-8 lg:py-32 block relative z-10 lg:z-0'>
         <div class='lg:w-1/2 w-full lg:pr-20'>
            <h1 class='h1 uppercase mb-4 lg:mb-10 font-alter'> {{ Lang::get('main.title1') }} </h1>
            <div class='h6 uppercase mb-8 lg:mb-10'>
            </div>
            <div>
               <a href='#gallery'
                  class='
                  rounded-full
                  overflow-hidden
                  inline-block
                  tracking-0_04em
                  text-32px
                  font-gotham-condensed
                  uppercase
                  leading-none
                  font-bold
                  whitespace-nowrap
                  button
                  border-2
                  '
                  data-id='' data-is-bundle=''>
               <span class='flex items-center w-full'>
               <span class='flex-auto pl-[24px] pr-[16px] font-alter'>{{ Lang::get('main.title1btn') }}
               </span>
               <span
                  class='flex items-center justify-center h-full p-6 icon-arrow-container rounded-full  bg-w'>
               <span class='wpx-30 inline-block color-b'>
               <i class="fas fa-arrow-right icon-arrow"></i>
               </span>
               </span>
               </span>
               </a>
            </div>
         </div>
      </div>
      <div class='w-full lg:w-5/12 lg:absolute lg:top-0 lg:right-0 lg:bottom-0 lg:mt-0 -mt-8 overflow-hidden'>
         <div class='pt-125p lg:pt-0 relative h-0 lg:h-full bgbgbg'>
            <img src='{{ asset('img/alsi/5.png') }}' class='image-fills ' id="reload" alt=''
            loading='lazy' width='646' height='896'
            data-index='orange soda,
            carbonated drinks,
            soda maker,
            مشروبات باردة غازية,
            مشروبات غازية خالية من السكر
            ' />
         </div>
         <div class='absolute bottom-250px -right-10px w-64 z-10 hidden lg:block'>
         </div>
      </div>
   </div>
   <div class='relative flex flex-col div-2'>
      <div class='absolute top-px left-0 right-0 transform -translate-y-full w-full'>
         <svg class='w-full svg-trans' viewBox="0 0 1440 92" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
               d="M721 28.3988C527.5 70.958 207 123.411 0 9.34447V92H1440V53.9669C1266.5 -14.911 902 -11.4111 721 28.3988Z"
               fill="#fff" />
         </svg>
      </div>
      <div class='overflow-hidden block flex-auto relative'>
         <div class='container mx-auto px-4 pt-80 lg:pt-40 pb-8'>
            <h2
               class=' 
               w-full
               lg:w-2/3
               mx-auto
               max-w-[838px]
               text-center
               h2
               color-blues
               uppercase font-alter
               '>
               {{ Lang::get('main.titlesec2') }} <br /> {{ Lang::get('main.titlesec21') }}
            </h2>
         </div>
         <div class='absolute inset-0 w-full h-full z-10 mx-auto max-w-screen-2xl'>
            <div
               class='absolute -right-10px top-80px lg:top-auto design:top-[350px] lg:bottom-90px design:bottom-auto lg:-left-20px z-10'>
               <div class='w-48 lg:w-87_5 text-center relative flex items-center justify-center opacity-png'>
                  <img src="{{ asset('img/alsi/cup.png') }}"
                     alt="lemon soda,
                     manufacturing industries,
                     soda can,
                     نكهات مشروبات غازية,
                     فيفا كولا
                     "
                     srcset="">
                  <div class='w-full pt-100p'>
                  </div>
               </div>
            </div>
            <div
               class='absolute -left-10px top-10px lg:left-auto lg:top-auto lg:bottom-90px lg:-right-20px z-10 '>
               <div class='w-48 lg:w-87_5 text-center relative flex items-center justify-center opacity-png'>
                  <img src="{{ asset('img/alsi/cola.png') }}"
                     alt=" manufacturing company, 
                     كولا زيرو كالوري,
                     كوكولا قزاز,
                     منتج جديد في السوق,
                     كرتون كولا زيرو
                     "
                     srcset="">
               </div>
            </div>
         </div>
         <div class='relative'>
            <div class='relative lg:w-225 w-142 left-1/2 transform -translate-x-1/2'>
               <div class='relative z-10'>
                  <img src='{{ asset('img/alsi/alsecola.png') }}' class=' '
                  alt='soft drinks list
                  مشروب غازي دايت,
                  كولا عائله,
                  شركة مشروبات غازية,
                  منتج غذائي جديد,
                  كولا بدون سكر
                  '
                  loading='lazy' width='900' height='450' data-index='' />
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class='py-16 pb-24 lg:py-24 relative div-3 text-center div-sec'>
      <div class='overflow-hidden text-center'>
         <div class='container mx-auto px-4 text-center d-flexes bgbgbb' style="padding:20px; z-index:1"
            data-vide-bg="mp4: ../img/h.mp4, poster: ../img/9.jpg"
            data-vide-options="posterType: jpg, loop: true, muted: true, position: 50% 50%">
         </div>
      </div>
      <div class='py-16 pb-24  relative div-3' data-section='product-carousel' id="our-history">
         <div class='overflow-hidden'>
            <div class='container mx-auto px-4'>
               <carousel-component data-id=''>
                  <div class='flex justify-center lg:justify-between w-full lg:mb-16 mb-10'>
                     <div class='lg:w-3/4'>
                        <h2 class='h2 uppercase lg:text-left text-center font-alter div-4'>
                          {{Lang::get('main.his2')}}
                        </h2>
                     </div>
                     <div class='lg:flex gap-3 hidden lg:items-end lg:w-1/4 justify-end'>
                        <div>
                           <button class='w-16 js-previous arrow rounded-full border-2'
                              aria-label='Navigate to previous card icon-arrow'>
                           <i class="fas fa-arrow-left icon-arrow"></i>
                           </button>
                        </div>
                        <div>
                           <button class='w-16 js-next arrow rounded-full border-2'
                              aria-label='Navigate to next card'>
                           <i class="fas fa-arrow-right icon-arrow"></i>
                           </button>
                        </div>
                     </div>
                  </div>
                  <!-- Slider main container -->
                  <div class="swiper pb-20">
                     <!-- Additional required wrapper -->
                     <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide relative div-swipper">
                           <div class='relative mr-2 w-slide' data-id="" data-is-bundle="0"
                              data-js-grassdoor-product>
                              <div class='absolute top-30px left-0 rounded-2xl has-shadow uppercase text-12px tracking-1px py-2 px-4 z-10 font-alter div-5'
                                 style="    display: none!important;">
                                 {{-- {{Lang::get('main.date6')}} --}}
                              </div>
                              <a href='#' class='w-full relative mb-6 pt-150p block card'>
                              <img src='{{ asset('img/alsi/5.png') }}'
                              class=' absolute inset-0 w-full h-full object-contain transition duration-300'
                              alt='manufacturing processes,
                              شركة العيسائي للتوزيع,
                              شراب غازي,
                              كولا دايت زيرو,
                              كولا صغير كرتون,
                              لايت كولا
                              '
                              loading='lazy' width='704' height='1024' data-index='' />
                              <img src='{{ asset('img/alsi/5.png') }}'
                              class=' absolute inset-0 w-full h-full object-contain transition duration-300 card-bg-hover'
                              alt='soda near me,
                              مشروب غازي ملون,
                              مشروبات غازية جديدة,
                              منتجات كولا,
                              مشروب الكولا,
                              مشروب غازي صودا
                              '
                              loading='lazy' width='704' height='1024' data-index='' />
                              </a>
                              <div class='text-center mb-6'>
                                 <div class='h4 uppercase mb-2 font-alter color-bluesss'>
                                    {{ Lang::get('main.date6') }}
                                 </div>
                                 <div class='h6 uppercase font-alter'>
                                    <span class="font-alter color-bluesss"
                                       data-js-grassdoor-product-price>250
                                    ml</span>
                                 </div>
                              </div>
                              <div class='flex justify-center' data-js-grassdoor-product-form>
                              </div>
                           </div>
                        </div>
                        <div class="swiper-slide relative div-swipper">
                           <div class='relative mr-2 w-slide' data-id="" data-is-bundle="0"
                              data-js-grassdoor-product>
                              <div class='absolute top-30px left-0 rounded-2xl has-shadow uppercase text-12px tracking-1px py-2 px-4 z-10 font-alter div-6'
                                 style="    display: none!important;">
                                 {{-- {{Lang::get('main.date5')}} --}}
                              </div>
                              <a href='#' class='w-full relative mb-6 pt-150p block card'>
                              <img src='{{ asset('img/alsi/6.png') }}'
                              class=' absolute inset-0 w-full h-full object-contain transition duration-300'
                              alt='cool drink,
                              types of soda
                              '
                              loading='lazy' width='704' height='1024' data-index='' />
                              <img src='{{ asset('img/alsi/6.png') }}'
                              class=' absolute inset-0 w-full h-full object-contain transition duration-300 card-bg-hover'
                              alt='diet cola,
                              manufacturing near me
                              '
                              loading='lazy' width='704' height='1024' data-index='' />
                              </a>
                              <div class='text-center mb-6'>
                                 <div class='h4 uppercase mb-2 font-alter color-blacks'>
                                    {{ Lang::get('main.date5') }}
                                 </div>
                                 <div class='h6 uppercase'>
                                    <span class="font-alter color-blacks"
                                       data-js-grassdoor-product-price>250
                                    ml</span>
                                 </div>
                              </div>
                              <div class='flex justify-center' data-js-grassdoor-product-form>
                              </div>
                           </div>
                        </div>
                        <div class="swiper-slide relative div-swipper">
                           <div class='relative mr-2 w-slide' data-id="" data-is-bundle="0"
                              data-js-grassdoor-product>
                              <div class='absolute top-30px left-0 rounded-2xl has-shadow uppercase text-12px tracking-1px py-2 px-4 z-10 font-alter div-7'
                                 style="    display: none!important;">
                                 {{-- {{Lang::get('main.date4')}} --}}
                              </div>
                              <a href='#' class='w-full relative mb-6 pt-150p block card'>
                              <img src='{{ asset('img/alsi/4.png') }}'
                              class=' absolute inset-0 w-full h-full object-contain transition duration-300'
                              alt='best soda,
                              industrial product
                              '
                              loading='lazy' width='704' height='1024' data-index='' />
                              <img src='{{ asset('img/alsi/4.png') }}'
                              class=' absolute inset-0 w-full h-full object-contain transition duration-300 card-bg-hover'
                              alt='soda flavors,
                              cola bottle
                              '
                              loading='lazy' width='704' height='1024' data-index='' />
                              </a>
                              <div class='text-center mb-6'>
                                 <div class='h4 uppercase mb-2 font-alter color-reds'>
                                    {{ Lang::get('main.date4') }}
                                 </div>
                                 <div class='h6 uppercase'>
                                    <span class="font-alter color-reds"
                                       data-js-grassdoor-product-price>250
                                    ml</span>
                                 </div>
                              </div>
                              <div class='flex justify-center' data-js-grassdoor-product-form>
                              </div>
                           </div>
                        </div>
                        <div class="swiper-slide relative div-swipper">
                           <div class='relative mr-2 w-slide' data-id="" data-is-bundle="0"
                              data-js-grassdoor-product>
                              <div class='absolute top-30px left-0 rounded-2xl has-shadow uppercase text-12px tracking-1px py-2 px-4 z-10 font-alter div-8'
                                 style="    display: none!important;">
                                 {{-- {{Lang::get('main.date3')}} --}}
                              </div>
                              <a href='#' class='w-full relative mb-6 pt-150p block card'>
                              <img src='{{ asset('img/alsi/3.png') }}'
                              class=' absolute inset-0 w-full h-full object-contain transition duration-300'
                              alt='carbonated soda,
                              cola drink
                              '
                              loading='lazy' width='704' height='1024' data-index='' />
                              <img src='{{ asset('img/alsi/3.png') }}'
                              class=' absolute inset-0 w-full h-full object-contain transition duration-300 card-bg-hover'
                              alt='cold drink can,
                              best soft drinks
                              '
                              loading='lazy' width='704' height='1024' data-index='' />
                              </a>
                              <div class='text-center mb-6'>
                                 <div class='h4 uppercase mb-2 font-alter color-beige'>
                                    {{ Lang::get('main.date3') }}
                                 </div>
                                 <div class='h6 uppercase'>
                                    <span class="font-alter color-beige"
                                       data-js-grassdoor-product-price>250
                                    ml</span>
                                 </div>
                              </div>
                              <div class='flex justify-center' data-js-grassdoor-product-form>
                              </div>
                           </div>
                        </div>
                        <div class="swiper-slide relative div-swipper">
                           <div class='relative mr-2 w-slide' data-id="" data-is-bundle="1"
                              data-js-grassdoor-product>
                              <div class='absolute top-30px left-0 rounded-2xl has-shadow uppercase text-12px tracking-1px py-2 px-4 z-10 font-alter div-9'
                                 style="    display: none!important;">
                                 {{-- {{Lang::get('main.date2')}} --}}
                              </div>
                              <a href='#' class='w-full relative mb-6 pt-150p block card'>
                              <img src='{{ asset('img/alsi/2.png') }}'
                              class=' absolute inset-0 w-full h-full object-contain transition duration-300'
                              alt='black soft drink,
                              cola flavor
                              '
                              loading='lazy' width='704' height='1024' data-index='' />
                              <img src='{{ asset('img/alsi/2.png') }}'
                              class=' absolute inset-0 w-full h-full object-contain transition duration-300 card-bg-hover'
                              alt='soft drink cans,
                              soft drink companies
                              '
                              loading='lazy' width='704' height='1024' data-index='' />
                              </a>
                              <div class='text-center mb-6'>
                                 <div class='h4 uppercase mb-2 font-alter color-greys'>
                                    {{ Lang::get('main.date2') }}
                                 </div>
                                 <div class='h6 uppercase'>
                                    <span class="font-alter color-greys"
                                       data-js-grassdoor-product-price>250
                                    ml</span>
                                 </div>
                              </div>
                              <div class='flex justify-center' data-js-grassdoor-product-form>
                              </div>
                           </div>
                        </div>
                        <div class="swiper-slide relative div-swipper">
                           <div class='relative mr-2 w-slide' data-id="" data-is-bundle=""
                              data-js-grassdoor-product>
                              <div class='absolute top-30px left-0 rounded-2xl has-shadow uppercase text-12px tracking-1px py-2 px-4 z-10 font-alter div-10'
                                 style="    display: none!important;">
                                 {{-- {{Lang::get('main.date1')}} --}}
                              </div>
                              <a href='#' class='w-full relative mb-6 pt-150p block card'>
                              <img src='{{ asset('img/alsi/1.png') }}'
                              class=' absolute inset-0 w-full h-full object-contain transition duration-300'
                              alt='soft beverages,
                              soft drink bottle
                              '
                              loading='lazy' width='734' height='1068' data-index='' />
                              <img src='{{ asset('img/alsi/1.png') }}'
                              class=' absolute inset-0 w-full h-full object-contain transition duration-300 card-bg-hover'
                              alt='top 10 soft drink companies 2020,
                              best soda to drink
                              '
                              loading='lazy' width='704' height='1024' data-index='' />
                              </a>
                              <div class='text-center mb-6'>
                                 <div class='h4 uppercase mb-2 font-alter color-bluess'>
                                    {{ Lang::get('main.date1') }}
                                 </div>
                                 <div class='h6 uppercase'>
                                    <span class="font-alter color-bluess"
                                       data-js-grassdoor-product-price>250
                                    ml</span>
                                 </div>
                              </div>
                              <div class='flex justify-center' data-js-grassdoor-product-form>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-pagination lg:hidden"></div>
                  </div>
               </carousel-component>
            </div>
         </div>
      </div>
      <div class='
         relative
          
         pb-24
       
         lg:pb-8
         z-[5]
         div-11'
         data-section='quotes'>
         <div class='absolute top-px left-0 right-0 transform -translate-y-full'>
            <div class='absolute top-px left-0 right-0 transform -translate-y-full w-full'>
               <svg id="wave" style="transform:rotate(0deg); transition: 0.3s" viewBox="0 0 1440 140" version="1.1" xmlns="http://www.w3.org/2000/svg">
                  <defs>
                     <linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0">
                        <stop stop-color="rgba(152, 15, 15, 1)" offset="0%"></stop>
                        <stop stop-color="rgba(152, 15, 15, 1)" offset="100%"></stop>
                     </linearGradient>
                  </defs>
                  <path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,56L60,67.7C120,79,240,103,360,114.3C480,126,600,126,720,105C840,84,960,42,1080,35C1200,28,1320,56,1440,77C1560,98,1680,112,1800,102.7C1920,93,2040,61,2160,49C2280,37,2400,47,2520,60.7C2640,75,2760,93,2880,100.3C3000,107,3120,103,3240,95.7C3360,89,3480,79,3600,65.3C3720,51,3840,33,3960,35C4080,37,4200,61,4320,72.3C4440,84,4560,84,4680,81.7C4800,79,4920,75,5040,77C5160,79,5280,89,5400,98C5520,107,5640,117,5760,112C5880,107,6000,89,6120,84C6240,79,6360,89,6480,93.3C6600,98,6720,98,6840,84C6960,70,7080,42,7200,32.7C7320,23,7440,33,7560,44.3C7680,56,7800,70,7920,81.7C8040,93,8160,103,8280,105C8400,107,8520,103,8580,100.3L8640,98L8640,140L8580,140C8520,140,8400,140,8280,140C8160,140,8040,140,7920,140C7800,140,7680,140,7560,140C7440,140,7320,140,7200,140C7080,140,6960,140,6840,140C6720,140,6600,140,6480,140C6360,140,6240,140,6120,140C6000,140,5880,140,5760,140C5640,140,5520,140,5400,140C5280,140,5160,140,5040,140C4920,140,4800,140,4680,140C4560,140,4440,140,4320,140C4200,140,4080,140,3960,140C3840,140,3720,140,3600,140C3480,140,3360,140,3240,140C3120,140,3000,140,2880,140C2760,140,2640,140,2520,140C2400,140,2280,140,2160,140C2040,140,1920,140,1800,140C1680,140,1560,140,1440,140C1320,140,1200,140,1080,140C960,140,840,140,720,140C600,140,480,140,360,140C240,140,120,140,60,140L0,140Z"></path>
               </svg>
            </div>
            {{-- <i class="fas fa-arrow-left icon-arrow"></i> --}}
         </div>
         <div class='
            absolute
            top-1/2
            transform
            -translate-y-1/2
           
            hidden
            lg:block
            w-[441px]
            h-[565px]
            'style="    right: 34px;"
            id="about-us">
            <img src='{{ asset('img/alsi/ice1.png') }}'
            class=' object-center object-cover block w-full h-full'
            alt='top 10 soft drink companies,
            top selling soft drinks 2019
            '
            loading='lazy' width='441' height='565' data-index='' />
         </div>
      </div>
      <div class='    relative div-12' data-section='split'>
         <div class='absolute -left-40px top-1/2 lg:w-28'>
            <div class='w-full pt-100p'>
               {{-- <img src="{{ asset('img/alsi/music.png') }}"
                  alt="best selling soda,
                  all soft drinks
                  "> --}}
            </div>
         </div>
         <div class='container mx-auto px-4 relative z-20'>
            <div class='lg:w-7/12 w-full lg:text-left text-center relative'>
               <div class='absolute right-30px bottom-0 w-12 lg:w-16'>
                  <div class='w-full pt-100p'>
                     {{-- <img src="{{ asset('img/alsi/music.png') }}"
                        alt="top soft drinks,
                        best selling soft drinks
                        "> --}}
                  </div>
               </div>
               <div class='absolute right-80px bottom-80px w-6'>
                  <div class='w-full pt-100p'>
                     {{-- <img src="{{ asset('img/alsi/music.png') }}"
                        alt="saudi arabia products,
                        a soft drink,
                        cola soft drink
                        "> --}}
                  </div>
               </div>
               <div
                  class='
                  uppercase
                  pb-[38px]
                  lg:pb-16
                  ' style="
                  text-align: center;
                  ">
                  {{-- 
                  <h3 class='h1 mb-6 lg:mb-10 font-alter'>IT’S ALSI COLA<br />WITHOUT<br /> Suger</h3>
                  --}}
                  <h3 class='h1 font-alter'> {{ Lang::get('main.abouttitle') }} <br /> <br /> </h3>
                  <div
                     class='
                     h6
                     mx-auto
                     lg:ml-0
                     w-full
                     max-w-[260px]
                     lg:max-w-[288px]
                     '>
                  </div>
                  <div class="d-flex">
                     <p class="font-alter lg:mb-10  font-about bg-abouts">
                        {{ Lang::get('main.about1') }}
                     </p>
                     <p class="font-alter lg:mb-10  font-about bg-abouts">
                        {{ Lang::get('main.about2') }}
                     </p>
                     <p class="font-alter lg:mb-10  font-about bg-abouts">
                        {{ Lang::get('main.about3') }}
                     </p>
                     <p class="font-alter lg:mb-10  font-about bg-abouts">
                        {{ Lang::get('main.about4') }}
                     </p>
                  </div>
                  <div
                     class='
                     relative
                     bottom-[-68px]
                     lg:bottom-0
                     lg:mt-[64px]
                     h-[62px]
                     '>
                     <a href='tel:00966126610010'
                        class='
                        rounded-full
                        overflow-hidden
                        inline-block
                        tracking-0_04em
                        text-32px
                        font-gotham-condensed
                        uppercase
                        leading-none
                        font-bold
                        whitespace-nowrap
                        button
                        border-2
                        '
                        data-id='' data-is-bundle=''>
                     <span class='flex items-center w-full hover-call'>
                     <span
                        class='flex items-center justify-center h-full p-6 icon-arrow-container rounded-full font-alter'>
                     {{ Lang::get('main.callus') }}
                     </span>
                     </span>
                     </a>
                  </div>
               </div>
            </div>
         </div>
         <div class='lg:w-5/12 lg:absolute lg:right-0 lg:top-0 lg:bottom-0 w-full pt-100p lg:pt-0 relative'>
            <img src='{{ asset('img/gifme.gif') }}' class='image-fill '
            alt='top soft drink companies,
            premium soft drinks,
            best soft drink in the world
            '
            loading='lazy' width='120' height='160' data-index='' />
         </div>
      </div>
      <div class='mtt-mbb relative div-div1' data-section='product-carousel' id="gallery">
         <div class='overflow-hidden'>
            <div class='container mx-auto px-4'>
               <carousel-component data-id=''>
                  <div class='flex justify-center lg:justify-between w-full lg:mb-16 mb-10'>
                     <div class='lg:w-3/4'>
                        <h2 class='h2 uppercase lg:text-left text-center font-alter div-div2'>
                           {{ Lang::get('main.intouch1') }}
                        </h2>
                        <h6 class="uppercase lg:text-left text-center font-alter div-div2"
                           style="font-size:40px;">
                           {{ Lang::get('main.intouch2') }}
                        </h6>
                     </div>
                     <div class='lg:flex gap-3 hidden lg:items-end lg:w-1/4 justify-end'>
                        <div>
                           <button class='w-16 js-previous arrow rounded-full border-2 '
                              aria-label='Navigate to previous card' data-id=''>
                           <i class="fas fa-arrow-left icon-arrow"></i>
                           </button>
                        </div>
                        <div>
                           <button class='w-16 js-next arrow rounded-full border-2 '
                              aria-label='Navigate to next card' data-id=''>
                           <i class="fas fa-arrow-right icon-arrow"></i>
                           </button>
                        </div>
                     </div>
                  </div>
                  <!-- Slider main container -->
                  <div class="swiper ">
                     <!-- Additional required wrapper -->
                     <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide relative div-div2">
                           <div class='relative mr-2 ' data-id="" data-is-bundle="1"
                              data-js-grassdoor-product>
                              <a href='#' class='w-full relative mb-6 pt-150p block card'>
                              <img src='{{ asset('img/alsipost1.jpg') }}'
                              class=' absolute inset-0 w-full h-full object-contain transition duration-300'
                              alt='best cold drink in the world,
                              top 10 soft drinks,
                              cold drink manufacturer
                              '
                              loading='lazy' width='735' height='1068' data-index='' />
                              <img src='{{ asset('img/alsipost9.jpg') }}'
                              class=' absolute inset-0 w-full h-full object-contain transition duration-300 card-bg-hover'
                              alt='top 10 most carbonated sodas,
                              drink soft,
                              soft drink manufacturers near me
                              '
                              loading='lazy' width='734' height='1068' data-index='' />
                              </a>
                           </div>
                        </div>
                        <div class="swiper-slide relative div-div2">
                           <div class='relative mr-2 ' data-id="" data-is-bundle=""
                              data-js-grassdoor-product>
                              <a href='#' class='w-full relative mb-6 pt-150p block card'>
                              <img src='{{ asset('img/alsipost7.jpg') }}'
                              class=' absolute inset-0 w-full h-full object-contain transition duration-300'
                              alt='made in saudi arabia products,
                              zero calorie cola,
                              wholesale suppliers of soft drinks
                              '
                              loading='lazy' width='734' height='1067' data-index='' />
                              <img src='{{ asset('img/alsipost8.jpg') }}'
                              class=' absolute inset-0 w-full h-full object-contain transition duration-300 card-bg-hover'
                              alt='soft drink production,
                              cold drink suppliers,
                              drinks manufacturing
                              '
                              loading='lazy' width='734' height='1067' data-index='' />
                              </a>
                           </div>
                        </div>
                        <div class="swiper-slide relative div-div2">
                           <div class='relative mr-2 ' data-id="" data-is-bundle=""
                              data-js-grassdoor-product>
                              <a href='#' class='w-full relative mb-6 pt-150p block card'>
                              <img src='{{ asset('img/alsipost3.jpg') }}'
                              class=' absolute inset-0 w-full h-full object-contain transition duration-300'
                              alt='soft drink manufacturing company ,
                              cola zero online,
                              alsicola
                              '
                              loading='lazy' width='734' height='1067' data-index='' />
                              <img src='{{ asset('img/alsipost2.jpg') }}'
                              class=' absolute inset-0 w-full h-full object-contain transition duration-300 card-bg-hover'
                              alt='السي كولا,
                              كولا,
                              مشروبات غازية,
                              مشروب غازي
                              '
                              loading='lazy' width='734' height='1068' data-index='' />
                              </a>
                           </div>
                        </div>
                        <div class="swiper-slide relative div-div2">
                           <div class='relative mr-2 ' data-id="" data-is-bundle="0"
                              data-js-grassdoor-product>
                              <a href='#' class='w-full relative mb-6 pt-150p block card'>
                              <img src='{{ asset('img/alsipost4.jpg') }}'
                              class=' absolute inset-0 w-full h-full object-contain transition duration-300'
                              alt='منتج سعودي,
                              العيسائي للتوزيع,
                              منتج,
                              كولا زيرو,
                              كولا لايت
                              '
                              loading='lazy' width='735' height='1067' data-index='' />
                              <img src='{{ asset('img/alsi.jpg') }}'
                              class=' absolute inset-0 w-full h-full object-contain transition duration-300 card-bg-hover'
                              alt='صور كولا,
                              ماهي المنتجات,
                              شركة البيبسي,
                              فكرة إعلان عن منتج,
                              فوائد الكولا,
                              كولا زيرو صغير
                              '
                              loading='lazy' width='735' height='1068' data-index='' />
                              </a>
                           </div>
                        </div>
                        <div class="swiper-slide relative div-div2">
                           <div class='relative mr-2 ' data-id="" data-is-bundle="1"
                              data-js-grassdoor-product>
                              <a href='#' class='w-full relative mb-6 pt-150p block card'>
                              <img src='{{ asset('img/alsipost5.jpg') }}'
                              class=' absolute inset-0 w-full h-full object-contain transition duration-300'
                              alt='أفضل مشروب غازي صحي,
                              مشروبات غازية بنكهات,
                              كولا كانز,
                              زيرو كولا,
                              منتج جديد
                              '
                              loading='lazy' width='735' height='1068' data-index='' />
                              <img src='{{ asset('img/l1.jpg') }}'
                              class=' absolute inset-0 w-full h-full object-contain transition duration-300 card-bg-hover'
                              alt='أسعار المشروبات الغازية بالجملة,
                              مشروبات غازية بالجملة,
                              صور مشروبات غازية,
                              سعر كرتون الكولا الصغير,
                              كرتون كولا صغير
                              '
                              loading='lazy' width='734' height='1068' data-index='' />
                              </a>
                           </div>
                        </div>
                        <div class="swiper-slide relative div-div2">
                           <div class='relative mr-2 ' data-id="" data-is-bundle="1"
                              data-js-grassdoor-product>
                              <a href="#" class='w-full relative mb-6 pt-150p block card'>
                              <img src='{{ asset('img/alsipost6.jpg') }}'
                              class=' absolute inset-0 w-full h-full object-contain transition duration-300'
                              alt='انواع الكولا,
                              مشروب كولا,
                              إعلان عن منتج سعودي,
                              مشروب غازي صحي,
                              كولا عائلي,
                              ديو مشروب غازي
                              '
                              loading='lazy' width='735' height='1068' data-index='' />
                              <img src='{{ asset('img/s3.jpg') }}'
                              class=' absolute inset-0 w-full h-full object-contain transition duration-300 card-bg-hover'
                              alt='افضل مشروب غازي,
                              كولا بارد,
                              مشروبات غازية دايت,
                              نكهة الكولا,
                              كولا زيرو للدايت
                              '
                              loading='lazy' width='734' height='1068' data-index='' />
                              </a>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-pagination lg:hidden"></div>
                  </div>
               </carousel-component>
            </div>
         </div>
      </div>
      <div id="contact-us"></div>
      <div class='relative div-3 text-center '>
         <div class='overflow-hidden text-center'>
            <div class='container mx-auto px-4 text-center d-flexes'>
               <h2
                  class=' 
                  w-full
                  lg:w-2/3
                  mx-auto
                  max-w-[838px]
                  text-center
                  h2
                  color-blues
                  uppercase font-alter
                  '>
                  {{ Lang::get('main.contacttitle') }}
               </h2>
            </div>
            <div class='container mx-auto px-4 mtt-4 pb-8'>
               <div>
                  <div class="text-center text-flex-alert">
                     @if (session()->has('success'))
                     <div class="alert alert-success font-alter" role="alert">
                        {{ session('success') }}
                     </div>
                  </div>
                  @endif
                  <form action="{{ route('ContactRequest') }}" method="post">
                     @csrf
                     <div class="d-flexess">
                        <div class="mb-3 center-flex">
                           <!-- <label for="" class=" label-input font-alter">Full Name</label> -->
                           <input type="text" class="ml-2 input-groups font-alter" name="name"
                              id="name" placeholder="{{ Lang::get('main.cname') }} ">
                           @error('name')
                           <div class="text-danger alert-input">
                              {{ $message }}
                           </div>
                           @enderror
                        </div>
                        <div class="mb-3 center-flex">
                           <!-- <label for="" class=" label-input font-alter">Email Address</label> -->
                           <input type="email" class="ml-2 input-groups font-alter" name="email"
                              id="email" placeholder="{{ Lang::get('main.cmail') }}">
                           @error('email')
                           <div class="text-danger alert-input">
                              {{ $message }}
                           </div>
                           @enderror
                        </div>
                     </div>
                     <div class="d-flexess">
                        <div class="mb-3 center-flex">
                           <!-- <label for="" class=" label-input font-alter">Phone Number</label> -->
                           <input type="text" class="ml-2 input-groups font-alter" name="phone"
                              id="phone" placeholder="{{ Lang::get('main.cphone') }}">
                           @error('phone')
                           <div class="text-danger alert-input">
                              {{ $message }}
                           </div>
                           @enderror
                        </div>
                        <div class="mb-3 center-flex">
                           <!-- <label for="" class=" label-input font-alter">Your Subject</label> -->
                           <input type="text" class="ml-2 input-groups font-alter" name="subject"
                              id="subject" placeholder="{{ Lang::get('main.csubject') }}">
                           @error('subject')
                           <div class="text-danger alert-input">
                              ( {{ $message }} )
                           </div>
                           @enderror
                        </div>
                     </div>
                     <div class="mb-3 center-flex">
                        <!-- <label for="" class="label-input font-alter">Your Message</label> -->
                        <textarea class="input-groupss font-alter" name="message" id="message" rows="3"
                           placeholder="{{ Lang::get('main.cmessage') }}"></textarea>
                        @error('message')
                        <div class="text-danger alert-input">
                           {{ $message }}
                        </div>
                        @enderror
                     </div>
                     <div class="mb-3 center-flex">
                        <div class="g-recaptcha" data-sitekey="6LfzfawgAAAAAN1zYzuQC5zFeUWwslR9KaoksoGW">
                        </div>
                        @error('g-recaptcha-response')
                        <div class="text-danger alert-input">
                           {{ $message }}
                        </div>
                        @enderror
                     </div>
                     <div class="mb-3 d-flexess">
                        <button class="font-alter btn-sub" id="success" type="submit">
                        {{ Lang::get('main.sendmessage') }}
                        </button>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</main>
@stop