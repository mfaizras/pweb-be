@extends('layout.layout')
@section('header-text')
    <h1>GET READY TO EXPLORE THE WORLD THAT AWAITS</h1>
    <p>A travel agency that will make your holiday easier, more enjoyable, and more memorable.</p>
@endsection

@section('content')
    <!-- Main -->
    <section class="popular">
        <h1>Our Destination</h1>
        <p>
          We offer a wide range of travel packages to destinations all around the
          world.
        </p>
        <div class="pop-box">
            @foreach ($destinations as $destination)
            <div class="pop-dest">
                <img src="image/france.jpg" alt="" />
                <div class="details">
                  <span>{{$destination->destination}}</span>
                  <h3>{{$destination->nmae}} | 7 Days</h3>
                  <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <span>(1532)</span>
                  </div>
                  <div class="cost">
                    <h4>$1200</h4>
                  </div>
                </div>
              </div>

            @endforeach
          <div class="pop-dest">
            <img src="image/france.jpg" alt="" />
            <div class="details">
              <span>Paris - Bordeaux - Marseille</span>
              <h3>France tour | 7 Days</h3>
              <div class="star">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star"></i>
                <span>(1532)</span>
              </div>
              <div class="cost">
                <h4>$1200</h4>
              </div>
            </div>
          </div>

          <div class="pop-dest">
            <img src="image/japan.jpg" alt="" />
            <div class="details">
              <span>Tokyo - Yokohama - Fukuoka</span>
              <h3>Japan tour | 7 Days</h3>
              <div class="star">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star-half-stroke"></i>
                <span>(1532)</span>
              </div>
              <div class="cost">
                <h4>$1200</h4>
              </div>
            </div>
          </div>

          <div class="pop-dest">
            <img src="image/turkey.jpg" alt="" />
            <div class="details">
              <span>Istanbul - Antara - Antalya</span>
              <h3>Turkey tour | 7 Days</h3>
              <div class="star">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star-half-stroke"></i>
                <span>(1532)</span>
              </div>
              <div class="cost">
                <h4>$1200</h4>
              </div>
            </div>
          </div>

          <div class="pop-dest">
            <img src="image/hongkong.jpg" alt="" />
            <div class="details">
              <span>Hong Kong</span>
              <h3>Hong Kong tour | 7 Days</h3>
              <div class="star">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star-half-stroke"></i>
                <span>(1532)</span>
              </div>
              <div class="cost">
                <h4>$1200</h4>
              </div>
            </div>
          </div>

          <div class="pop-dest">
            <img src="image/southkorea.jpg" alt="" />
            <div class="details">
              <span>Seoul - Busan - Jeju</span>
              <h3>South Korea tour | 7 Days</h3>
              <div class="star">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star-half-stroke"></i>
                <span>(1532)</span>
              </div>
              <div class="cost">
                <h4>$1200</h4>
              </div>
            </div>
          </div>

          <div class="pop-dest">
            <img src="image/netherlands.jpg" alt="" />
            <div class="details">
              <span>Amsterdam - Rotterdam - Den Haag</span>
              <h3>Netherlands tour | 7 Days</h3>
              <div class="star">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star-half-stroke"></i>
                <span>(1532)</span>
              </div>
              <div class="cost">
                <h4>$1200</h4>
              </div>
            </div>
          </div>

          <div class="pop-dest">
            <img src="image/indonesia.jpg" alt="" />
            <div class="details">
              <span>Bali - Surabaya - Malang</span>
              <h3>Indonesia tour | 7 Days</h3>
              <div class="star">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star-half-stroke"></i>
                <span>(1532)</span>
              </div>
              <div class="cost">
                <h4>$1200</h4>
              </div>
            </div>
          </div>

          <div class="pop-dest">
            <img src="image/thailand.jpg" alt="" />
            <div class="details">
              <span>Bangkok - Phuket</span>
              <h3>Thailand tour | 7 Days</h3>
              <div class="star">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star-half-stroke"></i>
                <span>(1532)</span>
              </div>
              <div class="cost">
                <h4>$1200</h4>
              </div>
            </div>
          </div>

          <div class="pop-dest">
            <img src="image/philipines.jpg" alt="" />
            <div class="details">
              <span>Manila - Baguio - Davao</span>
              <h3>Philipines tour | 7 Days</h3>
              <div class="star">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star-half-stroke"></i>
                <span>(1532)</span>
              </div>
              <div class="cost">
                <h4>$1200</h4>
              </div>
            </div>
          </div>

          <div class="pop-dest">
            <img src="image/singapore.jpg" alt="" />
            <div class="details">
              <span>Singapore</span>
              <h3>Singapore tour | 7 Days</h3>
              <div class="star">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star-half-stroke"></i>
                <span>(1532)</span>
              </div>
              <div class="cost">
                <h4>$1200</h4>
              </div>
            </div>
          </div>

          <div class="pop-dest">
            <img src="image/spain.jpg" alt="" />
            <div class="details">
              <span>Madrid - Barcelona - Sevilla</span>
              <h3>Spain tour | 7 Days</h3>
              <div class="star">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star-half-stroke"></i>
                <span>(1532)</span>
              </div>
              <div class="cost">
                <h4>$1200</h4>
              </div>
            </div>
          </div>

          <div class="pop-dest">
            <img src="image/australia.jpg" alt="" />
            <div class="details">
              <span>Sydney - Canberra - Melbourne</span>
              <h3>Australia tour | 7 Days</h3>
              <div class="star">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star-half-stroke"></i>
                <span>(1532)</span>
              </div>
              <div class="cost">
                <h4>$1200</h4>
              </div>
            </div>
          </div>
        </div>
        <a href="" class="pop-button">See More</a>
      </section>
@endsection
