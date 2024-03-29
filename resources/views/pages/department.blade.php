<section class="ftco-section ftco-no-pb ftco-services" id="practice-section">
    <div class="container">
        <div class="row justify-content-center pb-5">
        <div class="col-md-10 heading-section text-center ftco-animate">
            <span class="subheading">Practice Areas</span>
          <h2 class="mb-4">Danh sách phòng ban IEG</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
        </div>
      </div>
      <div class="row no-gutters">
        <div class="col-md-5 col-lg-3 ftco-animate py-4 nav-link-wrap">
          <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            {{-- <a class="nav-link px-4 py-1 active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true"><span class="mr-3 flaticon-ideas"></span> Family Law</a> --}}


            @foreach ($departments as $department)
                
            <a class="nav-link px-4 py-1 " id="v-pills-{{$department->id}}-tab" data-toggle="pill" href="#v-pills-{{$department->id}}" role="tab" aria-controls="v-pills-{{$department->id}}" aria-selected="false"><span class="mr-3 flaticon-flasks"></span> {{$department->department}}</a>
            @endforeach

            {{-- <a class="nav-link px-4 py-1" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false"><span class="mr-3 flaticon-flasks"></span> Business Law</a>

            <a class="nav-link px-4 py-1" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false"><span class="mr-3 flaticon-analysis"></span> Insurance Law</a>

            <a class="nav-link px-4 py-1" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4" role="tab" aria-controls="v-pills-4" aria-selected="false"><span class="mr-3 flaticon-web-design"></span> Criminal Law</a>


            <a class="nav-link px-4 py-1" id="v-pills-5-tab" data-toggle="pill" href="#v-pills-5" role="tab" aria-controls="v-pills-5" aria-selected="false"><span class="mr-3 flaticon-innovation"></span> Employment Law</a>

            <a class="nav-link px-4 py-1" id="v-pills-6-tab" data-toggle="pill" href="#v-pills-6" role="tab" aria-controls="v-pills-6" aria-selected="false"><span class="mr-3 flaticon-idea"></span> Fire Accident</a>

            <a class="nav-link px-4 py-1" id="v-pills-7-tab" data-toggle="pill" href="#v-pills-7" role="tab" aria-controls="v-pills-7" aria-selected="false"><span class="mr-3 flaticon-idea"></span> Financial Law</a>

            <a class="nav-link px-4 py-1" id="v-pills-8-tab" data-toggle="pill" href="#v-pills-8" role="tab" aria-controls="v-pills-8" aria-selected="false"><span class="mr-3 flaticon-idea"></span> Drug Offenses</a>

            <a class="nav-link px-4 py-1" id="v-pills-9-tab" data-toggle="pill" href="#v-pills-9" role="tab" aria-controls="v-pills-9" aria-selected="false"><span class="mr-3 flaticon-idea"></span> Sexual Offenses</a>

            <a class="nav-link px-4 py-1" id="v-pills-10-tab" data-toggle="pill" href="#v-pills-10" role="tab" aria-controls="v-pills-10" aria-selected="false"><span class="mr-3 flaticon-ux-design"></span> Property Law</a> --}}
          </div>
        </div>
        <div class="col-md-7 col-lg-9 ftco-animate p-4 p-md-5 d-flex align-items-center">
          
          <div class="tab-content pl-lg-4" id="v-pills-tabContent">


            {{-- <div class="tab-pane fade show active py-0 py-lg-5" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">
                <div class="d-lg-flex">
                    <div class="icon-law mr-md-4 mr-lg-5">
                      <span class="icon mb-3 d-block flaticon-family"></span>
                    </div>
                    <div class="text">
                      <h2 class="mb-4">Family Law</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur</p>
                      <p>Inventore fugit error iure nisi reiciendis fugiat illo pariatur quam sequi quod iusto facilis officiis nobis sit quis molestias asperiores rem, blanditiis! Commodi exercitationem vitae deserunt qui nihil ea, tempore et quam natus quaerat doloremque.</p>
                      <p><a href="#" class="btn btn-primary px-4 py-3">Learn More</a></p>
                  </div>
              </div>
            </div> --}}

            @foreach ($departments as $department)
            <div class="tab-pane fade show py-0 py-lg-5" id="v-pills-{{$department->id}}" role="tabpanel" aria-labelledby="v-pills-{{$department->id}}-tab">
                <div class="d-lg-flex">
                    <div class="icon-law mr-md-4 mr-lg-5">
                      <span class="icon mb-3 d-block 
                      @if ($department->id === 1)
                      flaticon-family
                      @else
                      flaticon-employee
                      @endif"></span>
                    </div>
                    <div class="text">
                      <h2 class="mb-4">{{$department->department}}</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur</p>
                      <p>{{$department->content}}</p>
                      <p><a href="#{{$department->department}}" class="btn btn-primary px-4 py-3">Danh sách nhân viên</a></p>
                  </div>
              </div>
            </div>
            @endforeach

            {{-- <div class="tab-pane fade py-0 py-lg-5" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab">
                <div class="d-lg-flex">
                    <div class="icon-law mr-md-4 mr-lg-5">
                      <span class="icon mb-3 d-block flaticon-shield"></span>
                  </div>
                  <div class="text">
                      <h2 class="mb-4">Insurance Law</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur</p>
                      <p>Inventore fugit error iure nisi reiciendis fugiat illo pariatur quam sequi quod iusto facilis officiis nobis sit quis molestias asperiores rem, blanditiis! Commodi exercitationem vitae deserunt qui nihil ea, tempore et quam natus quaerat doloremque.</p>
                      <p><a href="#" class="btn btn-primary px-4 py-3">Learn More</a></p>
                  </div>
              </div>
            </div>

            <div class="tab-pane fade py-0 py-lg-5" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-4-tab">
                <div class="d-lg-flex">
                    <div class="icon-law mr-md-4 mr-lg-5">
                      <span class="icon mb-3 d-block flaticon-handcuffs"></span>
                  </div>
                  <div class="text">
                      <h2 class="mb-4">Criminal Law</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur</p>
                      <p>Inventore fugit error iure nisi reiciendis fugiat illo pariatur quam sequi quod iusto facilis officiis nobis sit quis molestias asperiores rem, blanditiis! Commodi exercitationem vitae deserunt qui nihil ea, tempore et quam natus quaerat doloremque.</p>
                      <p><a href="#" class="btn btn-primary px-4 py-3">Learn More</a></p>
                  </div>
              </div>
            </div>

            <div class="tab-pane fade py-0 py-lg-5" id="v-pills-5" role="tabpanel" aria-labelledby="v-pills-5-tab">
                <div class="d-lg-flex">
                    <div class="icon-law mr-md-4 mr-lg-5">
                      <span class="icon mb-3 d-block flaticon-employee"></span>
                  </div>
                  <div class="text">
                      <h2 class="mb-4">Employment Law</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur</p>
                      <p>Inventore fugit error iure nisi reiciendis fugiat illo pariatur quam sequi quod iusto facilis officiis nobis sit quis molestias asperiores rem, blanditiis! Commodi exercitationem vitae deserunt qui nihil ea, tempore et quam natus quaerat doloremque.</p>
                      <p><a href="#" class="btn btn-primary px-4 py-3">Learn More</a></p>
                  </div>
              </div>
            </div>

            <div class="tab-pane fade py-0 py-lg-5" id="v-pills-6" role="tabpanel" aria-labelledby="v-pills-6-tab">
                <div class="d-lg-flex">
                    <div class="icon-law mr-md-4 mr-lg-5">
                      <span class="icon mb-3 d-block flaticon-fire"></span>
                  </div>
                  <div class="text">
                      <h2 class="mb-4">Fire Accident</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur</p>
                      <p>Inventore fugit error iure nisi reiciendis fugiat illo pariatur quam sequi quod iusto facilis officiis nobis sit quis molestias asperiores rem, blanditiis! Commodi exercitationem vitae deserunt qui nihil ea, tempore et quam natus quaerat doloremque.</p>
                      <p><a href="#" class="btn btn-primary px-4 py-3">Learn More</a></p>
                  </div>
              </div>
            </div>

            <div class="tab-pane fade py-0 py-lg-5" id="v-pills-7" role="tabpanel" aria-labelledby="v-pills-7-tab">
                <div class="d-lg-flex">
                    <div class="icon-law mr-md-4 mr-lg-5">
                      <span class="icon mb-3 d-block flaticon-money"></span>
                  </div>
                  <div class="text">
                      <h2 class="mb-4">Financial Law</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur</p>
                      <p>Inventore fugit error iure nisi reiciendis fugiat illo pariatur quam sequi quod iusto facilis officiis nobis sit quis molestias asperiores rem, blanditiis! Commodi exercitationem vitae deserunt qui nihil ea, tempore et quam natus quaerat doloremque.</p>
                      <p><a href="#" class="btn btn-primary px-4 py-3">Learn More</a></p>
                  </div>
              </div>
            </div>

            <div class="tab-pane fade py-0 py-lg-5" id="v-pills-8" role="tabpanel" aria-labelledby="v-pills-8-tab">
                <div class="d-lg-flex">
                    <div class="icon-law mr-md-4 mr-lg-5">
                      <span class="icon mb-3 d-block flaticon-medicine"></span>
                  </div>
                  <div class="text">
                      <h2 class="mb-4">Drug Offenses</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur</p>
                      <p>Inventore fugit error iure nisi reiciendis fugiat illo pariatur quam sequi quod iusto facilis officiis nobis sit quis molestias asperiores rem, blanditiis! Commodi exercitationem vitae deserunt qui nihil ea, tempore et quam natus quaerat doloremque.</p>
                      <p><a href="#" class="btn btn-primary px-4 py-3">Learn More</a></p>
                  </div>
              </div>
            </div>

            <div class="tab-pane fade py-0 py-lg-5" id="v-pills-9" role="tabpanel" aria-labelledby="v-pills-9-tab">
                <div class="d-lg-flex">
                    <div class="icon-law mr-md-4 mr-lg-5">
                      <span class="icon mb-3 d-block flaticon-handcuffs"></span>
                  </div>
                  <div class="text">
                      <h2 class="mb-4">Sexual Offenses</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur</p>
                      <p>Inventore fugit error iure nisi reiciendis fugiat illo pariatur quam sequi quod iusto facilis officiis nobis sit quis molestias asperiores rem, blanditiis! Commodi exercitationem vitae deserunt qui nihil ea, tempore et quam natus quaerat doloremque.</p>
                      <p><a href="#" class="btn btn-primary px-4 py-3">Learn More</a></p>
                  </div>
              </div>
            </div>

            <div class="tab-pane fade py-0 py-lg-5" id="v-pills-10" role="tabpanel" aria-labelledby="v-pills-10-tab">
                <div class="d-lg-flex">
                    <div class="icon-law mr-md-4 mr-lg-5">
                      <span class="icon mb-3 d-block flaticon-house"></span>
                  </div>
                  <div class="text">
                      <h2 class="mb-4">Property Law</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur</p>
                      <p>Inventore fugit error iure nisi reiciendis fugiat illo pariatur quam sequi quod iusto facilis officiis nobis sit quis molestias asperiores rem, blanditiis! Commodi exercitationem vitae deserunt qui nihil ea, tempore et quam natus quaerat doloremque.</p>
                      <p><a href="#" class="btn btn-primary px-4 py-3">Learn More</a></p>
                  </div>
              </div>
            </div> --}}
          </div>
        </div>
      </div>
    </div>
  </section>