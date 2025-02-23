@php
    $logo = get_theme_option(key: 'theme_logo') ?? [];
    $defaultLogo =
        isset($logo['logo']) && fileExists('lms/theme-options', $logo['logo']) == true
            ? asset("storage/lms/theme-options/{$logo['logo']}")
            : asset('lms/frontend/assets/images/logo/default-logo-dark.svg');

    $footerLogo =
        isset($logo['footer_logo']) && fileExists('lms/theme-options', $logo['footer_logo']) == true
            ? asset("storage/lms/theme-options/{$logo['footer_logo']}")
            : asset('lms/frontend/assets/images/logo/default-logo-dark.svg');

    $favIcon =
        isset($logo['favicon']) && fileExists('lms/theme-options', $logo['favicon']) == true
            ? asset("storage/lms/theme-options/{$logo['favicon']}")
            : asset('lms/frontend/assets/images/favicon.ico');

    $data = array_merge($data, [
        'default_logo' => $defaultLogo,
        'footer_logo' => $footerLogo,
        'fav_icon' => $favIcon,
        'menus' => get_menus(),
        'wishlist' => [
            'is_show' => true,
            'icon_image' => asset('lms/frontend/assets/images/icons/wish-list.svg'),
            'link_class' => 'relative hidden sm:flex-center text-white px-2 py-3 shrink-0',
        ],
    ]);
@endphp

<x-frontend-layout :data="$data">
    <!-- START BANNER AREA -->
    <x-theme::hero.hero-one />
    <!-- END BANNER AREA -->
    <!-- START CATEGORY AREA -->
    <x-theme::category.top-category :categories="$data['categories']" />
    <!-- END CATEGORY AREA -->
    <x-theme::blog.latest-blog-one :blogs="$data['blogs']" />
    <!-- START TESTIMONIAL AREA -->
    <x-theme::testimonial.testimonial-one :testimonials="$data['testimonials']" />
    <!-- END TESTIMONIAL AREA -->

</x-frontend-layout> 
