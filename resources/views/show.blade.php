<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{route('index')}}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>confidential:</strong>
                {{ $letter->confidential }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>baf_head:</strong>
                {{ $letter->baf_head }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>maintanence:</strong>
                {{ $letter->maintanence }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>supply:</strong>
                {{ $letter->supply }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>dhaka_canton:</strong>
                {{ $letter->dhaka_canton }}
            </div>
        </div>
    </div>