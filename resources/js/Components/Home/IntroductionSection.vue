<script setup>

</script>

<template>
  <section class="py-10">
    <div class="container mx-auto px-4">
      <!-- Heading -->
      <div data-aos="fade-up">
        <h2 class="text-3xl font-bold text-center mb-4">Welcome to Maibere Ventures Nigeria Ltd</h2>
      </div>
      <div data-aos="fade-up" data-aos-delay="100">
        <h3 class="text-2xl text-center mb-6">Your Trusted Farming & Livestock Marketplace</h3>
      </div>
      <div data-aos="fade-up" data-aos-delay="200" class="text-center mb-12 max-w-2xl mx-auto">
        <p>
          Buy and sell fresh farm produce, livestock, and agricultural goods directly from farmers.
          We value freshness, fair prices, and strong community connections.
        </p>
      </div>

      <!-- Three Feature Boxes -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
        <!-- Fast Delivery -->
        <div class="text-center bg-white shadow-lg rounded-xl p-6" data-aos="fade-up" data-aos-delay="300">
          <div class="mb-4 text-5xl text-green-600">
            <font-awesome-icon :icon="['fas','truck']" />
          </div>
          <h3 class="text-xl font-semibold mb-2 text-green-600">Fast Delivery</h3>
          <p class="text-black dark:text-white">
            Get fresh produce and livestock delivered quickly to your doorstep.
          </p>
        </div>

        <!-- Verified Farmers -->
        <div class="text-center bg-green-600 text-white shadow-lg rounded-xl p-6" data-aos="fade-up" data-aos-delay="400">
          <div class="mb-4 text-5xl">
            <font-awesome-icon :icon="['fas','leaf']" />
          </div>
          <h3 class="text-xl font-semibold mb-2">Verified Farmers</h3>
          <p>
            All our sellers are verified to ensure you get the best quality products.
          </p>
        </div>

        <!-- Fair Prices -->
        <div class="text-center bg-white shadow-lg rounded-xl p-6" data-aos="fade-up" data-aos-delay="500">
          <div class="mb-4 text-5xl text-green-600">
            <font-awesome-icon :icon="['fas','hand-holding-usd']" />
          </div>
          <h3 class="text-xl font-semibold mb-2 text-green-600">Fair Prices</h3>
          <p class="text-black dark:text-white">
            Enjoy affordable prices without compromising on freshness and quality.
          </p>
        </div>
      </div>
    </div>
  </section>
</template>

<style scoped>
.container {
  max-width: 1200px;
}
</style>
