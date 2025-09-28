
<?php get_header(); ?>
      <div class="search-dropdown">
        <span class="search-dropdown__text">Search result:</span>
        <div
          class="search-dropdown__list"
          id="search-results"
          data-text-no-results="No results found"
        ></div>

        <div class="search-dropdown__more-wrapper">
          <a
            href="?s=#"
            class="button button--secondary search-dropdown__more"
            data-wpel-link="internal"
          >
            More details
            <span class="button__icon-box">
              <svg
                class="icon button__icon"
                viewBox="0 0 24 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z"
                  fill="currentColor"
                />
              </svg>
              <svg
                class="icon button__icon"
                viewBox="0 0 24 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z"
                  fill="currentColor"
                />
              </svg>
            </span>
          </a>
        </div>
      </div>
      <div class="search-dropdown-backdrop"></div>
    </header>

    <main class="content">
      <div class="section-intro animation-trigger">
        <div id="intro-slider" class="swiper intro-slider">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide intro-slider__slide">
              <video
                playsinline
                muted
                autoplay
                loop
                class="intro-slider__background"
                src="/wp-content/themes/cyberxs/public/image/cover_video.mp4"
              ></video>

              <div class="intro-slider__content">
                <div class="title_wrapper">
                  <h1 class="heading heading--h1 intro-slider__heading" style="color: white;">
                    Gateway to <br />Next-Gen<br /> Cybersecurity &<br /> Forensics

                  </h1>
                </div>
                <div class="intro-slider__info">
                  <p class="intro-slider__text">
                    <!-- Cyberxs connects world-leading vendors with partners, delivering trusted solutions that protect, investigate, and empower the digital world. -->
                     At Cyberxs, we connect world-leading technology vendors with trusted partners, delivering innovative solutions that protect the digital world, reveal critical insights, and empower businesses to move forward with confidence.
                  </p>
<style>.btn-group {
  display: flex;
  gap: 15px;         /* spacing between buttons */
  flex-wrap: wrap;   /* makes them stack on small screens */
}

