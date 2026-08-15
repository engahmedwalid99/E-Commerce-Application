@extends('Admin.dashboard')

@section('title')
ألفئات
@endsection

@section('page-title')
ألفئات
@endsection
فئات كل الاصناف 
@section('page-subtitle')

@endsection

@section('category')
<div>
    <h1>Category</h1>
    <hr>

    @foreach ($category as $item)
        <div>
            <h3>{{ $item->name }}</h3>

            <p>
                عدد المنتجات:
                {{ $item->products_count }}
            </p>

            <hr>
        </div>
    @endforeach
</div>
@endsection