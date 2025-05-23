<script setup>
import JournalCover from '../../../images/journal-cover.jpg'
</script>

<template>
  <section class="py-12 md:py-20 bg-white">
    <div class="container mx-auto px-4 flex flex-col md:flex-row items-center gap-10">
      <!-- Left Column: Image -->
      <div
        class="md:w-1/2"
        data-aos="fade-right"
        data-aos-duration="800"
        data-aos-delay="200"
      >
        <img
          :src="JournalCover"
          alt="Federal Polytechnic Orogun Journal"
          width="1024"
          height="879"
          class="w-full h-auto rounded-lg shadow-md"
        />
      </div>

      <!-- Right Column: Content -->
      <div
        class="md:w-1/2"
        data-aos="fade-left"
        data-aos-duration="800"
        data-aos-delay="200"
      >
        <h5 class="text-primary font-semibold text-sm uppercase mb-2">
          Welcome to JARI
        </h5>

        <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-6 leading-tight">
          Journal of Academic Research & Innovation <br />Federal Polytechnic Orogun
        </h2>

        <div class="space-y-4 text-gray-600 mb-8">
          <p>
            JARI is the official academic journal of Federal Polytechnic Orogun, providing a platform for innovative research and scholarly discussions across disciplines.
          </p>
          <p>
            We encourage researchers, academicians, and students to contribute high-quality research that advances knowledge and fosters academic excellence.
          </p>
          <p class="font-bold">Submit your research and join our community of scholars.</p>
        </div>

        <!-- CTA Button -->
        <a
          href="/submission-guidelines"
          class="inline-block bg-primary hover:bg-primary-dark text-white py-3 px-6 rounded transition-transform duration-300 transform hover:scale-105"
        >
          Learn About Submission
        </a>
      </div>
    </div>
  </section>
</template>
