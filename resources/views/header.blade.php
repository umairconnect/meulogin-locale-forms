<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
  
        <link rel="stylesheet" href="{{ URL::asset('css/custom.css') }}" type="text/css" />       
        <link rel="stylesheet" href="{{ URL::asset('css/animation.css') }}" type="text/css" />        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


     

       
    </head>
    <body class="antialiased">
       <div class="navbar-container">
        <nav class="navbar navbar-expand-lg navbar-light" data-sticky="top" style="top: 0px;">
            <div class="container-fluid">
                <a class="navbar-brand logo_text navbar-brand-dynamic-color fade-page" href="/"
                    style="color: #b80cc2; margin-left: 20px; font-size: 40px;">
                    <img src="{{ URL::asset('images/logo_cdsol_trans.png') }}" width="190" alt="">
                </a>
                
             

                <div class="collapse navbar-collapse order-3 order-lg-2 justify-content-lg-end" id="navigation-menu">
                    <ul class="navbar-nav my-3 my-lg-0">

                    <li class="nav-item nav_text">
                            <div class="">
                                <a type="button" class="nav-link nav-item" data-bs-toggle="modal" data-bs-target="#bePartner">
                                {{__('form_content.be_partner')}}
                                </a>
                            </div>
                    </li>



      

                        <li class="nav-item nav_text">
                            <div class="">
                                <a type="button" class="nav-link nav-item" data-bs-toggle="modal" data-bs-target="#techPartner">
                                 {{__('form_content.tech_partner')}}
                                </a>
                            </div>
                        </li>

                        <li class="nav-item nav_text">
                            <div class="">
                                <a type="button" class="nav-link nav-item" data-bs-toggle="modal" data-bs-target="#contactmodal">
                                {{__('form_content.contact')}}
                                </a>
                            </div>
                        </li>
                        
                        
                        <li class="nav-item nav_text">
                            <div class="">
                                <a type="button" class="nav-link nav-item" data-bs-toggle="modal" data-bs-target="#supportmodal">
                                {{__('form_content.support')}}
                                </a>
                            </div>
                        </li>


                   <!-- <li class="nav-item nav_text">
                            <div class="">
                                <a href="{{ route('beapartner', app()->getLocale()) }}" class="nav-link nav-item"
                                    role="button"> {{__('form_content.be_partner')}}</a>
                                    
                            </div>
                        </li> -->

                       <!-- <li class="nav-item nav_text">
                            <div class="">
                                <a href="{{ route('techpartner', app()->getLocale()) }}" class="nav-link nav-item"
                                    role="button"> {{__('form_content.tech_partner')}}</a>
                                    
                            </div>
                        </li> -->

                        <!-- <li class="nav-item nav_text">
                            <div class="">
                                <a href="{{ route('contact', app()->getLocale()) }}" class="nav-link nav-item"
                                    role="button"> {{__('form_content.contact')}}</a>
                                    
                            </div>
                        </li> -->

                        <!-- <li class="nav-item nav_text">
                            <div class="">
                                <a href="{{route('support', app()->getLocale())}}" class="nav-link nav-item"
                                    role="button"> {{__('form_content.support')}}</a>
                                    
                            </div>
                        </li> -->

<!-- 
                        <li class="nav-item nav_text">
                            <div class="">
                                <a aria-expanded="false" aria-haspopup="true" href="#" class="nav-link nav-item"
                                    role="button"> Planos</a>
                            </div>
                        </li> -->
                        <!--<li class="nav-item nav_text">-->
                        <!--    <div class="">-->
                        <!--        <a aria-expanded="false" aria-haspopup="true" href="#" class="nav-link nav-item"-->
                        <!--            role="button"> Login</a>-->
                        <!--    </div>-->
                        <!--</li>-->
                       
                          <li style="margin-left: 0px;">
                            <a href="#" class="nav_btn ml-lg-4 mr-md-4 mr-lg-0 d-none d-sm-block order-lg-3">Login
                            </a>
                         </li>
                        
                        <li style="margin-left: 0px; ">
                            <a href="#" class="nav_btn ml-lg-4 mr-md-4 mr-lg-0 d-none d-sm-block order-lg-3">Ativar
                                Agora</a>
                        </li>

                        <li>
                               <a href="en">
                                      <img src="http://321shortlink.com/images/flag_usa.png" width="37">
                                 </a> 
                        </li>

                        <li>
                            <a href="pt">
                                      <img src="http://321shortlink.com/images/flag_brazil.png" width="37">
                             </a>  
                         </li>
                      
                        
                    </ul>
                    
                </div>
               
            </div>
        </nav>
     
    </div>




<!-- Be A Partner Modal Start here -->
<div class="modal fade" id="bePartner">
  <div class="modal-dialog">
    <div class="modal-content">

    <div class="modal-header">
        <h1 class="modal_title"> {{__('form_content.be_partner')}}</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">
      <div class="">

          <div class="">
  
              <form action="{{ route('beapartnersend', app()->getLocale()) }}" method="post" class="formbox">
                @csrf
                  <div class="form-group">
                    <label for="name">{{__('form_content.name')}}</label>
                    <input type="text" class="form-control" name="name" id="email" placeholder="{{__('form_content.name')}}">
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
                    <input type="tel" class="form-control" name="mobile" placeholder="{{__('form_content.mobile')}}">
                  </div>

                  <div class="form-group">
                    <label for="Mobile">{{__('form_content.city')}}</label>
                    <input type="text" class="form-control" name="city" placeholder="{{__('form_content.city')}}">
                  </div>

                  <div class="form-group">
                    <input hidden type="text" class="form-control" value="Be a Partner" name="partnertype">
                  </div>

                  <input type="text" hidden value="none" />
                  
                  <div class="form-group">
                    <label for="Mobile">{{__('form_content.description')}}</label>
                    <textarea class="form-control" name="description" placeholder="{{__('form_content.description')}}"></textarea>
                  </div>

                  <div class="form-group text-center">
                    <button type="submit" class="mybtn btn btn-default">{{__('form_content.submit')}}</button>
                  </div>

                  

                  
              </form>
           </div>
      </div>

      </div>


    </div>
  </div>
