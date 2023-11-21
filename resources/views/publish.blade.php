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
                <select name="category" class="form-control">
                  <option value="{{ __('Computer Fundamentals') }}">{{ __('[Choose a Category]') }}</option> 
                  <option value="{{ __('Computer Fundamentals') }}">{{ __('Computer Fundamentals') }}</option> 
                  <option value="{{ __('Types of Computers') }}">{{ __('Types of Computers') }}</option> 
                  <option value="{{ __('Parts of the Computer') }}">{{ __('Parts of the Computer') }}</option> 
                  <option value="{{ __('Introduction to Computer Hardware') }}">{{ __('Introduction to Computer Hardware') }}</option> 
                  <option value="{{ __('Introduction to Computer Software') }}">{{ __('Introduction to Computer Software') }}</option> 
                  <option value="{{ __('Mobilephones as Computer') }}">{{ __('Mobilephones as Computer') }}</option> 
                  <option value="{{ __('Cloud Service Providers') }}">{{ __('Cloud Service Providers') }}</option> 
                  <option value="{{ __('Operating System') }}">{{ __('Operating System') }}</option> 
                  <option value="{{ __('Windows Keyboard Shortcuts') }}">{{ __('Windows Keyboard Shortcuts') }}</option> 
                  <option value="{{ __('Graphical User Interface') }}">{{ __('Graphical User Interface') }}</option> 
                  <option value="{{ __('Introduction to Web Browser') }}">{{ __('Introduction to Web Browser') }}</option> 
                  <option value="{{ __('History of Internet') }}">{{ __('History of Internet') }}</option> 
                  <option value="{{ __('Internet Issues') }}">{{ __('Internet Issues') }}</option> 
                  <option value="{{ __('How to take Care of Computer') }}">{{ __('How to take Care of Computer') }}</option> 
                  <option value="{{ __('Software Applications') }}">{{ __('Software Applications') }}</option> 
                  <option value="{{ __('Office Productivity Tools') }}">{{ __('Office Productivity Tools') }}</option> 
                  <option value="{{ __('Google Calendars') }}">{{ __('Google Calendars') }}</option> 
                  <option value="{{ __('Google Keeps') }}">{{ __('Google Keeps') }}</option> 
                  <option value="{{ __('Google Reminders') }}">{{ __('Google Reminders') }}</option> 
                  <option value="{{ __('Google Maps') }}">{{ __('Google Maps') }}</option> 
                  <option value="{{ __('Introduction to Social Media') }}">{{ __('Introduction to Social Media') }}</option> 
                  <option value="{{ __('Introduction to Multimedia') }}">{{ __('Introduction to Multimedia') }}</option> 
                  <option value="{{ __('Entertainment and Games') }}">{{ __('Entertainment and Games') }}</option> 
                  <option value="{{ __('How to Control Computer Addiction') }}">{{ __('How to Control Computer Addiction') }}</option> 
                  <option value="{{ __('Basics in Microsoft Word') }}">{{ __('Basics in Microsoft Word') }}</option> 
                  <option value="{{ __('Basics in Microsoft Excel') }}">{{ __('Basics in Microsoft Excel') }}</option> 
                  <option value="{{ __('Basics in Microsoft PowerPoint') }}">{{ __('Basics in Microsoft PowerPoint') }}</option> 
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
