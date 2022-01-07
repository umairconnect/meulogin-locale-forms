@include('header');

<div class="container">
  <h1 class="text-center"> {{__('form_content.tech_partner')}}</h1>
  <hr>
  <div class="row justify-content-center">

     <div class="col-lg-9">
          <form method="post" action="{{ route('techpartnersend', app()->getLocale()) }}">
            @csrf
              <div class="form-group">
                <label for="name">{{__('form_content.name')}}:</label>
                <input type="text" class="form-control" name="name" id="email">
              </div>

              <div class="form-group">
                <label for="type">{{__('form_content.type')}}:</label>
                <select class="form-select" name="type">
                  <option selected default>{{__('form_content.choose')}}</option>
                  <option>{{__('form_content.freelancer')}}</option>
                    <option>{{__('form_content.independentorCompany')}}</option>
                </select>
              </div>

              <div class="form-group">
                <label for="Mobile">{{__('form_content.mobile')}}:</label>
                <input type="tel" class="form-control" name="mobile">
              </div>

              <div class="form-group">
                <label for="Mobile">{{__('form_content.city')}}:</label>
                <input type="text" class="form-control" name="city">
              </div>

              <div class="form-group">
                <input hidden type="text" class="form-control" value="Technical partner" name="partnertype">
              </div>

              <div class="form-group">
                <label for="type">{{__('form_content.currentservices')}}:</label>

                <select class="form-select" name="currentservice">
                    <option selected default>{{__('form_content.choose')}}</option>
                    <option>{{__('form_content.computermaintenance')}}</option>
                    <option>{{__('form_content.softwareinstalation')}}</option>
                    <option>{{__('form_content.cableandnetworking')}}</option>
                    <option>{{__('form_content.wifi')}}</option>
                </select>
              </div>

              
              <div class="form-group">
                <label for="Mobile">{{__('form_content.description')}}:</label>
                <textarea class="form-control" name="description"></textarea>
              </div>

        

              <div class="form-group">
                <button type="submit" class="btn mybtn btn-default">{{__('form_content.submit')}}</button>
              </div>

              

              
          </form>
     </div>


  </div>
   
</div>

@include('footer');