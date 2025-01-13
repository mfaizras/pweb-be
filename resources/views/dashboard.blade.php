@extends('layout.layout')
@section('header-text')
    <h1>GET READY TO EXPLORE THE WORLD THAT AWAITS</h1>
    <p>A travel agency that will make your holiday easier, more enjoyable, and more memorable.</p>
@endsection

@section('content')
        <!-- Features -->
        <section class="features">
            <h1>Features</h1>
            <p>We offer various conveniences such as:</p>
            <div class="fea-base">
              <div class="fea-box">
                <i class="fa-solid fa-hotel"></i>
                <h3>Best Hotel</h3>
                <p>Stay in a renowned hotel with high level service and facilities</p>
              </div>
              <div class="fea-box">
                <i class="fa-solid fa-umbrella-beach"></i>
                <h3>Best Tourguide</h3>
                <p>
                  We bring in renowned tour guides with extensive experience and
                  knowledge.
                </p>
              </div>
              <div class="fea-box">
                <i class="fa-solid fa-plane"></i>
                <h3>Best Destination</h3>
                <p>
                  We will transport you to captivating tourist destinations that will
                  delight your eyes and rejuvenate your spirit.
                </p>
              </div>
            </div>
          </section>

              <!-- Popular Destination -->
    <section class="popular">
        <h1>Our Popular Destination</h1>
        <p>Here are some of our top-selling destination packages.</p>
        <div class="pop-box">
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
              <span>Paris - Bordeaux - Marseille</span>
              <h3>France tour | 7 Days</h3>
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
              <span>Paris - Bordeaux - Marseille</span>
              <h3>France tour | 7 Days</h3>
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
              <span>Paris - Bordeaux - Marseille</span>
              <h3>France tour | 7 Days</h3>
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
              <span>Paris - Bordeaux - Marseille</span>
              <h3>France tour | 7 Days</h3>
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
              <span>Paris - Bordeaux - Marseille</span>
              <h3>France tour | 7 Days</h3>
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
        <a href="destination.html" class="pop-button">SEE MORE</a>
      </section>
@endsection
