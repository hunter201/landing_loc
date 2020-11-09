@extends('components.main')

@section('title','Регистрация')

@section('content')
<section>
    <div class="container-lg form">
        <div class="row">
            <div class="col-lg-4 offset-lg-4">
               <div class="register_block">
                   {{-- форма регистрации нового пользователя --}}
                    <form class ="register_form" action="/register" method="POST">
                        @csrf
                        <label for="email">Электронная почта</label>
                        <input class="input_form" type="email" name="email" autocomplete="off" autofocus tabindex="0" placeholder="E-Mail">
                        <label for="pass">Пароль</label>
                        <input id="pass" class="input_form" type="password"  name="pass" autocomplete="off" tabindex="1" placeholder="Password">
                        <label for="pass_repeat">Повторите пароль</label>
                        <input class="input_form" type="password" name="pass_repeat" autocomplete="off" tabindex="2" placeholder="Repeat Password">
                        <button class="button_form" type="submit">Регистрация</button>
                    </form>   
                 </div>  
            </div>
        </div>
    </div>
</section>
   
@endsection