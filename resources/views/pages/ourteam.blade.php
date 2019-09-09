
<section class="ftco-section bg-light" id="attorneys-section">
    <div class="container">
        <div class="row justify-content-center pb-5">
      <div class="col-md-10 heading-section text-center ftco-animate">
          <span class="subheading">About Us</span>
        <h2 class="mb-4">Our Legal Attorneys</h2>
        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
      </div>
    </div>
    <div class="row">
                @foreach ($members as $member)
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="staff">
                        <div class="img-wrap d-flex align-items-stretch">
                            <div class="img align-self-stretch" style="background-image: url(upload/member/{{$member->image}});"></div>
                        </div>
                        <div class="text d-flex align-items-center pt-3 text-center">
                            <div>
                            <h3 class="mb-2" style="height: 100px;">{{$member->fullname}}</h3>
                                <span class="position mb-4">{{$member->position}}</span>
                                <span class="position mb-4">{{$member->departments->department}}</span>
                                
                                <div class="faded">
                                    <ul class="ftco-social text-center">
                        <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                      </ul>
                  </div>
                </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @foreach ($departments as $department)
        <div class="row ftco-section contact-section ftco-no-pb bg-light" id="{{$department->department}}" >
                                    <h3 class="mb-2" style="height: 100px;">{{$department->department}}</h3>
                                    @foreach ($department->member as $m)
                                    
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="staff">
                        <div class="img-wrap d-flex align-items-stretch">
                            <div class="img align-self-stretch" style="background-image: url(upload/member/{{$m->image}});"></div>
                        </div>
                        <div class="text d-flex align-items-center pt-3 text-center">
                            <div>
                            <h3 class="mb-2" style="height: 100px;">{{$m->fullname}}</h3>
                                
                                <div class="faded">
                                    <ul class="ftco-social text-center">
                        <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                      </ul>
                  </div>
                </div>
                        </div>
                    </div>
                </div>
                        @endforeach 
                    </div>
                    @endforeach
    </div>
</section>