<script setup>
import { Link } from '@inertiajs/vue3';
import HeroImage from '../../../images/logo.png'; // Placeholder logo
import JournalCover from '../../../images/jcover-nobg.png'
import LogoFull from '../../../images/logo-full.png'; // Placeholder full logo
</script>

<template>
  <!-- ✅ Mobile View -->
  <section class="block md:hidden px-4 py-6">
    <!-- Image First -->
    <div data-aos="zoom-out" data-aos-delay="500" data-aos-duration="1000" class="mb-6">
      <img :src="JournalCover" alt="Journal Cover" class="w-full custom-bounce rounded-lg" />
    </div>
    <!-- Text Below -->
    <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="0" class="space-y-4">
      <h1 class="text-2xl font-bold text-gray-900 dark:text-gray-100 text-center">
        Federal Polytechnic Orogun Journal of Research and Innovation
      </h1>
      <p class="text-base text-gray-600 dark:text-gray-300 text-center">
        Explore groundbreaking academic papers and innovative research by scholars and professionals.
      </p>
      <div class="flex flex-col space-y-3 px-5 text-center">
        <Link href="/submit-paper" class="bg-primary text-white px-6 py-3 rounded-full shadow hover:bg-primary-dark transition">
          Submit a Paper
        </Link>
        <Link href="/about-journal" class="border border-primary text-primary px-6 py-3 rounded-full hover:bg-primary hover:text-white transition dark:bg-gray-300">
          About the Journal
        </Link>
      </div>
    </div>
  </section>

  <!-- ✅ Desktop View -->
  <section class="hidden md:flex min-h-screen items-center justify-between px-16 py-0">
    <!-- Text Left -->
    <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="0" class="w-1/2 space-y-6 other-element">
      <h1 class="text-5xl font-bold text-gray-900 dark:text-gray-100 leading-tight">
        Federal Polytechnic Orogun Journal of Research and Innovation
      </h1>
      <p class="text-lg text-gray-600 dark:text-gray-300">
        A platform for academic excellence, innovation, and interdisciplinary research.
      </p>
      <div class="flex space-x-4">
        <Link href="/submit-paper" class="bg-primary text-white px-6 py-3 rounded-lg shadow hover:bg-primary-dark transition">
          Submit a Paper
        </Link>
        <Link href="/about-journal" class="border border-primary text-primary px-6 py-3 rounded-lg hover:bg-primary hover:text-white transition dark:bg-gray-300">
          About the Journal
        </Link>
      </div>
    </div>

    <!-- Image Right -->
    <div data-aos="zoom-out" data-aos-delay="500" data-aos-duration="1000" data-aos-anchor=".other-element" class="w-1/2 flex justify-center">
      <img :src="JournalCover" alt="Journal Cover" class="w-full max-w-md custom-bounce rounded-lg" />
    </div>
  </section>
</template>

<style scoped>
@keyframes small-bounce {
  0%, 100% {
    transform: translateY(0);
  }
  50% {
    transform: translateY(-5px);
  }
}

.custom-bounce {
  animation: small-bounce 1s infinite;
}
</style>
