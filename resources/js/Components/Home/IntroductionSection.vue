<script setup>

</script>

<template>
  <section class="py-10">
    <div class="container mx-auto px-4">
      <div data-aos="fade-up">
        <h2 class="text-3xl font-bold text-center mb-4">Welcome to Fepo Journal</h2>
      </div>
      <div data-aos="fade-up" data-aos-delay="100">
        <h3 class="text-2xl text-center mb-6">Peer-Reviewed Academic Journal</h3>
      </div>
      <div data-aos="fade-up" data-aos-delay="200" class="text-center mb-12 max-w-2xl mx-auto">
        <p>Publish your research and access high-quality peer-reviewed articles across multiple disciplines. We value speed, integrity, and open access.</p>
      </div>

      <!-- Three Feature Boxes -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
        <div class="text-center bg-white shadow-lg rounded-xl p-6" data-aos="fade-up" data-aos-delay="300">
          <div class="mb-4 text-5xl text-primary">
            <font-awesome-icon :icon="['fas','bolt']" />
          </div>
          <h3 class="text-xl font-semibold mb-2 text-primary">Fast Publication</h3>
          <p class="text-black dark:text-white">Submit your work and enjoy a quick turnaround from submission to publication.</p>
        </div>

        <div class="text-center bg-primary text-white shadow-lg rounded-xl p-6" data-aos="fade-up" data-aos-delay="400">
          <div class="mb-4 text-5xl">
            <font-awesome-icon :icon="['fas','check-circle']" />
          </div>
          <h3 class="text-xl font-semibold mb-2">Peer-Reviewed</h3>
          <p>Every article goes through a rigorous peer review process to ensure academic integrity.</p>
        </div>

        <div class="text-center bg-white shadow-lg rounded-xl p-6" data-aos="fade-up" data-aos-delay="500">
          <div class="mb-4 text-5xl text-primary">
            <font-awesome-icon :icon="['fas','book-open']" />
          </div>
          <h3 class="text-xl font-semibold mb-2 text-primary">Open Access</h3>
          <p class="text-black dark:text-white">Our content is freely accessible to everyone, everywhere — no paywalls.</p>
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
