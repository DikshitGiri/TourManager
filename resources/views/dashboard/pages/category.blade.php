@include('dashboard.navigator')
   <!-- Main Content -->
   <main role="main" class="col-md-10 col-sm-12 ml-md-auto px-4">
    <!-- resources/views/components/success-message.blade.php -->

@if(session('success'))
<div id="success-alert" class="alert alert-success">
    {{ session('success') }}
</div>

<script>
    setTimeout(function(){
        $('#success-alert').fadeOut('slow');
    }, 2000);
</script>
@elseif(session('error'))
<div id="error-alert" class="alert alert-danger">
    {{ session('error') }}
</div>

<script>
    setTimeout(function(){
        $('#error-alert').fadeOut('slow');
    }, 2000);
</script>
@endif


    <div class="content">
     
                <h3 class=" mb-4">Add Category</h3>
                <form method="POST" action="{{ route('addCategory') }}" >
                    @csrf
                  <!-- Category Name Input -->
                  <div class="mb-3">
                 
                    <input type="text" class="form-control" id="categoryName" placeholder="Enter category name" required name="category">
                  </div>
          
                  <!-- Submit Button -->
                  <button type="submit" class="btn btn-primary">Add Category</button>
                </form>
             
          
    </div>
</main>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
