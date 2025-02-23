<!-- START ABOUT US AREA -->
@php
    $aboutUs = get_theme_option('about_us' . active_language()) ?: get_theme_option('about_usen');

    $imageName = $aboutUs['banner_img_elearning'] ?? '';
    $aboutImg =
        isset($imageName) && fileExists('lms/theme-options', $imageName) == true
            ? asset('storage/lms/theme-options/' . $imageName)
            : asset('lms/frontend/assets/images/banner/banner_placeholder_2.svg');
@endphp
<x-frontend-layout>
    <x-theme::breadcrumbs.breadcrumb-one pageTitle="About Us" pageRoute="About Us" pageName="About Us" />
    <!-- Blog -->

    <div class="container">
        <div class="grid grid-cols-12 gap-x-4 xl:gap-x-7 gap-y-7 items-center">
            <div class="col-span-full lg:col-span-5">
                <img data-src="{{ $aboutImg }}" alt="About Us">
            </div>
            <div class="col-span-full lg:col-span-7">
                <div class="lg:pl-[10%] rtl:lg:pl-0 rtl:lg:pr-[10%]">
                    <div class="outline-text-one text-4xl lg:text-7xl">{{ translate('Learn to Earn') }}</div>
                    <h2 class="area-title mt-1">{{ $aboutUs['title'] ?? '' }}</h2>
                    <div class="area-description mt-2.5 line-clamp-6">
                        {!! clean($aboutUs['short_description'] ?? '') !!}
                    </div>
                    <a href="https://lms.hachstacks.com/"
                        class="btn b-solid btn-secondary-solid btn-lg !text-heading mt-11"
                        target="_blank"
                        rel="noopener noreferrer"
                        aria-label="View More Details">
                        {{ translate('View Cohort One') }}
                    </a>
                </div>
            </div>
        </div>
    </div>

</x-frontend-layout>
