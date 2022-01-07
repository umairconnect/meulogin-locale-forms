
@include('header');

<div class="container">
  <h1 class="text-center">{{__('form_content.support')}}</h1>
  <hr>
  <div class="row justify-content-center">

    <div class="col-lg-9">
          <form action="{{ route('addSupport', app()->getLocale()) }}" method="post">
            @csrf
              <div class="form-group">
                <label for="name">{{__('form_content.groupname')}}:</label>
                <input type="text" class="form-control" name="groupname" id="groupname">
              </div>

          

              <div class="form-group">
                <label for="Company">{{__('form_content.company')}}:</label>
                <input type="text" class="form-control" name="company">
              </div>

              <div class="form-group">
                <label for="name">{{__('form_content.name')}}</label>
                <input type="text" class="form-control" name="name" />
              </div>

              <div class="form-group">
                <label for="Mobile">{{__('form_content.mobile')}}:</label>
                <input type="number" class="form-control" name="mobile"></textarea>
              </div>

              <div class="form-group">
                <label for="assist">{{__('form_content.needassistance')}}:</label>
                <select class="form-select" name="assist">
                    <option selected default>{{__('form_content.choose')}}</option>
                    <option>{{__('form_content.desktopmessenger')}} </option>
                    <option>{{__('form_content.clientrecoverbot')}}  </option>
                    <option>{{__('form_content.birthdaybot')}} </option>
                    <option>{{__('form_content.QRCode')}} </option>
                    <option>{{__('form_content.linkforbio')}} </option>
                    <option>{{__('form_content.autoresponders')}} </option>
                    <option>{{__('form_content.socialwifi')}} </option>
                    <option>{{__('form_content.surveys')}} </option>
                    <option>{{__('form_content.contactform')}} </option>
                </select>
              </div>


              <div class="form-group">
                 <button type="submit" class="btn mybtn btn-default">Submit</button>
              </div>

              

              
          </form>
     </div>

  </div>
   
</div>

@include('footer');