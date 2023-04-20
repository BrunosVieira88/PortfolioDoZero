<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <title>{{$title}}</title>
    <link rel="stylesheet" href="{{asset('site/bootstrap.css')}}">
</head>
<body>
    <x-navbar></x-navbar>
        <span style="background-image:url('img/back.jpeg');

        background-position: center;width:33%;position: fixed;height: 100%;top: 3.5rem;color:white;">
            <div class="container">
                <h1 class="text-center mt-2">Bruno Santos Vieira</h1>
                <div class="d-flex justify-content-center">
                    <img src="img/bruno.jpeg" class="img-fluid mt-5" style="border-radius: 50%;width:12rem;height:12rem;box-shadow: 2px 3px 4px black;" alt="">
                </div>
                <div class="text-center mt-5">
                    Bem vindo ao meu portfolio aqui vou apresentar um pouco sobre mim e meu trabalho
                </div>
            </div>
        </span>
        <span style="width:66%;float:right;">
            {{$slot}}
        </span>
</body>
</html>
<script src="{{asset('site/jquery.js')}}"></script>
<script src="{{asset('site/bootstrap.js')}}"></script>
<style>
    body{
        width: 100%;
    }
</style>

