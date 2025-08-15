<script setup>
import { Link } from '@inertiajs/vue3';
import HeroImage from '../../../images/farm-logo.png'; // New farm logo
import FarmCover from '../../../images/farm-cover.png'; // Replace with farming image
import LogoFull from '../../../images/logo-full.png';
import ff from '../../../images/farm-cover.png'
</script>

<template>
  <!-- ✅ Mobile View -->
  <section class="block md:hidden px-4 py-6">
    <!-- Image First -->
    <div data-aos="zoom-out" data-aos-delay="500" data-aos-duration="1000" class="mb-6">
      <img :src="FarmCover" alt="Farm Products" class="w-full custom-bounce rounded-lg" />
    </div>
    <!-- Text Below -->
    <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="0" class="space-y-4">
      <h1 class="text-2xl font-bold text-gray-900 dark:text-gray-100 text-center">
        Fresh Farm Produce & Livestock Marketplace
      </h1>
      <p class="text-base text-gray-600 dark:text-gray-300 text-center">
        Buy and sell fresh farm products, livestock, and agricultural stock directly from trusted farmers.
      </p>
      <div class="flex flex-col space-y-3 px-5 text-center">
        <Link href="/products" class="bg-green-600 text-white px-6 py-3 rounded-full shadow hover:bg-green-700 transition">
          Browse Products
        </Link>
        <Link href="/sell" class="border border-green-600 text-green-600 px-6 py-3 rounded-full hover:bg-green-600 hover:text-white transition dark:bg-gray-300">
          Sell Your Products
        </Link>
      </div>
    </div>
  </section>

  <!-- ✅ Desktop View -->
  <section class="hidden md:flex min-h-screen items-center justify-between px-16 py-0">
    <!-- Text Left -->
    <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="0" class="w-1/2 space-y-6 other-element">
      <h1 class="text-5xl font-bold text-gray-900 dark:text-gray-100 leading-tight">
        Your One-Stop Farming & Livestock Marketplace
      </h1>
      <p class="text-lg text-gray-600 dark:text-gray-300">
        Connecting farmers and buyers for fresh produce, livestock, and agricultural goods at the best prices.
      </p>
      <div class="flex space-x-4">
        <Link href="/products" class="bg-green-600 text-white px-6 py-3 rounded-lg shadow hover:bg-green-700 transition">
          Browse Products
        </Link>
        <Link href="/sell" class="border border-green-600 text-green-600 px-6 py-3 rounded-lg hover:bg-green-600 hover:text-white transition dark:bg-gray-300">
          Sell Your Products
        </Link>
      </div>
    </div>

    <!-- Image Right -->
    <div data-aos="zoom-out" data-aos-delay="500" data-aos-duration="1000" data-aos-anchor=".other-element" class="w-1/2 flex justify-center">
      <img :src="FarmCover" alt="Farm Products" class="w-full max-w-md custom-bounce rounded-lg" />
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
