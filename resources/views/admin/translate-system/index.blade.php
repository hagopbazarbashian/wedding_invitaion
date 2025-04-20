@extends('Admin.layout.app')
@section('admin_home')
<div class="container">
    <div class="row justify-content-center align-items-center" style="min-height: 50vh;">
        <div class="col-sm-12 col-lg-6">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Ավելացնել լեզուներ</h4>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{route('translate.store')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="validationDefault01">Key</label>
                                <input type="text" class="form-control" name="key" id="validationDefault01" placehoder="Key">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="validationDefault02">language</label>
                                <input type="text" class="form-control" name="language" id="validationDefault02" placehoder="en / hy">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="validationDefault02">Text</label>
                                <input type="text" class="form-control" name="text" id="validationDefault02" placehoder="Text">
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
                <div class="custom-table-effect table-responsive  border rounded py-4">
                    <table class="table mb-0" id="datatable" data-toggle="data-table">
                        <thead>
                            <tr class="bg-white">
                                <th scope="col">Key</th>
                                <th scope="col">language</th>
                                <th scope="col">Text</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($translations as $translation)
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="media-support-info">
                                            <h5 class="iq-sub-label">{{$translation->key}}</h5>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="media-support-info">
                                            <h5 class="iq-sub-label">{{$translation->language}}</h5>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="media-support-info">
                                            <h5 class="iq-sub-label">{{$translation->text}}</h5>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex justify-content-evenly">
                                        <a class="btn btn-primary btn-icon btn-sm rounded-pill ms-2" href="{{route('translate.edit',$translation->id)}}" role="button">
                                            <span class="btn-inner">
                                                <i class="fa-solid fa-pen"></i>
                                            </span>
                                        </a>
                                        <a class="btn btn-primary btn-icon btn-sm rounded-pill ms-2" href="#" role="button">
                                            <span class="btn-inner">
                                                <i class="fa-solid fa-trash"></i>
                                            </span>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection