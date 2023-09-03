<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{route('index')}}"> Back</a>
            </div>
        </div>
    </div>
   

    <form action="{{route('update',$letter->id)}}" method="POST">
        @csrf
           <div class="row">
            
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>confidential:</strong>
                    <input type="text" name="confidential" value="{{ $letter->confidential }}" class="form-control" placeholder="confidential">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>baf_head:</strong>
                    <input type="text" name="baf_head" value="{{ $letter->baf_head }}" class="form-control" placeholder="baf_head">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>maintanence:</strong>
                    <input type="text" name="maintanence" value="{{ $letter->maintanence }}" class="form-control" placeholder="maintanence">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>supply:</strong>
                    <input type="text" name="supply" value="{{ $letter->supply }}" class="form-control" placeholder="supply">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>dhaka_canton:</strong>
                    <input type="text" name="dhaka_canton" value="{{ $letter->dhaka_canton }}" class="form-control" placeholder="dhaka_canton">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>