.btn-group .button {
  white-space: nowrap; /* prevents button text from breaking */
}
</style>
                  <div class="btn-group">
                  <a
                    href="<?php echo get_permalink(61); ?>"
                    class="button button--default intro-slider__button"
                    data-wpel-link="internal"
                  >
                    Become a partner
                    <svg
                      class="icon button__icon"
                      viewBox="0 0 24 24"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z"
                        fill="currentColor"
                      />
                    </svg>
                  </a>
                  
                  <!-- <a
                    href="partners/index.html"
                    class="button button--default intro-slider__button"
                    data-wpel-link="internal"
                  >
                    Explore Solutions
                    <svg
                      class="icon button__icon"
                      viewBox="0 0 24 24"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z"
                        fill="currentColor"
                      />
                    </svg>
                  </a> -->
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div
            class="swiper-pagination slider-pagination intro-slider__pagination"
          ></div>
          <div class="swiper-controls intro-slider__controls">
            <button
              type="button"
              class="button button--secondary swiper-controls__item intro-slider-swiper-controls__item--prev"
            >
              <span class="button__icon-box">
                <svg
                  class="icon button__icon"
                  viewBox="0 0 24 24"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M10.8284 12.0007L15.7782 16.9504L14.364 18.3646L8 12.0007L14.364 5.63672L15.7782 7.05093L10.8284 12.0007Z"
                    fill="currentColor"
                  />
                </svg>
                <svg
                  class="icon button__icon"
                  viewBox="0 0 24 24"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M10.8284 12.0007L15.7782 16.9504L14.364 18.3646L8 12.0007L14.364 5.63672L15.7782 7.05093L10.8284 12.0007Z"
                    fill="currentColor"
                  />
                </svg>
              </span>
            </button>
            <button
              type="button"
              class="button button--secondary swiper-controls__item intro-slider-swiper-controls__item--next"
            >
              <span class="button__icon-box">
                <svg
                  class="icon button__icon"
                  viewBox="0 0 24 24"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M13.1715 12.0007L8.22168 7.05093L9.6359 5.63672L15.9999 12.0007L9.6359 18.3646L8.22168 16.9504L13.1715 12.0007Z"
                    fill="currentColor"
                  />
                </svg>
                <svg
                  class="icon button__icon"
                  viewBox="0 0 24 24"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M13.1715 12.0007L8.22168 7.05093L9.6359 5.63672L15.9999 12.0007L9.6359 18.3646L8.22168 16.9504L13.1715 12.0007Z"
                    fill="currentColor"
                  />
                </svg>
              </span>
            </button>
          </div>
        </div>
      </div>

      <!-- <div id="marquee-text" class="marquee marquee-text">
        <div id="marquee-text-container" class="marquee__container">
          <a
            href="https://itarena.ua/"
            class="marquee__item marquee-text__item"
            data-wpel-link="external"
            target="_blank"
            rel="nofollow"
          >
            Cyberxs at IT Arena 2025
          </a>
          <a
            href="https://itarena.ua/"
            class="marquee__item marquee-text__item"
            data-wpel-link="external"
            target="_blank"
            rel="nofollow"
          >
            Cyberxs at IT Arena 2025
          </a>
          <a
            href="https://itarena.ua/"
            class="marquee__item marquee-text__item"
            data-wpel-link="external"
            target="_blank"
            rel="nofollow"
          >
            Cyberxs at IT Arena 2025
          </a>
        </div> -->
      </div>

      <section class="section section-solution">
        <div
          class="section-solution__circle-bg-box"
          style="
            background-image: url('/wp-content/themes/cyberxs/public/image/solution-cards/circle-bg.webp');
          "
        ></div>
        <div class="container section-solution__container animation-trigger">
          <div class="section__header">
            <span class="section__subheading animated-subheading"
              >Solutions</span
            >
            <h2 class="heading heading--h3 section__heading animated-heading">
             <!-- At Cyberxs, we don’t just “distribute boxes.” We <span>enable smarter security</span>, sharper forensics, and stronger partnerships. Whether you’re a reseller looking to expand your portfolio, or a vendor entering new markets, Cyberxs makes sure you don’t just participate — you dominate. -->
              At Cyberxs, we go beyond <span>distribution</span>; delivering smarter <span>security</span>, sharper forensics, and stronger partnerships to help resellers grow and vendors lead new markets.
            </h2>
          </div>
          <div class="section-solution__cards stacked-cards">
            <div
              class="section-solution__card solution-card stacked-card"
              data-index="0"
            >
              <div class="solution-card__inner">
                <img
                  src="/wp-content/themes/cyberxs/public/image/solution-cards/sphere-bg.webp"
                  alt="Головна- image 3"
                  class="solution-card__sphere"
                  loading="lazy"
                />
                <div class="solution-card__header">
                  <h3 class="solution-card__heading">Cybersecurity Solutions</h3>
                </div>
                <div class="solution-card__content">
                  <a
                    href="<?php echo get_permalink(38); ?>"
                    class="solution-card__item"
                    data-wpel-link="internal"
                  >
                    Threat Detection & Intelligence
                  </a>
                  <a
                    href="<?php echo get_permalink(44); ?>"
                    class="solution-card__item"
                    data-wpel-link="internal"
                  >
                    Application & Data Security
                  </a>
                  <a
                    href="<?php echo get_permalink(46); ?>"
                    class="solution-card__item"
                    data-wpel-link="internal"
                  >
                   Offensive Security & Red Teaming
                  </a>
                  <a
                    href="<?php echo get_permalink(48); ?>"
                    class="solution-card__item"
                    data-wpel-link="internal"
                  >
                    Secure Access & Identity
                  </a>
                  <a
                    href="<?php echo get_permalink(50); ?>"
                    class="solution-card__item"
                    data-wpel-link="internal"
                  >
                    SIEM & SOC Enablement
                  </a>
                  
                  <button type="button" class="solution-card__more">
                    <svg
                      class="icon solution-card__more-icon"
                      viewBox="0 0 24 24"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M11.9997 13.1714L16.9495 8.22168L18.3637 9.63589L11.9997 15.9999L5.63574 9.63589L7.04995 8.22168L11.9997 13.1714Z"
                        fill="currentColor"
                      />
                    </svg>
                  </button>
                </div>
              </div>
            </div>



             
            <div
              class="section-solution__card solution-card stacked-card"
              data-index="0"
            >
              <div class="solution-card__inner">
                <img
                  src="/wp-content/themes/cyberxs/public/image/solution-cards/sphere-bg.webp"
                  alt="Головна- image 3"
                  class="solution-card__sphere"
                  loading="lazy"
                />
                <div class="solution-card__header">
                  <h3 class="solution-card__heading">Forensics Solutions</h3>
                </div>
                <div class="solution-card__content">
                  <a
                    href="<?php echo get_permalink(52); ?>"
                    class="solution-card__item"
                    data-wpel-link="internal"
                  >
                    Digital Forensics & Investigations
                  </a>
                 
                  <button type="button" class="solution-card__more">
                    <svg
                      class="icon solution-card__more-icon"
                      viewBox="0 0 24 24"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M11.9997 13.1714L16.9495 8.22168L18.3637 9.63589L11.9997 15.9999L5.63574 9.63589L7.04995 8.22168L11.9997 13.1714Z"
                        fill="currentColor"
                      />
                    </svg>
                  </button>
                </div>
              </div>
            </div>
       


              <div
              class="section-solution__card solution-card stacked-card"
              data-index="0"
            >
              <div class="solution-card__inner">
                <img
                  src="/wp-content/themes/cyberxs/public/image/solution-cards/sphere-bg.webp"
                  alt="Головна- image 3"
                  class="solution-card__sphere"
                  loading="lazy"
                />
                <div class="solution-card__header">
                  <h3 class="solution-card__heading">IT & Infrastructure Solutions</h3>
                </div>
                <div class="solution-card__content">
                  <a
                    href="<?php echo get_permalink(54); ?>"
                    class="solution-card__item"
                    data-wpel-link="internal"
                  >
                    Governance, Risk & Compliance
                  </a>
                  <a
                    href="<?php echo get_permalink(56); ?>"
                    class="solution-card__item"
                    data-wpel-link="internal"
                  >
                    Secure File Transfer & Data Movement
                  </a>
                 
                  <button type="button" class="solution-card__more">
                    <svg
                      class="icon solution-card__more-icon"
                      viewBox="0 0 24 24"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M11.9997 13.1714L16.9495 8.22168L18.3637 9.63589L11.9997 15.9999L5.63574 9.63589L7.04995 8.22168L11.9997 13.1714Z"
                        fill="currentColor"
                      />
                    </svg>
                  </button>
                </div>
              </div>
            </div>
 
          </div>
        </div>
      </section>

      <section class="section section-partners animation-trigger">
        <img
          src="/wp-content/themes/cyberxs/public/image/partners/circle-bg.webp"
          alt="Головна- image 5"
          class="section-partners__circle-bg"
          loading="lazy"
        />
        <div class="container">
          <div class="section__header">
            <span class="section__subheading animated-subheading">
              Vendors
            </span>
            <h2 class="heading heading--h3 section__heading animated-heading">
              <span>Cyberxs</span> proudly represents a portfolio of world-leading vendors, each brings <span>specialized</span> expertise and solutions that address today’s most complex challenges. 
            </h2>
          </div>
          <div class="section-partners__list">
            <a
              href="#?Barramundi"
              class="section-partners__item"
              data-wpel-link="internal"
            >
              <div class="section-partners__image-box">
                <img
                  src="/wp-content/uploads/vendor-logos/Barramundi.png"
                  alt="Barramundi"
                  class="section-partners__image"
                  width="242"
                  height="120"
                  loading="lazy"
                />
              </div>
            </a>
            <a
              href="#?CobaltStrike.png"
              class="section-partners__item"
              data-wpel-link="internal"
            >
              <div class="section-partners__image-box">
                <img
                  src="/wp-content/uploads/vendor-logos/CobaltStrike.png"
                  alt="CobaltStrike"
                  class="section-partners__image"
                  width="242"
                  height="120"
                  loading="lazy"
                />
              </div>
            </a>
            <a
              href="#?CoreImpact.png"
              class="section-partners__item"
              data-wpel-link="internal"
            >
              <div class="section-partners__image-box">
                <img
                  src="/wp-content/uploads/vendor-logos/CoreImpact.png"
                  alt="CoreImpact.png"
                  class="section-partners__image"
                  width="242"
                  height="120"
                  loading="lazy"
                />
              </div>
            </a>
            <a
              href="?CybeleSoft"
              class="section-partners__item"
              data-wpel-link="internal"
            >
              <div class="section-partners__image-box">
                <img
                  src="/wp-content/uploads/vendor-logos/CybeleSoft.png"
                  alt="CybeleSoft"
                  class="section-partners__image"
                  width="242"
                  height="120"
                  loading="lazy"
                />
              </div>
            </a>
            <a
              href="?Diligent"
              class="section-partners__item"
              data-wpel-link="internal"
            >
              <div class="section-partners__image-box">
                <img
                  src="/wp-content/uploads/vendor-logos/Diligent.png"
                  alt="Diligent"
                  class="section-partners__image"
                  width="242"
                  height="120"
                  loading="lazy"
                />
              </div>
            </a>
            <a
              href="?Exterro-FTK"
              class="section-partners__item"
              data-wpel-link="internal"
            >
              <div class="section-partners__image-box">
                <img
                  src="/wp-content/uploads/vendor-logos/Exterro-FTK.png"
                  alt="Exterro-FTK"
                  class="section-partners__image"
                  width="242"
                  height="120"
                  loading="lazy"
                />
              </div>
            </a>
            <a
              href="?Fortra"
              class="section-partners__item"
              data-wpel-link="internal"
            >
              <div class="section-partners__image-box">
                <img
                  src="/wp-content/uploads/vendor-logos/Fortra.png"
                  alt="Fortra"
                  class="section-partners__image"
                  width="242"
                  height="120"
                  loading="lazy"
                />
              </div>
            </a>
            <a
              href="?GMDSOFT"
              class="section-partners__item"
              data-wpel-link="internal"
            >
              <div class="section-partners__image-box">
                <img
                  src="/wp-content/uploads/vendor-logos/GMDSOFT.png"
                  alt="GMDSOFT"
                  class="section-partners__image"
                  width="242"
                  height="120"
                  loading="lazy"
                />
              </div>
            </a>
            <a
              href="?greycortex"
              class="section-partners__item"
              data-wpel-link="internal"
            >
              <div class="section-partners__image-box">
                <img
                  src="/wp-content/uploads/vendor-logos/greycortex.png"
                  alt="greycortex"
                  class="section-partners__image"
                  width="242"
                  height="120"
                  loading="lazy"
                />
              </div>
            </a>
            <a
              href="Invicti"
              class="section-partners__item"
              data-wpel-link="internal"
            >
              <div class="section-partners__image-box">
                <img
                  src="/wp-content/uploads/vendor-logos/Invicti.png"
                  alt="Invicti"
                  class="section-partners__image"
                  width="242"
                  height="120"
                  loading="lazy"
                />
              </div>
            </a>
            <a
              href="jscrambler"
              class="section-partners__item"
              data-wpel-link="internal"
            >
              <div class="section-partners__image-box">
                <img
                  src="/wp-content/uploads/vendor-logos/jscrambler.png"
                  alt="jscrambler"
                  class="section-partners__image"
                  width="242"
                  height="120"
                  loading="lazy"
                />
              </div>
            </a>
            <a
              href="?Logsign"
              class="section-partners__item"
              data-wpel-link="internal"
            >
              <div class="section-partners__image-box">
                <img
                  src="/wp-content/uploads/vendor-logos/Logsign.png"
                  alt="Logsign"
                  class="section-partners__image"
                  width="242"
                  height="120"
                  loading="lazy"
                />
              </div>
            </a>
            <a
              href="?MobilEdit"
              class="section-partners__item"
              data-wpel-link="internal"
            >
              <div class="section-partners__image-box">
                <img
                  src="/wp-content/uploads/vendor-logos/MobilEdit.png"
                  alt="MobilEdit"
                  class="section-partners__image"
                  width="242"
                  height="120"
                  loading="lazy"
                />
              </div>
            </a>
            <a
              href="?gtb-technologies"
              class="section-partners__item"
              data-wpel-link="internal"
            >
              <div class="section-partners__image-box">
                <img
                  src="/wp-content/uploads/vendor-logos/gtb-technologies.png"
                  alt="GTB technologies"
                  class="section-partners__image"
                  width="242"
                  height="120"
                  loading="lazy"
                />
              </div>
            </a>
            <a
              href="?outflank"
              class="section-partners__item"
              data-wpel-link="internal"
            >
              <div class="section-partners__image-box">
                <img
                  src="/wp-content/uploads/vendor-logos/outflank.png"
                  alt="outflank"
                  class="section-partners__image"
                  width="242"
                  height="120"
                  loading="lazy"
                />
              </div>
            </a>
            <a
              href="?PlexTrac"
              class="section-partners__item"
              data-wpel-link="internal"
            >
              <div class="section-partners__image-box">
                <img
                  src="/wp-content/uploads/vendor-logos/PlexTrac.png"
                  alt="PlexTrac"
                  class="section-partners__image"
                  width="242"
                  height="120"
                  loading="lazy"
                />
              </div>
            </a>
            <a
              href="?PortSwigger"
              class="section-partners__item"
              data-wpel-link="internal"
            >
              <div class="section-partners__image-box">
                <img
                  src="/wp-content/uploads/vendor-logos/PortSwigger.png"
                  alt="PortSwigger"
                  class="section-partners__image"
                  width="242"
                  height="120"
                  loading="lazy"
                />
              </div>
            </a>
            <a
              href="?Gatewatcher"
              class="section-partners__item"
              data-wpel-link="internal"
            >
              <div class="section-partners__image-box">
                <img
                  src="/wp-content/uploads/vendor-logos/Gatewatcher.png"
                  alt="Gatewatcher"
                  class="section-partners__image"
                  width="242"
                  height="120"
                  loading="lazy"
                />
              </div>
            </a>
            <a
              href="prodaft"
              class="section-partners__item"
              data-wpel-link="internal"
            >
              <div class="section-partners__image-box">
                <img
                  src="/wp-content/uploads/vendor-logos/prodaft.png"
                  alt="prodaft"
                  class="section-partners__image"
                  width="242"
                  height="120"
                  loading="lazy"
                />
              </div>
            </a>
            <a
              href="?quokka"
              class="section-partners__item"
              data-wpel-link="internal"
            >
              <div class="section-partners__image-box">
                <img
                  src="/wp-content/uploads/vendor-logos/quokka.png"
                  alt="quokka"
                  class="section-partners__image"
                  width="242"
                  height="120"
                  loading="lazy"
                />
              </div>
            </a>
            <a
              href="?Segura.security"
              class="section-partners__item"
              data-wpel-link="internal"
            >
              <div class="section-partners__image-box">
                <img
                  src="/wp-content/uploads/vendor-logos/Segura.security.png"
                  alt="Segura.security"
                  class="section-partners__image"
                  width="242"
                  height="120"
                  loading="lazy"
                />
              </div>
            </a>
            <a
              href="?sociallinks"
              class="section-partners__item"
              data-wpel-link="internal"
            >
              <div class="section-partners__image-box">
                <img
                  src="/wp-content/uploads/vendor-logos/sociallinks.png"
                  alt="sociallinks"
                  class="section-partners__image"
                  width="242"
                  height="120"
                  loading="lazy"
                />
              </div>
            </a>
            <a
              href="SUMURI"
              class="section-partners__item"
              data-wpel-link="internal"
            >
              <div class="section-partners__image-box">
                <img
                  src="/wp-content/uploads/vendor-logos/SUMURI.png"
                  alt="SUMURI"
                  class="section-partners__image"
                  width="242"
                  height="120"
                  loading="lazy"
                />
              </div>
            </a>
            <a
              href="?verimatrix"
              class="section-partners__item"
              data-wpel-link="internal"
            >
              <div class="section-partners__image-box">
                <img
                  src="/wp-content/uploads/vendor-logos/verimatrix.png"
                  alt="verimatrix"
                  class="section-partners__image"
                  width="242"
                  height="120"
                  loading="lazy"
                />
              </div>
            </a>
          </div>
        </div>
      </section>

      <section class="section section-about animation-trigger">
        <div class="section-about__inner">
          <div class="container">
            <div class="section__header">
              <span class="section__subheading animated-subheading">
                ABOUT THE COMPANY
              </span>
              <h2 class="heading heading--h3 section__heading animated-heading">
               Making advanced technology <span>simple</span>, accessible, and <span>impactful</span>.
              </h2>
            </div>
          </div>
          <div class="container section-about__container">
            <div class="section-about__content-box">
              <div
                class="section-about__content-wrapper section-about__content-wrapper-0"
              >
                <div class="section-about__content">
                  <h3 class="heading heading--h4 section-about__heading">
                    Official distribution from leading global manufacturers
                  </h3>
                  <p>
                    We offer the latest developments in the field of information
                    technology equipment and software solutions from leading
                    global vendors, designed to create modern IT infrastructure
                    for organizations of any size and its cyber protection from
                    current information security threats.
                  </p>
                </div>
              </div>
              <div
                class="section-about__content-wrapper section-about__content-wrapper-1"
              >
                <div class="section-about__content">
                  <h3 class="heading heading--h4 section-about__heading">
                    Support from the vendor and our certified specialists
                  </h3>
                  <p>
                    We focus on a comprehensive approach and offer all the
                    necessary support at every stage of project implementation:
                    pre-sales support, development of large-scale integrated
                    solutions, logistics, implementation support, technical
                    support and service from our certified technical experts and
                    specialists from our partner manufacturing companies.
                  </p>
                </div>
              </div>
              <div
                class="section-about__content-wrapper section-about__content-wrapper-2"
              >
                <div class="section-about__content">
                  <h3 class="heading heading--h4 section-about__heading">
                    Individual approach to each client
                  </h3>
                  <p>
                    Working on the Value Added model, Cyberxs delivers its
                    Solutions to end customers exclusively through a partner
                    network. We provide partners with the entire arsenal of
                    available opportunities and knowledge to develop productive
                    relationships with customers — we provide support for joint
                    development programs, marketing campaigns, organization of
                    education and specialized training, as well as technical
                    consultations on all offered products.
                  </p>
                </div>
              </div>
              <div
                class="section-about__content-wrapper section-about__content-wrapper-3"
              >
                <div class="section-about__content">
                  <h3 class="heading heading--h4 section-about__heading">
                    Geographical coverage
                  </h3>
                  <p>
                    We carefully study the trends of the information technology
                    market and its needs. This allows us to set trends in the
                    domestic IT market, providing customers with cutting-edge
                    Solutions from global manufacturers and innovative startups.
                  </p>
                </div>
              </div>
            </div>
            <div class="animation-wrapper section-about__image-box">
              <div class="sphere-animation">
                <svg
                  class="sphere"
                  viewBox="0 0 440 440"
                  stroke="rgba(80,80,80,.35)"
                >
                  <defs>
                    <linearGradient
                      id="sphereGradient"
                      x1="5%"
                      x2="5%"
                      y1="0%"
                      y2="15%"
                    >
                      <stop stop-color="rgb(255, 168, 171)" offset="0%" />
                      <stop
                        stop-color="rgba(255, 178, 107, 0.4)"
                        offset="20%"
                      />
                      <stop
                        stop-color="rgba(245, 146, 193, 0.23)"
                        offset="50%"
                      />
                      <stop
                        stop-color="rgba(249, 122, 153, 0.23)"
                        offset="80%"
                      />
                      <stop
                        stop-color="rgba(253, 99, 114, 0.03)"
                        offset="100%"
                      />
                    </linearGradient>
                  </defs>
                  <path
                    d="M361.604 361.238c-24.407 24.408-51.119 37.27-59.662 28.727-8.542-8.543 4.319-35.255 28.726-59.663 24.408-24.407 51.12-37.269 59.663-28.726 8.542 8.543-4.319 35.255-28.727 59.662z"
                  />
                  <path
                    d="M360.72 360.354c-35.879 35.88-75.254 54.677-87.946 41.985-12.692-12.692 6.105-52.067 41.985-87.947 35.879-35.879 75.254-54.676 87.946-41.984 12.692 12.692-6.105 52.067-41.984 87.946z"
                  />
                  <path
                    d="M357.185 356.819c-44.91 44.91-94.376 68.258-110.485 52.149-16.11-16.11 7.238-65.575 52.149-110.485 44.91-44.91 94.376-68.259 110.485-52.15 16.11 16.11-7.239 65.576-52.149 110.486z"
                  />
                  <path
                    d="M350.998 350.632c-53.21 53.209-111.579 81.107-130.373 62.313-18.794-18.793 9.105-77.163 62.314-130.372 53.209-53.21 111.579-81.108 130.373-62.314 18.794 18.794-9.105 77.164-62.314 130.373z"
                  />
                  <path
                    d="M343.043 342.677c-59.8 59.799-125.292 91.26-146.283 70.268-20.99-20.99 10.47-86.483 70.269-146.282 59.799-59.8 125.292-91.26 146.283-70.269 20.99 20.99-10.47 86.484-70.27 146.283z"
                  />
                  <path
                    d="M334.646 334.28c-65.169 65.169-136.697 99.3-159.762 76.235-23.065-23.066 11.066-94.593 76.235-159.762s136.697-99.3 159.762-76.235c23.065 23.065-11.066 94.593-76.235 159.762z"
                  />
                  <path
                    d="M324.923 324.557c-69.806 69.806-146.38 106.411-171.031 81.76-24.652-24.652 11.953-101.226 81.759-171.032 69.806-69.806 146.38-106.411 171.031-81.76 24.652 24.653-11.953 101.226-81.759 171.032z"
                  />
                  <path
                    d="M312.99 312.625c-73.222 73.223-153.555 111.609-179.428 85.736-25.872-25.872 12.514-106.205 85.737-179.428s153.556-111.609 179.429-85.737c25.872 25.873-12.514 106.205-85.737 179.429z"
                  />
                  <path
                    d="M300.175 299.808c-75.909 75.909-159.11 115.778-185.837 89.052-26.726-26.727 13.143-109.929 89.051-185.837 75.908-75.908 159.11-115.778 185.837-89.051 26.726 26.726-13.143 109.928-89.051 185.836z"
                  />
                  <path
                    d="M284.707 284.34c-77.617 77.617-162.303 118.773-189.152 91.924-26.848-26.848 14.308-111.534 91.924-189.15C265.096 109.496 349.782 68.34 376.63 95.188c26.849 26.849-14.307 111.535-91.923 189.151z"
                  />
                  <path
                    d="M269.239 267.989c-78.105 78.104-163.187 119.656-190.035 92.807-26.849-26.848 14.703-111.93 92.807-190.035 78.105-78.104 163.187-119.656 190.035-92.807 26.849 26.848-14.703 111.93-92.807 190.035z"
                  />
                  <path
                    d="M252.887 252.52C175.27 330.138 90.584 371.294 63.736 344.446 36.887 317.596 78.043 232.91 155.66 155.293 233.276 77.677 317.962 36.521 344.81 63.37c26.85 26.848-14.307 111.534-91.923 189.15z"
                  />
                  <path
                    d="M236.977 236.61C161.069 312.52 77.867 352.389 51.14 325.663c-26.726-26.727 13.143-109.928 89.052-185.837 75.908-75.908 159.11-115.777 185.836-89.05 26.727 26.726-13.143 109.928-89.051 185.836z"
                  />
                  <path
                    d="M221.067 220.7C147.844 293.925 67.51 332.31 41.639 306.439c-25.873-25.873 12.513-106.206 85.736-179.429C200.6 53.786 280.931 15.4 306.804 41.272c25.872 25.873-12.514 106.206-85.737 179.429z"
                  />
                  <path
                    d="M205.157 204.79c-69.806 69.807-146.38 106.412-171.031 81.76-24.652-24.652 11.953-101.225 81.759-171.031 69.806-69.807 146.38-106.411 171.031-81.76 24.652 24.652-11.953 101.226-81.759 171.032z"
                  />
                  <path
                    d="M189.247 188.881c-65.169 65.169-136.696 99.3-159.762 76.235-23.065-23.065 11.066-94.593 76.235-159.762s136.697-99.3 159.762-76.235c23.065 23.065-11.066 94.593-76.235 159.762z"
                  />
                  <path
                    d="M173.337 172.971c-59.799 59.8-125.292 91.26-146.282 70.269-20.991-20.99 10.47-86.484 70.268-146.283 59.8-59.799 125.292-91.26 146.283-70.269 20.99 20.991-10.47 86.484-70.269 146.283z"
                  />
                  <path
                    d="M157.427 157.061c-53.209 53.21-111.578 81.108-130.372 62.314-18.794-18.794 9.104-77.164 62.313-130.373 53.21-53.209 111.58-81.108 130.373-62.314 18.794 18.794-9.105 77.164-62.314 130.373z"
                  />
                  <path
                    d="M141.517 141.151c-44.91 44.91-94.376 68.259-110.485 52.15-16.11-16.11 7.239-65.576 52.15-110.486 44.91-44.91 94.375-68.258 110.485-52.15 16.109 16.11-7.24 65.576-52.15 110.486z"
                  />
                  <path
                    d="M125.608 125.241c-35.88 35.88-75.255 54.677-87.947 41.985-12.692-12.692 6.105-52.067 41.985-87.947C115.525 43.4 154.9 24.603 167.592 37.295c12.692 12.692-6.105 52.067-41.984 87.946z"
                  />
                  <path
                    d="M109.698 109.332c-24.408 24.407-51.12 37.268-59.663 28.726-8.542-8.543 4.319-35.255 28.727-59.662 24.407-24.408 51.12-37.27 59.662-28.727 8.543 8.543-4.319 35.255-28.726 59.663z"
                  />
                </svg>
              </div>
            </div>
          </div>
        </div>
        <div class="section-about__trigger"></div>
      </section>

      <!-- <section class="section section-news animation-trigger">
        <div class="container">
          <div class="section__header">
            <span class="section__subheading animated-subheading"> NEWS </span>
            <h2 class="heading heading--h3 section__heading animated-heading">
              Current <span>news</span> in the field of cybersecurity from Cyberxs
              Distribution!
            </h2>
          </div>

          <div class="section-news__button-box">
            <a
              href="#"
              class="button button--primary section-news__button"
              data-wpel-link="internal"
            >
              All news
              <svg
                class="icon button__icon"
                viewBox="0 0 24 24"
                fill="none"
                xmlns="#"
              >
                <path
                  d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z"
                  fill="currentColor"
                />
              </svg>
            </a>
          </div>
          <div id="news-slider" class="swiper news-slider">
            <div class="swiper-wrapper section-news__list">
              <div class="news-card swiper-slide">
                <div class="news-card__content">
                  <div class="news-card__inner">
                    <a
                      href="#"
                      class="news-card__image-box"
                      data-wpel-link="internal"
                    >
                      <img
                        src="wp-content/uploads/2025/08/censys-rozshiryue-funkczional-svo%d1%97-rishen_-dodatkovi-mozhlivosti-dlya-partneriv-iit-distribution-1.png"
                        alt="Censys розширює функціонал своїх рішень: додаткові можливості для партнерів Cyberxs"
                        class="news-card__image"
                        width="493"
                        height="246"
                        loading="lazy"
                      />
                    </a>

                    <div class="news-card__tags">
                      <span class="tag news-card__tag"> Cencys </span>
                      <span class="tag news-card__tag"> Censys </span>
                      <span class="tag news-card__tag"> Новини </span>
                    </div>
                    <a
                      href="#"
                      class="heading news-card__heading"
                      data-wpel-link="internal"
                    >
                      Censys expands the functionality of its solutions:
                      additional opportunities for Cyberxs partners
                    </a>

                    <div class="news-card__footer">
                      <time
                        class="news-card__date"
                        datetime="2025-08-28T10:21:11+00:00"
                      >
                        August 27, 2025
                      </time>
                      <a
                        href="#"
                        class="button button--secondary"
                        data-wpel-link="internal"
                      >
                        More details
                        <span class="button__icon-box">
                          <svg
                            class="icon button__icon"
                            viewBox="0 0 24 24"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M13.1715 12.0007L8.22168 7.05093L9.6359 5.63672L15.9999 12.0007L9.6359 18.3646L8.22168 16.9504L13.1715 12.0007Z"
                              fill="currentColor"
                            />
                          </svg>
                          <svg
                            class="icon button__icon"
                            viewBox="0 0 24 24"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M13.1715 12.0007L8.22168 7.05093L9.6359 5.63672L15.9999 12.0007L9.6359 18.3646L8.22168 16.9504L13.1715 12.0007Z"
                              fill="currentColor"
                            />
                          </svg>
                        </span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="news-card swiper-slide">
                <div class="news-card__content">
                  <div class="news-card__inner">
                    <a
                      href="#"
                      class="news-card__image-box"
                      data-wpel-link="internal"
                    >
                      <img
                        src="wp-content/uploads/2025/08/iit-distribution-rozshiryue-kontrakt-iz-censys-na-novi-kra%d1%97ni-1.png"
                        alt="Cyberxs розширює контракт із Censys на нові країни"
                        class="news-card__image"
                        width="493"
                        height="246"
                        loading="lazy"
                      />
                    </a>

                    <div class="news-card__tags">
                      <span class="tag news-card__tag"> Cencys </span>
                      <span class="tag news-card__tag"> Новини </span>
                    </div>
                    <a
                      href="#"
                      class="heading news-card__heading"
                      data-wpel-link="internal"
                    >
                      Cyberxs expands contract with Censys to new countries
                    </a>

                    <div class="news-card__footer">
                      <time
                        class="news-card__date"
                        datetime="2025-08-28T10:21:11+00:00"
                      >
                        August 25, 2025
                      </time>
                      <a
                        href="#"
                        class="button button--secondary"
                        data-wpel-link="internal"
                      >
                        More details
                        <span class="button__icon-box">
                          <svg
                            class="icon button__icon"
                            viewBox="0 0 24 24"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M13.1715 12.0007L8.22168 7.05093L9.6359 5.63672L15.9999 12.0007L9.6359 18.3646L8.22168 16.9504L13.1715 12.0007Z"
                              fill="currentColor"
                            />
                          </svg>
                          <svg
                            class="icon button__icon"
                            viewBox="0 0 24 24"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M13.1715 12.0007L8.22168 7.05093L9.6359 5.63672L15.9999 12.0007L9.6359 18.3646L8.22168 16.9504L13.1715 12.0007Z"
                              fill="currentColor"
                            />
                          </svg>
                        </span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="news-card swiper-slide">
                <div class="news-card__content">
                  <div class="news-card__inner">
                    <a
                      href="#"
                      class="news-card__image-box"
                      data-wpel-link="internal"
                    >
                      <img
                        src="wp-content/uploads/2025/08/shtuchnij-intelekt-u-biznesi-evolyucziya-a-ne-revolyucziya-1-1.png"
                        alt="Штучний інтелект у бізнесі: еволюція, а не революція"
                        class="news-card__image"
                        width="493"
                        height="246"
                        loading="lazy"
                      />
                    </a>

                    <div class="news-card__tags">
                      <span class="tag news-card__tag"> Cribl </span>
                      <span class="tag news-card__tag"> News</span>
                    </div>
                    <a
                      href="#"
                      class="heading news-card__heading"
                      data-wpel-link="internal"
                    >
                      Artificial Intelligence in Business: Evolution, Not
                      Revolution
                    </a>

                    <div class="news-card__footer">
                      <time
                        class="news-card__date"
                        datetime="2025-08-28T10:21:11+00:00"
                      >
                        August 21, 2025
                      </time>
                      <a
                        href="#"
                        class="button button--secondary"
                        data-wpel-link="internal"
                      >
                        More details
                        <span class="button__icon-box">
                          <svg
                            class="icon button__icon"
                            viewBox="0 0 24 24"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M13.1715 12.0007L8.22168 7.05093L9.6359 5.63672L15.9999 12.0007L9.6359 18.3646L8.22168 16.9504L13.1715 12.0007Z"
                              fill="currentColor"
                            />
                          </svg>
                          <svg
                            class="icon button__icon"
                            viewBox="0 0 24 24"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M13.1715 12.0007L8.22168 7.05093L9.6359 5.63672L15.9999 12.0007L9.6359 18.3646L8.22168 16.9504L13.1715 12.0007Z"
                              fill="currentColor"
                            />
                          </svg>
                        </span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div
              class="swiper-pagination slider-pagination news-slider__pagination"
            ></div>
          </div>
        </div>
      </section> -->

      <div id="form-demo" class="section-partnership-box">
        <section class="section section-partnership animation-trigger">
          <div class="container">
            <div class="section__header">
              <span class="section__subheading animated-subheading">
                DEMONSTRATION
              </span>
              <div
                class="heading heading--h3 section__heading animated-heading"
              >
                Request a <span>Demonstration</span> 
              </div>
            </div>
          </div>

          <div class="container section-partnership__container animated-fade">
            <div class="section-partnership__content">
              <canvas class="animated-line section-partnership__wave"></canvas>
              <div class="heading section-partnership__heading" style="font-size: medium;">
                Evaluate the benefits of the solutions personally!
              </div>
              <div class="section-partnership__text">
                <p>
                  The software demo is provided in the name of the company and
                  the specific person who fills out the form. To create an
                  access key you must enter reliable information and fill in all
                  fields of the form.
                </p>
              </div>
            </div>

            <form
              action="#"
              class="form section-partnership__form js-form-demo"
              enctype="multipart/form-data"
            >
              <input
                class="hidden"
                type="hidden"
                name="action"
                placeholder=""
                value="form_demo"
              />
              <input
                class="hidden"
                type="hidden"
                name="url"
                placeholder=""
                value="index.html"
              />

              <label class="form__label form__error-message-box">
                <input
                  type="text"
                  class="form__field required"
                  name="name"
                  placeholder="Ваше Ім'я та Прізвище"
                />
                <span class="form__error-message"
                  >Please check your full name - it must be valid.</span
                >
              </label>
              <label class="form__label form__error-message-box">
                <input
                  type="text"
                  class="form__field required"
                  name="company"
                  placeholder="Company name"
                />
                <span class="form__error-message"
                  >Please verify the company - it must be valid.</span
                >
              </label>
              <label class="form__label form__error-message-box">
                <input
                  type="text"
                  class="form__field required"
                  name="position"
                  placeholder="Посада"
                />
                <span class="form__error-message"
                  >Please check the job title - it must be valid.</span
                >
              </label>
              <label class="form__label form__error-message-box">
                <input
                  type="text"
                  class="form__field required email corporate-email"
                  name="email"
                  placeholder="Email"
                />
                <span class="form__error-message"
                  >Please enter the corporate email of your
                  company/enterprise.</span
                >
              </label>
              <div class="form__label form__error-message-box">
                <input
                  type="text"
                  class="form__field phone-field required"
                  name="telephone"
                  placeholder="00-000-0000"
                  inputmode="numeric"
                />
                <span class="form__error-message"
                  >Please check the phone number - it must be valid.</span
                >
              </div>

              <label class="form__label form__error-message-box">
                <select
                  name="product"
                  id="select-product"
                  class="custom-select required"
                >
                  <option value="" selected>Select a product</option>
                  <option value="Cribl.Cloud">Cribl.Cloud</option>
                  <option value="Cribl Search">Cribl Search</option>
                  <option value="Cribl Stream">Cribl Stream</option>
                  <option value="Cribl Lake">Cribl Lake</option>
                  <option value="Cribl Edge">Cribl Edge</option>
                  <option value="SonarQube для IDE">SonarQube для IDE</option>
                  <option value="SonarQube Cloud">SonarQube Cloud</option>
                  <option value="SonarQube Server">SonarQube Server</option>
                  <option value="Unit Range">Unit Range</option>
                  <option value="NACVIEW SYSTEM ">NACVIEW SYSTEM </option>
                  <option value="Falcon Next-Gen SIEM">
                    Falcon Next-Gen SIEM
                  </option>
                  <option value="Платформа Black Duck Polaris ">
                    Платформа Black Duck Polaris 
                  </option>
                  <option value="Cloudflare Application Services">
                    Cloudflare Application Services
                  </option>
                  <option value="Cloudflare Edge Developer Platform ">
                    Cloudflare Edge Developer Platform 
                  </option>
                  <option value="Cloudflare Network Services ">
                    Cloudflare Network Services 
                  </option>
                  <option value="Cloudflare Zero Trust Services ">
                    Cloudflare Zero Trust Services 
                  </option>
                  <option value="Sycope Platform">Sycope Platform  </option>
                  <option value="Outkept Platform">Outkept Platform</option>
                  <option value="NetBrain Day-2 NetOps Automation">
                    NetBrain Day-2 NetOps Automation
                  </option>
                  <option value="NetBrain Dynamic Network Documentation">
                    NetBrain Dynamic Network Documentation
                  </option>
                  <option
                    value="NetBrain Hybrid Network Visability and Automation"
                  >
                    NetBrain Hybrid Network Visability and Automation
                  </option>
                  <option value="Gatewatcher NDR — AIonIQ">
                    Gatewatcher NDR — AIonIQ
                  </option>
                  <option value="AIONBYTES">AIONBYTES</option>
                  <option value="WALLIX PAM">WALLIX PAM</option>
                  <option
                    value="Security Control Validation for Prevention Controls"
                  >
                    Security Control Validation for Prevention Controls
                  </option>
                  <option
                    value="Security Control Validation for Detection Controls"
                  >
                    Security Control Validation for Detection Controls
                  </option>
                  <option value="Inline Bypass Switches">
                    Inline Bypass Switches
                  </option>
                  <option value="Niagara Networks TAP">
                    Niagara Networks TAP
                  </option>
                  <option value="Network Packet Broker | Packetron">
                    Network Packet Broker | Packetron
                  </option>
                  <option value="Токени Protectimus">Токени Protectimus</option>
                  <option
                    value="Nakivo Backup &amp; Replication Virtual &amp; Cloud Platform"
                  >
                    Nakivo Backup &amp; Replication Virtual &amp; Cloud Platform
                  </option>
                  <option
                    value="Nakivo Backup &amp; Replication Server &amp; Workstation Platform"
                  >
                    Nakivo Backup &amp; Replication Server &amp; Workstation
                    Platform
                  </option>
                  <option value="Threema OnPrem">Threema OnPrem</option>
                  <option value="TRUEPASS Zero Trust">
                    TRUEPASS Zero Trust
                  </option>
                  <option value="TRUEPASS Hybrid">TRUEPASS Hybrid</option>
                  <option value="TRUEPASS SDE">TRUEPASS SDE</option>
                  <option value="OMNIBOX">OMNIBOX</option>
                  <option value="CrowdStrike Falcon Platform: всі модулі">
                    CrowdStrike Falcon Platform: всі модулі
                  </option>
                  <option value="Extended Threat Intelligence Platform">
                    Extended Threat Intelligence Platform
                  </option>
                  <option value="Cyber Threat Inteligence">
                    Cyber Threat Inteligence
                  </option>
                  <option value="Fastly Content Delivery Network (CDN)">
                    Fastly Content Delivery Network (CDN)
                  </option>
                  <option value="Falcon OverWatch (Proactive Threat Hunting)">
                    Falcon OverWatch (Proactive Threat Hunting)
                  </option>
                  <option value="Attack Surface Validation">
                    Attack Surface Validation
                  </option>
                  <option value="Cloud Security Validation">
                    Cloud Security Validation
                  </option>
                  <option value="The Complete Security Validation Platform">
                    The Complete Security Validation Platform
                  </option>
                  <option value="Nakivo Office 365 Backup">
                    Nakivo Office 365 Backup
                  </option>
                  <option value="WALLIX IDaaS">WALLIX IDaaS</option>
                  <option value="LogRhythm Intelligence">
                    LogRhythm Intelligence
                  </option>
                  <option value="LogRhythm SIEM">LogRhythm SIEM</option>
                  <option value="Exabeam Security Operations Platform">
                    Exabeam Security Operations Platform
                  </option>
                  <option value="The Lookout Security Platform">
                    The Lookout Security Platform
                  </option>
                  <option value="GTB DLP Suite">GTB DLP Suite</option>
                  <option value="Threema Work">Threema Work</option>
                  <option value="InfiniBox">InfiniBox</option>
                  <option
                    value="Holm Security Vulnerability Management Platform"
                  >
                    Holm Security Vulnerability Management Platform
                  </option>
                  <option value="Fastly Next-Gen WAF">
                    Fastly Next-Gen WAF
                  </option>
                  <option value="Falcon Complete (MDR)">
                    Falcon Complete (MDR)
                  </option>
                  <option value="Threema Education">Threema Education</option>
                  <option value="Threema Broadcast">Threema Broadcast</option>
                  <option value="Lepide Data Security Platform">
                    Lepide Data Security Platform
                  </option>
                  <option value="Fastly Compute">Fastly Compute</option>
                  <option
                    value="Falcon Cloud Security: Container Security and Kubernetes Protection"
                  >
                    Falcon Cloud Security: Container Security and Kubernetes
                    Protection
                  </option>
                  <option value="Falcon Prevent (Next-Generation Antivirus)">
                    Falcon Prevent (Next-Generation Antivirus)
                  </option>
                  <option value="Falcon Insight (EDR)">
                    Falcon Insight (EDR)
                  </option>
                  <option value="Falcon Insight (XDR)">
                    Falcon Insight (XDR)
                  </option>
                  <option value="Acra Database Protection Suite">
                    Acra Database Protection Suite
                  </option>
                  <option value="A10 Thunder ADC">A10 Thunder ADC</option>
                  <option value="A10 Thunder CGN">A10 Thunder CGN</option>
                  <option value="A10 Defend">A10 Defend</option>
                  <option value="A10 Next-Gen WAF">A10 Next-Gen WAF</option>
                  <option value="External Attack Surface Management">
                    External Attack Surface Management
                  </option>
                  <option value="RedSeal Networks">RedSeal Networks</option>
                  <option value="SpinOne all-in-one SaaS Security Platform">
                    SpinOne all-in-one SaaS Security Platform
                  </option>
                  <option value="InfiniGuard">InfiniGuard</option>
                  <option value="Labyrinth Deception Platform">
                    Labyrinth Deception Platform
                  </option>
                </select>
                <span class="form__error-message">Select a product.</span>
              </label>

              <label class="form__label form__error-message-box">
                <div
                  class="form__recaptcha cf-turnstile"
                  data-sitekey="0x4AAAAAABCkfYIzxkHuvuCc"
                  data-language="uk"
                  data-theme="light"
                ></div>
                <span class="form__error-message">Fill in the captcha.</span>
              </label>

              <div class="section-partnership__form-footer">
                <label class="form__label-box form__error-message-box">
                  <span class="form__control form__checkbox">
                    <input
                      type="checkbox"
                      name="agree"
                      class="form__control-default form__checkbox-default required"
                    />
                    <span
                      class="form__control-custom form__checkbox-custom"
                    ></span>
                    <svg
                      class="icon form__checkbox-custom-checked"
                      viewBox="0 0 24 24"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M18.4933 6.93501C18.8053 7.20742 18.8374 7.6812 18.565 7.99324L10.7079 16.9932C10.5654 17.1564 10.3594 17.25 10.1429 17.25C9.9263 17.25 9.72031 17.1564 9.57788 16.9932L6.43502 13.3932C6.16261 13.0812 6.19473 12.6074 6.50677 12.335C6.8188 12.0626 7.29259 12.0947 7.565 12.4068L10.1429 15.3596L17.435 7.00675C17.7074 6.69472 18.1812 6.6626 18.4933 6.93501Z"
                        fill="currentColor"
                      />
                    </svg>
                  </span>
                  <span class="form__control-text"
                    >I agree to the processing of personal data</span
                  >
                  <span class="form__error-message"
                    >Please agree to the processing of personal data.</span
                  >
                </label>
                <button
                  type="submit"
                  class="button button--primary section-partnership__form-submit"
                >
                  Відправити
                  <svg
                    class="icon button__icon"
                    viewBox="0 0 24 24"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z"
                      fill="currentColor"
                    />
                  </svg>
                </button>
              </div>
            </form>
          </div>
        </section>
      </div>

      <section class="section section-seo animation-trigger">
        <div class="container section-seo__container">
          <div class="section-seo__content">
            <div class="heading heading--h3 section-seo__heading">
              High-tech Solutions for companies from Pakistan in the field of
              cybersecurity and IT infrastructure
            </div>

            <div class="section-seo__text truncate truncate--line-clamped">
              <div class="truncate__inner content-block">
                <p>
                  The role of the Internet is difficult to overestimate in the
                  modern world and Pakistan is not lagging behind in the
                  application of Internet technologies. In Pakistan , IT
                  technologies are widely used by companies in various fields of
                  activity not only for market promotion and sales of their
                  goods and services, but also for ensuring electronic document
                  flow and storing various information. The volume of data
                  stored in the network is growing every year all over the
                  world. For highly loaded systems, effective decisions in the
                  field of data storage are required, and Information security,
                  which ensures their protection, is of no less importance. IT
                  distribution of high-tech solutions that ensure cybersecurity
                  of industrial systems, IT infrastructure and everything
                  related to it are the main areas of activity of the Cyberxs
                  company. Cyberxs Distribution represents high-tech developments of
                  world-renowned manufacturers on the Ukrainian market,
                  including: CrowdStrike, Cloudflare, ExtraHop, Gatewatcher, A10
                  Networks, RedSeal, Cyber ​​Unit Technologies, OutKept,
                  Spin.AI, Automox, Lookout, Censys, Cribl, Exabeam, SOCRadar,
                  Picus Security, TerraZone, Wallix, GTB Technologies, SOTI,
                  Threema, NAKIVO, Lepide, Holm Security, Sycope, Infinidat,
                  NetBrain, Sonar, Black Duck, Cossack Labs, Infodas, Labyrinth,
                  Niagara Networks, Protectimus and S3M Security. Traffic
                  balancing, information security of applications and reliable
                  protection against DDoS attacks in an organization can be
                  ensured using scalable platforms for business from A10
                  Networks, which support industry security standards and
                  provide the highest performance. ZTNA architecture formed the
                  basis of software solutions from Cloudflare. Its unique
                  technological Decisions allow to avoid the need to open any
                  ports in the firewall. Its machine learning tool allows you to
                  get notifications about possible attacks before they happen.
                  You can get a flawless visualization of the configuration of
                  network devices in real time for further analysis of its
                  security using RedSeal software. It allows you to constantly
                  monitor the configuration of devices for compliance with
                  security requirements and make timely decisions about the need
                  for its improvement. Cossack Labs experts have managed to
                  create products that are capable of providing complete data
                  protection throughout the entire life cycle. Thanks to their
                  own special approach to solving security issues, Cossack Labs
                  customers can afford to spend more on their development than
                  on preserving existing information. CrowdStrike's world-first
                  Falcon cloud platform has managed to combine the advantages of
                  many years of experience, innovative technologies and
                  artificial intelligence, thanks to which it can prevent any
                  threat. It is flexible and scalable, so it can be configured
                  in any company. Full automation of network documentation,
                  simple and quick search for any malfunctions and convenient
                  integration with partner networks can be provided by the
                  platform from NetBrain, which is trusted by more than two
                  thousand well-known companies around the world. Cyberxs
                  Company - assistance in choosing the optimal protection of
                  information flows. Cyberxs Company is engaged in VAD
                  distribution, is a dealer of the world's leading manufacturers
                  and developers of products in the field of ensuring
                  information security, organizing effective data exchange and
                  storage. The company's specialists know the smallest details
                  of each product presented on the site, so they will help you
                  choose the optimal one among them that will fully meet your
                  requirements. Do not risk your comfort and safety, entrust
                  them to Cyberxs professionals.
                </p>
              </div>
            </div>

            <button
              type="button"
              class="button button--secondary section-seo__button"
              data-more-button
              data-readmore-less="Згорнути"
              data-readmore-full="Read more"
            >
              <span class="section-seo__button-text"> Read more </span>

              <span class="button__icon-box">
                <svg
                  class="icon button__icon"
                  viewBox="0 0 24 24"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M13.1715 12.0007L8.22168 7.05093L9.6359 5.63672L15.9999 12.0007L9.6359 18.3646L8.22168 16.9504L13.1715 12.0007Z"
                    fill="currentColor"
                  />
                </svg>

                <svg
                  class="icon button__icon"
                  viewBox="0 0 24 24"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M13.1715 12.0007L8.22168 7.05093L9.6359 5.63672L15.9999 12.0007L9.6359 18.3646L8.22168 16.9504L13.1715 12.0007Z"
                    fill="currentColor"
                  />
                </svg>
              </span>
            </button>
          </div>

          <div class="animation-wrapper section-seo__image-box">
            <div class="sphere-animation">
              <svg
                class="sphere"
                viewBox="0 0 440 440"
                stroke="rgba(80,80,80,.35)"
              >
                <defs>
                  <linearGradient
                    id="sphereGradient"
                    x1="5%"
                    x2="5%"
                    y1="0%"
                    y2="15%"
                  >
                    <stop stop-color="rgb(255, 168, 171)" offset="0%" />
                    <stop stop-color="rgba(255, 178, 107, 0.4)" offset="20%" />
                    <stop stop-color="rgba(245, 146, 193, 0.23)" offset="50%" />
                    <stop stop-color="rgba(249, 122, 153, 0.23)" offset="80%" />
                    <stop stop-color="rgba(253, 99, 114, 0.03)" offset="100%" />
                  </linearGradient>
                </defs>
                <path
                  d="M361.604 361.238c-24.407 24.408-51.119 37.27-59.662 28.727-8.542-8.543 4.319-35.255 28.726-59.663 24.408-24.407 51.12-37.269 59.663-28.726 8.542 8.543-4.319 35.255-28.727 59.662z"
                />
                <path
                  d="M360.72 360.354c-35.879 35.88-75.254 54.677-87.946 41.985-12.692-12.692 6.105-52.067 41.985-87.947 35.879-35.879 75.254-54.676 87.946-41.984 12.692 12.692-6.105 52.067-41.984 87.946z"
                />
                <path
                  d="M357.185 356.819c-44.91 44.91-94.376 68.258-110.485 52.149-16.11-16.11 7.238-65.575 52.149-110.485 44.91-44.91 94.376-68.259 110.485-52.15 16.11 16.11-7.239 65.576-52.149 110.486z"
                />
                <path
                  d="M350.998 350.632c-53.21 53.209-111.579 81.107-130.373 62.313-18.794-18.793 9.105-77.163 62.314-130.372 53.209-53.21 111.579-81.108 130.373-62.314 18.794 18.794-9.105 77.164-62.314 130.373z"
                />
                <path
                  d="M343.043 342.677c-59.8 59.799-125.292 91.26-146.283 70.268-20.99-20.99 10.47-86.483 70.269-146.282 59.799-59.8 125.292-91.26 146.283-70.269 20.99 20.99-10.47 86.484-70.27 146.283z"
                />
                <path
                  d="M334.646 334.28c-65.169 65.169-136.697 99.3-159.762 76.235-23.065-23.066 11.066-94.593 76.235-159.762s136.697-99.3 159.762-76.235c23.065 23.065-11.066 94.593-76.235 159.762z"
                />
                <path
                  d="M324.923 324.557c-69.806 69.806-146.38 106.411-171.031 81.76-24.652-24.652 11.953-101.226 81.759-171.032 69.806-69.806 146.38-106.411 171.031-81.76 24.652 24.653-11.953 101.226-81.759 171.032z"
                />
                <path
                  d="M312.99 312.625c-73.222 73.223-153.555 111.609-179.428 85.736-25.872-25.872 12.514-106.205 85.737-179.428s153.556-111.609 179.429-85.737c25.872 25.873-12.514 106.205-85.737 179.429z"
                />
                <path
                  d="M300.175 299.808c-75.909 75.909-159.11 115.778-185.837 89.052-26.726-26.727 13.143-109.929 89.051-185.837 75.908-75.908 159.11-115.778 185.837-89.051 26.726 26.726-13.143 109.928-89.051 185.836z"
                />
                <path
                  d="M284.707 284.34c-77.617 77.617-162.303 118.773-189.152 91.924-26.848-26.848 14.308-111.534 91.924-189.15C265.096 109.496 349.782 68.34 376.63 95.188c26.849 26.849-14.307 111.535-91.923 189.151z"
                />
                <path
                  d="M269.239 267.989c-78.105 78.104-163.187 119.656-190.035 92.807-26.849-26.848 14.703-111.93 92.807-190.035 78.105-78.104 163.187-119.656 190.035-92.807 26.849 26.848-14.703 111.93-92.807 190.035z"
                />
                <path
                  d="M252.887 252.52C175.27 330.138 90.584 371.294 63.736 344.446 36.887 317.596 78.043 232.91 155.66 155.293 233.276 77.677 317.962 36.521 344.81 63.37c26.85 26.848-14.307 111.534-91.923 189.15z"
                />
                <path
                  d="M236.977 236.61C161.069 312.52 77.867 352.389 51.14 325.663c-26.726-26.727 13.143-109.928 89.052-185.837 75.908-75.908 159.11-115.777 185.836-89.05 26.727 26.726-13.143 109.928-89.051 185.836z"
                />
                <path
                  d="M221.067 220.7C147.844 293.925 67.51 332.31 41.639 306.439c-25.873-25.873 12.513-106.206 85.736-179.429C200.6 53.786 280.931 15.4 306.804 41.272c25.872 25.873-12.514 106.206-85.737 179.429z"
                />
                <path
                  d="M205.157 204.79c-69.806 69.807-146.38 106.412-171.031 81.76-24.652-24.652 11.953-101.225 81.759-171.031 69.806-69.807 146.38-106.411 171.031-81.76 24.652 24.652-11.953 101.226-81.759 171.032z"
                />
                <path
                  d="M189.247 188.881c-65.169 65.169-136.696 99.3-159.762 76.235-23.065-23.065 11.066-94.593 76.235-159.762s136.697-99.3 159.762-76.235c23.065 23.065-11.066 94.593-76.235 159.762z"
                />
                <path
                  d="M173.337 172.971c-59.799 59.8-125.292 91.26-146.282 70.269-20.991-20.99 10.47-86.484 70.268-146.283 59.8-59.799 125.292-91.26 146.283-70.269 20.99 20.991-10.47 86.484-70.269 146.283z"
                />
                <path
                  d="M157.427 157.061c-53.209 53.21-111.578 81.108-130.372 62.314-18.794-18.794 9.104-77.164 62.313-130.373 53.21-53.209 111.58-81.108 130.373-62.314 18.794 18.794-9.105 77.164-62.314 130.373z"
                />
                <path
                  d="M141.517 141.151c-44.91 44.91-94.376 68.259-110.485 52.15-16.11-16.11 7.239-65.576 52.15-110.486 44.91-44.91 94.375-68.258 110.485-52.15 16.109 16.11-7.24 65.576-52.15 110.486z"
                />
                <path
                  d="M125.608 125.241c-35.88 35.88-75.255 54.677-87.947 41.985-12.692-12.692 6.105-52.067 41.985-87.947C115.525 43.4 154.9 24.603 167.592 37.295c12.692 12.692-6.105 52.067-41.984 87.946z"
                />
                <path
                  d="M109.698 109.332c-24.408 24.407-51.12 37.268-59.663 28.726-8.542-8.543 4.319-35.255 28.727-59.662 24.407-24.408 51.12-37.27 59.662-28.727 8.543 8.543-4.319 35.255-28.726 59.663z"
                />
              </svg>
            </div>
          </div>
        </div>
      </section>
    </main>

    <div id="toast-container" class="toast-container"></div>

<?php get_footer(); ?>