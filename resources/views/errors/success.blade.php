@if (session()->get('success') )
    <div class="alert alert-success mt-3 alert-dismissible fade show" role="alert">
      {{ session()->get('success') }}  
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
@endif