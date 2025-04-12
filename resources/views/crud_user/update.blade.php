@extends('dashboard')

@section('content')
<main class="flex flex-col items-center justify-center flex-grow">
    <div class="bg-white p-8 rounded shadow-md w-96">
        <h2 class="text-center text-xl font-bold mb-6">Màn hình chỉnh sửa</h2>
        <form method="POST" action="{{ route('user.postUpdateUser') }}">
            @csrf
            <input name="id" type="hidden" value="{{$user->id}}">
            <div class="mb-4">
                <label for="username" class="block text-gray-700">Username</label>
                <input type="text" placeholder="Name" id="name" class="w-full px-3 py-2 border rounded" name="name" required
                    autofocus value="{{ $user->name }}">
                @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700">Email</label>
                <input type="Email" placeholder="Email" id="email" class="w-full px-3 py-2 border rounded" name="email" required
                    autofocus value="{{ $user->email }}">
                @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700">Mật khẩu</label>
                <input type="password" placeholder="Password" id="password" class="w-full px-3 py-2 border rounded" name="password" required>
                @if ($errors->has('password'))
                <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
            </div>
            <div class="mb-4">
                <label for="age" class="block text-gray-700">Age</label>
                <input type="age" placeholder="age" id="age" class="w-full px-3 py-2 border rounded" name="age" required>
                @if ($errors->has('age'))
                <span class="text-danger">{{ $errors->first('age') }}</span>
                @endif
            </div>
            <div class="mb-4">
                <label for="facebook" class="block text-gray-700">Facebook</label>
                <input type="facebook" placeholder="facebook" id="facebook" class="w-full px-3 py-2 border rounded" name="password" required>
                @if ($errors->has('facebook'))
                <span class="text-danger">{{ $errors->first('facebook') }}</span>
                @endif
            </div>
            <div class="text-center">
                <button type="submit"
                    class="bg-blue-500 text-white px-4 py-2 rounded">Lưu</button>
            </div>
        </form>
    </div>
</main>

@endsection