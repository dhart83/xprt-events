<div
    class="bg-gray-100 border dark:bg-inherit dark:shadow-lg dark:shadow-black dark:border-black py-12 px-6 md:px-12 xl:px-24 rounded-lg">
    <h2 class="mb-6">Connect With Us</h2>
    <p class="mb-16">We Strive to respond within 1 business day.</p>
    <form action="{{ route('contact.submit') }}" method="POST" x-data="{
            showModal: false,
            showSpinner: false,
            formData: {
                fname: '',
                lname: '',
                phone: '',
                ext: '',
                email: '',
                event: '',
                body: '',
                date: '',
                budget: ''
            },
            errors: {},
            successTitle: '',
            successMessage: '',

            submitForm(event) {
                this.showSpinner = true;
                this.successTitle = '';
                this.successMessage = '';
                this.errors = {};

                fetch('/contact', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-Requested-With': 'XMLHttpRequest',
                        'X-CSRF-TOKEN': document.querySelector(`meta[name='csrf-token']`).getAttribute('content')
                    },
                    body: JSON.stringify(this.formData)
                }).then(res => {
                    if (res.status == 200) {
                        return res.json();
                    }
                    throw res;
                }).then(res => {
                    this.formData = {
                        fname: '',
                        lname: '',
                        phone: '',
                        ext: '',
                        email: '',
                        event: '',
                        body: '',
                        date: '',
                        budget: ''
                    };
                    this.successTitle = 'Message Sent Successfully!';
                    this.successMessage = 'Thank you for getting in touch with us! Your message has been sent successfully, and we will be in contact with you soon. If you have any further questions or requests, feel free to let us know. We are here to assist you';
                    this.showModal = true;
                }).catch(async (response) => {
                    const res = await response.json();
                    if(response.status == 422) {
                        this.errors = res.errors;
                    }
                }).finally(() => {
                    this.showSpinner = false;
                })
            }
        }" x-on:submit.prevent='submitForm'>

        <template x-if="showSpinner" x-transition>
            <div
                class="flex items-center justify-center fixed top-0 left-0 h-full min-h-screen w-full bg-black bg-opacity-90 backdrop-blur-sm px-4 py-5 z-40">
                <dotlottie-player class="w-32 md:w-40" background="transparent" direction="1" speed="0.75"
                    src="https://lottie.host/d58534e7-c351-4122-8dbd-51f7ddaaa602/HPxeA95Pwp.json" loop autoplay>
                </dotlottie-player>
            </div>
        </template>


        <template x-if="successMessage && showModal" x-transition>
            <div
                class="flex items-center justify-center fixed top-0 left-0 h-full min-h-screen w-full bg-black bg-opacity-90 backdrop-blur-sm px-4 py-5 z-40">
                <dotlottie-player class="absolute top-0 left-0 h-full w-[200%] -translate-x-[25%]"
                    src="https://lottie.host/6d477dc3-e25f-40e0-91e7-b9a3e00fe6e1/0T5NHRjZt9.json"
                    background="transparent" speed="1" loop autoplay>
                </dotlottie-player>
                <div @click.outside="showModal = false"
                    class="w-full max-w-[570px] rounded-[20px] bg-light py-12 px-8 text-center md:py-[60px] md:px-[70px] z-10">
                    <h3 class="text-dark pb-2 text-xl font-bold sm:text-2xl" x-text="successTitle"></h3>
                    <span class="bg-primary mx-auto mb-6 inline-block h-1 w-[90px] rounded"></span>
                    <p class="mb-10 text-dark leading-relaxed" x-text="successMessage"></p>
                    <div class="-mx-3 flex flex-wrap">
                        <div class="w-1/2 px-3 mx-auto">
                            <button @click="showModal = false"
                                class="bg-primary border-primary block w-full rounded-lg border p-3 text-center font-medium text-white transition hover:bg-opacity-90">
                                Close
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </template>


        @csrf

        <div class="md:grid grid-cols-2 gap-3">
            <div class="mb-4">
                <x-form.field
                    ::class="errors.fname ? 'border-red-500 focus:border-red-500 dark:border-red-500 dark:focus:border-red-500' : ''"
                    x-model="formData.fname" for="fname" type="text" note="(required)" autocomplete="given-name">
                    First name
                </x-form.field>
                <template x-if="errors.fname">
                    <div x-text="errors.fname[0]" class="text-red-500 text-sm dark:font-light"></div>
                </template>
            </div>
            <div class="mb-4">
                <x-form.field
                    ::class="errors.lname ? 'border-red-500 focus:border-red-500 dark:border-red-500 dark:focus:border-red-500' : ''"
                    x-model="formData.lname" for="lname" type="text" note="(required)" autocomplete="family-name">
                    Last name
                </x-form.field>
                <template x-if="errors.lname">
                    <div x-text="errors.lname[0]" class="text-red-500 text-sm dark:font-light"></div>
                </template>
            </div>
        </div>

        <div class="md:grid grid-cols-2 gap-3">
            <div class="mb-4">
                <x-form.field
                    ::class="errors.phone ? 'border-red-500 focus:border-red-500 dark:border-red-500 dark:focus:border-red-500' : ''"
                    x-model="formData.phone" for="phone" type="tel" note="(required)" autocomplete="tel">
                    Phone number
                </x-form.field>
                <template x-if="errors.phone">
                    <div x-text="errors.phone[0]" class="text-red-500 text-sm dark:font-light"></div>
                </template>
            </div>
            <div class="mb-4">
                <x-form.field
                    ::class="errors.ext ? 'border-red-500 focus:border-red-500 dark:border-red-500 dark:focus:border-red-500' : ''"
                    x-model="formData.ext" for="ext" type="number" autocomplete="tel-extension">
                    Extension
                </x-form.field>
                <template x-if="errors.ext">
                    <div x-text="errors.ext[0]" class="text-red-500 text-sm dark:font-light"></div>
                </template>
            </div>
        </div>

        <div class="mb-4">
            <x-form.field
                ::class="errors.email ? 'border-red-500 focus:border-red-500 dark:border-red-500 dark:focus:border-red-500' : ''"
                x-model="formData.email" for="email" type="email" note="(required)" autocomplete="email">
                Email Address
            </x-form.field>
            <template x-if="errors.email">
                <div x-text="errors.email[0]" class="text-red-500 text-sm dark:font-light"></div>
            </template>
        </div>
        <div class="mb-4">
            <x-form.field
                ::class="errors.event ? 'border-red-500 focus:border-red-500 dark:border-red-500 dark:focus:border-red-500' : ''"
                x-model="formData.event" for="event" type="text" note="(required)">
                What type of event are you having?
            </x-form.field>
            <template x-if="errors.event">
                <div x-text="errors.event[0]" class="text-red-500 text-sm dark:font-light"></div>
            </template>
        </div>
        <div class="mb-4">
            <x-form.field
                ::class="errors.body ? 'border-red-500 focus:border-red-500 dark:border-red-500 dark:focus:border-red-500' : ''"
                x-model="formData.body" for="body" type="textarea" note="(required)">
                Tell us about your event
            </x-form.field>
            <template x-if="errors.body">
                <div x-text="errors.body[0]" class="text-red-500 text-sm dark:font-light"></div>
            </template>
        </div>

        <div class="md:grid grid-cols-2 gap-3 mb-6 md:mb-3">
            <div class="mb-4">
                <x-form.field
                    ::class="errors.date ? 'border-red-500 focus:border-red-500 dark:border-red-500 dark:focus:border-red-500' : ''"
                    x-model="formData.date" for="date" type="date" note="(required)">
                    When is your event?
                </x-form.field>
                <template x-if="errors.date">
                    <div x-text="errors.date[0]" class="text-red-500 text-sm dark:font-light"></div>
                </template>
            </div>
            <div class="mb-4">
                <x-form.field
                    ::class="errors.budget ? 'border-red-500 focus:border-red-500 dark:border-red-500 dark:focus:border-red-500' : ''"
                    x-model="formData.budget" for="budget" type="select"
                    values=" , $500 - $1000, $1000 - $1500, $1500 - $2000, Cost is not a concern" note="(required)">
                    What is your budget?
                </x-form.field>
                <template x-if="errors.budget">
                    <div x-text="errors.budget[0]" class="text-red-500 text-sm dark:font-light"></div>
                </template>
            </div>
        </div>

        <div class="text-right">
            {{-- <x-button type='submit'>Submit</x-button> --}}
            <button type="submit" class="btn btn-primary w-full lg:w-auto">Submit</button>
        </div>

    </form>
</div>