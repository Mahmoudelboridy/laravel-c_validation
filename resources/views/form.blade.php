@extends('include')

@section('content')
<div class="container">
<form method="POST" action="{{ route('post') }}">
  @csrf

    <div class="mb-3 my-5">
      <label for="exampleInputEmail1" class="form-label">title</label>
      <input type="text" name="title" class="form-control" />
      @error('title')
       {{ $message }} 
      @enderror
    </div>
    <div class="mb-3 ">
      <label for="exampleInputPassword1" class="form-label">text</label>
      <input style="height: 150px" type="text" name="content" class="form-control " />
      @error('content')
      {{ $message }} 
     @enderror
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
{{--  
@if($errors->any())
<div>
  <ul>
    @foreach ($errors->all() as $error )
      <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>

@endif
--}}
@endsection
