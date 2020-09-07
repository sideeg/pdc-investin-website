@extends('layouts.main')

@section('content')
         
<section class="section bg-grey">

    <div class="row justify-content-center  mt-5">
        <div class="col-lg-4 col-sm-10">
            <form action="#" method="POST" class="bg-green custom-form p-5">
                @csrf
                <div class="input-data">
                    <input type="text" class="" required>
                    <div class="underline"></div>
                    <label for="">{{ __('content.fullName')}}</label>
                </div>
                <div class="input-data">
                    <input type="text" class="" required>
                    <div class="underline"></div>
                    <label for="">{{ __('content.phoneNumber')}}</label>
                </div>
                <div class="input-data">
                    <input type="text" class="" required>
                    <div class="underline"></div>
                    <label for="">{{ __('content.address')}}</label>
                </div>
                <div class="input-data">
                    <input type="email" class="" required>
                    <div class="underline"></div>
                    <label for="">{{ __('content.email')}}</label>
                </div>
                <div class="input-data">
                    {{-- <label for="" class="text-capitalize text-white">Number of Shares</label> --}}
                    <input type="number" name="" id="" class="" required>
                    <div class="underline"></div>
                    <label for="" class="text-capitalize">{{ __('content.numberOfShares')}}</label>

                </div>
                <button type="submit" class="btn btn-contact text-uppercase py-2"> {{ __('content.order')}}</button>

            </form>
        </div>
    </div>

</section>

@endsection

