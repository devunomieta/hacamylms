@php
    $bottom =
        get_theme_option('footer_bottom' . active_language()) ?:
        get_theme_option('footer_bottomen') ?? get_theme_option('footer_bottom' . app('default_language'));
@endphp

@if (isset($bottom['status']))
    <!-- START BOTTOM -->
    <div class="bg-[#FFFFFF0F] py-5 rounded-t-lg">
        <div class="container">
            <div class="grid grid-cols-12 gap-7">
                <div class="col-span-full lg:col-span-full">
                    <div class="text-center lg:text-center rtl:lg:text-center">
                        <div class="text-sm !leading-none font-semibold text-white/80">
                            {!! clean($bottom['copy_right'] ?? '') !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
