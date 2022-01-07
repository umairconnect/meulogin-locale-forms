
@include('header');

<div class="container">
  <h1 class="text-center">{{__('form_content.contact')}}</h1>
  <hr>
    <div class="row justify-content-center">

      <div class="col-lg-9">
          <form action="{{route('contactdata', app()->getLocale())}}" method="post">
            @csrf
              <div class="form-group">
                <label for="name">{{__('form_content.name')}}:</label>
                <input type="text" class="form-control" name="name" id="email">
              </div>

          

              <div class="form-group">
                <label for="Mobile">{{__('form_content.mobile')}}:</label>
                <input type="tel" class="form-control" name="mobile">
              </div>

              <div class="form-group">
                <label for="comment">{{__('form_content.comment')}}:</label>
                <textarea class="form-control" name="comments"></textarea>
              </div>

              <div class="form-group">
                <button type="submit" class="mybtn btn btn-default">{{__('form_content.submit')}}</button>
              </div>

              

              
          </form>
     </div>

   

  </div>
   
</div>

@include('footer');