@extends('layouts.main')

@section('content')
         
<section class="section bg-grey">

    <div class="row justify-content-center  mt-5">
        <div class="col-lg-4 col-sm-10">
            <form action="{{ route('shares_order', $id) }}" method="POST" class="bg-green custom-form p-5">
                @csrf
                <div class="input-data">
                    <input type="text" class="" name="name" required>
                    <div class="underline"></div>
                    <label for="">{{ __('content.fullName')}}</label>
                </div>
                <div class="input-data">
                    <input type="text" class="" name="phone_number" required>
                    <div class="underline"></div>
                    <label for="">{{ __('content.phoneNumber')}}</label>
                </div>
                <div class="input-data">
                    <input type="text" class="" name="address" required>
                    <div class="underline"></div>
                    <label for="">{{ __('content.address')}}</label>
                </div>
                <div class="input-data">
                    <input type="email" class="" name="email" required>
                    <div class="underline"></div>
                    <label for="">{{ __('content.email')}}</label>
                </div>
                <div class="input-data">
                    <input type="number" name="num_of_taken_share" id="" class="" required>
                    <div class="underline"></div>
                    <label for="" class="text-capitalize">{{ __('content.numberOfShares')}}</label>

                </div>
                <input type="text" hidden name="session_id" value="{{$id}}">
                <button type="submit" class="btn btn-contact text-uppercase py-2"> {{ __('content.order')}}</button>

            </form>
        </div>
    </div>

</section>

@endsection

