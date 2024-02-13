@extends('layouts.admin')

@section('content')
<h1 class="mb-2">Categories</h1>

@if($errors->any())
<div class="alert alert-danger">
    @foreach($errors->all() as $error)
    <p>{{ $error }}</p>
    @endforeach
</div>
@endif

<form method="post" action=" {{route('categories.store')}}">
@csrf
<div class="mb-3 row">
        <label for="name" class="col-sm-2 col-form-label">name</label>
        <div class="mb-3 col-sm-10">
            <input name="name" class="form-control  @error ('name') is-invalid @enderror" id="name" value="{{ old('name') }}">
            @if ($errors->has('name'))
            <p class="text-danger">{{ $errors->first('name') }}</p>
            @endif
        </div>
        <div class="mb-3 row">
            <label for="description" class="col-sm-2 col-form-label">description</label>
            <div class="mb-3 col-sm-10">
                <textarea name="description" class="form-control @error ('description') is-invalid @enderror" id="description">{{ old('description') }}</textarea>
            </div>
            @if ($errors->has('description'))
            <p class="text-danger">{{ $errors->first('description') }}</p>
            @endif
            <div class="from-group ">
                <label for="parent_id">category parent</label>

                <select name="parent_id" id="parent_id" class="form-control">
                    <option value="">no parent</option>
                    @foreach (App\Models\Category::all() as $cat)
                        <option value="{{$cat->id}} "@if (old('parent_id') == $cat->id) selected @endif> {{$cat->name}}</option>
                    @endforeach
                </select>
            </div>

        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3">confirm</button>
</form>

@endsection
