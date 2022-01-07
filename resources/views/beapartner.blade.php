@include('header')
<div class="section formcontain">
  <div class="container">
   
    <div class="row justify-content-center">

      <div class="col-lg-8">
          <div class="formbox">
            <h1 class="text-center"> {{__('form_content.be_partner')}}</h1>
              <form action="{{ route('beapartnersend', app()->getLocale()) }}" method="post">
                @csrf
                  <div class="form-group">
                    <label for="name">{{__('form_content.name')}}</label>
                    <input type="text" class="form-control" name="name" id="email">
                  </div>

                  <div class="form-group">
                    <label for="type">{{__('form_content.type')}}</label>
                    <select class="form-select" name="type">
                      <option selected default>{{__('form_content.choose')}}</option>
                      <option>{{__('form_content.freelancer')}}</option>
                        <option>{{__('form_content.independentorCompany')}}</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="Mobile">{{__('form_content.mobile')}}</label>
                    <input type="tel" class="form-control" name="mobile">
                  </div>

                  <div class="form-group">
                    <label for="Mobile">{{__('form_content.city')}}</label>
                    <input type="text" class="form-control" name="city">
                  </div>

                  <div class="form-group">
                    <input hidden type="text" class="form-control" value="Be a Partner" name="partnertype">
                  </div>

                  <input type="text" hidden value="none" />
                  
                  <div class="form-group">
                    <label for="Mobile">{{__('form_content.description')}}</label>
                    <textarea class="form-control" name="description"></textarea>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="mybtn btn btn-default">{{__('form_content.submit')}}</button>
                  </div>

                  

                  
              </form>
           </div>
      </div>

    

    </div>
    
  </div>
</div>
@include('footer')