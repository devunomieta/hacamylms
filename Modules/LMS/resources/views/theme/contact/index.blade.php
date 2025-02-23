<x-frontend-layout>
    <x-theme::breadcrumbs.breadcrumb-one
        pageTitle="Contact" 
        pageRoute="{{ route('contact.page') }}" 
        pageName="Contact" 
    />
    <!-- START CONTACT OVERVIEW -->
    <div class="container">
        <div class="grid grid-cols-12 gap-4 xl:gap-7">
            <x-theme::contact-form.contact-information />
        </div>
    </div>
    <!-- END CONTACT OVERVIEW -->
    <!-- START CONTACT FORM -->
    <div class="bg-primary-50 mt-8 sm:mt-12 lg:mt-[60px] -mb-8 sm:-mb-12 lg:-mb-[60px] relative overflow-hidden">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1">
                <div class="col-span-full lg:col-auto bg-primary-50 py-16 sm:py-24 lg:py-[120px] flex flex-col items-center text-center">
                    <!-- Centered Title -->
                    <h5 class="area-title">{{ translate('Send a DM') }}</h5>
    
                    <!-- Centered Form -->
                    <x-theme::contact-form.form class="mt-10 w-full lg:max-w-screen-sm" formType="support" />
                </div>
            </div>
        </div>
    </div>
    <!-- END CONTACT FORM -->
</x-frontend-layout>
