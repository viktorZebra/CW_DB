@extends('layouts.opened')
@section('title', 'Контакты')
@section('styles')
    <link href="{{ asset('/css/opened/contacts.css') }}" rel="stylesheet">
@endsection
@section('content')
    <section class="contacts section-padding-both">
        <div class="container">
            <h2>Контакты</h2>
            <div class="contacts-upper">
                <div class="contacts-column">
                    <p class="text">
                        Оставьте свое сообщение в этой форме, мы получим его на e-mail и обязательно ответим!
                    </p>
                    <form action="/contacts" method="post">
                        @csrf
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                {{$errors->first()}}
                            </div>
                        @endif
                        <div class="form-group">
                            <input class="form-control" type="text" name="name" placeholder="Имя" value="{{ old('name') }}">
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="email" name="email" placeholder="Электронная почта" value="{{ old('email') }}">
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="text" name="thee" placeholder="Тема" value="{{ old('thee') }}">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" placeholder="Сообщение">{{ old('message') }}</textarea>
                        </div>
                        <input type="submit" class="btn btn-outline-primary" value="Отправить">
                    </form>
                </div>
                <div class="contacts-column">
                    <p class="text">
                        <b>Расположение:</b><br>
                        г. Раменское, ул. Пушкина, дом Колотушкина,<br>
                        Раменское, Московская область, 140105
                    </p><br>
                    <p class="text">
                        <b>Управление образования:</b> + 8 (800) 777-53-53<br>
                        <b>Разработчик:</b> <a href="javascript:void(0);" class="link-primary">viktorzebra54@gmail.com</a><br>
                    </p>
                </div>
            </div>
            <div class="map-handler">
            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A5f447b68a4df8c453ec95cf421ed54aff338e0ebcf8ab8a9739d19f95aaa45f1&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
            </div>
        </div>
    </section>
@endsection
