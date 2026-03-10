@php
  // allow multiple forms per page safely
  $formId = $formId ?? ('contact-form-' . uniqid());
@endphp

<div class="rounded-2xl border border-brand-navy/10 bg-white p-8 shadow-sm md:p-12">
  <h2 class="mb-3">Check Availability</h2>

  <p class="mb-2 text-brand-text">
    Tell us your date and venue — we usually respond within one business day.
  </p>

  <p class="mb-10 text-sm text-brand-text/70">
    Popular wedding dates can book quickly, so early inquiries are recommended.
  </p>

  {{-- Top summary / status (success + errors) --}}
  <div data-contact-alert class="mb-6 hidden rounded-xl border px-4 py-3 text-sm"></div>

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

    <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
      <div>
        <x-form.field for="fname" type="text" note="*" autocomplete="given-name">
          First name
        </x-form.field>
        <p class="mt-2 hidden text-sm text-red-600" data-error-for="fname"></p>
      </div>

      <div>
        <x-form.field for="lname" type="text" note="" autocomplete="family-name">
          Last name
        </x-form.field>
        <p class="mt-2 hidden text-sm text-red-600" data-error-for="lname"></p>
      </div>

      <div>
        <x-form.field for="email" type="email" note="*" autocomplete="email">
          Email
        </x-form.field>
        <p class="mt-2 hidden text-sm text-red-600" data-error-for="email"></p>
      </div>

      <div>
        <x-form.field for="phone" type="tel" note="" autocomplete="tel">
          Phone
        </x-form.field>
        <p class="mt-2 hidden text-sm text-red-600" data-error-for="phone"></p>
      </div>

      <div>
        <x-form.field for="date" type="date" note="*">
          Event date
        </x-form.field>
        <p class="mt-2 hidden text-sm text-red-600" data-error-for="date"></p>
      </div>

      <div>
        <x-form.field for="event" type="select" note="*"
          values="Wedding, Birthday Party, Corporate Event, Private Party, Baby Shower / Gender Reveal, Graduation Party, School Dance / Prom, Fundraiser / Charity Event, Other">
          Event type
        </x-form.field>
        <p class="mt-2 hidden text-sm text-red-600" data-error-for="event"></p>
      </div>

      <div>
        <x-form.field for="venue" type="text" note="">
          Venue / Location
        </x-form.field>
        <p class="mt-2 hidden text-sm text-red-600" data-error-for="venue"></p>
      </div>

      <div>
        <x-form.field for="package" type="select" note=""
          values="Not sure yet, Essential, Signature, Luxury">
          Package interest
        </x-form.field>
        <p class="mt-2 hidden text-sm text-red-600" data-error-for="package"></p>
      </div>

      <div class="md:col-span-2">
        <x-form.field for="body" type="textarea" note="">
          Anything we should know? (timeline, guest count, special requests)
        </x-form.field>
        <p class="mt-2 hidden text-sm text-red-600" data-error-for="body"></p>
      </div>
    </div>

    <div class="mt-8 flex flex-col gap-4 border-t border-brand-navy/10 pt-6 sm:flex-row sm:items-center sm:justify-between">
      <div>
        <p class="text-sm text-brand-text/75">
          Prefer email instead?
          <a class="font-semibold text-brand-goldText hover:underline" href="mailto:contact@xprtevents.com">contact@xprtevents.com</a>
        </p>
        <p class="mt-1 text-xs text-brand-text/60">
          No spam. Just a quick reply with availability and package options.
        </p>
      </div>

      <div class="flex w-full flex-col items-stretch gap-3 sm:w-auto sm:items-end">
        <div data-contact-loading class="hidden">
          <p class="text-sm text-brand-text/70">Sending…</p>
        </div>

        <button type="submit"
                data-contact-submit
                class="btn btn-primary w-full sm:w-auto sm:min-w-[220px] disabled:cursor-not-allowed disabled:opacity-60">
          <span data-submit-label>Check Availability</span>
        </button>
      </div>
    </div>
  </form>
</div>