@extends('admin.layouts.layout')

@push('css')
    <style>
        html,
        body {
            height: 100%;
        }

        body {
            display: flex;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #f5f5f5;
        }

        .form-signin {
            width: 100%;
            max-width: 330px;
            padding: 15px;
            margin: auto;
        }

        .form-signin .checkbox {
            font-weight: 400;
        }

        .form-signin .form-floating:focus-within {
            z-index: 2;
        }

        .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }

        .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
    </style>
@endpush

@section('page-title')
تسجيل الدخول
@endsection

@section('content')


<div class="container text-center p-4">
    <main class="form-signin">
        @if($errors->any())
            {{ implode('', $errors->all('<div class="text-danger">:message</div>')) }}
        @endif

        <form method="post" action="{{ route('login') }}">
            @csrf
            <img class="mb-4" src="{{ url('/uploads/amana_logo.png') }}" alt="" width="72" height="57">
            <h1 class="h3 mb-3 fw-normal">
                بوابة الموظف
            </h1>
            @if(Session::has('error'))
                <div class="alert alert-danger">
                    <small>
                        {{ Session::get('error') }}
                    </small>
                </div>
            @endif
            <div class="form-floating">
                <input type="email" class="form-control @error('email') is-invalid  @enderror" name="email"
                    id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">البريد الالكتروني</label>
            </div>

            <div class="form-floating">
                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                    id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">كلمة المرور</label>
            </div>

            <button class="w-100 btn btn-lg btn-primary" type="submit">تسجيل الدخول</button>

        </form>
    </main>
</div>
@endsection