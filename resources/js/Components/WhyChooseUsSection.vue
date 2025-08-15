<script setup>
import FarmImage from '../../images/farming-products.png'; // Replace with an actual farm/livestock image
</script>

<template>
  <section class="py-12">
    <div class="container mx-auto flex flex-col md:flex-row items-center px-4">

      <!-- Text Column -->
      <div class="w-full md:w-1/2 mb-10 md:mb-0" data-aos="fade-right">
        <h5 class="text-sm uppercase text-gray-500 dark:text-gray-300 mb-2">
          Why Choose Maibere Ventures
        </h5>
        <h2 class="text-3xl md:text-4xl font-bold mb-4">
          Fresh Farm Produce & Quality Livestock You Can Trust
        </h2>
        <p class="text-gray-700 dark:text-gray-200">
          At Maibere Ventures Nigeria Ltd, we pride ourselves on delivering fresh, organically grown crops
          and healthy livestock directly from our farms to your table. With years of farming expertise,
          reliable supply chains, and fair prices, we ensure you enjoy nutritious food while supporting
          sustainable agriculture.
        </p>
      </div>

      <!-- Image Column -->
      <div class="w-full md:w-1/2" data-aos="fade-left">
        <img
          :src="FarmImage"
          alt="Fresh Farm Products"
          class="w-full h-auto rounded-lg shadow-md"
        />
      </div>
    </div>
  </section>
</template>
