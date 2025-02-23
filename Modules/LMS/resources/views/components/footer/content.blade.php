@php
    $logoName = get_theme_option(key: 'footer_logo', parent_key: 'theme_logo') ?? null;
    $footerLogo =
        $logoName && fileExists('lms/theme-options', $logoName) == true
            ? asset("storage/lms/theme-options/{$logoName}")
            : asset('lms/frontend/assets/images/logo/default-logo-dark.svg');
    $top =
        get_theme_option('footer_top' . active_language()) ?:
        get_theme_option('footer_topen') ?? get_theme_option('footer_top' . app('default_language'));

    $footerLogo = $data['footer_logo'] ?? $footerLogo;
    $socials = get_theme_option(key: 'socials', parent_key: 'social') ?? [];

@endphp
 