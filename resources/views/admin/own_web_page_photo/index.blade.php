@extends('admin.layout.app')
@section('admin_home')
<div class="container">
    <div class="row justify-content-center align-items-center" style="min-height: 50vh;">
        <div class="col-sm-12 col-lg-6">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Add Own Web Page Photo</h4>
                    </div> 
                </div>
                <div class="card-body">
                    <form action="{{route('own-web-page-photo.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="form-group mb-0">
                                <input type="file" name="photo" class="form-control" aria-label="file example">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label" name="title" for="validationDefault01">Web page url</label>
                                <input type="text" class="form-control" name="web_page_url" id="validationDefault01">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label" name="title" for="validationDefault01">Text</label>
                                <input type="text" class="form-control" name="text" id="validationDefault01">
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
                                <th scope="col">Photo</th>
                                <th scope="col">web page url</th>
                                <th scope="col">Text</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($Own_web_page_photos as $item)
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img class="rounded img-fluid avatar-60 me-3" src="{{asset($item->photo)}}" alt="" loading="lazy">

                                    </div>
                                </td>
                                
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="media-support-info">
                                            <h5 class="iq-sub-label">{{$item->web_page_url}}</h5>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="media-support-info">
                                            <h5 class="iq-sub-label">{{$item->text}}</h5>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="media-support-info">
                                            <h5 class="iq-sub-label">{{$item->status}}</h5>
                                        </div>
                                    </div>
                                </td>
                                {{-- <td>
                                    <div class="d-flex justify-content-evenly">
                                        <a class="btn btn-primary btn-icon btn-sm rounded-pill ms-2" href="{{route('own-web-page-photo',$item->id)}}" role="button">
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
                                </td> --}}
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