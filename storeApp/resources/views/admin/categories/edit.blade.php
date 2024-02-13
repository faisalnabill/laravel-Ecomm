@extends('layouts.admin')
@section('title','Edit')

@section('content')
<h1 class="mb-2">Update</h1>

@if($errors->any())
<div class="alert alert-danger">
    @foreach($errors->all() as $error)
    <p>{{ $error }}</p>
    @endforeach
</div>
@endif

<h1 class="mb-2">Edit</h1>
<form method="post" action="{{ route('categories.update', [$category->id]) }}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" name="_method" value="put">
    <div class="mb-3 row">
        <label for="name" class="col-sm-2 col-form-label">name</label>
        <div class="mb-3 col-sm-10">
            <input type="text" name="name" class="form-control  @error ('name') is-invalid @enderror" id="name" value="{{ old('name',$category->name) }}">
        </div>
        <div class="mb-3 row">
            <label for="description" class="col-sm-2 col-form-label">description</label>
            <div class="mb-3 col-sm-10">
                <textarea name="description" class="form-control  @error ('description') is-invalid @enderror" id="description">{{ old('description',$category->description) }}</textarea>
            </div>
            <div class="from-group">
                <label for="parent_id" class="mb-3 col-sm-2 col-form-control">category </label>

                <select name="parent_id" id="parent_id" class="form-control">
                    <option value="">no parent</option>
                    @foreach (App\Models\Category::all() as $cat)
                        <option value="$cat->id"  @if ($cat->id == old('parent_id', $category->parent_id))  selected @endif > {{$cat->name}}</option>
                    @endforeach
                </select>
            </div>

        </div>
        <button type="submit" class="btn btn-primary mb-3">update</button>
        <div class="col-auto">

</form>
@endsection
