<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Material Compact Login Animation</title>


    <link rel='stylesheet prefetch' href='{{asset('http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css')}}'>
    <link rel='stylesheet prefetch' href='{{asset('http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900&subset=latin,latin-ext')}}'>

    <link rel="stylesheet" href="{{asset('assets/login/css/style.css')}}">


</head>

<body>
<div class="materialContainer">


    <div class="box">

        <div class="title">Бронировать</div>
        <form action="{{route('booking.store')}}"method="POST">
            @csrf


            <div class="input">
                <label for="guests">Количество гостей:</label>
                <input type="number" class="form-control @error('guests') is-invalid @enderror" id="guests" name="guests" value="{{ old('guests') }}" required>
                @error('guests')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror

            </div>

            <div class="input"><br>
                <label for="start_time">Начало:</label>
                <input type="datetime-local" class="form-control @error('start_time') is-invalid @enderror" id="start_time" name="start_time" value="{{ old('start_time') }}">
                @error('start_time')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror

            </div>
        <br>
        <div class="input"><br>
            <label for="end_time">Конец:</label>
            <input type="datetime-local" class="form-control @error('end_time') is-invalid @enderror" id="end_time" name="end_time" value="{{ old('end_time') }}" >
            @error('end_time')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

         <div class="input">
            <label for="pass">E-mail:</label>
            <input type="email" name="email" id="pass">
            <span class="spin"></span>
         </div>

        <div class="button login">
            <button><span>GO</span> <i class="fa fa-check"></i></button>
        </div>

        <a href="" class="pass-forgot">Forgot your password?</a>

    </div>

    <div class="overbox">
        <div class="material-button alt-2"><span class="shape"></span></div>

        <div class="title">REGISTER</div>

        <div class="input">
            <label for="regname">Имя:</label>
            <input type="text" name="username" id="regname">
            <span class="spin"></span>
        </div>


        <div class="input">
            <label for="phone">Телефон:</label>
            <input type="number" name="phone" id="phone">
            <span class="spin"></span>
        </div>

        <div class="button">
            <button><span>NEXT</span></button>
        </div>
        </form>

    </div>

</div>
<script src='{{asset('http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js')}}'></script>

<script src="{{asset('assets/login/js/index.js')}}"></script>

</body>
</html>
