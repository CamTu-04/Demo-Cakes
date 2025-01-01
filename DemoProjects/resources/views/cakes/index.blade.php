@extends('layouts.app')

@section('title', 'Danh Sách Bánh')

@section('content')
    <h1>Danh Sách Bánh</h1>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Tên Bánh</th>
                <th>Giá</th>
                <th>Mô Tả</th>
                <th>Hành Động</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cakes as $cake)
            <tr>
                <td>{{ $cake->name }}</td>
                <td>{{ number_format($cake->price, 0, ',', '.') }} VNĐ</td>
                <td>{{ $cake->description }}</td>
                <td>
                    <a href="{{ route('cakes.edit', $cake->id) }}" class="btn btn-warning">Sửa</a>
                    <form action="{{ route('cakes.destroy', $cake->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Xóa</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('cakes.create') }}" class="btn btn-primary">Thêm Bánh Mới</a>
@endsection