</div>
<!-- Be A Partner Modal end here -->


<!-- Technical Partner Modal Start here -->
<div class="modal fade" id="techPartner">
  <div class="modal-dialog">
    <div class="modal-content">

    <div class="modal-header">
        <h1 class="modal_title">  {{__('form_content.tech_partner')}}</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">
      <div class="">

          <div class="">
  
          <form method="post" action="{{ route('techpartnersend', app()->getLocale()) }}" class="formbox">
    
            @csrf
              <div class="form-group">
                <label for="name">{{__('form_content.name')}}</label>
                <input type="text" class="form-control" name="name" id="email" placeholder="{{__('form_content.name')}}">
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
                <input type="tel" class="form-control" name="mobile" placeholder="{{__('form_content.mobile')}}">
              </div>

              <div class="form-group">
                <label for="Mobile">{{__('form_content.city')}}</label>
                <input type="text" class="form-control" name="city" placeholder="{{__('form_content.city')}}">
              </div>

              <div class="form-group">
                <input hidden type="text" class="form-control" value="Technical partner" name="partnertype">
              </div>

              <div class="form-group">
                <label for="type">{{__('form_content.currentservices')}}</label>

                <select class="form-select" name="currentservice">
                    <option selected default>{{__('form_content.choose')}}</option>
                    <option>{{__('form_content.computermaintenance')}}</option>
                    <option>{{__('form_content.softwareinstalation')}}</option>
                    <option>{{__('form_content.cableandnetworking')}}</option>
                    <option>{{__('form_content.wifi')}}</option>
                </select>
              </div>

              
              <div class="form-group">
                <label for="Mobile">{{__('form_content.description')}}</label>
                <textarea class="form-control" name="description" placeholder="{{__('form_content.description')}}"></textarea>
              </div>

        

              <div class="form-group text-center">
                <button type="submit" class="btn mybtn btn-default">{{__('form_content.submit')}}</button>
              </div>

              

              
          </form>
           </div>
      </div>

      </div>


    </div>
  </div>
</div>
<!-- Technical Partner Modal end here -->


<!-- Contact Modal Start here -->
<div class="modal fade" id="contactmodal">
  <div class="modal-dialog">
    <div class="modal-content">

    <div class="modal-header">
        <h1 class="modal_title"> {{__('form_content.contact')}}</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">
      <div class="">

          <div class="">
  
          <form action="{{route('contactdata', app()->getLocale())}}" method="post" class="formbox">
        
            @csrf
              <div class="form-group">
                <label for="name">{{__('form_content.name')}}</label>
                <input type="text" class="form-control" name="name" id="email" placeholder="{{__('form_content.name')}}">
              </div>

          

              <div class="form-group">
                <label for="Mobile">{{__('form_content.mobile')}}</label>
                <input type="tel" class="form-control" name="mobile" placeholder="{{__('form_content.mobile')}}">
              </div>

              <div class="form-group">
                <label for="comment">{{__('form_content.comment')}}</label>
                <textarea class="form-control" name="comments" placeholder="{{__('form_content.comment')}}"></textarea>
              </div>

              <div class="form-group text-center">
                <button type="submit" class="mybtn btn btn-default">{{__('form_content.submit')}}</button>
              </div>

              

              
          </form>
           </div>
      </div>

      </div>


    </div>
  </div>
</div>
<!-- Contact Modal end here -->


<!-- Support Modal Start here -->
<div class="modal fade" id="supportmodal">
  <div class="modal-dialog">
    <div class="modal-content">

    <div class="modal-header">
        <h1 class="modal_title">{{__('form_content.support')}}</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">
      <div class="">

          <div class="">
  
          <form action="{{ route('addSupport', app()->getLocale()) }}" method="post" class="formbox">
       
            @csrf
              <div class="form-group">
                <label for="name">{{__('form_content.groupname')}}</label>
                <input type="text" class="form-control" name="groupname" id="groupname" placeholder="{{__('form_content.groupname')}}">
              </div>

          

              <div class="form-group">
                <label for="Company">{{__('form_content.company')}}</label>
                <input type="text" class="form-control" name="company" placeholder="{{__('form_content.company')}}">
              </div>

              <div class="form-group">
                <label for="name">{{__('form_content.name')}}</label>
                <input type="text" class="form-control" name="name" placeholder="{{__('form_content.name')}}" />
              </div>

              <div class="form-group">
                <label for="Mobile">{{__('form_content.mobile')}}</label>
                <input type="number" class="form-control" name="mobile" placeholder="{{__('form_content.mobile')}}"></textarea>
              </div>

              <div class="form-group">
                <label for="assist">{{__('form_content.needassistance')}}</label>
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


              <div class="form-group text-center">
                 <button type="submit" class="btn mybtn btn-default">Submit</button>
              </div>

              

              
          </form>
           </div>
      </div>

      </div>


    </div>
  </div>
</div>
<!-- Support Modal end here -->