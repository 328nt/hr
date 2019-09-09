
    <section class="ftco-section" id="blog-section">
        <div class="container">
          <div class="row justify-content-center mb-5 pb-5">
            <div class="col-md-10 heading-section text-center ftco-animate">
              <span class="subheading">Blog</span>
              <h2 class="mb-4">Our Blog</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
            </div>
          </div>
          <div class="row d-flex">
            @foreach ($news as $new)
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry justify-content-end">
                    <div class="text">
                        <h3 class="heading"><a href="news/{{$new->id}}.html">{{$new->title}}</a></h3>
                    </div>
                <a href="single.html" width=100%; class="block-20" style="background-image: url('upload/news/{{$new->image}}');">
                </a>
                <div class="text mt-3 float-right d-block">
                  <p>{{$new->description}}</p>
                  <div class="d-flex align-items-center mt-4 meta">
                      <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
                      <p class="ml-auto mb-0">
                          <a href="#" class="mr-2">Admin</a>
                          <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                      </p>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </section>