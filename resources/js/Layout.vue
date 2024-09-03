<script setup>
import { Head } from "@inertiajs/vue3";
import { Link as InertiaLink } from "@inertiajs/vue3";
</script>

<template>
    <div class="container">
        <header class="d-flex justify-content-center py-3">
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <inertia-link
                        href="/"
                        class="nav-link"
                        :class="{ active: $page.url === '/' }"
                        >Home</inertia-link
                    >
                </li>
                <li class="nav-item">
                    <inertia-link
                        href="/features"
                        class="nav-link"
                        :class="{ active: $page.url === '/features' }"
                        >Features</inertia-link
                    >
                </li>
                <li class="nav-item">
                    <inertia-link
                        href="/pricing"
                        class="nav-link"
                        :class="{ active: $page.url === '/pricing' }"
                        >Pricing</inertia-link
                    >
                </li>
                <li class="nav-item">
                    <inertia-link
                        href="/faqs"
                        class="nav-link"
                        :class="{ active: $page.url === '/faqs' }"
                        >FAQs</inertia-link
                    >
                </li>
                <li class="nav-item">
                    <inertia-link
                        href="/about"
                        class="nav-link"
                        :class="{ active: $page.url === '/about' }"
                        >About</inertia-link
                    >
                </li>
            </ul>
        </header>
    </div>

    <slot />
</template>
