<x-app-layout>

  <div class="page-wrapper">
    
    <div class="page-header">
      <div class="row">
        <div class="col">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home.index') }}"></a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="row justify-content-center">
      <div class="col-lg-8 col-md-8">
        <div class="card">
          <div class="card-body">
            <form action="{{ route('publish.store') }}" method="POST">
              @csrf
              <div class="form-group">
                <input type="text" name="title" placeholder="Title" class="form-control">
              </div>
              <div class="form-group">
                <input type="text" name="author" placeholder="Author (optional)" value="" class="form-control">
              </div>
              <div class="form-group">
                <input type="file" name="author" placeholder="Author (optional)" value="" class="form-control">
              </div>
              <div class="form-group">
                <select name="category" class="form-control">
                  <option value="{{ __('Computer Fundamentals') }}">{{ __('[Choose a Category]') }}</option> 
                  @foreach ($categories as $category)
                    <option value="{{ $category->category }}">{{ $category->category }}</option>   
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <textarea rows="7" name="content" class="form-control summernote" placeholder="Enter your message here"></textarea>
              </div>
              <div class="form-group mb-0">
                  <x-primary-button type="submit" class="btn btn-primary align-content-end">
                    {{ __('Publish the Content') }}
                  </x-primary-button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  
  </div>
</x-app-layout>
