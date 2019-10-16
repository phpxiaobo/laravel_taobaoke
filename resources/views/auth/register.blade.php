{{--继承整体框架--}}
@extends('auth.layouts.Master')

{{--网页的title--}}
@section('title')
    <title>{{ $title or config('website.name')}}</title>
@endsection

{{--继承整体框架--}}
@section('content')
    <h3>欢迎注册 {{ config('website.name') }}！</h3>
    <p>创建一个新账户</p>
    <form method="POST" class="m-t" role="form" action="{{ route('registeraction') }}">
        {!! csrf_field() !!}

        @if (count($errors) > 0)
        <ul class="text-left list-unstyled">
            @foreach ($errors->all() as $error)
            <!-- <div class="form-group"> -->
                <li class="text-left">{{ $error }}</li>
            <!-- </div> -->
            @endforeach
        </ul>
        @endif
        
        <div class="form-group">
            <input type="text" name="name" class="form-control" value="{{ old('name') }}" placeholder="请输入用户名" >
        </div>
        <div class="form-group">
            <input type="email" name="email" class="form-control" value="{{ old('email') }}" placeholder="请输入邮箱">
        </div>
        <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="请输入密码">
        </div>
        <div class="form-group">
            <input type="password" name="password_confirmation" class="form-control" placeholder="请再次输入密码">
        </div>
    <!--     <div class="form-group text-left">
            <div class="checkbox i-checks">
                <label class="no-padding">
                    <input type="checkbox"><i></i> 我同意注册协议</label>
            </div>
        </div> -->
        <button type="submit" class="btn btn-primary block full-width m-b">注 册</button>

        <p class="text-muted text-center"><small>已经有账户了？</small><a href="{{ route('login') }}">点此登录</a>
        </p>

    </form>
@endsection