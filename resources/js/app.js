import "./bootstrap";

document.addEventListener("DOMContentLoaded", () => {
    const openBtn = document.getElementById("nav-open");
    const closeBtn = document.getElementById("nav-close");
    const overlay = document.getElementById("nav-overlay");
    const panel = document.getElementById("mobile-nav");

    if (!openBtn || !closeBtn || !overlay || !panel) return;

    function openNav() {
        overlay.classList.remove("hidden");
        panel.classList.remove("translate-x-full");
        openBtn.setAttribute("aria-expanded", "true");
        document.body.style.overflow = "hidden";
    }

    function closeNav() {
        panel.classList.add("translate-x-full");
        openBtn.setAttribute("aria-expanded", "false");
        document.body.style.overflow = "";
        setTimeout(() => overlay.classList.add("hidden"), 200);
    }

    openBtn.addEventListener("click", openNav);
    closeBtn.addEventListener("click", closeNav);
    overlay.addEventListener("click", closeNav);

    window.addEventListener("keydown", function (e) {
        if (e.key === "Escape") closeNav();
    });
});

(() => {
    const csrf = document
        .querySelector("meta[name='csrf-token']")
        ?.getAttribute("content");

    function qs(root, sel) {
        return root.querySelector(sel);
    }
    function qsa(root, sel) {
        return Array.from(root.querySelectorAll(sel));
    }

    function setSubmitting(form, isSubmitting) {
        const btn = qs(form, "[data-contact-submit]");
        const label = qs(form, "[data-submit-label]");
        const loading = qs(form, "[data-contact-loading]");
        if (btn) btn.disabled = isSubmitting;
        if (loading) loading.classList.toggle("hidden", !isSubmitting);
        if (label)
            label.textContent = isSubmitting ? "Sending…" : "Send Inquiry";
    }

    function clearAlert(form) {
        const alert =
            qs(form.parentElement, "[data-contact-alert]") ||
            qs(form, "[data-contact-alert]");
        if (!alert) return;
        alert.classList.add("hidden");
        alert.classList.remove(
            "border-emerald-200",
            "bg-emerald-50",
            "text-emerald-900",
        );
        alert.classList.remove("border-red-200", "bg-red-50", "text-red-900");
        alert.textContent = "";
        alert.innerHTML = "";
    }

    function setAlert(form, type, message, items = []) {
        const alert =
            qs(form.parentElement, "[data-contact-alert]") ||
            qs(form, "[data-contact-alert]");
        if (!alert) return;

        alert.classList.remove("hidden");
        alert.classList.remove(
            "border-emerald-200",
            "bg-emerald-50",
            "text-emerald-900",
        );
        alert.classList.remove("border-red-200", "bg-red-50", "text-red-900");

        if (type === "success") {
            alert.classList.add(
                "border-emerald-200",
                "bg-emerald-50",
                "text-emerald-900",
            );
        } else {
            alert.classList.add("border-red-200", "bg-red-50", "text-red-900");
        }

        if (items.length) {
            const li = items.map((t) => `<li>${escapeHtml(t)}</li>`).join("");
            alert.innerHTML = `<div class="font-semibold mb-1">${escapeHtml(message)}</div><ul class="list-disc pl-5 space-y-1">${li}</ul>`;
        } else {
            alert.textContent = message;
        }
    }

    function escapeHtml(str) {
        return String(str)
            .replaceAll("&", "&amp;")
            .replaceAll("<", "&lt;")
            .replaceAll(">", "&gt;")
            .replaceAll('"', "&quot;")
            .replaceAll("'", "&#039;");
    }

    function clearErrors(form) {
        qsa(form, "[data-error-for]").forEach((p) => {
            p.classList.add("hidden");
            p.textContent = "";
        });
    }

    function setFieldError(form, field, message) {
        const el = qs(form, `[data-error-for="${CSS.escape(field)}"]`);
        if (!el) return;
        el.textContent = message;
        el.classList.remove("hidden");
    }

    function attachClearOnEdit(form) {
        qsa(form, "input[name], textarea[name], select[name]").forEach(
            (input) => {
                input.addEventListener("input", () => {
                    const name = input.getAttribute("name");
                    if (!name) return;
                    const err = qs(
                        form,
                        `[data-error-for="${CSS.escape(name)}"]`,
                    );
                    if (err) {
                        err.classList.add("hidden");
                        err.textContent = "";
                    }
                    clearAlert(form);
                });
            },
        );
    }

    async function submitForm(form) {
        clearAlert(form);
        clearErrors(form);
        setSubmitting(form, true);

        // time trap seed
        const loadedAt = qs(form, 'input[name="form_loaded_at"]');
        if (loadedAt && !loadedAt.value) loadedAt.value = String(Date.now());

        try {
            const formData = new FormData(form);

            const res = await fetch(form.action, {
                method: "POST",
                headers: {
                    Accept: "application/json",
                    "X-Requested-With": "XMLHttpRequest",
                    ...(csrf ? { "X-CSRF-TOKEN": csrf } : {}),
                },
                body: formData,
                credentials: "same-origin",
            });

            const contentType = res.headers.get("content-type") || "";
            const data = contentType.includes("application/json")
                ? await res.json()
                : null;

            if (res.ok && data?.success) {
                setAlert(
                    form,
                    "success",
                    data?.message ||
                        "Thanks — we’ll reply within 1 business day.",
                );
                form.reset();

                // re-seed time trap after reset
                const loadedAt2 = qs(form, 'input[name="form_loaded_at"]');
                if (loadedAt2) loadedAt2.value = String(Date.now());
                return;
            }

            if (res.status === 422 && data?.errors) {
                Object.entries(data.errors).forEach(([field, messages]) => {
                    if (Array.isArray(messages) && messages.length)
                        setFieldError(form, field, messages[0]);
                });

                const all = Object.values(data.errors).flat().filter(Boolean);
                setAlert(
                    form,
                    "error",
                    data?.message || "Please fix the highlighted fields.",
                    all.slice(0, 6),
                );
                return;
            }

            if (res.status === 429) {
                setAlert(
                    form,
                    "error",
                    data?.message ||
                        "Too many attempts. Please wait a minute and try again.",
                );
                return;
            }

            setAlert(
                form,
                "error",
                data?.message || "Something went wrong. Please try again.",
            );
        } catch (e) {
            setAlert(form, "error", "Network error. Please try again.");
        } finally {
            setSubmitting(form, false);
            // no scrollIntoView. You required no jump; message is already in-place.
        }
    }

    function boot() {
        document.querySelectorAll("form[data-contact-form]").forEach((form) => {
            attachClearOnEdit(form);
            form.addEventListener("submit", (e) => {
                e.preventDefault();
                submitForm(form);
            });
        });
    }

    if (document.readyState === "loading") {
        document.addEventListener("DOMContentLoaded", boot);
    } else {
        boot();
    }
})();
