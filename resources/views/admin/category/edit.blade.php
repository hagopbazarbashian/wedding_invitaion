@extends('Admin.layout.app')
@section('admin_home')
<div class="container">
    <div class="row justify-content-center align-items-center" style="min-height: 50vh;">
        <div class="col-sm-12 col-lg-6">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">   
                        <h4 class="card-title">Խմբագրել կատեգորիան</h4>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{route('category.update',$category->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="validationDefault02">Name En (English)</label>
                                <input type="text" class="form-control" name="name_en" id="validationDefault02" value="{{ $category->name_en}}" placehoder="en / hy">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="validationDefault02">Name En (Armenian)</label>
                                <input type="text" class="form-control" name="name_am" id="validationDefault02" value="{{ $category->name_am}}" placehoder="en / hy">
                            </div>
                            <!-- Photo Upload -->
                           {{-- Photo --}}
                        <div class="col-md-12 mb-3">
                            <label class="form-label" for="photo">Photo</label>
                            <input type="file" class="form-control" name="photo" id="photo">
                            @if ($category->photo)
                                <img src="{{ asset('storage/' . $category->photo) }}" class="mt-2" width="120" alt="Current Photo">
                            @endif
                        </div>

                        {{-- Background Photo --}}
                        <div class="col-md-12 mb-3">
                            <label class="form-label" for="background_photo">Background Photo</label>
                            <input type="file" class="form-control" name="background_photo" id="background_photo">
                            @if ($category->background_photo)
                                <img src="{{ asset('storage/' . $category->background_photo) }}" class="mt-2" width="120" alt="Background Photo">
                            @endif
                        </div>

                        {{-- First Photo --}}
                        <div class="col-md-12 mb-3">
                            <label class="form-label" for="first_photo">First Photo</label>
                            <input type="file" class="form-control" name="first_photo" id="first_photo">
                            @if ($category->first_photo)
                                <img src="{{ asset('storage/' . $category->first_photo) }}" class="mt-2" width="120" alt="First Photo">
                            @endif
                        </div>

                        {{-- Second Photo --}}
                        <div class="col-md-12 mb-3">
                            <label class="form-label" for="secound_photo">Second Photo</label>
                            <input type="file" class="form-control" name="secound_photo" id="secound_photo">
                            @if ($category->secound_photo)
                                <img src="{{ asset('storage/' . $category->secound_photo) }}" class="mt-2" width="120" alt="Second Photo">
                            @endif
                        </div>
                        </div>
                        <div>
                            <button class="btn btn-primary" type="submit">Ստեղծել</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection