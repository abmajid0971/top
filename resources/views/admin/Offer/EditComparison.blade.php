@extends('admin.master')
<!-- Content Wrapper. Contains page content -->
@section('content')
<div class="content-wrapper">

    <form class="container" method="post" action="{{url('updateComparison')}}" enctype="multipart/form-data">
        @csrf
        <div class="container mt-5">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        
                            <a href="{{('/ComparisonList')}}" class="btn btn-danger btn-sm float-right">Manage
                                Offer</a>
                        
                    </div>
                    <div class="card-body">



                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Edit Comparison</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <div class="card-body">
                                    <div class="form-group">


                                        <label for="txName">ID:</label>
                                        <input type="text" class="form-control" id="txtID" name="txtID" disabled
                                            value="{{$Comparison->id}}">
                                    </div>

                                    <div class="form-group">
                                        <label>Rank</label>
                                        <select class="form-control select2" style="width: 100%;" name="ddRank"
                                            value="{{$Comparison->Rank}}">
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
                                            value="{{$Comparison->Name}}">
                                    </div>


                                    <div class="form-group">

                                        <label for="txtPromo_Text_TOP">Promo Text TOP:</label>
                                        <input type="text" class="form-control" id="txtPromo_Text_TOP"
                                            name="txtPromo_Text_TOP" value="{{$Comparison->Promo_Text_TOP}}">
                                    </div>
                                    <div class="form-group">

                                        <label for="txtPromo_text_1">Promo text 1:</label>
                                        <input type="text" class="form-control" id="txtPromo_text_1"
                                            name="txtPromo_text_1" value="{{$Comparison->Promo_text_1}}">
                                    </div>
                                    <div class="form-group">

                                        <label for="txtPromo_text_2">Promo text 2:</label>
                                        <input type="text" class="form-control" id="txtPromo_text_2"
                                            name="txtPromo_text_2" value="{{$Comparison->Promo_text_2}}">
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