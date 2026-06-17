<footer class="saren-footer bg-[#e8e4df] text-[#141414]">
    <div class="container-custom">
        <section class="footer-newsletter">
            <div class="footer-newsletter-copy">
                <h2>STAY STYLISH. STAY UPDATED.</h2>
                <p>
                    Be the first to know about new drops, exclusive sales, and fashion inspiration straight to your inbox.
                    Get insider access to new collections, limited-time offers, and fashion inspiration straight to your inbox.
                </p>
            </div>

            <form class="footer-form" onsubmit="return false;">
                <div class="footer-audience">
                    @foreach(['Male','Female','Fluid'] as $option)
                        <label>
                            <input type="checkbox" name="audience[]" value="{{ $option }}">
                            <span>{{ $option }}</span>
                        </label>
                    @endforeach
                </div>

                <div class="footer-input-row">
                    <label for="footer-email">Your email</label>
                    <div>
                        <input id="footer-email" type="email" placeholder="Your email">
                        <button type="submit">SUBSCRIBE</button>
                    </div>
                </div>
            </form>

            <p class="footer-note">
                Early Access to Sales - Be the first to shop exclusive discounts. Style Tips &amp; Trends - Stay updated on what's trending and how to style it. Special Surprises - Receive members-only rewards and gift offers.
            </p>
        </section>

        <section class="footer-actions">
            @foreach([
                ['title' => 'FIND A BOUTIQUE', 'text' => 'Looking for the nearest boutique to explore our latest collections in person?', 'button' => 'OUR BOUTIQUES'],
                ['title' => 'CUSTOMER CARE', 'text' => 'Whether you need help with an order, have a question about a product, or need styling advice, our dedicated customer care team is here to assist you.', 'button' => 'SUPPORT'],
                ['title' => 'FAQ', 'text' => 'Find everything you need to know about orders, shipping, returns, and more in our FAQ section.', 'button' => 'VIEW FAQ'],
            ] as $item)
                <article>
                    <h3>{{ $item['title'] }}</h3>
                    <p>{{ $item['text'] }}</p>
                    <a href="#">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true">
                            <path d="M5 12h14M12 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                        </svg>
                        {{ $item['button'] }}
                    </a>
                </article>
            @endforeach
        </section>

        <section class="footer-brand-row">
            <div class="footer-brand-top">
                <div class="footer-logo">ETHNIC<sup>&reg;</sup></div>
                <nav aria-label="Footer navigation">
                    <a href="https://saren.pethemes.com/fashion-3/shop-all/">Shop All</a>
                    <a href="https://saren.pethemes.com/fashion-3/men/">Men</a>
                    <a href="https://saren.pethemes.com/fashion-3/women/">Women</a>
                    <a href="https://saren.pethemes.com/fashion-3/new-in/">New In</a>
                    <a href="https://saren.pethemes.com/fashion-3/sale/">Sale</a>
                    <a href="https://saren.pethemes.com/fashion-3/outlet/">Outlet</a>
                </nav>
            </div>
            <div class="footer-brand-bottom">
                <div class="footer-socials" aria-label="Social links">
                    @foreach([
                        ['label' => 'Instagram', 'svg' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="0.5" fill="currentColor" stroke="none"/></svg>'],
                        ['label' => 'Behance', 'svg' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M22 7h-7V5h7v2zm1.726 10c-.442 1.297-2.029 3-5.101 3-3.074 0-5.564-1.729-5.564-5.675 0-3.91 2.325-5.92 5.466-5.92 3.082 0 4.964 1.782 5.375 4.426.078.506.109 1.188.095 2.14H15.97c.13 1.2.836 1.98 2.101 1.98.808 0 1.354-.306 1.675-.926h3.98zm-5.998-4h-3.5c.123-1.064.843-1.72 1.757-1.72.93 0 1.63.698 1.743 1.72zm-9.26 6.34H0V5h7.737C10.779 5 12 6.583 12 8.457c0 1.248-.61 2.33-1.697 2.89C11.768 11.84 12.5 13.09 12.5 14.5c0 2.367-1.57 4.84-4.032 4.84zM3 10h4c.87 0 1.5-.607 1.5-1.5S7.87 7 7 7H3v3zm0 6.5h4.5c.966 0 1.5-.534 1.5-1.5S8.466 14 7.5 14H3v2.5z"/></svg>'],
                        ['label' => 'LinkedIn', 'svg' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"/><circle cx="4" cy="4" r="2"/></svg>'],
                        ['label' => 'Pinterest', 'svg' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M12 0C5.373 0 0 5.373 0 12c0 5.084 3.163 9.426 7.627 11.174-.105-.949-.2-2.405.042-3.441.218-.937 1.407-5.965 1.407-5.965s-.359-.719-.359-1.782c0-1.668.967-2.914 2.171-2.914 1.023 0 1.518.769 1.518 1.69 0 1.029-.655 2.568-.994 3.995-.283 1.194.599 2.169 1.777 2.169 2.133 0 3.772-2.249 3.772-5.495 0-2.873-2.064-4.882-5.012-4.882-3.414 0-5.418 2.561-5.418 5.207 0 1.031.397 2.138.893 2.738a.36.36 0 01.083.345l-.333 1.36c-.053.22-.174.267-.402.161-1.499-.698-2.436-2.889-2.436-4.649 0-3.785 2.75-7.262 7.929-7.262 4.163 0 7.398 2.967 7.398 6.931 0 4.136-2.607 7.464-6.227 7.464-1.216 0-2.359-.632-2.75-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146C9.57 23.812 10.763 24 12 24c6.627 0 12-5.373 12-12S18.627 0 12 0z"/></svg>'],
                        ['label' => 'X', 'svg' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-4.714-6.231-5.401 6.231H2.747l7.73-8.835L1.254 2.25H8.08l4.259 5.63 5.905-5.63zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>'],
                        ['label' => 'YouTube', 'svg' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M23.498 6.186a3.016 3.016 0 00-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 00.502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 002.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 002.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>'],
                    ] as $social)
                        <a href="#" aria-label="{{ $social['label'] }}">{!! $social['svg'] !!}</a>
                    @endforeach
                </div>
                <address>49 Featherstone Street<br>EC1Y 8SY , London/UK</address>
                <div class="footer-contact">
                    <a href="tel:+904481254848">+90 (448) 125 48 48 <span>&nearr;</span></a>
                    <a href="mailto:shop@pethemes.com">shop@pethemes.com <span>&nearr;</span></a>
                    <a href="mailto:customer@pethemes.com">customer@pethemes.com <span>&nearr;</span></a>
                </div>
            </div>
        </section>

        <section class="footer-bottom">
            <p>&copy;2025 - Ethnic</p>
            <nav aria-label="Legal links">
                <a href="#">Terms &amp; Conditions</a>
                <a href="#">Privacy Policy</a>
                <a href="#">Shipping &amp; Returns</a>
            </nav>
        </section>
    </div>
</footer>

<style>
    .saren-footer {
        padding: 5rem 0 .9rem;
        background: #e7e7e7;
        font-family: 'Inter', sans-serif;
    }

    .saren-footer .container-custom {
        max-width: none;
        padding-left: 0;
        padding-right: 0;
    }

    .footer-newsletter {
        display: flex;
        flex-direction: column;
        align-items: center;
        max-width: 760px;
        min-height: 25.5rem;
        margin: 0 auto;
        padding-bottom: 5.8rem;
        text-align: center;
    }

    .footer-newsletter-copy h2 {
        max-width: none;
        font-family: 'Inter Tight', 'Inter', sans-serif;
        font-size: clamp(1.05rem, 1.15vw, 1.35rem);
        font-weight: 700;
        line-height: 1.15;
        letter-spacing: 0;
        text-transform: uppercase;
    }

    .footer-newsletter-copy p {
        max-width: 640px;
        margin: 2rem auto 0;
        color: #111;
        font-size: .74rem;
        line-height: 1.25;
    }

    .footer-form {
        width: 100%;
        max-width: 620px;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 1rem;
        margin-top: 7rem;
        padding-top: 0;
    }

    .footer-audience {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: 1.6rem;
    }

    .footer-audience label {
        display: inline-flex;
        align-items: center;
        gap: .35rem;
        color: #111;
        font-size: .7rem;
        font-weight: 400;
    }

    .footer-audience input {
        width: .75rem;
        height: .75rem;
        accent-color: #141414;
    }

    .footer-input-row {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: .85rem;
    }

    .footer-input-row label {
        display: none;
    }

    .footer-input-row > div {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: .85rem;
        border-bottom: 0;
    }

    .footer-input-row input {
        min-width: 0;
        width: 100%;
        height: 3rem;
        padding: 0 1.25rem;
        background: transparent;
        border: 2px solid #111;
        border-radius: 999px;
        color: #141414;
        font-size: .78rem;
        outline: 0;
    }

    .footer-input-row button,
    .footer-actions a {
        display: inline-flex;
        align-items: center;
        gap: .45rem;
        min-height: 2.25rem;
        padding: 0 1.85rem;
        border: 0;
        border-radius: 999px;
        background: #050505;
        color: #fff;
        font-size: .64rem;
        font-weight: 600;
        letter-spacing: 0;
        text-transform: uppercase;
        white-space: nowrap;
    }

    .footer-note {
        max-width: 620px;
        margin-top: 2.2rem;
        color: rgba(20,20,20,.38);
        font-size: .68rem;
        line-height: 1.35;
    }

    .footer-actions {
        display: grid;
        grid-template-columns: repeat(3, minmax(0, 1fr));
        gap: 1rem;
        margin: 0;
        padding: 0 2rem;
        border-bottom: 0;
        background: transparent;
    }

    .footer-actions article {
        min-height: 9.75rem;
        padding: 2.35rem 2rem 1.9rem;
        background: #fff;
        border-radius: .55rem;
        text-align: center;
    }

    .footer-actions h3 {
        margin-bottom: 1.35rem;
        font-size: .95rem;
        font-weight: 600;
        letter-spacing: 0;
    }

    .footer-actions p {
        max-width: 30rem;
        min-height: 1.55rem;
        margin: 0 auto;
        color: rgba(20,20,20,.48);
        font-size: .64rem;
        line-height: 1.35;
    }

    .footer-actions a {
        justify-content: center;
        min-height: 1.45rem;
        margin-top: 1.35rem;
        padding: 0 .95rem;
        font-size: .55rem;
        font-weight: 700;
    }

    .footer-actions svg {
        width: .7rem;
        height: .7rem;
    }

    .footer-brand-row {
        padding: 0 2rem;
    }

    .footer-brand-top {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 2rem 0 5rem;
    }

    .footer-brand-bottom {
        display: flex;
        align-items: center;
        gap: 2rem;
        padding: 2rem 0;
        border-top: 1px solid rgba(20,20,20,.12);
    }

    .footer-logo {
        color: #141414;
        font-family: 'Inter Tight', 'Inter', sans-serif;
        font-size: 1.1rem;
        font-weight: 700;
        letter-spacing: -.03em;
        text-decoration: none;
    }

    .footer-logo sup {
        position: relative;
        top: -.45em;
        margin-left: .08rem;
        font-size: .38rem;
    }

    .footer-brand-top nav {
        display: flex;
        flex-wrap: wrap;
        gap: .4rem 2rem;
    }

    .footer-brand-top nav a {
        color: #111;
        font-size: .78rem;
        font-weight: 500;
        text-decoration: none;
    }

    .footer-brand-top nav a:hover {
        color: #141414;
    }

    .footer-socials {
        display: flex;
        align-items: center;
        gap: .9rem;
        flex-shrink: 0;
    }

    .footer-socials a {
        display: flex;
        align-items: center;
        justify-content: center;
        color: #111;
        text-decoration: none;
    }

    .footer-socials a svg {
        width: 1rem;
        height: 1rem;
    }

    .footer-brand-bottom address {
        color: #111;
        font-size: .72rem;
        line-height: 1.55;
        font-style: normal;
        flex-shrink: 0;
        min-width: 9rem;
    }

    .footer-contact {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        gap: .5rem;
        margin-left: auto;
    }

    .footer-contact a {
        display: inline-flex;
        align-items: center;
        gap: .3rem;
        padding: .5rem 1.1rem;
        border-radius: 999px;
        background: #fff;
        color: #111 !important;
        font-size: .72rem;
        text-decoration: none;
        white-space: nowrap;
    }

    .footer-contact a span {
        font-size: .65rem;
        opacity: .6;
    }

    .footer-brand-row a,
    .footer-bottom a,
    .footer-bottom p {
        color: #111;
        font-size: .72rem;
        line-height: 1.55;
        text-decoration: none;
        font-style: normal;
    }

    .footer-brand-row a:hover,
    .footer-bottom a:hover {
        color: #141414;
    }

    .footer-bottom {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 2rem;
        padding: .85rem 2rem;
    }

    .footer-bottom nav {
        display: flex;
        flex-wrap: wrap;
        gap: .4rem 1.5rem;
    }

    @media (max-width: 900px) {
        .footer-actions {
            grid-template-columns: 1fr;
            padding: 0 1.5rem;
        }

        .footer-brand-row {
            padding: 0 1.5rem;
        }

        .footer-brand-top {
            padding-bottom: 3rem;
        }

        .footer-brand-bottom {
            flex-wrap: wrap;
        }

        .footer-bottom {
            padding-left: 1.5rem;
            padding-right: 1.5rem;
        }
    }

    @media (max-width: 640px) {
        .saren-footer {
            padding-top: 3rem;
            padding-bottom: 1.2rem;
        }

        .footer-newsletter {
            min-height: auto;
            padding-bottom: 3.5rem;
        }

        .footer-newsletter-copy h2 {
            font-size: 1.05rem;
        }

        .footer-newsletter-copy p {
            margin-top: 1.3rem;
            font-size: .72rem;
        }

        .footer-form {
            margin-top: 3.25rem;
        }

        .footer-note {
            margin-top: 1.65rem;
        }

        .footer-actions article {
            min-height: auto;
            padding: 2.35rem 1.25rem 1.85rem;
        }

        .footer-actions p {
            min-height: 0;
        }

        .footer-brand-row {
            padding: 0 1rem;
        }

        .footer-brand-top {
            flex-direction: column;
            align-items: flex-start;
            gap: 1.5rem;
            padding-bottom: 2rem;
        }

        .footer-actions {
            padding: 0 1rem;
        }

        .footer-contact {
            margin-left: 0;
        }

        .footer-bottom {
            flex-direction: column;
            align-items: flex-start;
            gap: 1rem;
            padding-left: 1rem;
            padding-right: 1rem;
        }

        .footer-bottom nav {
            flex-direction: column;
        }
    }
</style>
