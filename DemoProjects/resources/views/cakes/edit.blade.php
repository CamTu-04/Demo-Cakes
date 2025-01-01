@extends('layouts.app')

@section('title', 'Sửa Bánh')

@section('content')
    <h1>Sửa Bánh</h1>
    <form action="{{ route('cakes.update', $cake->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Tên Bánh</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $cake->name }}" required>
        </div>
        <div class="form-group">
            <label for="price">Giá</label>
            <input type="number" class="form-control" id="price" name="price" value="{{ $cake->price }}" step="0.01" required>
        </div>
        <div class="form-group">
            <label for="description">Mô Tả</label>
            <textarea class="form-control" id="description" name="description">{{ $cake->description }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Cập Nhật</button>
        <a href="{{ route('cakes.index') }}" class="btn btn-secondary">Quay Lại</a>
    </form>
@endsection