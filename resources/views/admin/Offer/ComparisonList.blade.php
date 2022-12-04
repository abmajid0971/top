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
                  <h4>Manage Comparison Offer
                      <a href="{{('/NewComparisonOffer')}}" class="btn btn-danger btn-sm float-right">Add
                      Comparison Offer</a>
                  </h4>
              </div>
              <div class="card-body">
                  <div class="container px-4">
                      @if(session('status'))
                      <h5 class='alert alert-success'>{{session('status')}}</h5>
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
                              @foreach($Comparison as $Comparison)
                              <tr>
                                  <td>{{$Comparison->Name}}</td>
                                  <td>{{$Comparison->Promo_Text_TOP}}</td>
                                  <td>{{$Comparison->Promo_text_1}}</td>
                                  <td><a href='editComparison/{{$Comparison->id}}'
                                          class="btn btn-success">Edit</a></td>
                                  <td><a href='deleteComparison/{{$Comparison->id}}' class="btn btn-info">Delete</a></td>
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