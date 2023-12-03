@include('dashboard.navigator')

<main role="main" class="col-md-10 col-sm-12 ml-md-auto px-4">
<br>
<h3 class=" mb-4"> Package List</h3>
<table id="example" class="table table-striped" style="width:100%">
    <thead>
        <tr>
            <th>Category</th>
            <th>Price</th>
            <th>Details</th>
            <th>Image</th>
            <th>Action</th>
            
        </tr>
    </thead>
    <tbody>
        @foreach ($package_list as $package)
        <tr>
            <td>{{ $package->category }}</td>
            <td>{{ $package->price }}</td>
            <td>{{ $package->details }}</td>
            <td><img src="{{asset('images/'.$package->image) }}"height="100", width="100"></td>
            
            <td><button class="btn btn-primary">update</button><button class="btn btn-danger">delete</button></td>
            
        </tr>
        @endforeach
       
       
    </tbody>
   
</table>

<link rel ="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
<link rel ="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>



<script>
 new DataTable('#example');
</script>


</main>
</div>
</div>