@extends('admin.master')
<!-- Content Wrapper. Contains page content -->
@section('content')
<div class="content-wrapper">

    <form class="container" method="post" action="{{url('updateOffer')}}" enctype="multipart/form-data">
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



                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Edit Offer</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <div class="card-body">
                                    <div class="form-group">


                                        <label for="txName">ID:</label>
                                        <input type="text" class="form-control" id="txtID" name="txtID" disabled
                                            value="{{$offer->id}}">
                                    </div>

                                    <div class="form-group">
                                        <label>Rank</label>
                                        <select class="form-control select2" style="width: 100%;" name="ddRank"
                                            value="{{$offer->Rank}}">
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
                                    <div class="form-group">


                                        <label for="txName">Name:</label>
                                        <input type="text" class="form-control" id="txtName" name="txtName"
                                            value="{{$offer->Name}}">
                                    </div>
                                    <div class="form-group">

                                        <label for="imgfile">Choose Icon</label>
                                        <input type="file" class="form-control" id="imgfile" name="imgfile"
                                            value="{{$offer->Icon}}">

                                    </div>

                                    <div class="form-group">

                                        <label for="txtPromo_Text_TOP">Promo Text TOP:</label>
                                        <input type="text" class="form-control" id="txtPromo_Text_TOP"
                                            name="txtPromo_Text_TOP" value="{{$offer->Promo_Text_TOP}}">
                                    </div>
                                    <div class="form-group">

                                        <label for="txtPromo_text_1">Promo text 1:</label>
                                        <input type="text" class="form-control" id="txtPromo_text_1"
                                            name="txtPromo_text_1" value="{{$offer->Promo_text_1}}">
                                    </div>
                                    <div class="form-group">

                                        <label for="txtPromo_text_2">Promo text 2:</label>
                                        <input type="text" class="form-control" id="txtPromo_text_2"
                                            name="txtPromo_text_2" value="{{$offer->Promo_text_2}}">
                                    </div>
                                    <div class="form-group">

                                        <label for="txtPromo_text_3">Promo text 3:</label>
                                        <input type="text" class="form-control" id="txtPromo_text_3"
                                            name="txtPromo_text_3" value="{{$offer->Promo_text_3}}">
                                    </div>
                                    <div class="form-group">

                                        <label for="txtScore">Score:</label>
                                        <input type="text" class="form-control" id="txtScore" name="txtScore"
                                            value="{{$offer->Score}}">
                                    </div>
                                    <div class="form-group">

                                        <label for="txtStars">Stars:</label>
                                        <div class="rating-css">
                                            <div class="star-icon">
                                                @for ($i = 1; $i <= $offer->Stars; $i++)
                                                    <input type="radio" value="{{$i}}" name="product_rating" checked
                                                        id="rating{{$i}}">
                                                    <label for="rating{{$i}}" class="fa fa-star"></label>

                                                    @endfor
                                                    @php $sunchecked =5-$offer->Stars @endphp

                                                    @for ($j = $offer->Stars+1; $j <= 5; $j++) <input type="radio"
                                                        value="{{$j}}" name="product_rating" id="rating{{$j}}">
                                                        <label for="rating{{$j}}" class="fa fa-star"></label>

                                                        @endfor

                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">

                                        <label for="txtStars">Ages:</label>
                                        <input type="text" class="form-control" id="txtAges" name="txtAges"
                                            value="{{$offer->Ages}}">
                                    </div>

                                    <div class="form-group">

                                        <label for="txtVisit_Site_Click_URL">URL:</label>
                                        <input type="text" class="form-control" id="txtVisit_Site_Click_URL"
                                            name="txtVisit_Site_Click_URL" value="{{$offer->Visit_Site_Click_URL}}">
                                    </div>
                                    <div class="form-group">

                                        <label for="txttext_below_click_url">text below click url:</label>
                                        <input type="text" class="form-control" id="txttext_below_click_url"
                                            name="txttext_below_click_url" value="{{$offer->text_below_click_url}}">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card -->
    </div>
</div>

</form>
</div>



@endsection('content')