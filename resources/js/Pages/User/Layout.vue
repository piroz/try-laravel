<script setup>
import { Link } from '@inertiajs/vue3'
</script>

<template>
  <main>
    <header>
      <Link href="/">Home</Link>
      <Link href="/show_request?test=3">show_request</Link>
      <Link href="/flights">flights</Link>
    </header>
    <article>
      <slot />
    </article>
  </main>
</template>
