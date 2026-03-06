<!-- ====== Modal Section Start (On-brand) -->
<section x-data="{ modalOpen: false }">
  <div class="container mx-auto py-20">
    <!-- Demo trigger button: make it match your primary button style -->
    <button
      @click="modalOpen = true"
      class="btn btn-primary"
    >
      Open Modal
    </button>
  </div>

  <!-- Overlay -->
  <div
    x-show="modalOpen"
    x-transition.opacity
    class="fixed inset-0 z-50 flex items-center justify-center px-4 py-6"
    aria-labelledby="modal-title"
    role="dialog"
    aria-modal="true"
  >
    <!-- Backdrop -->
    <div
      class="absolute inset-0 bg-slate-950/70 backdrop-blur-sm"
      @click="modalOpen = false"
      aria-hidden="true"
    ></div>

    <!-- Panel -->
    <div
      @click.outside="modalOpen = false"
      x-transition
      class="relative w-full max-w-[560px] overflow-hidden rounded-2xl bg-white shadow-2xl ring-1 ring-black/10"
    >
      <!-- Brand accent -->
      <div class="h-1.5 w-full bg-[color:var(--gold)]"></div>

      <div class="px-7 py-8 sm:px-10 sm:py-10 text-left">
        <div class="flex items-start justify-between gap-4">
          <div>
            <p class="eyebrow">
              Confirmation
            </p>
            <h3
              id="modal-title"
              class="mt-2 text-xl sm:text-2xl font-semibold text-slate-900"
            >
              Your message was sent
            </h3>
          </div>

          <!-- Close -->
          <button
            @click="modalOpen = false"
            class="inline-flex h-9 w-9 items-center justify-center rounded-full text-slate-500 transition hover:bg-slate-100 hover:text-slate-700 focus:outline-none focus:ring-2 focus:ring-[color:var(--gold)]/40"
            aria-label="Close modal"
          >
            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
            </svg>
          </button>
        </div>

        <p class="mt-4 text-sm leading-relaxed text-slate-600">
          We’ll reply within 1 business day. If your date is coming up soon, include your venue and guest count for faster confirmation.
        </p>

        <!-- Action row -->
        <div class="mt-8 flex flex-col-reverse gap-3 sm:flex-row sm:justify-end">
          <!-- Secondary -->
          <button
            @click="modalOpen = false"
            class="btn btn-secondary"
          >
            Close
          </button>

          <!-- Primary -->
          <button
            class="btn btn-primary"
          >
            View Details
          </button>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ====== Modal Section End -->