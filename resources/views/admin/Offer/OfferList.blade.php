@extends('admin.master')
<!-- Content Wrapper. Contains page content -->
@section('content')
<div class="content-wrapper">

<form method="post">
  @csrf
  <div class="container mt-5">
      <div class="col-md-12">
          <div class="card">
              <div class="card-header">
                  <h4>Manage Offer
                      <a href="{{('/Offer')}}" class="btn btn-danger btn-sm float-right">Add
                      Offer</a>
                  </h4>
              </div>
              <div class="card-body">
                  <div class="container px-4">
                      @if(session('message'))
                      <div class="alert alert-danger" role="alert">{{session('message')}}</div>

                      @endif

                      <table class="table table-bordered table-striped">
                          <thead>
                              <tr>
                                  <td>Name</td>
                                  <td>Promo_Text_TOP</td>
                                  <td>Promo_text_1</td>
                              </tr>
                          </thead>
                          <tbody>
                              @foreach($Offer as $varOffer)
                              <tr>
                                  <td>{{$varOffer->Name}}</td>
                                  <td>{{$varOffer->Promo_Text_TOP}}</td>
                                  <td>{{$varOffer->Promo_text_1}}</td>
                                  <td><a href='editOffer/{{$varOffer->id}}'
                                          class="btn btn-success">Edit</a></td>
                                  <td><a href='deleteOffer/{{$varOffer->id}}' class="btn btn-info">Delete</a></td>
                                          Detail</a></td>            
                              </tr>
                              @endforeach
                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
      </div>

</form>
</div>

@endsection('content')