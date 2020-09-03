@extends('layouts.main')

@section('content')
         
<section class="section bg-grey">

    <div class="row justify-content-center  mt-5">
        <div class="col-lg-4 col-sm-10">
            <form action="#" class="bg-green custom-form p-5">
                <div class="input-data">
                    <input type="text" class="" required>
                    <div class="underline"></div>
                    <label for="">full name</label>
                </div>
                <div class="input-data">
                    <input type="text" class="" required>
                    <div class="underline"></div>
                    <label for="">full name</label>
                </div>
                <div class="input-data">
                    <input type="text" class="" required>
                    <div class="underline"></div>
                    <label for="">full name</label>
                </div>
                <div class="input-data">
                    <input type="email" class="" required>
                    <div class="underline"></div>
                    <label for="">full name</label>
                </div>
                <div class="input-data">
                    {{-- <label for="" class="text-capitalize text-white">Number of Shares</label> --}}
                    <input type="number" name="" id="" class="" required>
                    <div class="underline"></div>
                    <label for="" class="text-capitalize">Number of Shares</label>

                </div>
                <button type="submit" class="btn btn-contact text-uppercase py-2"> {{ __('content.order')}}</button>

            </form>
        </div>
    </div>

</section>

@endsection

