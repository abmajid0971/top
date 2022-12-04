@extends('admin.master')
<!-- Content Wrapper. Contains page content -->
@section('content')
<div class="content-wrapper">

<form class="container" method="post" action="{{url('Offeradd')}}" enctype="multipart/form-data">
  @csrf
  <div class="container mt-5">
      <div class="col-md-12">
          <div class="card">
              <div class="card-header">
                  <h4>Manage Offer
                      <a href="{{('/OfferList')}}" class="btn btn-danger btn-sm float-right">Manage
                      Offer</a>
                  </h4>
              </div>
              <div class="card-body">

                
                <div class="alert alert-danger" role="alert">{{session('message')}}</div>

                  <div class="col-md-12">
                      <!-- general form elements -->
                      <div class="card card-primary">
                          <div class="card-header">
                              <h3 class="card-title">Add Offer</h3>
                          </div>
                          <!-- /.card-header -->
                          <!-- form start -->
                          <div class="card-body">
                              

                              <div class="form-group">
                                  <label>Rank</label>
                                  <select class="form-control select2" style="width: 100%;" name="ddRank">
                                      <option selected="selected">1</option>
                                      <option>2</option>
                                      <option>3</option>
                                      <option>4</option>
                                      <option>5</option>
                                      <option>6</option>
                                      <option>7</option>
                                      <option>8</option>
                                      <option>9</option>
                                      <option>10</option>
                                      <option>Editor Choice</option>

                                      
                                  </select>
                                  
                              </div>
                              @error('ddRank')
                                  
                                  <div class="alert alert-danger" role="alert">{{$message}}</div>
                                  @enderror
                              <div class="form-group">


                                  <label for="txName">Name:</label>
                                  <input type="text" class="form-control" id="txtName" name="txtName">
                              </div>
                              <div class="form-group">

                                              <label for="imgfile">Choose Icon</label>
                                              <input type="file" class="form-control" id="imgfile" name="imgfile">

                                          </div>

                              <div class="form-group">

                                  <label for="txtPromo_Text_TOP">Promo Text TOP:</label>
                                  <input type="text" class="form-control" id="txtPromo_Text_TOP" name="txtPromo_Text_TOP">
                              </div>
                              <div class="form-group">

                                  <label for="txtPromo_text_1">Promo text 1:</label>
                                  <input type="text" class="form-control" id="txtPromo_text_1" name="txtPromo_text_1">
                              </div>
                              <div class="form-group">

                                  <label for="txtPromo_text_2">Promo text 2:</label>
                                  <input type="text" class="form-control" id="txtPromo_text_2" name="txtPromo_text_2">
                              </div>
                              <div class="form-group">

                                  <label for="txtPromo_text_3">Promo text 3:</label>
                                  <input type="text" class="form-control" id="txtPromo_text_3" name="txtPromo_text_3">
                              </div>
                              <div class="form-group">

                                  <label for="txtScore">Score:</label>
                                  <input type="text" class="form-control" id="txtScore" name="txtScore">
                              </div>
                              <div class="form-group">

                                  <label for="txtStars">Stars:</label>
                                  <div class="rating-css">
    <div class="star-icon">
        <input type="radio" value="1" name="product_rating" checked id="rating1">
        <label for="rating1" class="fa fa-star"></label>
        <input type="radio" value="2" name="product_rating" id="rating2">
        <label for="rating2" class="fa fa-star"></label>
        <input type="radio" value="3" name="product_rating" id="rating3">
        <label for="rating3" class="fa fa-star"></label>
        <input type="radio" value="4" name="product_rating" id="rating4">
        <label for="rating4" class="fa fa-star"></label>
        <input type="radio" value="5" name="product_rating" id="rating5">
        <label for="rating5" class="fa fa-star"></label>
    </div>
</div>
                              </div>
                              <div class="form-group">

                                  <label for="txtStars">Ages:</label>
                                  <input type="text" class="form-control" id="txtAges" name="txtAges">
                              </div>
                              
                              <div class="form-group">

                                  <label for="txtVisit_Site_Click_URL">URL:</label>
                                  <input type="text" class="form-control" id="txtVisit_Site_Click_URL" name="txtVisit_Site_Click_URL">
                              </div>
                              <div class="form-group">

                                  <label for="txttext_below_click_url">text below click url:</label>
                                  <input type="text" class="form-control" id="txttext_below_click_url" name="txttext_below_click_url">
                              </div>
                                          </div>
                                          
                                      </div>
                                  </div>
                                  <!-- /.card-body -->
                                  <div class="card-footer">
                                      <button type="submit" class="btn btn-primary">Submit</button>
                                  </div>
                              </div>
                              <!-- /.card -->
                          </div>
</form>
</div>
</div>
</div>

</div>

</div>

</div>


@endsection('content')