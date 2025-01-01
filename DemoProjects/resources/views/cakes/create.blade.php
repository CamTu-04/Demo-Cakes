@extends('layouts.app')

@section('title', 'Thêm Bánh')

@section('content')
    <h1>Thêm Bánh</h1>
    <form action="{{ route('cakes.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Tên Bánh</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="price">Giá</label>
            <input type="number" class="form-control" id="price" name="price" step="0.01" required>
        </div>
        <div class="form-group">
            <label for="description">Mô Tả</label>
            <textarea class="form-control" id="description" name="description"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Lưu Bánh</button>
        <a href="{{ route('cakes.index') }}" class="btn btn-secondary">Quay Lại</a>
    </form>
@endsection