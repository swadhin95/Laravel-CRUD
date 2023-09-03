
<!DOCTYPE html>
<html>
<head>
    <title>Laravel 8 CRUD</title>
    
<body>
  
<div class="container">
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 8 CRUD </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('create')}}"> Create New</a>
            </div>
        </div>
    </div>

   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Details</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($letters as $letter)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $letter->confidential }}</td>
            <td>{{ $letter->baf_head }}</td>
            <td>
                <form action="{{ route('destroy',$letter->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('show',$letter->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('edit',$letter->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
   
</body>
</html>

    
  
    {!! $letters->links() !!}
      
