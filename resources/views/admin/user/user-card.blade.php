@extends('admin.layout.app')
@section('admin_home')
@section('title'){{'User List'}}@endsection
<div class="container-fluid">
    <div class="row">
       <div class="col-sm-12">
          <div class="card">
             <div class="card-header border-bottom d-flex justify-content-between align-items-center pb-3">
                <div class="d-flex align-items-center pt-3">
                   <div class="form-group">
                      <select type="select" class="form-control select2-basic-multiple" placeholder="No Action">
                         <option>No Action</option>
                         <option>Status</option>
                         <option>Delete</option>
                      </select>
                      <button class="btn btn-primary">Apply</button>
                   </div>
                </div>
             </div>
             <div class="card-body">
                <div class="table-responsive rounded py-4 table-space">
                   <table id="user-list-table" class="table custom-table" role="grid" data-toggle="data-table">
                      <thead>
                         <tr class="ligth">
                            <th>User Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Card Link</th>
                            <th style="min-width: 100px;">Send Mail</th>
                            <th style="min-width: 100px;">Track permissions</th>
                         </tr>
                      </thead>
                      <tbody>
                        @foreach ($cardforms as $cardform)
                        <tr>
                            <td>{{$cardform->user_id}}</td>
                            <td>{{$cardform->user->name}}</td>
                            <td>{{$cardform->email}}</td>
                            <td><a href="https://toch.am/single-card/{{$cardform->id}}" target="_blank" style=" text-transform: lowercase;">https://toch.am/single-card/{{$cardform->id}}</a></td>
                            <td>
                               <div class="flex align-items-center list-user-action">
                                <a class="btn btn-sm btn-icon btn-success rounded" data-bs-toggle="tooltip" data-placement="top" title="Activate User" href="{{ route('sendmail', $cardform->user->email) }}">
                                    <span class="btn-inner">
                                        <i class="fa-solid fa-paper-plane fa-xs"></i>
                                    </span>
                                </a>
                               </div>
                            </td>
                            <td>
                            <div class="flex align-items-center list-user-action">
                                <a class="btn btn-sm btn-icon btn-success rounded" data-bs-toggle="tooltip" data-placement="top" title="Activity location" href="{{ route('location_system', $cardform->id) }}">
                                    <span class="btn-inner">
                                        <i class="fas fa-location  fa-xs"></i>
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
 </div>
 <style>

 </style>
 @if ($firstRecords->isNotEmpty())
 <h2 style="display: flex; justify-content: space-around;">Location permissions Part</h2>
 <div class="table-responsive rounded py-4 table-space">
    <table id="user-list-table" class="table custom-table" role="grid" data-toggle="data-table">
       <thead>
          <tr class="ligth">
             <th>Email</th>
             <th>Cart ID</th>
             <th>permissions</th>
          </tr>
       </thead>
       <tbody>
        @foreach ($firstRecords as $record)
        <tr>
            <td>{{$record->card->email}}</td>
            <td>{{$record->card_id}}</td>
             <td>
                 @if ($record->admin_permissions == 1)
                 <div class="col c12">
                    <button class="pulse-button"></button></div><style>
                  .pulse-button {

                    position: relative;
                    width: 30px;
                    height: 30px;
                    border: none;
                    box-shadow: 0 0 0 0 rgba(232, 76, 61, 0.7);
                    border-radius: 50%;
                    background-color: #4CAF50;;
                    background-image: url(http://powerandco.net/wp-content/uploads/2017/12/powernewicon.png);
                    background-size:111%;
                    background-position:-5px -5px;
                    background-repeat: no-repeat;
                    cursor: pointer;
                    -webkit-animation: pulse 1.25s infinite cubic-bezier(0.66, 0, 0, 1);
                    -moz-animation: pulse 1.25s infinite cubic-bezier(0.66, 0, 0, 1);
                    -ms-animation: pulse 1.25s infinite cubic-bezier(0.66, 0, 0, 1);
                    animation: pulse 1.25s infinite cubic-bezier(0.66, 0, 0, 1);
                  }
                  .pulse-button:hover
                  {
                    -webkit-animation: none;-moz-animation: none;-ms-animation: none;animation: none;
                  }

                  @-webkit-keyframes pulse {to {box-shadow: 0 0 0 45px rgba(232, 76, 61, 0);}}
                  @-moz-keyframes pulse {to {box-shadow: 0 0 0 45px rgba(232, 76, 61, 0);}}
                  @-ms-keyframes pulse {to {box-shadow: 0 0 0 45px rgba(232, 76, 61, 0);}}
                  @keyframes pulse {to {box-shadow: 0 0 0 45px rgba(232, 76, 61, 0);}}</style>
                 @else
                 <p>Not Activ Now</p>
                 @endif
                

             </td>
         </tr>
        @endforeach
      </tbody>
    </table>
 </div>
@endif
@endsection
