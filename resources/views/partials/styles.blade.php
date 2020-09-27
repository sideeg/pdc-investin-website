<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="Shreethemes">

<link rel="shortcut icon" href="images/fav-ico.png">

<title>Investin</title>

<!-- Google Fonts -->
{{-- <link href="https://fonts.googleapis.com/css?family=Lato:400,500,600,700|Poppins" rel="stylesheet"> --}}
<link href="https://fonts.googleapis.com/css?family=Nunito:200,400,600" rel="stylesheet">

{{-- <link href="https://fonts.googleapis.com/css2?family=Baloo+Tamma+2:wght@400;500;600&display=swap" rel="stylesheet"> --}}
<link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300;400;500;700;800&display=swap" rel="stylesheet">
<!-- Magnificpopup Css -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/magnific-popup.css') }}">

<!-- Bootstrap core CSS -->
<link href="{{ asset('css/materialdesignicons.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/fontawesome.css') }}" rel="stylesheet">
<link href="{{ asset('css/pe-icon-7-stroke.css') }}" rel="stylesheet">
<!--Slider-->
<link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}"/> 
<link rel="stylesheet" href="{{ asset('css/owl.theme.css') }}"/> 
<link rel="stylesheet" href="{{ asset('css/owl.transitions.css') }}"/>
<link rel="stylesheet" href="{{ asset('css/slick.css') }}"/> 
<link rel="stylesheet" href="{{ asset('css/slick-theme.css') }}"/> 

<!-- Custom styles for this template -->
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
{{-- <link href="{{ asset('css/menu.css') }}" rel="stylesheet"> --}}
<link href="{{ asset('css/menu-small.css') }}" rel="stylesheet">

<link href="{{ asset('css/default.css') }}" rel="stylesheet">
<!-- Bootstrap core CSS -->
@if(App::getLocale() == 'en')
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
@else
    <link href="{{ asset('css/bootstrap-rtl.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom-rtl.css') }}" rel="stylesheet">

@endif

<style>

    @if (App::getLocale() == 'en')
        body {
            font-family: 'Nunito' ,'Lato';
            font-weight: 400;

        }
    @else
        body {
            font-family: 'Tajawal', sans-serif;;
            font-weight: 400;

        }
    @endif
     
     .showmore-button, .showmore-button:link,.showmore-button:visited {
        text-transform: capitalize;
        text-decoration: none;
        font-weight: 400;
        /* text-align: center; */
        white-space: nowrap;
        vertical-align: middle;
        padding: .375rem .75rem;
        font-size: 1rem;
        line-height: 1.5;
        color: #009F61;
        /* padding: 5px 15px; */
        border: 1px solid #009F61;
        border-radius: 100px;
        width: fit-content;
        display: inline-block;
        transition: .6s all;
        
    }

    .showmore-button:hover {
        color: #fff;
        border: 1px solid #fff;
        border-radius: 100px;
        background: #00B489;
    }
    .form-control, .form-control:focus {
        background: #00B489;
    }
</style>
