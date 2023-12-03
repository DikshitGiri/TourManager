@include('dashboard.navigator')

<main role="main" class="col-md-10 col-sm-12 ml-md-auto px-4">
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

  <div class="row justify-content-center">
  
      <h3 class=" mb-4">Add Package</h3>
      <form method="post" action="{{ route('addPackage') }}" enctype="multipart/form-data">
        @csrf
        <!-- Category Dropdown -->
        <div class="mb-3">
          <label for="categorySelect" class="form-label">Category</label>
          <select class="form-select" id="categorySelect" required name="category">
            <option value="" selected disabled>Select a category</option>
            @foreach ($category_list as $category)
            <option value="{{ $category->category }}">{{ $category->category }}</option>
            @endforeach
         
            <!-- Add more options as needed -->
          </select>
        </div>

        <!-- Price Input -->
        <div class="mb-3">
          <label for="priceInput" class="form-label">Price</label>
          <input type="number" class="form-control" id="priceInput" placeholder="Enter price" required name="price">
        </div>

        <!-- Image Input -->
        <div class="mb-3">
          <label for="imageInput" class="form-label">Image </label>
          <input type="file" class="form-control" id="imageInput" placeholder="Enter image URL" required name="image">
        </div>

        <!-- Details Textarea -->
        <div class="mb-3">
          <label for="detailsTextarea" class="form-label">Details</label>
          <textarea class="form-control" id="detailsTextarea" rows="3" placeholder="Enter product details" name="details"></textarea>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Add Package</button>
      </form>
 
  </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

</main>
</div>
</div>