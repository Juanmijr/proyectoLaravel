@extends('layouts.master')
@section('content')
<style>
    .formBox{
        margin-top: 90px;
        padding: 50px;
    }
    .formBox  h1{
        margin: 0;
        padding: 0;
        text-align: center;
        margin-bottom: 50px;
        text-transform: uppercase;
        font-size: 48px;
    }
    .inputBox{
        position: relative;
        box-sizing: border-box;
        margin-bottom: 50px;
    }
    .inputBox .inputText{
        position: absolute;
        font-size: 24px;
        line-height: 50px;
        transition: .5s;
        opacity: .5;
    }
    .inputBox .input{
        position: relative;
        width: 100%;
        height: 50px;
        background: transparent;
        border: none;
        outline: none;
        font-size: 24px;
        border-bottom: 1px solid rgba(0,0,0,.5);

    }
    .focus .inputText{
        transform: translateY(-30px);
        font-size: 18px;
        opacity: 1;
        color: #00bcd4;

    }
    textarea{
        height: 100px !important;
    }
    .button{
        width: 100%;
        height: 50px;
        border: none;
        outline: none;
        background: #03A9F4;
        color: #fff;
    }
</style>


<div class="formBox">
    <form method="POST" action="{{route('register')}}">
        {{csrf_field()}}
        <div class="row">
            <div class="col-sm-12">
                <h1>Registro:</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="inputBox ">
                    <div class="inputText">Nombre</div>
                    <input type="text" name="nombre" required class="input">
                </div>
            </div>

            <div class="col-sm-6">
                <div class="inputBox">
                    <div class="inputText">Apellidos</div>
                    <input type="text" name="apellidos" required class="input">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="inputBox">
                    <div class="inputText">Usuario</div>
                    <input type="text" name="usuario" required class="input">
                </div>
            </div>


            <div class="col-sm-6">
                <div class="inputBox">
                    <div class="inputText">Contraseña</div>
                    <input type="password" name="pass" required class="input">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="inputBox">
                    <div class="inputText">Dirección</div>
                    <input type="text" name="direccion" required class="input">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="inputBox">
                    <div class="inputText">Movil</div>
                    <input type="text" name="movil" required class="input">
                </div>
            </div>

        </div>




        <div class="row">
            <div class="col-sm-12">
                <input type="submit" name="btnRegistrar" class="button" value="Regístro">
            </div>
        </div>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script type="text/javascript">
    $(".input").focus(function() {
        $(this).parent().addClass("focus");
    })
</script>
    @endsection