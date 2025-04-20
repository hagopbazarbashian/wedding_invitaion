@extends('Admin.layout.app')
@section('admin_home')
<div class="container">
    <div class="row justify-content-center align-items-center" style="min-height: 50vh;">
        <div class="col-sm-12 col-lg-6">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">   
                        <h4 class="card-title">Ավելացնել կատեգորիա</h4>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{route('category.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="validationDefault02">Name En (English)</label>
                                <input type="text" class="form-control" name="name_en" id="validationDefault02" placehoder="en / hy">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="validationDefault02">Name En (Armenian)</label>
                                <input type="text" class="form-control" name="name_am" id="validationDefault02" placehoder="en / hy">
                            </div>
                            <!-- Photo Upload -->
                            <div class="col-md-12 mb-3">
                                <label class="form-label" for="photo">Photo</label>
                                <input type="file" class="form-control" name="photo" id="photo">
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

<div class="content-inner container-fluid pb-0" id="page_layout">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="custom-table-effect table-responsive border rounded py-4">
                    <table class="table mb-0" id="datatable" data-toggle="data-table">
                        <thead>
                            <tr class="bg-white">
                                <th scope="col">Photo</th>
                                <th scope="col">Name (En)</th>
                                <th scope="col">Name (Am)</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categorys as $Service)
                                <tr>
                                    <!-- Photo -->
                                    <td>
                                        @if($Service->photo)
                                            <img src="{{ asset('storage/' . $Service->photo) }}" alt="photo" style="width: 60px; height: 60px; object-fit: cover; border-radius: 8px;">
                                        @else
                                            <span class="text-muted">No Image</span>
                                        @endif
                                    </td>

                                    <!-- Name En -->
                                    <td>
                                        <h6>{{ $Service->name_en }}</h6>
                                    </td>

                                    <!-- Name Ar -->
                                    <td>
                                        <h6>{{ $Service->name_am }}</h6>
                                    </td>

                                    <!-- Actions -->
                                    <td>
                                        <div class="d-flex justify-content-evenly">
                                            <!-- Edit -->
                                            <a href="{{ route('category.edit', $Service->id) }}" class="btn btn-sm btn-primary rounded-pill">
                                                <i class="fa fa-pen"></i>
                                            </a>

                                            <!-- Delete -->
                                            <form action="{{ route('category.destroy', $Service->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this item?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger rounded-pill">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    @if($categorys->isEmpty())
                        <p class="text-center mt-3 text-muted">No services found.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection