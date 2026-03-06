@php
  // allow multiple forms per page safely
  $formId = $formId ?? ('contact-form-' . uniqid());
@endphp

<div class="rounded-2xl border border-gray-200 bg-white p-8 md:p-12 shadow-sm">
  <h2 class="mb-3">Check Availability</h2>
  <p class="mb-10 text-body-color">
    Tell us your date and venue — we typically respond within 1 business day.
  </p>

  {{-- Top summary / status (success + errors) --}}
  <div data-contact-alert class="hidden mb-6 rounded-xl border px-4 py-3 text-sm"></div>

  <form data-contact-form
        id="{{ $formId }}"
        action="{{ route('contact.submit') }}"
        method="POST"
        novalidate>
    @csrf

    {{-- Honeypot --}}
    <div class="hidden" aria-hidden="true">
      <label for="{{ $formId }}-website">Website</label>
      <input id="{{ $formId }}-website"
             name="website"
             type="text"
             tabindex="-1"
             autocomplete="off">
    </div>

    {{-- Time trap --}}
    <input type="hidden" name="form_loaded_at" value="">

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
      <div>
        <x-form.field for="fname" type="text" note="(required)" autocomplete="given-name">
          First name
        </x-form.field>
        <p class="mt-2 hidden text-sm text-red-600" data-error-for="fname"></p>
      </div>

      <div>
        <x-form.field for="lname" type="text" note="(required)" autocomplete="family-name">
          Last name
        </x-form.field>
        <p class="mt-2 hidden text-sm text-red-600" data-error-for="lname"></p>
      </div>

      <div>
        <x-form.field for="email" type="email" note="(required)" autocomplete="email">
          Email
        </x-form.field>
        <p class="mt-2 hidden text-sm text-red-600" data-error-for="email"></p>
      </div>

      <div>
        <x-form.field for="phone" type="tel" note="(required)" autocomplete="tel">
          Phone
        </x-form.field>
        <p class="mt-2 hidden text-sm text-red-600" data-error-for="phone"></p>
      </div>

      <div>
        <x-form.field for="date" type="date" note="(required)">
          Event date
        </x-form.field>
        <p class="mt-2 hidden text-sm text-red-600" data-error-for="date"></p>
      </div>

      <div>
        <x-form.field for="event" type="select" note="(required)"
          values="Wedding, Engagement Party, Corporate Event, Birthday, Other">
          Event type
        </x-form.field>
        <p class="mt-2 hidden text-sm text-red-600" data-error-for="event"></p>
      </div>

      <div>
        <x-form.field for="venue" type="text" note="(recommended)">
          Venue / Location
        </x-form.field>
        <p class="mt-2 hidden text-sm text-red-600" data-error-for="venue"></p>
      </div>

      <div>
        <x-form.field for="package" type="select" note="(recommended)"
          values="Not sure yet, Essential, Signature, Luxury">
          Package interest
        </x-form.field>
        <p class="mt-2 hidden text-sm text-red-600" data-error-for="package"></p>
      </div>

      <div class="md:col-span-2">
        <x-form.field for="body" type="textarea" note="(required)">
          Anything we should know? (timeline, planner, guest count, special requests)
        </x-form.field>
        <p class="mt-2 hidden text-sm text-red-600" data-error-for="body"></p>
      </div>
    </div>

    <div class="mt-8 flex flex-col sm:flex-row gap-4 sm:items-center sm:justify-between">
      <p class="text-sm text-body-color">
        Prefer email?
        <a class="text-brand-goldText font-semibold hover:underline" href="mailto:contact@xprtevents.com">contact@xprtevents.com</a>
      </p>

      <div class="flex items-center gap-3">
        <div data-contact-loading class="hidden">
          <p class="text-sm text-body-color">Sending…</p>
        </div>

        <button type="submit"
                data-contact-submit
                class="btn btn-primary w-full sm:w-auto disabled:opacity-60 disabled:cursor-not-allowed">
          <span data-submit-label>Send Inquiry</span>
        </button>
      </div>
    </div>
  </form>
</div>