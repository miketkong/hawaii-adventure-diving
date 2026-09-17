Task: See if you can create a working swiper carousel based on the following code from the Startbox Demo site, but use the images that I supply in this document.

1. Use the code below as a reference for structure and implementation.

2. Check this website's codebase and verify that the code that's present can use the implementation.

3. Stop and let me know if there are any problems. If not, keep going.

4. Implement the swiper in a new doc at the root directory. Call the file swiper-test.njk

5. Replace the images with the demo with the images in images/team-photos.

Here's the code:

<div class="swiper animated" data-swiper-slides="1" data-swiper-breakpoints="828:2, 1024:3" data-swiper-gap="30" data-swiper-grabcursor="true" data-show="startbox" style="transform: translateY(0px); transition-duration: 500ms; opacity: 1;">
    <div class="swiper-container swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
        <div class="swiper-wrapper" id="swiper-wrapper-4c3f2e14e83a210f5" aria-live="polite" style="cursor: grab; transform: translate3d(-1170px, 0px, 0px); transition-duration: 0ms;">
            <div class="swiper-slide pt-15" role="group" aria-label="1 / 4" style="width: 360px; margin-right: 30px;">
                <div data-filters="branding">
                    <!-- Portfolio--><a class="card card-portfolio  image-link overflow-hidden lift rounded-4" href="assets/img/home-2-slider-1-900x830.jpg"><span class="card-img" data-img-height="" style="--img-height: 92%;"><img loading="lazy" src="assets/img/home-2-slider-1-900x830.jpg" alt=""></span></a>
                </div>
            </div>
            <div class="swiper-slide pt-15" role="group" aria-label="2 / 4" style="width: 360px; margin-right: 30px;">
                <div data-filters="branding">
                    <!-- Portfolio--><a class="card card-portfolio  image-link overflow-hidden lift rounded-4" href="assets/img/home-2-slider-2-900x830.jpg"><span class="card-img" data-img-height="" style="--img-height: 92%;"><img loading="lazy" src="assets/img/home-2-slider-2-900x830.jpg" alt=""></span></a>
                </div>
            </div>
            <div class="swiper-slide pt-15 swiper-slide-prev" role="group" aria-label="3 / 4" style="width: 360px; margin-right: 30px;">
                <div data-filters="branding">
                    <!-- Portfolio--><a class="card card-portfolio  image-link overflow-hidden lift rounded-4" href="assets/img/home-2-slider-3-900x830.jpg"><span class="card-img" data-img-height="" style="--img-height: 92%;"><img loading="lazy" src="assets/img/home-2-slider-3-900x830.jpg" alt=""></span></a>
                </div>
            </div>
            <div class="swiper-slide pt-15 swiper-slide-active" role="group" aria-label="4 / 4" style="width: 360px; margin-right: 30px;">
                <div data-filters="branding">
                    <!-- Portfolio--><a class="card card-portfolio  image-link overflow-hidden lift rounded-4" href="assets/img/home-2-slider-4-900x830.jpg"><span class="card-img" data-img-height="" style="--img-height: 92%;"><img loading="lazy" src="assets/img/home-2-slider-4-900x830.jpg" alt=""></span></a>
                </div>
            </div>
        </div>
    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
    <div class="swiper-button-prev swiper-button-position-1 swiper-button-white shadow" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-4c3f2e14e83a210f5" aria-disabled="false"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="14" fill="none">
            <path fill="currentColor" fill-rule="evenodd" d="m3.96 6.15 5.08-4.515L7.91.365.445 7l7.465 6.635 1.13-1.27L3.96 7.85h15.765v-1.7H3.96Z" clip-rule="evenodd"></path>
        </svg></div>
    <div class="swiper-button-next swiper-button-position-1 swiper-button-white shadow swiper-button-disabled" tabindex="-1" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-4c3f2e14e83a210f5" aria-disabled="true"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="14" fill="none">
            <path fill="currentColor" fill-rule="evenodd" d="m16.21 6.15-5.08-4.515 1.13-1.27L19.725 7l-7.465 6.635-1.13-1.27 5.08-4.515H.445v-1.7H16.21Z" clip-rule="evenodd"></path>
        </svg></div>
</div>