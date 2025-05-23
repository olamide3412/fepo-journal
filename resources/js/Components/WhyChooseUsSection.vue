<script setup>
import JournalImage from '../../images/journal-publish.jpg'; // Replace with an appropriate journal-themed image
</script>

<template>
  <section class="py-12">
    <div class="container mx-auto flex flex-col md:flex-row items-center px-4">

      <!-- Text Column -->
      <div class="w-full md:w-1/2 mb-10 md:mb-0" data-aos="fade-right">
        <h5 class="text-sm uppercase text-gray-500 dark:text-gray-300 mb-2">Why Publish with Us</h5>
        <h2 class="text-3xl md:text-4xl font-bold mb-4">
          Over 500 Peer-Reviewed Articles Published
        </h2>
        <p class="text-gray-700 dark:text-gray-200">
          Fepo Journal has earned the trust of researchers globally by maintaining high editorial standards,
          fast publication timelines, and an open-access model that ensures broad visibility for your work.
        </p>
      </div>

      <!-- Image Column -->
      <div class="w-full md:w-1/2" data-aos="fade-left">
        <img
          :src="JournalImage"
          alt="Scholars Publishing"
          class="w-full h-auto rounded-lg shadow-md"
        />
      </div>
    </div>
  </section>
</template>
